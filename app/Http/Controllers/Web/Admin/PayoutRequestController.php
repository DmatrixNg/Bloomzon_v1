<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\WithdrawalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PayoutRequestController extends Controller
{
    protected $admin;
    public function __construct()
    {
        $this->admin = Auth::guard('admin')->user();

    }

    public function index($user_type){

        $requests = WithdrawalRequest::where('user_type', $user_type)->get();

        return view('dashboard.admin.payout_requests',[
            'requests' => $requests
        ]);

    }

    public function pay(Request $request){
        
        // $request->validate([
        //     'id'                 => ['required'],
        //     'status'                 => ['required'],
        //     'paystack_transfer_code' => ['required']
        // ]);

        $withdrawal_request                         = WithdrawalRequest::findOrFail($request->id);
        $withdrawal_request->status                 = $request->status;
        $withdrawal_request->paystack_transfer_code = $request->paystack_transfer_code;
        $result = $withdrawal_request->save();

        return redirect()->back()->with([
            'message' => 'request status changed',
        ]);
        
    }
}
