<?php

namespace App\Http\Controllers\Web\professional;

use App\Advert;
use App\Http\Controllers\Controller;
use App\SiteConfig;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdvertController extends Controller
{
    use JsonResponse;
    public function __construct()
    {
        $this->professional = Auth::guard('professional')->user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $adverts = Advert::where('user_id', $this->professional->id)->where('ads_by', 'professional')->get();

        return view('dashboard.professional.all-ads', compact(['adverts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professional = $this->professional;
        $config = SiteConfig::where('id',1)->first(['naira','euro','pound','usd','ad1_week','ad2_week','ad4_week']);
        return view('dashboard.professional.post-new-ads', compact(['professional','config']));
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

        $advert = $ad::create([
            'user_id' => $request->user_id,
            'ads_by' => $request->ads_by,
            'advert_position' => $request->advert_position,
            'duration'  => $request->duration,
            'amount'    => $request->amount,
            'status'    => $request->status,
            'payment_ref'=> $request->payment_ref,
            'payment_method' => $request->payment_method,
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
        $ad = Advert::find($id)->delete();
        if($ad)return $this->send_response(true,$id, 200,'Advert deleted successfully');
        return $this->send_response(false,false, 400,'Unable to delete advert');
    }

    public function change_status(Request $request,$id)
    {
        $status = 'paused';
        if($request->status == 1){
            $status = 'played';
        }
        if($request->status == 2){
            $status = 'Inactive';
        }
        $ad = Advert::find($id)->update([
            'status' => $status]);
        if($ad)return $this->send_response(true,$id, 200,'Advert updated successfully');
        return $this->send_response(false,false, 400,'Unable to update advert');
    }
}
