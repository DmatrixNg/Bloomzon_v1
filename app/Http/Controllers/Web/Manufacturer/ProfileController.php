<?php

namespace App\Http\Controllers\Web\Manufacturer;

use App\Helpers\ManufacturerHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.manufacturer.profile');
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
    public function show()
    {
        return view('dashboard.manufacturer.profile_view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('dashboard.manufacturer.profile_edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     */
    public function update(Request $request)
    {

        $request->validate([
            'full_name'       => ['required', 'string', 'max:255'],
            'street_address'  => ['required', 'string', 'max:255'],
            'billing_address' => ['required', 'string', 'max:255'],
            'phone_number'    => ['required', 'string', 'integer'],
            'email'           => ['required', 'string', 'email', 'max:255'],
        ]);

        ManufacturerHelper::update($request);

        return redirect('manufacturer/view-profile');
    }

    public function update_profile(Request $request)
    {

        // dd($request);
        
        $request->validate([
            'profile'              => ['required', 'string', 'max:255'],
            'terms_and_conditions' => ['required', 'string', 'max:255'],
            'terms_of_purchase'    => ['required', 'string', 'max:255'],
            'policies'             => ['required', 'string', 'max:255']
        ]);

        ManufacturerHelper::update($request);

        return redirect()->back();
    }

    public function edit_account_details()
    {
        return view('dashboard.manufacturer.accountdetails');
    }

    public function update_account_details(Request $request)
    {
        
        $request->validate([
            'account_name'   => ['required', 'string', 'max:255'],
            'bank'     => ['required', 'string', 'max:255'],
            'account_number' => ['required', 'string', 'max:255']
        ]);

        ManufacturerHelper::update($request);

        return redirect()->back();
    }

    public function settings()
    {
        return view('dashboard.manufacturer.settings');
    }

    public function subscription()
    {
        return view('dashboard.manufacturer.subscription');
    }

    public function subscribe(Request $request)
    {
        $user = Auth::guard('manufacturer')->user();
        $user->subscription_plan = $request->plan;
        $user->save();
        return redirect()->back();
    }

    public function verification()
    {
        return view('dashboard.manufacturer.verification');
    }

    public function verify(Request $request)
    {

        $request->validate([
            'registration_document' => ['required', 'image'],
            'registration_id'       => ['required'],
            'proof_of_address'      => ['required', 'image'],
            'valid_id'              => ['required', 'image'],
            'narration'             => ['required'],
        ]);

        $user                        = Auth::guard('manufacturer')->user();
        $user->registration_document = $request->registration_document;
        $user->registration_id       = $request->registration_id;
        $user->proof_of_address      = $request->proof_of_address;
        $user->valid_id              = $request->valid_id;
        $user->narration             = $request->narration;

        $user->save();

        return redirect()->back();

    }

    public function accept_terms(Request $request)
    {
        $request->validate([
            'name'             => ['required'],
        ]);

        $user = Auth::guard('manufacturer')->user();
        $user->accepted_terms_and_conditions = true;
        $user->terms_and_conditions_name = $request->name;
        $user->save();

        return redirect('manufacturer/dashboard');

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
