<?php

namespace App\Helpers {

    use App\Admin;
    
use Illuminate\Support\Facades\Hash;

class AdminHelper {

        public $requiredFields = [];
        
        static public function store($request)
        {
            // instantiate the event reporting class
            $admin                    = new Admin();
            $admin->full_name         = $request->full_name;
            $admin->email             = $request->email;
            $admin->email_verified_at = now();
            $admin->role              = $request->role;
            $admin->last_login        = now();
            $admin->password          = Hash::make($request->password);

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
                    $admin->avatar = $imgName;
                    
                } catch (\Exception $e) {
                    return $e;
                }
            }

            // 
            try {
                $admin->save();
                
                return $admin;

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