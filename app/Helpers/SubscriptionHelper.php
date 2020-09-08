<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class SubscriptionHelper {

    static public function store($user, Request $request)
    {
        
        $subsription = $user->subscriptions()->create([
            'package'        => $request->package,
            'start_date'     => now(),
            'end_date'       => date('Y-m-d', strtotime(now(). ' + 30 days')),
            'payment_method' => $request->payment_method,
            'payment_ref'    => $request->payment_ref,
            'amount'         => $request->amount,
        ]);

        return $subsription;

    }
}