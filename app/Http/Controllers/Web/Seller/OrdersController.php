<?php

namespace App\Http\Controllers\Web\Seller;

use App\Http\Controllers\Controller;
use App\OrderDetails;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    use JsonResponse;

    private $seller;
    public function __construct()
    {
        $this->seller = Auth::guard('seller')->user();
    }
    public function index(){
        $orders = OrderDetails::where('seller_id',$this->seller->id)->where('order_type', 'seller')->get();

        return view('dashboard.seller.histogram',compact(['orders']));
    }

    public function show($order){
        $order = json_decode(base64_decode($order));
        
        $orders = OrderDetails::where('buyer_id',$order->buyer_id->id)->where('seller_id',$order->seller_id->id)->where('order_id',$order->order_id)->get();
        
        return view('dashboard.seller.order-detail',compact(['order','orders']));
    }

    public function changeStatus(Request $request){
        $id = $request->id;
        $order =  OrderDetails::find($id);
        $order = $order->update(['status'=>$request->status]);
        if($order)return $this->send_response(true,[],200,'Status changed');
        return $this->send_response(false,[],400,'Unable to Change Status');
    }
}
