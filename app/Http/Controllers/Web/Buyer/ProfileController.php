<?php

namespace App\Http\Controllers\Web\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Traits\JsonResponse;
use App\Buyer;
use App\Helpers\FileHelper;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    use JsonResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.buyer.profile');
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
    public function update(Request $request, $id):\Illuminate\Http\JsonResponse
    {
        $request->validate([
            'card_expires' => ['regex:/\d{2}\/\d{2}/']
        ]);
        //initiate buyer
        $buyer = Buyer::find($id);
        $data = $request->all();

        if($request->has('password')){

         $pw = Hash::make($request['password']);
            $buyer->password = $pw;
            $buyer->save();
         return $this->send_response(true,[], 200,'Password saved');
        }
        
        $imgUrl = null;
        if ($request->hasFile('avatar')) {
            $imgName = time() . '.' . $request->avatar->getClientOriginalExtension();
            try {
                $request->file('avatar')->storeAs('/assets/buyer/avatar', $imgName, 'public');
                $imgUrl = $imgName;
            } catch (\Exception $e) {
                return $this->send_response(false, $e, 400, 'Problem updating profile');
            }
        }
        
        //if update buyer profile works
        try{
            $buyer->update($data);
            if ($imgUrl != null) {
                $buyer->avatar = $imgUrl;
                $buyer->save();
            }
            return $this->send_response(true,$buyer, 200,'Your account has been edited');
        }catch(\Illuminate\Database\QueryException $e){
            return $this->send_response(false,$e, 400,'Problem updating profile');
        }}
    
            
            

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
