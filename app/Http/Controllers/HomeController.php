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

class HomeController extends Controller
{
    use JsonResponse;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $adverts =   Advert::where('status',1)->get();
        $categories = Category::all();
        $brands = Brand::where('status',1)->get();
        $products = Product::where('product_type','seller')->limit(10)->latest('id')->get();
        $manufacturers = Manufacturer::all();
        $groceries = Product::where('product_type','fast_food_grocery')->where('category_id',0)->limit(5)->latest('id')->get();
        $food_menus = FoodCatalogue::all();
        // $vendors = [];
        return view('front.index',compact(['brands','categories','adverts','products',
        'manufacturers','groceries','food_menus']));
    }

    public function home($page = ''){

        if($page == ''){
            return redirect('/');
        }
        return view('front.'.$page);
    }
    public function show_category(Request $request,$name, $subname = ''){
        $products = null;
        $cat = null;
        // dd($request->name);
        if(isset($_GET['fast_food_grocery'])){
            $cat = FoodCatalogue::where('name',$request->name)->first();
        }else{
            $cat = Category::where('name',$request->name)->first();
        }
        $categories = Category::all();
        $sub = null;
        $sellers = array();
        $colors = array();
        if($cat == null){
            $message = 'Product category not found - please try something else';
            return view('front.404',compact(['message']));
        }
        //directs type of product search if subname is not available
        if($request->subname != null){
            $sub = SubCategory::where('name',$request->subname)->first();
            $sub_id = $sub != null?$sub->id:0;
            if($sub_id != 0){
                $products = Product::where('category_id',$cat->id)->where('sub_category_id',$sub_id)->get();
            }
        }else{
            if(isset($_GET['fast_food_grocery'])){
                $products = Product::where('category_id',$cat->id)->where('product_type','fast_food_grocery')->paginate(10);

            }else{
                $products = Product::where('category_id',$cat->id)->where('product_type','!=','fast_food_grocery')->get();

            }
        }
        $dis = array();
        if(isset($_GET['fast_food_grocery'])){
            $page_title = $cat->name .' | '. $request->subname;
            return view('front.fast_foods',compact(['products','page_title']));
        }
        //get sellers of product in distinct
        if(count($products)){
            foreach($products as $product){
              // dd($product->seller->id);
                if(@$product->seller->id != null){
                if(!in_array($product->seller->id,$dis)){
                    array_push($sellers,$product->seller->id);
                    array_push($dis,$product->seller->id);
                }
                }
            }

            foreach($product->product_color as $color){
                if(!in_array($color, $colors)){
                    array_push($colors,$color);
                }
            }
        }

        $sellers= Seller::all();

        $brands = [];
        $max_price = $products->max('product_price');
        $page_title = $cat->name .' | '. $request->subname;
        return view('front.category',compact(['max_price','sellers','products','categories','brands','colors','page_title']));

    }

    public function fast_foods(){
        $fast_foods = FastFoodGrocery::all();
        return view('front.fast-food-grocery',compact(['fast_foods']));
    }

    public function vendor_food_list(Request $request,$id = 0){
      // dd($request->id);
        if($request->id == 0){
            $products = Product::where('product_type','fast_food_grocery')->paginate(10);
        }else{
            $products = Product::where('seller_id',$request->id)->where('product_type','fast_food_grocery')->paginate(10);
        }
        $ffg = FastFoodGrocery::find($request->id);
        $page_title = $ffg->company_name;
        return view('front.fast_foods',compact(['products','page_title']));
    }

    public function fast_food_details(Request $request,$id){
        $fast_food_grocery = FastFoodGrocery::find($request->id);
        $food_cats = FoodCatalogue::all();
        return view('front.fast-food-grocery-details',compact(['fast_food_grocery','food_cats']));
    }

    public function agent_details(Request $request,$id){
        $agent = NetworkingAgent::find($request->id);

        return view('front.networkingagent-details',compact(['agent']));
    }

    public function groceries(){
        $fast_foods = FastFoodGrocery::all();
        return view('front.fast-food-grocery',compact(['fast_foods']));
    }



    public function manufacturers(){

        return view('front.fast-food-grocery');
    }
    //SELLERS
    public function sellers(){
        $sellers = Seller::all();
        return view('front.sellers',compact(['sellers']));
    }
    public function seller_details(Request $request,$id){
        $seller = Seller::find($request->id);

        return view('front.seller-details',compact(['seller']));
    }

    public function seller_product_list(Request $request, $id = 0){
        if($id == 0){
            $products = Product::where('product_type','seller')->paginate(5);
        }else{
            $products = Product::where('seller_id',$id)->where('product_type','seller')->paginate(5);
        }
        //get sellers of product in distinct
        $dis = array();
        $colors = array();
        if(count($products)){
            foreach($products as $product){
                foreach($product->product_color as $color){
                    if(!in_array($color, $colors)){
                        array_push($colors,$color);
                    }
                }
        }}
        $brands = [];
        $seller = Seller::find($id);
        $max_price = $products->max('product_price');
        $page_title = $seller->company_name;
        return view('front.seller-products',compact(['max_price','products','brands','colors','page_title']));

    }

   //PROSERVICE
    public function proservice(){
        $proservices = Professional::all();
        return view('front.proservices',compact(['proservices']));
    }
    public function fashion(){
        $proservices = Professional::where('profession','like','%fashion%')->get();
        return view('front.proservices',compact(['proservices']));
    }
    public function proservice_details($id){
        $proservice = Professional::find($id);

        return view('front.proservice-details',compact(['proservice']));
    }

    //AGENTS
    public function agents(){
        $agents = NetworkingAgent::all();
        return view('front.agents',compact(['agents']));
    }




    public function shops(){
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
    }


}
