<?php


namespace App\Traits;

use Illuminate\Support\Facades\Response;

trait JsonResponse
{
    public $data;

    public function send_response($success = true, $data = [], $status_code = 200, $message = null)
    {
       return Response::json([
           'data' => $data,
           'success' => $success,
           'message' => $message
       ], $status_code);
    }
}
