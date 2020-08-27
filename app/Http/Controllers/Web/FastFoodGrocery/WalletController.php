<?php

namespace App\Http\Controllers\Web\FastFoodGrocery; 

use App\Http\Controllers\Controller;
use App\OrderDetails;
use App\WalletHistory;
use App\WithdrawalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class WalletController extends Controller
{
    public function __construct()
    {
        $this->fast_food_grocery = Auth::guard('fast_food_grocery')->user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $fast_food_grocery = $this->fast_food_grocery;
        $orders = OrderDetails::where('seller_id',$this->fast_food_grocery->id)->where('order_type','fast_food_grocery')->get();
        $sales = OrderDetails::where('seller_id',$this->fast_food_grocery->id)->where('order_type','fast_food_grocery')->where('status','delivered')->get();
        $history = WalletHistory::where('user_id',$this->fast_food_grocery->id)->where('user_type','fast_food_grocery')->get();
        $order_tran =  WalletHistory::where('user_id',$this->fast_food_grocery->id)->where('user_type','fast_food_grocery')->where('slug','order')->get();
        return view('dashboard.fast_food_grocery.wallet',compact(['orders','history','fast_food_grocery','sales','order_tran']));
    }
    

    public function cashOut(Request $request){
        $request->validate([
            'amount' => ['integer','required'],
            'narration'=>['required','string']
        ]);

        $withdraw = WithdrawalRequest::create([
            'user_id'=>$request->user_id,
            'user_type'=> $request->user_type,
            'amount'=> $request->amount,
            'narration' => $request->narration,
            ]);
            if($withdraw){
                return $this->send_response(true,$withdraw,200,'Withdrawal request successfully made');
            }
            return $this->send_response(false,$withdraw,400,'Withdrawal request failed');
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
