<?php

namespace App\Http\Controllers\Web\Shopper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    private $shopper;
    public function __construct()
    {
        $this->shopper = Auth::guard('shopper')->user();
    }

    public function index(){
        $shopper = $this->shopper;
        return view('dashboard.shopper.settings',compact(['shopper']));
    }
}
