<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Brand;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Request $request)
    {
        // dd('dsdsd');
        $category = ($request->category);
        $search_term = ($request->search_term);

        if($category == 'product'){ //serche product
            
            $sellers = array();
            $colors = array();
            $dis = array();
            $products = Product::where('product_type','seller')->paginate(10);
            $categories = Category::all();
            if(count($products)){
                foreach($products as $product){
                    if(!in_array(strval($product),$dis)){
                        array_push($sellers,$product->seller);
                        array_push($dis,strval($product));
                    }
                }

                foreach($product->product_color as $color){
                    if(!in_array($color, $colors)){
                        array_push($colors,$color);
                    }
                }
            }

            $max_price = $products->max('product_price');
            $brands = Brand::all();
            
            return view('front.shop',compact(['products','brands','categories','colors','sellers','max_price']));

        } elseif($category == 'seller'){ // search for seller
            



        } elseif($category == 'all'){
            $product = Product::where('product_type', $category)->where('product_name', 'like', '%'.$search_term.'%')->get();
        }
        
    }

}
