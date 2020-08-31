<?php

namespace App\Http\Controllers\Web\Seller;

use App\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Order;
use App\WalletHistory;

class SalesController extends Controller
{
    //
    protected $seller;

    public function __construct()
    {
        $this->seller = Auth::guard('seller')->user();
    }

    public function index(){
        $id = $this->seller->id;
        $sales = $this->seller->order_details()->where('status','delivered')->get();
        $total_sales = WalletHistory::where('user_id',$id)->where('user_type','seller')->where('slug','order')->get();
// dd($sales);
        return view('dashboard.seller.sales',compact(['sales','total_sales']));
    }

    public function show($sale){
        $sale = json_decode(base64_decode($sale));
        $order = Order::where('id',$sale->order_id)->first();
        return view('dashboard.seller.saledetail',compact(['sale','order']));
    }






}
