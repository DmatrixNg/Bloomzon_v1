<?php

namespace App\Http\Controllers\Web\Manufacturer;

use App\Helpers\SubscriptionHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    private $manufacturer;
    public function __construct()
    {
        $this->manufacturer = Auth::guard('manufacturer')->user();
    }


    public function index()
    {
        return view('dashboard.manufacturer.subscription');

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
     */
    public function store(Request $request)
    {

        $request->validate([

        ]);

        $manufacturer = Auth::guard('manufacturer')->user();

        $subscription = SubscriptionHelper::store($manufacturer, $request);

        return redirect()->back();

    }
}
