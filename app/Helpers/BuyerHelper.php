<?php

namespace App\Helpers {

use App\Buyer;
use Illuminate\Support\Facades\Hash;

class BuyerHelper {
        
        static public function store($request)
        {
            // instantiate the event reporting class
            $buyer                    = new Buyer();
            $buyer->full_name         = $request->full_name;
            $buyer->username          = $request->username;
            $buyer->email             = $request->email;
            $buyer->email_verified_at = now();
            $buyer->password          = Hash::make($request->password);
            $imgUrl                   = null;

            

            if ($request->hasFile('avatar')) {// first chech if there is image
                
                $request->validate([
                    'avatar'       => 'image|mimes:png,jpg,jpeg|max:4000',
                ], 
                [
                    'avatar.max' => 'image can not be above 4MB'
                ]);
                $imgName = time() . '.' . $request->avatar->getClientOriginalExtension();
                try {
                   $req = $request->file('avatar')->storeAs('/assets/buyer/avatar', $imgName, 'public');
                    $buyer->avatar = $imgName;
                    
                } catch (\Exception $e) {
                    return $e;
                }
                
            }

            // 
            try {
                $buyer->save();

            
                
                return $buyer;

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