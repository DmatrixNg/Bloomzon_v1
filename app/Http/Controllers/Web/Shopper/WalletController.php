<?php

namespace App\Http\Controllers\Web\Shopper;

use App\Http\Controllers\Controller;
use App\Seller;
use App\WithdrawalRequest;
use Illuminate\Http\Request;
use App\Helpers\WalletHistoryHelper;
use App\Traits\JsonResponse;

class WalletController extends Controller
{
    use JsonResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment_requests = WithdrawalRequest::all();
        return view('dashboard.shopper.wallet', compact(['payment_requests']));
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

        $request = WithdrawalRequest::find($id);
        return view('dashboard.shopper.request-details', compact(['request']));
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

    //you must pass pay = true  as a parameter
    
   public function payout(Request $request)
    {
        $id = $request->req_id;
        if ($request->pay) {
            //call the widthrawal request for details
            $wr = WithdrawalRequest::find($id);
            $user = $wr->user_id;
            $res = WalletHistoryHelper::credit($user,$wr->amount,$wr->user_type,'withdraw');
            if ($res) {
                $wr->update([
                    'status'=>1
                ]);
                return $this->send_response(true, [], 200, 'Wallet updated successfully');
            }
            return $this->send_response(false, [], 400, 'Wallet updated successfully');
        }
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
