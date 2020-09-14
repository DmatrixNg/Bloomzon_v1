<?php

namespace App\Http\Controllers\Web\FastFoodGrocery;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetails;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    use JsonResponse;

    private $fast_food_grocery;
    public function __construct()
    {
        $this->fast_food_grocery = Auth::guard('fast_food_grocery')->user();
    }
    public function index(){

        $orders = $this->fast_food_grocery->order_details()->get();
        // $orders = OrderDetails::where('seller_id',$this->fast_food_grocery->id)->where('seller_type', 'App\FastFoodGrocery')->get();
        // $orders = Auth::guard('fast_food_grocery')->user()->orders()->order_details;
        // dd($orders);
        return view('dashboard.fast_food_grocery.orders',compact(['orders']));
    }

    public function show($id){
        $order = OrderDetails::findOrFail($id);

        // $orders = OrderDetails::where('buyer_id',$order->buyer_id->id)
        // ->where('seller_id',$order->seller_id->id)
        // ->where('order_id',$order->order_id)->get();

        // $order = json_decode(base64_decode($id));

        $order = \App\Order::find($order->order_id);
        $orders = $order->order_details;

        return view('dashboard.fast_food_grocery.order-details',compact(['order','orders']));
    }

    public function changeStatus(Request $request){
        $id = $request->id;
        $order =  OrderDetails::find($id);
        $order = $order->update(['status'=>$request->status]);
        if($order)return $this->send_response(true,[],200,'Status changed');
        return $this->send_response(false,[],400,'Unable to Change Status');
    }
}
