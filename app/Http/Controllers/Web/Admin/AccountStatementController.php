<?php

namespace App\Http\Controllers\Web\Admin;

use App\Buyer;
use App\FastFoodGrocery;
use App\Http\Controllers\Controller;
use App\Manufacturer;
use App\NetworkingAgent;
use App\Order;
use App\Professional;
use App\ProfessionalService;
use App\Seller;
use App\Shopper;
use Illuminate\Http\Request;

class AccountStatementController extends Controller
{
    public function index()
    {

        $numb_buyers    = Buyer::all()->count();
        $premium_buyers = Buyer::where('subscription_plan', 'premium')->get()->count();
        $basic_buyers   = Buyer::where('subscription_plan', 'basic')->get()->count();

        // 
        $numb_sellers        = Seller::all()->count();
        $premium_sellers     = Seller::where('subscription_plan', 'premium')->get()->count();
        $basic_sellers       = Seller::where('subscription_plan', 'basic')->get()->count();
        // $sellers_total_sales = Order::where('');
        // $sellers_total_sales = Order::where('');

        // manufacturers
        $numb_manufacturers    = Manufacturer::all()->count();
        $premium_manufacturers = Manufacturer::where('subscription_plan', 'premium')->get()->count();
        $basic_manufacturers   = Manufacturer::where('subscription_plan', 'basic')->get()->count();

        // netwroking agent
        $numb_na    = NetworkingAgent::all()->count();
        $premium_na = NetworkingAgent::where('subscription_plan', 'premium')->get()->count();
        $basic_na   = NetworkingAgent::where('subscription_plan', 'basic')->get()->count();

        // professional service
        $numb_ps    = Professional::all()->count();
        $premium_ps = Professional::where('subscription_plan', 'premium')->get()->count();
        $basic_ps   = Professional::where('subscription_plan', 'basic')->get()->count();

        // food and groceries
        $numb_ffg    = FastFoodGrocery::all()->count();
        $premium_ffg = FastFoodGrocery::where('subscription_plan', 'premium')->get()->count();
        $basic_ffg   = FastFoodGrocery::where('subscription_plan', 'basic')->get()->count();

        // shopper
        $numb_shopper    = Shopper::all()->count();
        $premium_shopper = Shopper::where('subscription_plan', 'premium')->get()->count();
        $basic_shopper   = Shopper::where('subscription_plan', 'basic')->get()->count();

        return view('dashboard.admin.account_sales_statements', [
            'numb_buyers'    => $numb_buyers,
            'premium_buyers' => $premium_buyers,
            'basic_buyers'   => $basic_buyers,

            'numb_sellers'    => $numb_sellers,
            'premium_sellers' => $premium_sellers,
            'basic_sellers'   => $basic_sellers,

            'numb_manufacturers'    => $numb_manufacturers,
            'premium_manufacturers' => $premium_manufacturers,
            'basic_manufacturers'   => $basic_manufacturers,

            // 
            'numb_na'    => $numb_na,
            'premium_na' => $premium_na,
            'basic_na'   => $basic_na,

            // 
            'numb_ps'    => $numb_ps,
            'premium_ps' => $premium_ps,
            'basic_ps'   => $basic_ps,

            // 
            'numb_ffg'    => $numb_ffg,
            'premium_ffg' => $premium_ffg,
            'basic_ffg'   => $basic_ffg,

            // 
            'numb_shopper'    => $numb_shopper,
            'premium_shopper' => $premium_shopper,
            'basic_shopper'   => $basic_shopper,
        ]);
    }
}
