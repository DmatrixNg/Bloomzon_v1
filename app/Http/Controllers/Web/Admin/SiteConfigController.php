<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\SiteConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class SiteConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config = SiteConfig::find(1);
        if(!$config){
            $config = new SiteConfig();
        }
     return view('dashboard.admin.site_config',compact(['config']));
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
    public function update(Request $request)
    {
        $request->validate([
            'naira' => 'required |regex:/^\d+(\.\d{1,2})?$/',
            'pound' => 'required |regex:/^\d+(\.\d{1,2})?$/',
            'euro'  =>  'required |regex:/^\d+(\.\d{1,2})?$/',
            'usd'   =>  'required |regex:/^\d+(\.\d{1,2})?$/',
            'base_currency' => 'required | string'
        ]);

    
          $config = SiteConfig::find(1);
          if($config){
              $config->update([
                  'naira'           => $request->naira,
                  'pound'           => $request->pound,
                  'euro'            => $request->euro,
                  'usd'             => $request->usd,
                  'base_currency'   => $request->base_currency,
                  'ad1_week'        => $request->ad1_week,
                  'ad2_week'        => $request->ad2_week,
                  'ad4_week'        => $request->ad4_week   
              ]);
          }else{
              SiteConfig::create(
                [
                    'naira'           => $request->naira,
                    'pound'           => $request->pound,
                    'euro'            => $request->euro,
                    'usd'             => $request->usd,
                    'base_currency'   => $request->base_currency   
                ]);
          }
    
        return back()->with(['message' => 'Confiugarion set']);

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
