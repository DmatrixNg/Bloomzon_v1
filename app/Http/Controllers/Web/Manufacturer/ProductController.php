<?php

namespace App\Http\Controllers\Web\Manufacturer;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    use JsonResponse;
    protected $manufacturer;

    public function __construct()
    {
        $this->manufacturer = Auth::guard('manufacturer')->user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::where('product_type','manufacturer')->where('seller_id',$this->manufacturer->id)->get();
        return view('dashboard.manufacturer.products',compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manufacturer = $this->manufacturer;
        $categories = Category::all();
        return view('dashboard.manufacturer.add-product',compact(['manufacturer', 'categories']));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $prod = new Product();

        $request->validate([
            'product_name'           => ['required', 'string', 'max:255'],
            'product_description'    => ['required', 'string'],
            'product_price'          => ['required', 'string'],
            'product_sales_price'     => [],

        ]);

        $created =  $this->manufacturer->products()->create($request->all());
        if($created){
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
        $manufacturer = $this->manufacturer;
        $product = Product::find($id);
        $categories = Category::all();
        return view('dashboard.manufacturer.edit-product',compact(['manufacturer','product', 'categories']));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {//first validate all rewquest input
        $request->validate([
            'product_name'           => ['required', 'string', 'max:255'],
            'product_description'    => ['required', 'string'],
            'product_price'          => ['required', 'string'],
            'product_sales_price'     => [],

        ]);
        //call the product from db by id
            $prod = Product::find($id);
            //update product
        $updated = $prod->update([
            'product_name'           => $request->product_name,
            'product_description'    => $request->product_description,
            'product_price'          => $request->product_price,
            'product_sales_price'     => $request->product_sales_price
        ]);

        if($updated){
            if($request->avatars != '[]'){
                $prod->avatars = $request->avatars;
                $prod->save();
            }
            return $this->send_response(true, $updated, 200, 'Product Updated');
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
