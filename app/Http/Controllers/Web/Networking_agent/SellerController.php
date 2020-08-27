<?php

namespace App\Http\Controllers\Web\Networking_agent;

use App\Http\Controllers\Controller;
use App\NaSellers;
use App\Seller;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SellerController extends Controller
{
    use JsonResponse;
    
    private $networking_agent;

    public function __construct()
    {
        $this->networking_agent = Auth::guard('networking_agent')->user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $networking_agent = $this->networking_agent;
        $my_sellers = NaSellers::where('networking_agent_id',$networking_agent->id)->get();
        $stage = $this->countStage($my_sellers);
        return view('dashboard.networking_agent.createseller',compact(['networking_agent','stage']));
    }

    private function countStage($all_sellers): int{
        $count = count($all_sellers);
        if($count < 7){
            return 1;
        }elseif($count < 14){
            return 2;
        }elseif($count < 28){
            return 3;
        }else{
            return null;
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'full_name'           => 'required | string',
            'service_description' => 'required | string',
            'shop_address'        => 'required | string',
            'email'               => 'required | unique:sellers',
            'phone_number'        => 'string',
            'stage'               => 'string'

        ]);

        $seller = Seller::create([
            'full_name'           => $request->full_name,
            'email'               => $request->email,
            'service_description' => $request->service_description,
            'shop_address'        => $request->shop_address,
            'phone_number'        => $request->phone_number,
            'password'            => Hash::make($request->password),
        ]);

        if($seller){
            $na = NaSellers::create([
                'networking_agent_id' => $request->networking_agent_id,
                'seller_id' =>          $seller->id,
                'stage' => $request->stage
                ]);

                if($na)return $this->send_response(true,[],200,'You have added a new seller');
                $na->delete();
                return $this->send_response(false,[],400,'Could not add seller');
        }

        $seller->delete();
        return $this->send_response(true,[],400,'Could not add seller');


    }


    public function pre_chart(){
        $stage1 = NaSellers::where('networking_agent_id', $this->networking_agent->id)->where('stage',1)->get();
        $stage2 = NaSellers::where('networking_agent_id',$this->networking_agent->id)->where('stage',2)->get();
        $stage3 = NaSellers::where('networking_agent_id',$this->networking_agent->id)->where('stage',3)->get();

        return view('dashboard.networking_agent.histogram',compact(['stage1','stage2','stage3']));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
