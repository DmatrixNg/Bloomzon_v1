<?php

namespace App\Helpers;

use App\Message;
use phpDocumentor\Reflection\Types\Self_;

class MessageHelper {

    static public function store($request, $user, $replyer = '') {

        $message = new Message();

        $new_message = $user->messages()->create([
            'subject' => $request->subject,
            'request_type' => $request->request_type
        ]);
        
        if($new_message) {
            self::reply($new_message->id, $request->message, $replyer);
            return $new_message; //retun the new message
        }
        
    }

    static public function replies($message_id) {

        $message = Message::findOrFail($message_id);

        if($message) {

            $replies = $message->message_replies;
            return response()->json($replies, 200);

        }

        return response()->noContent();

    }

    static public function reply($message_id, $message_text, $replyer) {

        $message = Message::findOrFail($message_id);

        if($message) {

            $replies = $message->message_replies()->create([
                'message' => $message_text,
                'replyer' => $replyer,
            ]);

            // return response()->json($replies, 200);

            return $replies;

        }

    }

    static public function FunctionName()
    {
        # code...
    }

}