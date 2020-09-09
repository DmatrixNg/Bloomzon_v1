<?php

namespace App\Http\Controllers\Web\Buyer;

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

        return view('dashboard.buyer.messages', [
            'messages' => $messages
        ]);

    }

    public function create_message()
    {
        return view('dashboard.buyer.message_create');
    }

    public function store_message(Request $request)
    {

        $buyer = Auth::guard('buyer')->user();
        $admins = \App\Admin::all();

        $new_message = MessageHelper::store($request, $buyer);
        // dd($new_message);
        foreach ($admins as $admin) {
          $admin->notify(new \App\Notifications\Message($buyer, $new_message));
        }

        return redirect('buyer/message_replies/' . $new_message->id );

    }

    public function get_replies($message_id)
    {

        $replies = MessageHelper::replies($message_id);

        return view('dashboard.buyer.message_replies', [

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

        $result = MessageHelper::reply($message_id, $request->message, 'buyer');
        return redirect('/buyer/message_replies/'.$message_id);
    }




}
