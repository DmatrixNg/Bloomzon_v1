<?php

namespace App\Http\Controllers;

use App\Advert;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;

class AdvertController extends Controller
{
    use JsonResponse;
    
    public function buyerAds($id){
        $id = base64_decode($id);
        $ads = Advert::where('user_id',$id)->where('ads_by','buyer')->get();

        return view('dashboard.buyer.all-ads',compact(['ads']));

    }

    public function buyerPostAd(Request $request){
            $ad  = new Advert();
            $imgName= '';
            // Checks if an image exist
            $advert = $ad::create($request->all());
            if(!$advert)return $this->send_response(true,$advert, 400,'Advert added successfully');
           if($request->file('avatar')){
            $imgName = time() . '.' . $request->avatar->getClientOriginalExtension();
            try {
                $url = $request->file('avatar')->storeAs('/assets/advert/avatar', $imgName, 'public');
                $advert->avatar = $imgName;
                $advert->save();
                $imgName = $url;
            }catch(\Exception $e){
                return $this->send_response(false,$e, 400,'Problem adding image to advert');
            }
           }

           return $this->send_response(true,$imgName, 200,'Advert added successfully');
        }



}
