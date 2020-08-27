<?php

namespace App\Http\Controllers\Web\Admin;

use App\Brand;
use App\Http\Controllers\Controller;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    use JsonResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('dashboard.admin.all-brands',compact(['brands']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.createnewbrand');
    }

    public function changeStatus(Request $request){
        $request->validate([
            'status' => 'required',
            'id' => 'required'
            ]);

        $brand = Brand::find($request->id);
        $brand->update(
            ['status'=>$request->status]);    
            if($brand){
                return $this->send_response(true,[],200,'brand updated successfully');
            }
            return $this->send_response(false,[],400,'unable to update brand');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imgName = null;
        $request->validate([
            'brand_name' => 'required | string | max:255',
            'brand_description'=>'required | string| max:255',
            'avatar'=> 'required | file']);

            if ($request->hasFile('avatar')) {
                $imgName = time() . '.' . $request->avatar->getClientOriginalExtension();
                try {
                     $request->file('avatar')->storeAs('/assets/brand/', $imgName, 'public');
                     
                }
                catch(\Exception $e){
                    return $this->send_response(false,$e, 400,'Problem updating profile');
                
            }}
           $brand = Brand::create([
                'brand_name' => $request->brand_name,
                'brand_description' => $request->brand_description,
                'avatar'   => $imgName,
                'status'    => 0
            ]);

            if($brand)return $this->send_response(true,[],200,'Brand created succesffuly');
            return $this->send_response(false,[],400,'Unable to create brand');
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
        $deleted = Brand::find($id)->delete();
        if($deleted)return $this->send_response(true,[],200,"brand deleted");
        return $this->send_response(false,[],400,"Unable to delete");
    }
}
