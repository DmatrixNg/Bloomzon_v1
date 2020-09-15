<?php

namespace App\Http\Controllers;

use App\Advert;
use App\Category;
use App\Product;
use App\SubCategory;
use App\Traits\JsonResponse;
use App\Brand;
use App\FastFoodGrocery;
use App\FoodCatalogue;
use App\FoodMenu;
use App\Manufacturer;
use App\NetworkingAgent;
use App\Professional;
use App\Seller;
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
            $products = Product::where('product_name', 'like', '%'.$search_term.'%')->paginate(10);
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
            $sellers = Seller::where('company_name', 'like', '%'.$search_term.'%')->get();
            return view('front.sellers',compact(['sellers']));
        } elseif($category == 'proservice'){// search for professional services
            $proservices = Professional::where('company_name', 'like', '%'.$search_term.'%')->get();
            return view('front.proservices',compact(['proservices']));
        } elseif($category == 'fast_food_grocery'){ // search for fast food and groceries
            $fast_foods = FastFoodGrocery::where('company_name', 'like', '%'.$search_term.'%')->get();
            return view('front.fast-food-grocery',compact(['fast_foods']));
        } elseif($category == 'networking_agent'){// search for networking agent
            $agents = NetworkingAgent::where('full_name', 'like', '%'.$search_term.'%')->get();
            return view('front.agents',compact(['agents']));
        } elseif($category == 'manufacturer'){ // search for manufacturer
            $manufacturers = Manufacturer::where('full_name', 'like', '%'.$search_term.'%')->get();
            return view('front.manufacturers', [
                'manufacturers' => $manufacturers
            ]);
        } else {
            abort(404);
        }
        
    }

}
