<?php

namespace App\Http\Controllers\Web\Shopper;

use App\Http\Controllers\Controller;
use App\Shopper;
use Illuminate\Http\Request;
use App\Traits\JsonResponse;
use Illuminate\Support\Facades\Auth;

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
        $shopper = Auth::guard('shopper')->user();
        
        return view('dashboard.shopper.edit-contact', compact(['shopper']));
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

    public function accountDetails(){
    
            $shopper = Auth::guard('shopper')->user();
            return view('dashboard.shopper.account-details', compact(['shopper']));
    
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
        $shopper = Shopper::find($id);
        $data = $request->all();

        $imgUrl = null; //instantiate imgurl variable
        //checks if image file exist and stores in localstorate
        if ($request->hasFile('avatar')) {
            $imgName = time() . '.' . $request->avatar->getClientOriginalExtension();
            try {
                $request->file('avatar')->storeAs('/assets/shopper/avatar', $imgName, 'public');
                $imgUrl = $imgName;
            } catch (\Exception $e) {
                return $this->send_response(false, $e, 400, 'Problem updating profile');
            }
        }
        //if update buyer profile works
        try {
            $shopper->update($data);
            if ($imgUrl != null) {
                $shopper->avatar = $imgUrl;
                $shopper->save();
            }
            return $this->send_response(true, $shopper, 200, 'Your account has been edited');
        } catch (\Illuminate\Database\QueryException $e) {
            return $this->send_response(false, $e, 400, 'Problem updating profile');
        }
    }



    public function updateBankDetails(Request $request,$id){
        $request->validate([
            'account_name' => 'required | string',
            'bank_name'     => 'string',
            'other_bank'    => 'string',
            'account_number' => 'required | string',
            
        ]);

        $bank_name = $request->bank_name == 'other_bank'?$request->other_bank:$request->bank_name;

        $shopper = Shopper::find($id);
       $update =  $shopper->update([
            'account_name' => $request->account_name,
            'bank_name'     => $bank_name,
            'account_number' => $request->account_number,
            
        ]);
        if($update){
            return $this->send_response(true, $update, 200, 'Your bank details has been saved');
        }
        return $this->send_response(false, $update, 400, 'Could not update account');
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
