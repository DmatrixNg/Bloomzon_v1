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

    public function index(){
        $requests = WithdrawalRequest::where('user_type','manufacturer')->get();
        return view('dashboard.admin.manufacturerpayout',compact(['requests']));
    }
}
