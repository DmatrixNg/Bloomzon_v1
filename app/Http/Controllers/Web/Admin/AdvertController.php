<?php

namespace App\Http\Controllers\Web\Admin;

use App\Advert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class AdvertController extends Controller
{ use JsonResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $admin;

    public function __construct(){
        $this->admin = Auth::guard('admin')->user();
    }

    public function index()
    {
        $adverts = Advert::all();
        // dd($adverts);
        return view('dashboard.admin.all-adverts',compact(['adverts']));
    }

    public function changeStatus(Request $request){
        $request->validate([
            'status' => 'required',
            'id' => 'required'
            ]);

            if($request->status == 0) {
                $stat = "Rejected";
            } else {
                $stat = "Accepted";
            }

        $advert = Advert::find($request->id);
        // Log::debug($advert);
        // Log::debug($request->id);
        // dd();
        $user = null;
        if ($advert->ads_by == "buyer") {
          if ($advert->user_id) {
            $user = \App\Buyer::find($advert->user_id)->first();
          }

        }elseif ($advert->ads_by == "seller") {
          if ($advert->user_id) {

          $user = \App\Seller::find($advert->user_id)->first();
        }
        }elseif ($advert->ads_by == "professional") {
          if ($advert->user_id) {

          $user = \App\Professional::find($advert->user_id)->first();
        }
        }elseif ($advert->ads_by == "networking_agent") {
          if ($advert->user_id) {

          $user = \App\NetworkingAgent::find($advert->user_id)->first();
        }
        }elseif ($advert->ads_by == "fast_food_grocery") {
          if ($advert->user_id) {

          $user = \App\FastFoodGrocery::find($advert->user_id)->first();
        }
        }elseif ($advert->ads_by == "admin") {
          if ($advert->user_id) {

          $user = \App\Admin::find($advert->user_id)->first();
        }
        }elseif ($advert->ads_by == "manufacturer") {
          if ($advert->user_id) {

          $user = \App\Manufacturer::find($advert->user_id)->first();
        }
        }else {
          $user = null;
        }
        if ($user != null) {
          $user->notify(new \App\Notifications\Ads($advert,$stat));
        }

            if($advert->update(['status'=>$request->status])){
                return $this->send_response(true,[],200,'Advert updated successfully');
            }
            return $this->send_response(false,[],400,'unable to update advert');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = $this->admin;
        return view('dashboard.admin.post-new-ads', compact(['admin']));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ad  = new Advert();
        $imgName = '';
        //validate image
        $request->validate([
            'user_id' => [],
            'ads_by' => [],
            'advert_position' => ['required', 'string'],
            'duration' => ['required',],
            'amount' => ['required', 'string'],
            'status' => ['integer'],
            'advert_link' => ['required', 'string'],
            'avatar' => ['required']
        ], ['avatar.required' => 'Please upload an image as advert banner']);

        if ($request->hasFile('avatar')) {
            $imgName = time() . '.' . $request->avatar->getClientOriginalExtension();
            try {
                $request->file('avatar')->storeAs('/assets/advert/avatar', $imgName, 'public');
            } catch (\Exception $e) {
                return $this->send_response(false, $e, 400, 'Problem adding image to advert');
            }
        }

        $advert = Advert::create([
            'user_id' => $request->user_id,
            'ads_by' => $request->ads_by,
            'advert_position' => $request->advert_position,
            'duration'  => $request->duration,
            'amount'    => $request->amount,
            'status'    => $request->status,
            'advert_link' => $request->advert_link,
            'avatar'    => $imgName
        ]);
        if (!$advert) return $this->send_response(true, $advert, 400, 'Advert added successfully');

        return $this->send_response(true, $imgName, 200, 'Advert added successfully');
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
