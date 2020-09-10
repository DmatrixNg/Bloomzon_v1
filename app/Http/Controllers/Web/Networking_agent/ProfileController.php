<?php

namespace App\Http\Controllers\Web\Networking_agent;

use App\Helpers\FileHelper;
use App\Http\Controllers\Controller;
use App\NetworkingAgent;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    use JsonResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $networking_agent;

    public function __construct()
    {
        $this->networking_agent = Auth::guard('networking_agent')->user();
    }

    public function index()
    {
        $networking_agent = Auth::guard('networking_agent')->user();

        return view('dashboard.networking_agent.profile', compact(['networking_agent']));

    }

    //show editprofile
    public  function edit_profile()
    {
        $networking_agent = $this->networking_agent;
        return view('dashboard.networking_agent.edit-profile', compact(['networking_agent']));
    }

    public function account_info() {
        $networking_agent = $this->networking_agent;
        return view('dashboard.networking_agent.accountdetails', compact(['networking_agent']));
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
     */
    public function verify_account(Request $request)
    {
        $validated =  $request->validate([
            'proof_of_address' => 'required|mimes:jpeg,png',
            'valid_id'         => 'required|mimes:jpeg,png',
            'narration'        => 'required|string',
        ]);

        $networking_agent = Auth::guard('networking_agent')->user();

        if ($request->hasFile('proof_of_address')) {
            $networking_agent->proof_of_address = FileHelper::upload_image($request->proof_of_address, 'storage/networking_agent/proof_of_address/');
        }

        if ($request->hasFile('valid_id')) {
            $networking_agent->valid_id = FileHelper::upload_image($request->proof_of_address, 'storage/networking_agent/valid_id/');
        }

        $networking_agent->narration = $request->narration;

        //
        try {
            $networking_agent->save();
            return redirect()->back()->with([
                'message' => 'success',
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            abort(404);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function account_update(Request $request)
    {
        $validated =  $request->validate([
            'account_name' => 'required|string',
            'card_number'     => 'required|numeric',
            'account_number'  => 'required|numeric',

        ]);

        $networking_agent = Auth::guard('networking_agent')->user();

        if ($request->hasFile('proof_of_address')) {
            $networking_agent->proof_of_address = FileHelper::upload_image($request->proof_of_address, 'storage/networking_agent/proof_of_address/');
        }

        if ($request->hasFile('valid_id')) {
            $networking_agent->valid_id = FileHelper::upload_image($request->proof_of_address, 'storage/networking_agent/valid_id/');
        }

        $networking_agent->narration = $request->narration;

        //
        try {
            $networking_agent->save();
            return redirect()->back()->with([
                'message' => 'success',
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            abort(404);
        }



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

        $validated =  $request->validate([
            'full_name'      => 'required|string',
            'phone_number'   => 'required|string',
            'email'          => 'required|email',
            'street_address' => 'required|string'
        ]);

        //initiate networking agent using nag
        $nag = NetworkingAgent::find($id);

        $imgName = null; //instantiate imgurl variable
        //checks if image file exist and stores in localstorate
        if ($request->hasFile('avatar')) {

            $imgName = time() . '.' . $request->avatar->getClientOriginalExtension();

            try {

                $request->file('avatar')->storeAs('/assets/networking_agent/avatar', $imgName, 'public');

            } catch (\Exception $e) {
                return $this->send_response(false, $e, 400, 'Problem updating profile');
            }
        }


        //if update buyer profile works
        try {

            $nag->phone_number = $request->phone_number;
            $nag->street_address = $request->street_address;

            $update =  $nag->update($request->all());
            if ($imgName != null) {
                $nag->avatar = $imgName;
                $nag->save();
            }
            if ($update) {
                return $this->send_response(true, $update, 200, 'Your account has been edited');
            }else{ return $this->send_response(false, $update, 400, 'Your account could not be edited');}
        } catch (\Illuminate\Database\QueryException $e) {
            return $this->send_response(false, $e, 400, 'Problem updating profile');
        }
    }

    public function updateBankAccount(Request $request,$id) {

        $request->validate([
            'account_name' => 'required | string',
            'bank_name'     => 'string',
            'other_bank'    => 'string',
            'account_number' => 'required | string',

        ]);

        $bank_name = $request->bank_name == 'other_bank'?$request->other_bank:$request->bank_name;

        $ng = NetworkingAgent::find($id);
       $update =  $ng->update([
            'account_name' => $request->account_name,
            'card_number'  => $request->card_number,
            'account_bank_name'     => $bank_name,
            'account_number' => $request->account_number,

        ]);
        if($update){
            return $this->send_response(true, $update, 200, 'Your bank details has been saved');
        }
        return $this->send_response(false, $update, 400, 'Could not update account');

     }

     public function upgrade_account()
     {
         return view('dashboard.networking_agent.upgrade_account');
     }

     public function upgrade(Request $request)
     {
         $user = Auth::guard('networking_agent')->user();
         $user->account_type = $request->plan;
         $user->save();

         return redirect()->back()->with([
             'message' => 'Account Upgraded'
         ]);
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
    public function updateBankDetails(Request $request){

        $request->validate([
            'account_name'   => 'required',
            'account_number' => 'required',
            'bank_name'      => 'required',
            'bank_code'      => 'required',
        ]);

        $user = Auth::guard('networking_agent')->user();

        $user->update([
            'account_name'   => $request->account_name,
            'account_bank_name'      => $request->bank_name,
            'account_number' => $request->account_number,
            'bank_code'      => $request->bank_code,

        ]);

        return redirect()->back();

    }
}
