<?php

namespace App\Helpers {

use App\Manufacturer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ManufacturerHelper {
  
        static public function store($request)
        {
            $manufacturer                       = new Manufacturer;
            $manufacturer->full_name            = $request->full_name;
            $manufacturer->email                = $request->email;
            $manufacturer->email_verified_at    = now();
            $manufacturer->country              = $request->country;
            $manufacturer->state                = $request->state;
            $manufacturer->street_address       = $request->street_address;
            $manufacturer->billing_address      = $request->billing_address;
            $manufacturer->cash_out             = $request->cash_out;
            $manufacturer->bank                 = $request->bank;
            $manufacturer->account_number       = $request->account_number;
            $manufacturer->account_name         = $request->account_name;
            $manufacturer->phone_number         = $request->phone_number;
            $manufacturer->profile              = $request->profile;
            $manufacturer->terms_and_conditions = $request->terms_and_conditions;
            $manufacturer->terms_of_purchase    = $request->terms_of_purchase;
            $manufacturer->policies             = $request->policies;
            $manufacturer->password             = Hash::make($request->password);
            

            if ($request->hasFile('avatar')) {// first chech if there is image
                
                $request->validate([
                    'avatar'       => 'image|mimes:png,jpg,jpeg|max:4000',
                ], 
                [
                    'avatar.max' => 'image can not be above 4MB'
                ]);
                $manufacturer->avatar = FileHelper::upload_image($request->avatar, 'storage/manufacturer/');
            }

            // 
            try {
                $manufacturer->save();
              
                // get uploaded record
                $result = Manufacturer::find($manufacturer->id);
                
                return response()->json($result, 200);

            } catch (\Exception $e) {
                
                return response()->json($e, 500);

            }
        }

        static public function find()
        {
            # code...
        }

        static public function all()
        {
            # code...
        }
  
        static public function update($request)
        {

            // instantiate the event reporting class
            $manufacturer = Auth::guard('manufacturer')->user();

            // check for full_name change
            if(isset($request->full_name) && $request->full_name !== null){
                $manufacturer->full_name = $request->full_name;
            }

            // check for country change
            if(isset($request->country) && $request->country !== null){
                $manufacturer->country = $request->country;
            }

            // check for state change
            if(isset($request->state) && $request->state !== null){
                $manufacturer->state = $request->state;
            }

            // check for street_address change
            if(isset($request->street_address) && $request->street_address !== null){
                $manufacturer->street_address = $request->street_address;
            }

            // check for billing_address change
            if(isset($request->billing_address) && $request->billing_address !== null){
                $manufacturer->billing_address = $request->billing_address;
            }

            // check for cash_out change
            if(isset($request->cash_out) && $request->cash_out !== null){
                $manufacturer->cash_out = $request->cash_out;
            }

            // check for bank change
            if(isset($request->bank) && $request->bank !== null){
                $manufacturer->bank = $request->bank;
            }

            // check for account_number change
            if(isset($request->account_number) && $request->account_number !== null){
                $manufacturer->account_number = $request->account_number;
            }

            // check for account_name change
            if(isset($request->account_name) && $request->account_name !== null){
                $manufacturer->account_name = $request->account_name;
            }

            // check for phone_number change
            if(isset($request->phone_number) && $request->phone_number !== null){
                $manufacturer->phone_number = $request->phone_number;
            }

            // check for profile change
            if(isset($request->profile) && $request->profile !== null){
                $manufacturer->profile = $request->profile;
            }

            // check for terms_and_conditions change
            if(isset($request->terms_and_conditions) && $request->terms_and_conditions !== null){
                $manufacturer->terms_and_conditions = $request->terms_and_conditions;
            }

            // check for terms_of_purchase change
            if(isset($request->terms_of_purchase) && $request->terms_of_purchase !== null){
                $manufacturer->terms_of_purchase = $request->terms_of_purchase;
            }

            // check for policies change
            if(isset($request->policies) && $request->policies !== null){
                $manufacturer->policies = $request->policies;
            }

            // check for password change
            if(isset($request->password) && $request->password !== null){
                $manufacturer->password = Hash::make($request->password);
            }

            // check for account_type change
            if(isset($request->account_type) && $request->account_type !== null){
                $manufacturer->account_type = Hash::make($request->account_type);
            }

            if ($request->hasFile('avatar')) {// first chech if there is image
                
                $request->validate([
                    'avatar'       => 'image|mimes:png,jpg,jpeg|max:4000',
                ], 
                [
                    'avatar.max' => 'image can not be above 4MB'
                ]);

                $manufacturer->avatar = FileHelper::upload_image($request->avatar, 'storage/manufacturer/');
                
            }

            // 
            // try {
                $manufacturer->save();
                
                // get the newly saved resource
                $get_manufacturer = Manufacturer::find($manufacturer->id);

                return $get_manufacturer;

            // } catch (\Exception $e) {

            //     return $e;

            // }

        }

    }

}