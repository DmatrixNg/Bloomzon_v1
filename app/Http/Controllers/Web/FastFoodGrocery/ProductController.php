<?php

namespace App\Http\Controllers\Web\FastFoodGrocery;

use App\Category;
use App\Helpers\WalletHistoryHelper;
use App\Http\Controllers\Controller;
use App\Product;
use App\SiteConfig;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class ProductController extends Controller
{

    use JsonResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::guard("fast_food_grocery")->user()->id;
        $products = Product::where('seller_id',$id)->get();

        return view('dashboard.fast_food_grocery.allproducts',compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $fast_food_grocery = Auth::guard('fast_food_grocery')->user();
            $categories = Category::all();
            return view('dashboard.fast_food_grocery.addnewproduct', compact(['fast_food_grocery','categories']));

    }

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
            'product_color'          => [ 'string',],
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

        $created = Auth::guard("fast_food_grocery")->user()->products()->create($request->all());
        if ($created) {

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
            $fast_food_grocery = Auth::guard('fast_food_grocery')->user();
            $categories = Category::all();
            return view('dashboard.fast_food_grocery.editproduct', compact(['fast_food_grocery','categories','product']));

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
            'product_color'          => [],
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
