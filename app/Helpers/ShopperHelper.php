<?php

namespace App\Helpers {

use App\Shopper;
use Illuminate\Support\Facades\Hash;

class ShopperHelper {

        public $requiredFields = [];
        
        static public function store($request)
        {
            // instantiate the event reporting class
            $shopper                    = new Shopper();
            $shopper->full_name         = $request->full_name;
            $shopper->email             = $request->email;
            $shopper->email_verified_at = now();
            $shopper->password          = Hash::make($request->password);

            if ($request->hasFile('avatar')) {// first chech if there is image
                
                $request->validate([
                    'avatar'       => 'image|mimes:png,jpg,jpeg|max:4000',
                ], 
                [
                    'avatar.max' => 'image can not be above 4MB'
                ]);

                $imgName = time() . '.' . $request->avatar->getClientOriginalExtension();
                try {
                   $req = $request->file('avatar')->storeAs('/assets/shopper/avatar', $imgName, 'public');
                    $shopper->avatar = $imgName;
                    
                } catch (\Exception $e) {
                    return $e;
                }

                //$shopper->avatar = FileHelper::upload_image($request->avatar, 'storage/aseet/shopper/avatar');

            }

            // 
            try {
                $shopper->save();

                
//                 return $shopper;

//             } catch (\Exception $e) {
                
//                 return $e;


                // get uploaded record
                $result = Shopper::find($shopper->id);
                
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

        static public function update()
        {
            # code...
        }

    }

}