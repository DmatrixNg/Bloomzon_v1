<?php

namespace App\Http\Controllers\Web\FastFoodGrocery;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function messages()
    {

        $user = Auth::guard()->user();
        
        $messages = $user->messages()->paginate(10);

        return view('dashboard.fast_food_grocery.messages', [
            'messages' => $messages
        ]);

    }

    public function create_message()
    {
        return view('dashboard.fast_food_grocery.message_create');
    }

    public function store_message(Request $request)
    {
        $request->validate([
            'subject'      => 'required',
            'request_type' => 'required',
            'message'      => 'required',
        ]);

        $fast_food_grocery = Auth::guard('fast_food_grocery')->user();

        $new_message = MessageHelper::store($request, $fast_food_grocery, 'fast_food_grocery');

        return redirect('fast_food_grocery/message_replies/' . $new_message->id );

    }

    public function get_replies($message_id)
    {

        $replies = MessageHelper::replies($message_id);
        
        return view('dashboard.fast_food_grocery.message_replies', [

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

        $result = MessageHelper::reply($message_id, $request->message, 'fast_food_grocery');
        return redirect('/fast_food_grocery/message_replies/'.$message_id);
    }

}
