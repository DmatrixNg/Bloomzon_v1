<?php

namespace App\Http\Controllers;

use App\Buyer;
use App\FastFoodGrocery;
use App\Order;
use App\OrderDetails;
use App\Professional;
use App\Seller;
use App\Product;
use App\Traits\JsonResponse;
use App\WalletHistory;
use App\WareHouse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Paystack;
use App\Helpers\GuardCheck;


class OrderController extends Controller
{
    use JsonResponse;

    public function __construct()
    {
      $this->user = auth()->guard(GuardCheck::get())->user();
    }
    /**
* Redirect the User to Paystack Payment Page
* @return Url
*/
public function redirectToGateway()
{

  try {
    // dd(request());
    return Paystack::getAuthorizationUrl()->redirectNow();
  }catch (\Exception $e){

    return back()->with([
      'message' => "Error while processing your payment, Please try again",
      'type' => 'fail'
    ]);
  }
}


    public function create(Request $request)
    {

// dd($request);

        //
        $buyer = null;
        $products = json_decode($request->products);
        $request->validate([
            'country'        => 'required|string',
            'state'          => 'required|string',
            'full_name'      => 'required|string',
            'billing_address' => 'string',
            'zip_code'       => '',
            'email'          => 'required|email ',
            'phone_number'          => 'required|string',
            'order_notes'    => 'string',
            'buyer_id'       => 'integer',

        ]);

        //check if buyer already on the system
        if ($request->buyer_id) {

          $buyer = $this->user->find($request->buyer_id);
        }
        //check if user already exist
        if ($buyer) {
            $buyer->country         = $request->country;
            $buyer->state           = $request->state;
            $buyer->full_name       = $request->full_name;
            $buyer->billing_address = $request->billing_address;
            $buyer->zip_code        = $request->zip_code;
            $buyer->phone_number    = $request->phone_number;
            // $buyer->email = $request->email;
            $buyer->save();
            // $buyer->order_notes = $request->order_notes;
            // $buyer->buyer_id = $request->buyer
        } else {

          $request->validate([
            // 'username'     => ['required', 'string', 'max:255', 'unique:buyers'],
            'email'        => ['required', 'string', 'email', 'max:255', 'unique:buyers'],
          ]);
            $buyer =  Buyer::create([
                'country'         => $request->country,
                'state'           => $request->state,
                'full_name'       => $request->full_name,
                'street_address'  => $request->billing_address,
                'billing_address' => $request->billing_address,
                'zip_code'        => $request->zip_code,
                'phone_number'    => $request->phone,
                'email'           => $request->email,
                'password'        => Hash::make($request->password),

            ]);
        }
        // Log::debug($buyer);
        // dd();
        if ($request->with == "point"){
          $point = $buyer->point->total_point;
          $used_point = $buyer->point->used_point;



          $buyer->point->update([
            'used_point' => $used_point + ($request->point * 100),
            'total_point' => ($point - ($request->point * 100))
          ]);
        }



        $pickup_id = mt_rand(100, 999).mt_rand(100, 999).mt_rand(100, 999);
        if ($products != null) {
            $order =  $buyer->orders()->create([
                'total_amount'    => $request->total_amount,
                'payment_method'  => $request->payment_gateway,
                'payment_status'   => $request->payment_status,
                'billing_address' => $request->billing_address,
                'order_notes'     => $request->order_notes,
                'order_reference' => $request->ref,
                'status' => $request->status,
                'pickup_id'=>  $pickup_id
            ]);
            if($request->payment_status == 1){
                $buyer->save();
            }
            if($order){

                // loop through each product to create order details and wallet update
            foreach ($products as $prod) {

              $product = Product::find($prod->id);

              $test =  $order->order_details()->create([
                    'id' => Str::uuid()->toString(),
                    'order_id' => $order->id,
                    'seller_id' => $product->seller_id->id,
                    'seller_type' => $product->seller_class,
                    'product_id' => $product->id,
                    'product' => json_encode($prod),
                    'status'    => $request->status
                ]);
                if($request->payment_status == 1){// check if user already for product
                WalletHistory::create([
                    'user_id' => $prod->seller_id->id,
                    'user_type'=> $prod->product_type,
                    'type'  => 1,
                    'amount'=>$prod->product_sales_price,
                    'slug'  =>'order',
                    'note' =>  $buyer->full_name. ' with email:'. $buyer->email. ' payed for '. $prod->product_name
                ]);
                $seller = null;
                switch($prod->product_type){
                    case 'seller':
                    $seller = Seller::find($prod->seller_id->id);
                    break;
                    case 'professional':
                    $seller = Professional::find($prod->seller_id->id);
                    break;
                    case 'fast_food_grocery':
                    $seller = FastFoodGrocery::find($prod->seller_id->id);
                    break;

                }
                $seller->wallet += $prod->product_sales_price;
                $seller->save();
                }


            }
            return $this->send_response(true,$order->id,200,'Order created successfully');
        }
        }
    }


    public function trackDelivery($id = null){

        if(isset($id) && $id != null){
            $delivery = OrderDetails::where('order_id',$id)->get();

            if(count($delivery)){
                return view('front.track-delivery',compact(['delivery']));
            }
        }

        return view('front.track-delivery',compact(['id']));
    }
}
