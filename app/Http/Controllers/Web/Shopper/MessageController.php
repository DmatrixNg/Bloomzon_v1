<?php

namespace App\Http\Controllers\Web\Shopper;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use Dotenv\Result\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function messages()
    {

        $user = Auth::user();
        
        $messages = $user->messages()->paginate(10);

        return view('dashboard.shopper.messages', [
            'messages' => $messages
        ]);

    }

    public function create_message()
    {
        return view('dashboard.shopper.message_create');
    }

    public function store_message(Request $request)
    {
        
        $shopper = Auth::guard('shopper')->user();

        $new_message = MessageHelper::store($request, $shopper);

        return redirect('shopper/message_replies/' . $new_message->id );

    }

    public function get_replies($message_id)
    {

        $replies = MessageHelper::replies($message_id);
        
        return view('dashboard.shopper.message_replies', [

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

        $result = MessageHelper::reply($message_id, $request->message, 'shopper');
        return redirect('/shopper/message_replies/'.$message_id);
    }
    
    


}
