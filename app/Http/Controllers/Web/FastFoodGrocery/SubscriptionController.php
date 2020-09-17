<?php

namespace App\Http\Controllers\Web\FastFoodGrocery;

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
    private $fast_food_grocery;
    public function __construct()
    {
        $this->fast_food_grocery = Auth::guard('fast_food_grocery')->user();
    }


    public function index()
    {
        return view('dashboard.fast_food_grocery.subscription');

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

        $fast_food_grocery = Auth::guard('fast_food_grocery')->user();

        $subscription = SubscriptionHelper::store($fast_food_grocery, $request);

        return redirect()->back();

    }

}
