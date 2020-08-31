<?php

namespace App\Http\Controllers\Web\Buyer;

use App\Buyer;
use App\BuyerMessage;
use App\Http\Controllers\Controller;
use App\Message;
use App\Order;
use App\OrderDetails;
use App\Point;
use App\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Traits\JsonResponse;


class DashboardController extends Controller
{
    use JsonResponse;
    protected $buyer;
    public function __construct()
    {
        $this->buyer = Auth::guard('buyer')->user();
    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $id = $this->buyer->id;
       //  $orders =array();
       //  //gets all order and order details relationships
       //  $od = OrderDetails::select('*')->where('buyer_id',$id)->distinct()->get('order_id');
       // //from the distinc order selected get all order details
       //  foreach($od as $order){
       //      $od = Order::with(['order_details'])->find($order->order_id);
       //      array_push($orders,$od);
       //  }

       $orders = $this->buyer->orders;
       // dd($order);
        return view('dashboard.buyer.home',compact(['orders']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    public function contactAdmin(Request $request):\Illuminate\Http\JsonResponse{
        $buyerMsg = new Message();
        $this->validator($request->all())->validate();
        $msg = $buyerMsg::create($request->all());
        if($msg){
            return $this->send_response(true,$msg, 200,'Message added');
        }
        return $this->send_response(false,$msg, 400,'Error adding message');
    }

    public function listMessages($id){
        $id = base64_decode($id);
        $messages = Message::distinct()->where('buyer_id',$id)->get(['ticket']);

        return view('dashboard.buyer.messages',compact(['messages']));
    }

    public function showMessage($id){
        $ticket = json_decode(base64_decode($id));
        $messages = Message::where('ticket',$ticket)->get();
        return view('dashboard.buyer.show-message',compact(['messages']));
    }
    protected function validator(array $data)
    {

        // able->integer('buyer_id')->unsigned();
        //     $table->mediumText('message');
        //     $table->string('subject');
        //     $table->string('issue_type');
        //     $table->mediumText('reply')->nullable();
        //     $table->dateTime('message_date')->nullable();
        //     $table->dateTime('reply_date')->nullable();

        return Validator::make($data, [
            'buyer_id'   => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:255'],
            'issue_type'     => ['required', 'string'],
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }



    public function notification($id){
        $id = base64_decode($id);
        $notifications = [];
        return view('dashboard.buyer.notifications',compact(['notifications']));
    }

    public function favorites($id){
        $id = base64_decode($id);
        $favorites = [];
        return view('dashboard.buyer.favourites',compact(['favorites']));
    }

    public function bloomlist(){
        $bproducts = Product::where('is_bloomzon',1)->paginate(10);
        return view('dashboard.buyer.bloomzon-products',compact(['bproducts']));
    }

    public function points(){


        $this->checkAndUpdatePoint();

        $points = $this->buyer->point;
        // dd($points);

        // $order_points = Point::myPoints($this->buyer->id);
        // $all_products = OrderDetails::where('buyer_id',$this->buyer->id);
        // // $orders = OrderDetails::where('buyer_id',$this->buyer->id)->distinct();

        return view('dashboard.buyer.points',compact(['points']));
    }

    public function deliveryStatus($id){
        $all_products = OrderDetails::where('order_id',$id)->get();
        $delivered_count = OrderDetails::where('order_id',$id)->where('shopper_status','delivered')->get();
        $transit = OrderDetails::where('order_id',$id)->where('status','!=', 'new')->get();
        return view('dashboard.buyer.delivery-status',compact(['all_products','delivered_count','transit']));
    }
    public function allStatus(){
        $buyer = Auth::guard('buyer')->user();
        $all_products = OrderDetails::where('buyer_id',$buyer->id)->get();
        $delivered_count = OrderDetails::where('buyer_id',$buyer->id)->where('shopper_status','delivered')->get();
        $transit = OrderDetails::where('order_id',$buyer->id)->where('status','!=', 'new')->get();
        return view('dashboard.buyer.delivery-status',compact(['all_products','delivered_count','transit']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function checkAndUpdatePoint()
    {
      $user = $this->buyer;
      $prevpoint = $user->point ? $user->point->total_point : 0;
      $prev_used_point = $user->point ? $user->point->used_point : 0;
//      $prev_used_amount = $user->point ? $user->point->used_point : 0;
      $purchase_count = $user->orders->count();
      // dd($purchase_count);
      // dd($purchase_count);
      // if ($purchase_count >= 10) {
        // $discount = $purchase_count / 100;
        //   $discount = (int) $discount;
          // $amount = $purchase_count * 100;
          $point = $purchase_count * 100;
          $old_new = $prev_used_point + $prevpoint;
          $newpoint = $point - $old_new;
          $newamount= $newpoint / 100 ;
          // dd($old_new);
          // dd($newamount);
          if ($old_new != $point) {

            $update = $user->point()->updateOrCreate(["pointable_type" => 'App\Buyer','pointable_id' => $user->id],[
              'id' => Str::uuid()->toString(),
              'purchase_count' => $purchase_count,
              'total_point' => $newpoint,
              'amount' => $newamount
            ]);
          }

        return true;

      // }
    }
}
