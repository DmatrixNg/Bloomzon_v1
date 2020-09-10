<?php

namespace App\Http\Controllers\Web\Professional;

use App\Http\Controllers\Controller;
use App\NetworkingAgent;
use App\Professional;
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
    private $professional;

    public function __construct()
    {
        $this->professional = Auth::guard('professional')->user();
    }

    public function index()
    {
        $professional = Auth::guard('professional')->user();
        return view('dashboard.professional.profile', compact(['professional']));
    }

    //show editprofile
    public  function edit_profile()
    {
        $professional = $this->professional;
        return view('dashboard.professional.edit-profile', compact(['professional']));
    }

    public function account_info() {
        $professional = $this->professional;
        return view('dashboard.professional.accountdetails', compact(['professional']));
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
       $validated =  $request->validate([
            'full_name' => 'required | string',
            'company_name' => 'required | string',
            'phone_number' => 'required | string',
            'email' => 'required | email',
            'shop_address' => 'required | string',
            'profession'=> 'required | string'

        ]);

        //initiate networking agent using nag
        $nag = Professional::find($id);
        $imgName = null; //instantiate imgurl variable
        //checks if image file exist and stores in localstorate
        if ($request->hasFile('avatar')) {
            $imgName = time() . '.' . $request->avatar->getClientOriginalExtension();
            try {
                $request->file('avatar')->storeAs('/assets/professional/avatar', $imgName, 'public');

            } catch (\Exception $e) {
                return $this->send_response(false, $e, 400, 'Problem updating profile');
            }
        }

        //if update buyer profile works
        try {
            $update =  $nag->update([
                'full_name' => $request->full_name,
                'company_name' => $request->company_name,
                'phone_number' => $request->phone_number,
                'email' =>  $request->email,
                'shop_address' => $request->shop_address,
                'service_description' => $request->service_description,
                'profession' => $request->profession
            ]);
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
        $validated =  $request->validate([
             'account_name' => 'required | string',
             'account_number' => 'required | integer',
         ]);

         //initiate networking agent using nag
         $nag = Professional::find($id);
         //if update buyer profile works
         try {
             $update =  $nag->update($request->all());
             if ($update) {
                 return $this->send_response(true, $update, 200, 'Your account has been edited');
             }else{ return $this->send_response(false, $update, 400, 'Your account could not be edited');}
         } catch (\Illuminate\Database\QueryException $e) {
             return $this->send_response(false, $e, 400, 'Problem updating Account');
         }
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

        $user = Auth::guard('professional')->user();

        $user->update([
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

        $user = Auth::guard('professional')->user();

        $user->update([
            'paypal_email'   => $request->email

        ]);

        return redirect()->back();

    }
}
