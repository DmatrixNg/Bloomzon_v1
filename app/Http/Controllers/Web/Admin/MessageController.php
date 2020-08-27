<?php

namespace App\Http\Controllers\Web\Admin;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function create_message()
    {
        return view('dashboard.admin.message_create');
    }

    public function reply($message_id, Request $request)
    {
        $result = MessageHelper::reply($message_id, $request->message, 'admin');
        return redirect('/admin/replies/'.$message_id);
    }

    public function get_replies($message_id)
    {

        $replies = MessageHelper::replies($message_id);

        // dd($replies->content());
        return view('dashboard.admin.message_replies', [

            // since am returning to view i need to convert back to array
            'replies'    => json_decode($replies->content()),
            'message_id' => $message_id,
        ] );

    }

    public function all_messages()
    {

        $messages = Message::orderBy('created_at', 'desc')->paginate(10);

        return view('dashboard.admin.message_all', [
            'messages' => $messages
        ]);

    }
}
