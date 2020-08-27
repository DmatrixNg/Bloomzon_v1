<?php

namespace App\Http\Controllers\Web\Professional;

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
    protected $professional;
    public function __construct()
    {
        $this->professional = Auth::guard('professional')->user();
    }

    public function index(){
        $professional = $this->professional;
        $orders = OrderDetails::where('seller_id',$this->professional->id)->where('order_type','professional')->get();
        $sales = OrderDetails::where('seller_id',$this->professional->id)->where('order_type','professional')->where('status','delivered')->get();
        $history = WalletHistory::where('user_id',$this->professional->id)->where('user_type','professional')->get();
        $order_tran =  WalletHistory::where('user_id',$this->professional->id)->where('user_type','professional')->where('slug','order')->get();
        return view('dashboard.professional.wallet',compact(['orders','history','professional','sales','order_tran']));
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
