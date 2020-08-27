<?php

namespace App\Http\Controllers\Web\Admin;

use App\Chat;
use App\Helpers\ChatHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ChatController extends Controller
{

    public function index()
    {
        $chats = Chat::orderBy('updated_at', 'desc')->get();
        return view('dashboard.admin.manufacturers_mng', [
            'chats' => $chats
        ]);
    }

    public function show_chat_replies($id)
    {
        
        $chat = Chat::findOrFail($id);
        return view('dashboard.admin.manufacturer_chat', [
            'chat' => $chat
        ]);

    }

    public function chat_replies(Request $request)
    {

        $request->validate([
            'chat_id' => ['bail', 'required'],
        ]);

        $chat_replies = ChatHelper::chat_replies($request->chat_id);

        return response()->json($chat_replies);

    }

    public function reply(Request $request)
    {

        $request->validate([
            'chat_id' => ['bail', 'required'],
            'message' => ['bail', 'required'],
        ]);

        $chat = Chat::find($request->chat_id);

        $reply = ChatHelper::new_reply($request->chat_id, $request->message, 'admin', Auth::guard('admin')->user()->id);

        return response()->json($reply);
        
    }

    public function continue(Request $request)
    {
        $request->validate([
            'chat_id'         => ['bail', 'required'],
            'manufacturer_id' => ['bail', 'required'],
        ]);

        $chat = Chat::find($request->chat_id);

        if($chat->manufacturer_id != $request->manufacturer_id){
            throw ValidationException::withMessages([
                'chat_id' => ['invalid chat id.'],
            ]);
        }

        if($chat) {
            return $chat->id;
        }

        return null;
        
    }

}
