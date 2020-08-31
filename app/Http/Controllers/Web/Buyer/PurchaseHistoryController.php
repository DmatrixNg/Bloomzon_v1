<?php

namespace App\Http\Controllers\Web\Buyer;

use App\Order;
use App\OrderDetails;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseHistoryController extends Controller
{
    //
    public function __construct(){
        $this->buyer = Auth::guard('buyer')->user();
    }
    public function index(){
        $id = $this->buyer->id;
        // $orders =array();

        //gets all order and order details relationships
        $orders = $this->buyer->orders()->paginate(5);
       //from the distinc order selected get all order details
    //    $includ = array();
    //     foreach($od as $order){
    //         $od = Order::with(['order_details'])->find($order->order_id);//get the order property

    //         if(!in_array($od->id,$includ)){
    //             array_push($includ,$od->id);
    //             array_push($orders,$od);//push all distinct value
    //         }
    //     }
        return view('dashboard.buyer.purchase-history',compact(['orders']));
    }

    public function paymentHistory(){
        $id = $this->buyer->id;
        $payments =array();
        //gets all order and order details relationships
        $od = OrderDetails::where('buyer_id',$id)->get();
       //from the distinc order selected get all order details
       $includ = array();
        foreach($od as $order){
            $od = Order::with(['order_details'])->where('id',$order->order_id)->where('payment_status',1)->first();//get the order property
            if($od){
            if(!in_array($od->id,$includ)){
                array_push($includ,$od->id);
                array_push($payments,$od);//push all distinct value
            }}
        }
        return view('dashboard.buyer.payment-history',compact(['payments']));
    }

   public function view_order_details($id){
        $order = Order::find($id);

        return view('dashboard.buyer.view-order-details',compact(['order']));
    }
}
