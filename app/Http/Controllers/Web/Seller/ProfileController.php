<?php

namespace App\Http\Controllers\Web\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Seller;

class ProfileController extends Controller

{
    use JsonResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seller = Auth::guard('seller')->user();
        return view('dashboard.seller.profile', compact(['seller']));
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
    public function update(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        //initiate buyer
        $buyer = Seller::find($id);
        $data  = $request->all();

        $imgUrl = null;  //instantiate imgurl variable
        //checks if image file exist and stores in localstorate
        if ($request->hasFile('avatar')) {
            $imgName = time() . '.' . $request->avatar->getClientOriginalExtension();
            try {
                $request->file('avatar')->storeAs('/assets/seller/avatar', $imgName, 'public');
                $imgUrl = $imgName;
            } catch (\Exception $e) {
                return $this->send_response(false, $e, 400, 'Problem updating profile');
            }
        }
        //if update buyer profile works
        try {
            $buyer->update($data);
            if ($imgUrl != null) {
                $buyer->avatar = $imgUrl;
                $buyer->save();
            }
            return $this->send_response(true, $buyer, 200, 'Your account has been edited');
        } catch (\Illuminate\Database\QueryException $e) {
            return $this->send_response(false, $e, 400, 'Problem updating profile');
        }
    }


    public function updateTerms(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'terms_and_conditions' => ['required', 'string'],
            'policy'               => ['required', 'string'],
            'terms_of_purchase'    => ['required', 'string'],
            'delivery_terms'       => ['required', 'string']

        ]);


        //initiate buyer
        $seller = Seller::find($id);


        //if update buyer profile works
        try {
            $seller->update([
                'terms_and_conditions' => $request->terms_and_conditions,
                'policy'               => $request->policy,
                'terms_of_purchase'    => $request->terms_of_purchase,
                'delivery_terms'       => $request->delivery_terms
            ]);
            return $this->send_response(true, $seller, 200, 'Your account has been edited');
        } catch (\Illuminate\Database\QueryException $e) {
            return $this->send_response(false, $e, 400, 'Problem updating profile');
        }
    }

    public function updateBankDetails(Request $request){

        $request->validate([
            'account_name'   => 'required',
            'account_number' => 'required',
            'bank_name'      => 'required',
            'bank_code'      => 'required',
        ]);

        $seller = Auth::guard('seller')->user();

        $seller->update([
            'account_name'   => $request->account_name,
            'bank_name'      => $request->bank_name,
            'account_number' => $request->account_number,
            'bank_code'      => $request->bank_code,

        ]);

        return redirect()->back();

    }

    public function update_paypal_details(Request $request){

      $request->validate([
          'email'   => 'email|required',
      ]);

        $seller = Auth::guard('seller')->user();

      $seller->update([
            'paypal_email'   => $request->email

        ]);

        return redirect()->back();

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
