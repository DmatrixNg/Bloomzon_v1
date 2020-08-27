<?php

namespace App\Http\Controllers\Web\Networking_agent;

use App\Http\Controllers\Controller;
use App\NaSellers;
use App\Traits\JsonResponse;
use App\WithdrawalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class WalletController extends Controller
{
    use JsonResponse;
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
    {
        
        $networking_agent = $this->networking_agent;
        $balance = $networking_agent->wallet != ''?$networking_agent->wallet:0;
        $active_sales = NaSellers::where('networking_agent_id',$networking_agent->id)->where('status',1)->get();
        return view('dashboard.networking_agent.wallet',compact(['networking_agent','balance','active_sales']));


    }

    public function cashOut(Request $request){
        $request->validate([
            'amount' => ['regex:/^\d+(\.\d{1,2})?$/','required'],
            'narration'=>['required','string']
        ]);

        $withdraw = WithdrawalRequest::create([
            'user_id'=>$request->user_id,
            'user_type'=> $request->user_type,
            'amount'=> $request->amount,
            'narration' => $request->narration,
            ]);
            if($withdraw){
                return $this->send_response(true,$withdraw,200,'Withdrawal request successfully made');
            }
            return $this->send_response(false,$withdraw,400,'Withdrawal request failed');
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
