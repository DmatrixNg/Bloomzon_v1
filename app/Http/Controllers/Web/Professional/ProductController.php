<?php

namespace App\Http\Controllers\Web\Professional;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    use JsonResponse;
    protected $professional;

    public function __construct()
    {
        $this->professional = Auth::guard('professional')->user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::where('product_type','professional')->where('seller_id',$this->professional->id)->get();
        return view('dashboard.professional.products',compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professional = $this->professional;
        $categories = Category::all();
        return view('dashboard.professional.add-product',compact(['professional', 'categories']));
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
            'avatars'                => 'required|string|min:3',

        ],
        ['avatars.required'=>'Please upload an image',
        'avatars.min'=>'You need to upload image',
        ]);

        $created = $this->professional->products()->create($request->all());
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
        $professional = $this->professional;
        $product = Product::find($id);
        $categories = Category::all();
        return view('dashboard.professional.edit-product',compact(['professional','product', 'categories']));
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
