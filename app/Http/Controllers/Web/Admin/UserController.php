<?php

namespace App\Http\Controllers\Web\Admin;

use App\Admin;
use App\Buyer;
use App\DeliveryAgent;
use App\FastFoodGrocery;
use App\Helpers\AdminHelper;
use App\Helpers\BuyerHelper;
use App\Helpers\FastFoodGroceryHelper;
use App\Helpers\ManufacturerHelper;
use App\Helpers\NetworkingAgentHelper;
use App\Helpers\ProfessionalHelper;
use App\Helpers\SellerHelper;
use App\Helpers\ShopperHelper;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\Shopper\DeliveryController;
use App\Manufacturer;
use App\NetworkingAgent;
use App\Professional;
use App\Seller;
use App\Shopper;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use JsonResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.admin.all_users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.create_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {

        $user = null;

        // return response()->json($request);


        $request->validate([
            'full_name'         => 'required|max:100',
            'account_type' => 'required|string|max:100',
            'username'     => 'required|string|max:255',
            'email'        => 'required|unique:buyers|string|max:255',
            'password'     => 'required|confirmed|string|min:6',
        ]);


        switch ($request->account_type) {
            case ('buyer'):
                $user =  BuyerHelper::store($request);
                break;
            case ('seller'):
                $user = SellerHelper::store($request);
                break;
            case ('bloomzon_seller'):
                $data = $request;
                $data->is_bloomzon = true;
                $user = SellerHelper::store($data);
                break;
            case ('networking_agent'):
                $user = NetworkingAgentHelper::store($request);
                break;
            case ('professional'):
                $user = ProfessionalHelper::store($request);
                break;
            case ('shopper'):
                $user = ShopperHelper::store($request);
                break;
            case ('manufacturer'):
                $user = ManufacturerHelper::store($request);
                break;
            case ('fast_food_grocery'):
                $user = FastFoodGroceryHelper::store($request);
                break;
            case ('sub_admin'):
                $data = $request;
                $data->role = 'sub_admin';
                $user = AdminHelper::store($request);
                break;

//         switch($request->account_type) {
//             case('buyer'):
//                 return BuyerHelper::store($request);
//             case('seller'):
//                 return SellerHelper::store($request);
//             case('networking_agent'):
//                 return NetworkingAgentHelper::store($request);
//             case('professional'):
//                 return ProfessionalHelper::store($request);
//             case('shopper'):
//                     return ShopperHelper::store($request);

        }
        if ($user) {
            return $this->send_response(true, $user, 200);
        } else {

            return $this->send_response(false, $user, 400);
        }
    }

    /**
     * Display the specified resource.
     *
     */
    public function show_users($user_type)
    {
        $users = [];

        switch ($user_type) {
            case ('buyers'):
                $buyers = Buyer::all();
                return view('dashboard.admin.all_buyers', compact(['buyers']));
            case ('sellers'):
                $sellers = Seller::where('is_bloomzon',0)->get();
                $bloomzon = '';
                return view('dashboard.admin.all_sellers', compact(['sellers','bloomzon']));
            case ('bloomzon_sellers'):
                $sellers = Seller::where('is_bloomzon',1)->get();
                $bloomzon = "Bloomzon";
                return view('dashboard.admin.all_sellers', compact(['sellers','bloomzon']));
            case ('networking_agents'):
                $networking_agents = NetworkingAgent::all();
                return view('dashboard.admin.all_networking_agents', compact(['networking_agents']));
            case ('professionals'):
                $professionals = Professional::all();
                return view('dashboard.admin.all_professionals', compact(['professionals']));
            case ('shoppers'):
                $shoppers = Shopper::all();
                return view('dashboard.admin.all_shoppers', compact(['shoppers']));
            case ('manufacturers'):
                $manufacturers = Manufacturer::all();
                return view('dashboard.admin.all_manufacturers', compact(['manufacturers']));

            case ('fast_food_groceries'):
                $fast_food_groceries = FastFoodGrocery::all();
                return view('dashboard.admin.all_fast_food_groceries', compact(['fast_food_groceries']));

            case ('delivery_agents'):
                $delivery_agents = DeliveryAgent::all();
                return view('dashboard.admin.all_delivery_agents',compact(['delivery_agents']));

            case ('sub_admins'):
                $subadmins = Admin::where('role','sub_admin')->get();
                return view('dashboard.admin.all_subadmins',compact(['subadmins']));

        }

        return null;
    }

    /**
     * Display the specified resource.
     *
     */
    public function get_users($user_type)
    {

        switch ($user_type) {
            case ('buyers'):
                return response()->json(Buyer::all());
            case ('sellers'):
                return response()->json(Seller::all());
            case ('networking_agent'):
                return response()->json(NetworkingAgent::all());
            case ('professional'):
                return response()->json(Professional::all());
        }

        return null;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyUser($user_type,$id)
    {
        switch ($user_type) {
            case ('buyer'):
                $buyer = Buyer::find($id)->delete();
                if($buyer)return $this->send_response(true,$buyer,200,'Buyer Deleted');
                return $this->send_response(true,[],400,'Unable to Deleted Buyer');
            case ('seller'):
                $seller = Seller::find($id)->delete();
                if($seller)return $this->send_response(true,$seller,200,'Seller Deleted');
                return $this->send_response(true,$seller,200,'Unable to  Delete');
            case ('networking_agent'):
                $ng = NetworkingAgent::find($id)->delete();
                if($ng)return $this->send_response(true,$ng,200,'Networking Agent Deleted');
                return $this->send_response(true,$ng,400,'');
            case ('professional'):
                $user = Professional::find($id)->delete();
                if($user)return $this->send_response(true,$user,200,'Networking Agent Deleted');
                return $this->send_response(true,$user,400,'');
            case ('shopper'):
                $user = Shopper::find($id)->delete();
                if($user)return $this->send_response(true,$user,200,'Networking Agent Deleted');
                return $this->send_response(true,$user,400,'');
            case ('sub_admin'):
                $user = Admin::find($id)->delete();
                if($user)return $this->send_response(true,$user,200,'Admin Deleted');
                return $this->send_response(true,$user,400,'');
            case ('manufacturer'):
                $user = Shopper::find($id)->delete();
                if($user)return $this->send_response(true,$user,200,'Networking Agent Deleted');
                return $this->send_response(true,$user,400,'');
            case ('delivery_agent'):
                // $user = Deliv::find($id)->delete();
                // if($user)return $this->send_response(true,$user,200,'Networking Agent Deleted');
                return $this->send_response(true,[],400,'');
        }
    }

    public function change_status($user_type,$id)
    {
        switch ($user_type) {
            case ('buyer'):
                $ng = Buyer::find($id);
                if($ng->account_status == 'inactive') {
                    $ng->account_status = 'active';
                } else {
                    $ng->account_status = 'inactive';
                }
                $result = $ng->save();
                if($result) return $this->send_response(true,$ng,200,'Status has been changes');
                return $this->send_response(true,$ng,400,'');
            case ('seller'):
                $ng = Seller::find($id);
                if($ng->account_status == 'inactive') {
                    $ng->account_status = 'active';
                } else {
                    $ng->account_status = 'inactive';
                }
                $result = $ng->save();
                if($result) return $this->send_response(true,$ng,200,'Status has been changes');
                return $this->send_response(true,$ng,400,'');
            case ('networking_agent'):
                $ng = NetworkingAgent::find($id);
                if($ng->account_status == 'inactive') {
                    $ng->account_status = 'active';
                } else {
                    $ng->account_status = 'inactive';
                }
                $result = $ng->save();
                if($result) return $this->send_response(true,$ng,200,'Status has been changes');
                return $this->send_response(true,$ng,400,'');
            case ('fast_food_grocery'):
                $ffg = FastFoodGrocery::find($id);
                if($ffg->account_status == 'inactive') {
                    $ffg->account_status = 'active';
                } else {
                    $ffg->account_status = 'inactive';
                }
                $result = $ffg->save();
                if($result) return $this->send_response(true,$ffg,200,'Status has been changes');
                return $this->send_response(true,$ffg,400,'');
            case ('professional'):
                $ffg = Professional::find($id);
                if($ffg->account_status == 'inactive') {
                    $ffg->account_status = 'active';
                } else {
                    $ffg->account_status = 'inactive';
                }
                $result = $ffg->save();
                if($result) return $this->send_response(true,$ffg,200,'Status has been changes');
                return $this->send_response(true,$ffg,400,'');
            case ('shopper'):
                $ffg = Shopper::find($id);
                if($ffg->account_status == 'inactive') {
                    $ffg->account_status = 'active';
                } else {
                    $ffg->account_status = 'inactive';
                }
                $result = $ffg->save();
                if($result) return $this->send_response(true,$ffg,200,'Status has been changes');
                return $this->send_response(true,$ffg,400,'');
            case ('sub_admin'):
                $user = Admin::find($id)->delete();
                if($user)return $this->send_response(true,$user,200,'Admin Deleted');
                return $this->send_response(true,$user,400,'');
            case ('manufacturer'):
                $ffg = Manufacturer::find($id);
                if($ffg->account_status == 'inactive') {
                    $ffg->account_status = 'active';
                } else {
                    $ffg->account_status = 'inactive';
                }
                $result = $ffg->save();
                if($result) return $this->send_response(true,$ffg,200,'Status has been changes');
                return $this->send_response(true,$ffg,400,'');
            case ('delivery_agent'):
                // $user = Deliv::find($id)->delete();
                // if($user)return $this->send_response(true,$user,200,'Networking Agent Deleted');
                return $this->send_response(true,[],400,'');
        }
    }

    public function makeBloomzonSeller($id){

        $seller = Seller::find($id);
        if($seller){
            $seller->is_bloomzon = $seller->is_bloomzon?0:1;
        $seller->save();
        return $this->send_response(true,$seller,200,'Seller type changed');
        }
        return $this->send_response(true,[],400,'Unable to change seller type');

    }

    public function changeAdminStatus($id)
    {
        $admin = Admin::find($id);
        if($admin){
            $admin->status = $admin->status?0:1;
        $admin->save();
        return $this->send_response(true,$admin,200,'Seller type changed');
        }
        return $this->send_response(true,[],400,'Unable to change seller type');

    }
}
