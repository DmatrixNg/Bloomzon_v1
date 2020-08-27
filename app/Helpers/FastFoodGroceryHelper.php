<?php

namespace App\Helpers {

use App\FastFoodGrocery;
use Illuminate\Support\Facades\Hash;

class FastFoodGroceryHelper {
        
        static public function store($request)
        {

            // instantiate the event reporting class
            $fast_food_grocery                    = new FastFoodGrocery();
            $fast_food_grocery->full_name         = $request->full_name;
            $fast_food_grocery->email             = $request->email;
            $fast_food_grocery->email_verified_at = now();
            $fast_food_grocery->password          = Hash::make($request->password);

            if ($request->hasFile('avatar')) {// first chech if there is image
                
                $request->validate([
                    'avatar'       => 'image|mimes:png,jpg,jpeg|max:4000',
                ], 
                [
                    'avatar.max' => 'image can not be above 4MB'
                ]);

                $imgName = time() . '.' . $request->avatar->getClientOriginalExtension();
                try {
                   $req = $request->file('avatar')->storeAs('/assets/fast_food_grocery/avatar', $imgName, 'public');
                    $fast_food_grocery->avatar = $imgName;
                    
                } catch (\Exception $e) {
                    return $e;
                }
                
            }

            // 
            try {
                $fast_food_grocery->save();

                // get uploaded record
                
                return $fast_food_grocery;

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