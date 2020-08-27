<?php

namespace App\Helpers {

use App\NetworkingAgent;
use Illuminate\Support\Facades\Hash;

class NetworkingAgentHelper {
        
        static public function store($request)
        {
            // instantiate the event reporting class
            $networking_agent                    = new NetworkingAgent();
            $networking_agent->full_name         = $request->full_name;
            $networking_agent->email             = $request->email;
            $networking_agent->email_verified_at = now();
            $networking_agent->password          = Hash::make($request->password);

            

            if ($request->hasFile('avatar')) {// first chech if there is image
                
                $request->validate([
                    'avatar'       => 'image|mimes:png,jpg,jpeg|max:4000',
                ], 
                [
                    'avatar.max' => 'image can not be above 4MB'
                ]);
                $imgName = time() . '.' . $request->avatar->getClientOriginalExtension();
                try {
                   $req = $request->file('avatar')->storeAs('/assets/networking_agent/avatar', $imgName, 'public');
                    $networking_agent->avatar = $imgName;
                    
                } catch (\Exception $e) {
                    return $e;
                } 
            }

            // 
            try {
                $networking_agent->save();

                
                return $networking_agent;

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