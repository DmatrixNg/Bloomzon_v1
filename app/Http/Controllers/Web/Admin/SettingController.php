<?php

namespace App\Http\Controllers\Web\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SiteConfig;
use App\Traits\JsonResponse;

class SettingController extends Controller
{
    use JsonResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.admin.settings');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function accountStatement(){

        return view('dashboard.admin.account_sales_statements');
    }
    public function privacyPolicy(){
        return view('dashboard.admin.privacypolicy');
    }
    public function terms(){
        return view('dashboard.admin.terms');
    }

    public function accountpolicy(){
        return view('dashboard.admin.accountpolicy');
    }

    public function retailpolicy(){
        return view('dashboard.admin.retailpolicy');
    }

    public function cookies(){
        return view('dashboard.admin.cookies');
    }

    public function privacy(){
        return view('dashboard.admin.privacy');
    }

    public function refundpolicy(){
        return view('dashboard.admin.refundpolicy');
    }

    public function datapolicy(){
        return view('dashboard.admin.datapolicy');
    }

    public function shippingreturns(){
        return view('dashboard.admin.shippingreturns');
    }

    public function qualitycontrol(){
        return view('dashboard.admin.qualitycontrol');
    }
    
    public function rightOfPurchase(){
        return view('dashboard.admin.rightofpurchase');
    }

    // public function refund(){
    //     return view('dashboard.admin.refundpolicy');
    // }

    public function storeData(Request $request){
        $config = SiteConfig::find(1);

        switch($request->type){
            
            case ('privacy_policy'):
                $config->privacy_policy  = $request->data;
                $config->save();
                return $this->send_response(true,$config,200,'');
            case ('terms'):
                $config->terms =  $request->data;
                $config->save();
                return $this->send_response(true,$config,200,'');
            case ('accountpolicy'):
                $config->accountpolicy =  $request->data;
                $config->save();
                return $this->send_response(true,$config,200,'');
            case ('retailpolicy'):
                $config->retailpolicy = $request->data;
                $config->save();
                return $this->send_response(true,$config,200,'');
            case ('cookies'):
                $config->cookies = $request->data;
                $config->save();
                return $this->send_response(true,$config,200,'');
            case ('privacy'):
                $config->privacy = $request->data;
                $config->save();
                return $this->send_response(true,$config,200,'');
            case ('refundpolicy'):
                $config->refundpolicy = $request->data;
                $config->save();
                return $this->send_response(true,$config,200,'');
            case ('datapolicy'):
                $config->datapolicy = $request->data;
                $config->save();
                return $this->send_response(true,$config,200,'');
            case ('shippingreturns'):
                $config->shippingreturns = $request->data;
                $config->save();
                return $this->send_response(true,$config,200,'');
            case ('qualitycontrol'):
                $config->qualitycontrol = $request->data;
                $config->save();
                return $this->send_response(true,$config,200,'');
            case ('right_of_purchase'):
                $config->update(['right_of_purchase' => $request->data]);
                return $this->send_response(true,$config,200,'');
            
            case ('refund'):
                $config->update(['refund' => $request->data]);
            return $this->send_response(true,$config,200,'');
            
        }

    }

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
