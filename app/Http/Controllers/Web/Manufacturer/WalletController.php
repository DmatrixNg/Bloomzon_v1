<?php

namespace App\Http\Controllers\Web\Manufacturer;

use App\Http\Controllers\Controller;
use App\OrderDetails;
use App\Traits\JsonResponse;
use App\WalletHistory;
use App\WithdrawalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    
    use JsonResponse;
    protected $manufacturer;

    public function __construct()
    {
        $this->manufacturer = Auth::guard('manufacturer')->user();
    }

    public function index(){
        $manufacturer = $this->manufacturer;
        $orders = OrderDetails::where('seller_id',$this->manufacturer->id)->where('order_type','manufacturer')->get();
        $sales = OrderDetails::where('seller_id',$this->manufacturer->id)->where('order_type','manufacturer')->where('status','delivered')->get();
        $history = WalletHistory::where('user_id',$this->manufacturer->id)->where('user_type','manufacturer')->get();
        $order_tran =  WalletHistory::where('user_id',$this->manufacturer->id)->where('user_type','manufacturer')->where('slug','order')->get();
        return view('dashboard.manufacturer.wallet',compact(['orders','history','manufacturer','sales','order_tran']));
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

 


}
