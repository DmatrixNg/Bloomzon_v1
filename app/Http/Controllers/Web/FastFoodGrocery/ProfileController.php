<?php

namespace App\Http\Controllers\Web\FastFoodGrocery;

use App\FastFoodGrocery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Seller;

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
        $fast_food_grocery = Auth::guard('fast_food_grocery')->user();
        return view('dashboard.fast_food_grocery.profile',compact(['fast_food_grocery']));
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
        //initiate buyer
        $ffg = FastFoodGrocery::find($id);
        $data = $request->all();
        
        $imgUrl = null;//instantiate imgurl variable
        //checks if image file exist and stores in localstorate
        if ($request->hasFile('avatar')) {
            $imgName = time() . '.' . $request->avatar->getClientOriginalExtension();
            try {
                 $request->file('avatar')->storeAs('/assets/fast_food_grocery/avatar', $imgName, 'public');
                 $imgUrl = $imgName;
            }catch(\Exception $e){
                return $this->send_response(false,$e, 400,'Problem updating profile');
            }
        }
        //if update buyer profile works
        try{
            $ffg->update($data);
            if ($imgUrl != null) {
                $ffg->avatar = $imgUrl;
                $ffg->save();
            }
            return $this->send_response(true,$ffg, 200,'Your account has been edited');
        }catch(\Illuminate\Database\QueryException $e){
            return $this->send_response(false,$e, 400,'Problem updating profile');
        }}
   
    
        public function updateTerms(Request $request, $id):\Illuminate\Http\JsonResponse
        {
            $request->validate([
                'terms_and_conditions'=>['required','string'],
                'policy'    => ['required','string'],
                'terms_of_purchase'=>['required','string'],
                'delivery_terms'=>['required','string']

            ]);


            //initiate buyer
            $fast_food_grocery = Seller::find($id);
            
            
            //if update buyer profile works
            try{
                $fast_food_grocery->update([
                    'terms_and_conditions'=>$request->terms_and_conditions,
                    'policy'    => $request->policy,
                    'terms_of_purchase' => $request->terms_of_purchase,
                    'delivery_terms'    => $request->delivery_terms
                ]);
                return $this->send_response(true,$fast_food_grocery, 200,'Your account has been edited');
            }catch(\Illuminate\Database\QueryException $e){
                return $this->send_response(false,$e, 400,'Problem updating profile');
        }}

        public function upgrade_account()
        {
            return view('dashboard.fast_food_grocery.upgrade_account');
        }

        public function upgrade(Request $request)
        {
            $user = Auth::guard('fast_food_grocery')->user();
            $user->account_type = $request->plan;
            $user->save();
            
            return redirect()->back()->with([
                'message' => 'Account Upgraded'
            ]);
        }

        public function settings()
        {
            return view('dashboard.fast_food_grocery.settings');
        }

        public function store_settings(Request $request)
        {
            
            $request->validate([
                'shop_location'           => ['required'],
                'delivery_terms'          => ['required'],
                // 'type_of_service'         => ['required'],
                'terms_and_conditions'    => ['required'],
                'terms_of_purchase'       => ['required'],
                'delivery_method'         => ['required'],
                'delivery_agent'          => ['required'],
                'means_of_identification' => ['required'],
            ]);

            $user                          = FastFoodGrocery::find($request->id);
            $user->shop_location           = $request->shop_location;
            $user->type_of_service         = $request->type_of_service;
            $user->delivery_terms          = $request->delivery_terms;
            $user->terms_and_conditions    = $request->terms_and_conditions;
            $user->terms_of_purchase       = $request->terms_of_purchase;
            $user->delivery_method         = $request->delivery_method;
            $user->delivery_agent          = $request->delivery_agent;
            $user->means_of_identification = $request->means_of_identification;
            $result = $user->save();
            
            return redirect()->back()->with([
                'message' => 'Settings saved'
            ]);
        }
    
            
        public function updateBankAccount(Request $request,$id) {
            $validated =  $request->validate([
                 'account_name' => 'required | string',
                 'account_number' => 'required | integer',
             ]);
             
             //initiate networking agent using nag
             $nag = FastFoodGrocery::find($id);
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
}

