<?php

namespace App\Helpers {

use App\Seller;
use Illuminate\Support\Facades\Hash;

class SellerHelper {
        
        static public function store($request)
        {

            // instantiate the event reporting class
            $seller                    = new Seller();
            $seller->full_name         = $request->full_name;
            $seller->email             = $request->email;
            $seller->email_verified_at = now();
            $seller->is_bloomzon       = $request->is_bloomzon? 1: 0; 
            $seller->password          = Hash::make($request->password);

            if ($request->hasFile('avatar')) {// first chech if there is image
                
                $request->validate([
                    'avatar'       => 'image|mimes:png,jpg,jpeg|max:4000',
                ], 
                [
                    'avatar.max' => 'image can not be above 4MB'
                ]);

                $imgName = time() . '.' . $request->avatar->getClientOriginalExtension();
                try {
                   $req = $request->file('avatar')->storeAs('/assets/seller/avatar', $imgName, 'public');
                    $seller->avatar = $imgName;
                    
                } catch (\Exception $e) {
                    return $e;
                }
                
            }

            // 
            try {
                $seller->save();

                // get uploaded record
                
                return $seller;

            } catch (\Exception $e) {
                
                return $e;

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

        static public function update()
        {
            # code...
        }

    }

}