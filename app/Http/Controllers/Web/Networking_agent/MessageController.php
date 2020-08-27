<?php

namespace App\Http\Controllers\Web\Networking_agent;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    

    public function messages()
    {

        $user = Auth::user();
        
        $messages = $user->messages()->paginate(10);

        return view('dashboard.networking_agent.messages', [
            'messages' => $messages
        ]);

    }

    public function create_message()
    {
        return view('dashboard.networking_agent.message_create');
    }

    public function store_message(Request $request)
    {
        
        $networking_agent = Auth::guard('networking_agent')->user();

        $new_message = MessageHelper::store($request, $networking_agent, 'networking_agent');

        return redirect('networking_agent/message_replies/' . $new_message->id );

    }

    public function get_replies($message_id)
    {

        $replies = MessageHelper::replies($message_id);
        
        return view('dashboard.networking_agent.message_replies', [

            // since i am returning to view i need to convert back to array
            'replies'    => json_decode($replies->content()),
            'message_id' => $message_id,

        ] );

    }

    public function reply($message_id, Request $request)
    {
        $request->validate([
            'message' => 'required'
        ]);

        $result = MessageHelper::reply($message_id, $request->message, 'networking_agent');
        return redirect('/networking_agent/message_replies/'.$message_id);

    }
    
}
