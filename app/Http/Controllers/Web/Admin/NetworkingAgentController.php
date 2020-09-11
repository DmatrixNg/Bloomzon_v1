<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\NetworkingAgent;
use Illuminate\Http\Request;

class NetworkingAgentController extends Controller
{
    public function update_verification(Request $request)
    {
        $request->validate([
            'status' => ['required'],
            'agent_id' => ['required']
        ]);

        $networking_agent = NetworkingAgent::findOrFail($request->agent_id);
        $networking_agent->verification_status = $request->status;
        $networking_agent->save();
        
        return redirect()->back();
    }
}
