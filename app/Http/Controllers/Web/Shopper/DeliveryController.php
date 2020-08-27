<?php

namespace App\Http\Controllers\Web\Shopper;

use App\Http\Controllers\Controller;
use App\OrderDetails;
use App\Traits\JsonResponse;
use App\WareHouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DeliveryController extends Controller
{
    use JsonResponse;
    protected $shopper;

    public function __construct(){
        $this->shopper = Auth::guard('shopper')->user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = OrderDetails::paginate(5);
        return view('dashboard.shopper.delivery-request',compact(['orders']));
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
    public function show($id)
    {
        $order = OrderDetails::where('id',$id)->first();
        $other_products = OrderDetails::where('order_id',$order->order_id);//get other products withe same order id
        return view('dashboard.shopper.delivery-details',compact(['order','other_products']));
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

    public function updateStatus(Request $request){
        $request->validate([
            'shopper_status'=>['required','string'],
            'id'    => ['required']
        ]);

        $order = OrderDetails::where('id',$request->id)->first();
            $order->update(['shopper_status'=>$request->shopper_status]);
            if($order)return $this->send_response(true,[],200,'shopper status updated');
            return $this->send_response(false,[],400,'Problem updating status');
    }

    
    public function changeDeliveryStatus(Request $request){
        $request->validate([
            'delivery_status'=>['required','string'],
            'id'    => ['required']
        ]);

        $order = WareHouse::where('id',$request->id)->first();
            $order->update(['delivery_status'=>$request->delivery_status]);
            if($order)return $this->send_response(true,[],200,'shopper status updated');
            return $this->send_response(false,[],400,'Problem updating status');
    }

    public function merchant(){
        $packaged_products = WareHouse::all();
        
        return view('dashboard.shopper.delivery-merchant',compact(['packaged_products']));
    }

    public function routing(){
        return view('dashboard.shopper.routing');
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
