<?php

namespace App\Helpers {

use App\Professional;
use Illuminate\Support\Facades\Hash;

class ProfessionalHelper {

        public $requiredFields = [];
        
        static public function store($request)
        {
            // instantiate the event reporting class
            $professional                    = new Professional();
            $professional->full_name         = $request->full_name;
            $professional->email             = $request->email;
            $professional->email_verified_at = now();
            $professional->password          = Hash::make($request->password);

            if ($request->hasFile('avatar')) {// first chech if there is image
                
                $request->validate([
                    'avatar'       => 'image|mimes:png,jpg,jpeg|max:4000',
                ], 
                [
                    'avatar.max' => 'image can not be above 4MB'
                ]);
                $imgName = time() . '.' . $request->avatar->getClientOriginalExtension();
                try {
                   $req = $request->file('avatar')->storeAs('/assets/professional/avatar', $imgName, 'public');
                    $professional->avatar = $imgName;
                    
                } catch (\Exception $e) {
                    return $e;
                }
            }

            // 
            try {
                $professional->save();
                
                return $professional;

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