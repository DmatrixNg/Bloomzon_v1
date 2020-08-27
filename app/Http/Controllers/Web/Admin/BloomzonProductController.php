<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\Seller;
use Illuminate\Http\Request;
use App\Category;
use App\Helpers\WalletHistoryHelper;
use App\NaSellers;
use App\NetworkingAgent;
use App\SiteConfig;
use App\Traits\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;



class BloomzonProductController extends Controller
{

    use JsonResponse;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $sellers = Seller::where('is_bloomzon', 1)->with('products')->get()->pluck('products')->flatten();
        $sellers = Seller::where('is_bloomzon', 1)->orderBy('created_at', 'desc')->get();

        $products = [];

        foreach($sellers as $seller) {

            $seller_products = Product::where('product_type', 'seller')->where('seller_id', $seller->id)->get();

            if($seller_products->count() == 0){
                continue;
            }

            foreach($seller_products as $seller_product) {
                $products[] = $seller_product;
            }

        }

        return view('dashboard.admin.bloomzonproduct', [
            'products' => $products,
        ]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //         $admin = Auth::guard('seller')->user();
    //         $categories = Category::all();
    //         return view('dashboard.seller.addnewproduct', compact(['seller','categories']));
     
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $prod   = new Product();
       $config  = SiteConfig::find(1); 
        $request->validate([
            'product_name'           => ['required', 'string', 'max:255'],
            'product_description'    => ['required', 'string'],
            'product_price'          => ['required', 'string'],
            'product_color'          => ['required', 'string','min:3'],
            'minimum_order_quantity' => ['integer'],
            'product_sales_price'    => ['numeric','max:5000'],
            'weight'                 => 'required|integer',
            'avatars'                => 'required|string|min:3',
            
        ],
    ['avatars.required'=>'Please upload an image',
    'avatars.min'=>'You need to upload image',
    'product_color.min'=>'You need to select product color',
    'product_sales_price.max' => "Sales price must be less than $5000"
    ]
);
        
        $created = $prod->create($request->all());
        if ($created) {
            
            //check if the user type is seller and the configuration is true then add the bonus
            if ($request->product_type == 'seller') {
                //get the seller 
                $seller = NaSellers::where('seller_id', $request->seller_id)->first();
                //update the Networking agent Seller status
                if ($seller) {
                    $netagent = NetworkingAgent::find($seller->networking_agent_id);
                //set the wallet history with required parameters
                WalletHistoryHelper::credit($netagent, Config::get('global.networking_agent_bonus'), $request->product_type, 'bonus'); 
                }
                //get the networking agent that created the seller
               
            }
            return $this->send_response(true, $created, 200, 'Product added');
        } else {
            return $this->send_response(false, [], 400, 'Message added');
        }
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $product = Product::find($id);
            $admin = Auth::guard('admin')->user();
            $categories = Category::all();
            return view('dashboard.admin.editproduct', compact(['admin','categories','product']));
     
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
     
        $request->validate([
            'product_name'           => ['required', 'string', 'max:255'],
            'product_description'    => ['required', 'string'],
            'product_price'          => ['required', 'string'],
            'product_color'          => ['required', 'string','min:3'],
            'minimum_order_quantity' => ['integer'],
            'product_sales_price'    => ['numeric','max:5000'],
            'weight'                 => 'required|integer',
            'avatars'                => 'required|string|min:3',
            
            ],
            ['avatars.required'=>'Please upload an image',
            'avatars.min'=>'You need to upload image',
            'product_sales_price.max' => "Sales price must be less than $5000"
            ]
        );

        $product = Product::find($id);
        $update = $product->update([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_price' => $request->product_price,
            'product_color' => $request->product_color,
            'minimum_order_quantity' => $request->minimum_order_quantity,
            'product_sales_price'   => $request->product_sales_price,
            'weight'    => $request->weight,
            'avatars'   => $request->avatars
        ]);

        if($update){
            return $this->send_response(true, $update, 200, 'Product Edited');
        } else {
            return $this->send_response(false, [], 400, 'Message added');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return $this->send_response(true, [], 200, 'Product Deleted');
    }
}
