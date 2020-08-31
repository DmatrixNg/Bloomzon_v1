<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Message;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteAnalysisController extends Controller
{
    public function show_details()
    {
        $transactions = Order::all();
        $sales = Order::where('payment_status', 1)->get();
        $messages = Message::all();
        return view('dashboard.admin.site_analysis', [
            'transactions' => $transactions->count(),
            'sales'        => $sales->count(),
            'messages'     => $messages->count(),
        ]);
    }
}
