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

    public function pay($request_id){

        $request = WithdrawalRequest::findOrFail($request_id);
        $request->status = 1;
        $request->save();

        return redirect()->back()->with([
            'message' => 'request status changed',
        ]);
        
    }
}
