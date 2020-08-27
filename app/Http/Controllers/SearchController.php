<?php

namespace App\Http\Controllers;

use App\FastFoodGrocery;
use App\Manufacturer;
use App\NetworkingAgent;
use App\Product;
use App\Professional;
use App\Seller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $request->validate([
            'search_term' => 'string'
        ]);
            
        if ($request->search_term == null) {
            return back()->with('message', 'Empty search term enter');
        }

        $products = [];
        $sellers = [];
        $networking_agents = [];
        $manufacturers = [];
        $profs = [];
        $ffgs = [];
        
        switch ($request->category) {
            case 'product':
                $products =  Product::where('product_name','LIKE','%'.$request->search_term.'%')->get();
                break;
            case 'seller':
                $sellers = Seller::where('company_name', 'LIKE','%'.$request->search_term.'%')->orWhere('full_name','LIKE','%'.$request->search_term.'%')->get();

                break;
            case 'fast_food_grocery':
                $ffgs = FastFoodGrocery::where('company_name','LIKE', '%'.$request->search_term.'%')->orWhere('full_name','LIKE', '%'.$request->search_term.'%')->get();
                break;
            case 'networking_agent':
                $networking_agents = NetworkingAgent::where('company_name', 'LIKE','%'.$request->search_term.'%')->orWhere('full_name','LIKE','%'.$request->search_term.'%')->get();
                break;
            case 'manufacturer':
                // $manufacturers = Manufacturer::where('company_name','LIKE','%'.$request->search_term.'%')->orWhere('full_name','LIKE', '%'.$request->search_term.'%')->get();
                break;
            case 'proservice':
                $profs = Professional::where('company_name','LIKE','%'.$request->search_term.'%')->orWhere('full_name','LIKE', '%'.$request->search_term.'%')->get();
                break;
            default:
                $products =  Product::where('product_name','LIKE','%'.$request->search_term.'%')->get();
                $sellers = Seller::where('company_name','LIKE', '%'.$request->search_term.'%')->orWhere('full_name','LIKE', '%'.$request->search_term.'%')->get();
                $networking_agents = NetworkingAgent::where('company_name','LIKE', $request->search_term)->orWhere('full_name', 'LIKE','%'.$request->search_term.'%')->get();
                $manufacturers = [];
                $profs = Professional::where('company_name', 'LIKE','%'.$request->search_term.'%')->orWhere('full_name','LIKE','%'.$request->search_term.'%')->get();
                break;
        }
        

        return view('front.search-result',compact(['ffgs','products','sellers','networking_agents','manufacturers','profs']));
    }
}
