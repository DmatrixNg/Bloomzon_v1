<?php

namespace App\Http\Controllers\Web\FastFoodGrocery;

use App\FoodCatalogue;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    protected $ffg;
    public function __construct(){
        $this->ffg = Auth::guard('fast_food_grocery')->user();
    }
    public function index(){
        $food_cat = FoodCatalogue::all();
        $food_menus = Product::where('product_type','fast_food_grocery')->where('seller_id',$this->ffg->id)->get();
        return view('dashboard.fast_food_grocery.food-menu',compact(['food_menus','food_cat']));
    }

    public function create(){

    $food_catalogues = FoodCatalogue::all();
    $ffg = Auth::guard('fast_food_grocery')->user();    
        return view('dashboard.fast_food_grocery.add-food-menu',compact(['food_catalogues','ffg']));
    } 
}
