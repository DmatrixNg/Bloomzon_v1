<?php

namespace App\Http\Controllers\Web\Seller;

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
    protected $seller;
    public function __construct()
    {
        $this->seller = Auth::guard('seller')->user();
    }

    public function index(){
        $seller = $this->seller;
        $orders = OrderDetails::where('seller_id',$this->seller->id)->where('order_type','seller')->get();
        $sales = OrderDetails::where('seller_id',$this->seller->id)->where('order_type','seller')->where('status','delivered')->get();
        $history = WalletHistory::where('user_id',$this->seller->id)->where('user_type','seller')->get();
        $order_tran =  WalletHistory::where('user_id',$this->seller->id)->where('user_type','seller')->where('slug','order')->get();
        return view('dashboard.seller.wallet',compact(['orders','history','seller','sales','order_tran']));
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
