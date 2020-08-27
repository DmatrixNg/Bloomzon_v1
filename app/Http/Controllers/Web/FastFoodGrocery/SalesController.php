<?php

namespace App\Http\Controllers\Web\FastFoodGrocery;

use App\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Order;

class SalesController extends Controller
{
    //
    protected $fast_food_grocery;

    public function __construct()
    {
        $this->fast_food_grocery = Auth::guard('fast_food_grocery')->user();
    }

    public function index(){
        $id = $this->fast_food_grocery->id;
        $sales = OrderDetails::where('seller_id',$id)->where('order_type','fast_food_grocery')->get();

        return view('dashboard.fast_food_grocery.sales',compact(['sales']));
    }

    public function show($sale){
        $sale = json_decode(base64_decode($sale));
        $order = Order::where('id',$sale->order_id)->first();
        return view('dashboard.fast_food_grocery.saledetail',compact(['sale','order']));
    }

  




}
