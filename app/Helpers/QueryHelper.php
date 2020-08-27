<?php

namespace App\Helpers;

use App\Query;
use phpDocumentor\Reflection\Types\Self_;

class QueryHelper {

    static public function store($request) {

        $query               = new Query();
        $query->subject      = $request->subject;
        $query->admin_id     = $request->admin_id;      //the sub_admin recieving the query
        $result              = $query->save();
        
        if($result) {
            self::reply($query->id, $request->message, 'super_admin');
            return $query; //retun the new query
        }
        
    }

    static public function replies($query_id) {

        $query = Query::findOrFail($query_id);

        if($query) {

            $replies = $query->query_replies;
            return response()->json($replies, 200);

        }

        return response()->noContent();

    }

    static public function reply($query_id, $query_msg, $replyer) {

        $query = Query::findOrFail($query_id);

        if($query) {

            $reply = $query->query_replies()->create([
                'message'   => $query_msg,
                'replyer' => $replyer,
            ]);

            return $reply;

        }

    }

    static public function FunctionName()
    {
        # code...
    }

}