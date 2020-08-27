<?php

namespace App\Helpers;

use App\ManufacturerRequest;
use App\Helpers\FileHelper;
use Illuminate\Support\Facades\Auth;

class RequestHelper {

    static public function store($request) {
        $manu_request = new ManufacturerRequest();

        $manu_request->admin_id             = Auth::guard('admin')->user()->id;
        $manu_request->chat_id             = $request->chat_id;
        $manu_request->manufacturer_id     = $request->manufacturer_id;
        $manu_request->product_id          = $request->product_id;
        $manu_request->amount              = $request->amount;
        $manu_request->supply_request      = $request->supply_request;
        $manu_request->payment_method      = $request->payment_method;
        $manu_request->service_description = $request->service_description;

        if ($request->hasFile('attached_document')) {
            try {
                $manu_request->attached_document = FileHelper::upload_file($request->attached_document, 'storage/request_attachment/');
            }catch(\Exception $e){
                return $e;
            }
        }

        $result = $manu_request->save();

        if($request) {
            return $manu_request;
        } else {
            return null;
        }


    }

    static public function update($request)
    {
        $man_request = ManufacturerRequest::findOrFail($request->request_id);
        $man_request->supply_request = $request->supply_request;
        $man_request->payment_method = $request->payment_method;
        $man_request->amount = $request->amount;
        $man_request->service_description = $request->service_description;

        if ($request->hasFile('attached_document')) {
            try {
                $man_request->attached_document = FileHelper::upload_file($request->attached_document, 'storage/request_attachment/');
            }catch(\Exception $e){
                return $e;
            }
        }

        $man_request->save();

        return $man_request;
        
    }
}