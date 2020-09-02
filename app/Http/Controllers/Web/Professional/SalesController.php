<?php

namespace App\Http\Controllers\Web\Professional;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\WalletHistory;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //
    protected $seller;

    public function __construct()
    {
        $this->seller = Auth::guard('professional')->user();
    }

    public function index(){
        // $id = $this->seller->id;
        // $sales = $this->seller->order_details()->where('')->get();

        // return view('dashboard.professional.sales-history',compact(['sales']));




        $id = Auth::guard('professional')->user()->id;
        $sales = $this->seller->order_details()->where('status','delivered')->get();
        $total_sales = WalletHistory::where('user_id',$id)->where('user_type','professional')->where('slug','order')->get();

        return view('dashboard.professional.sales',compact(['sales','total_sales']));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($sale){
        // $sale = json_decode(base64_decode($sale));
        // $order = Order::where('id',$sale->order_id)->first();
        // return view('dashboard.seller.saledetail',compact(['sale','order']));

        $sale = json_decode(base64_decode($sale));
        $order = Order::where('id',$sale->order_id)->first();
        return view('dashboard.professional.saledetail',compact(['sale','order']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
