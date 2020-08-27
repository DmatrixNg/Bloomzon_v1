<?php

namespace App\Http\Controllers\Web\Shopper;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetails;
use App\WareHouse;
use Illuminate\Http\Request;
use App\Traits\JsonResponse;
use Illuminate\Support\Facades\Auth;

class WareHouseController extends Controller
{
    use JsonResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $shopper;
    public function __construct(){
        $this->shopper = Auth::guard('shopper')->user();
    } 
    public function index()
    {
        $packaged_goods = WareHouse::all();
        
        return view('dashboard.shopper.warehouse-package',compact(['packaged_goods']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $order = OrderDetails::where('id',$id)->first();
        $shopper =$this->shopper;
        $other_products = WareHouse::where('order_id',$order->order_id)->get();
        return view('dashboard.shopper.store-in-warehouse',compact(['order','other_products','shopper']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'storage_location'=>['required','string'],
            'description' => ['required','string'],
            'time_in' => ['required','date'],
            'order_details_id'=>['required','unique:ware_houses']
        ],
        ['order_details_id.unique'=>'Product with same ID has already been added to ware houses']
        );


       $stored =  WareHouse::create([
            'storage_location'=>$request->storage_location,
            'description'=>$request->description,
            'time_in'=>$request->time_in,
            'shopper_id'=>$request->shopper_id,
            'order_details_id'=>$request->order_details_id,
            'order_id'=>$request->order_id,
            'delivery_status'=>'ready_for_pickup',
            'slug'=> str_replace(' ','_',strtolower($request->storage_location))
        ]);    

        if($stored){
            return $this->send_response(true,[],200,'Product stored in warehouse');
        }
            return $this->send_response(true,[],200,'Unable to store in warehouse');
        


        
    }

    public function scan_code($id){
        $order = OrderDetails::where('id',$id)->first();
        return view('dashboard.shopper.scan-code',compact(['order']));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
