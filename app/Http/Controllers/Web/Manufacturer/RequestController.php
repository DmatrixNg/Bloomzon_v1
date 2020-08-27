<?php

namespace App\Http\Controllers\Web\Manufacturer;

use App\Http\Controllers\Controller;
use App\ManufacturerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $requests = Auth::guard('manufacturer')->user()->manufacturer_requests;

        return view('dashboard.manufacturer.requests', [
            'requests' => $requests
        ]);

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
        $request_details = ManufacturerRequest::findOrFail($id);
        return view('dashboard.manufacturer.requests-details', [
            'request_details' => $request_details
        ]);
    }

    public function show_status($id)
    {
        $request_details = ManufacturerRequest::findOrFail($id);
        return view('dashboard.manufacturer.requests-status', [
            'request_details' => $request_details
        ]);
    }

    public function update_status($id, Request $request)
    {
        $request->validate([
            'delivery_status' => ['required'],
        ]);
        
        $request_details = ManufacturerRequest::findOrFail($id);
        $request_details->delivery_status = $request->delivery_status;
        $request_details->save();

        return redirect()->back()->with([
            'message' => 'request was successful'
        ]);

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
