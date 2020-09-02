<?php

namespace App\Http\Controllers;

use App\NewsletterSubscription;
use Illuminate\Http\Request;

class NewsletterSubscriptionController extends Controller
{
    public function store(Request $request )
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:newsletter_subscriptions,email']
        ]);

        // return redirect()->back()->with([
        //     'message' => ['you have successfuly subcribed']
        // ]);

        $new_sub = new NewsletterSubscription();
        $new_sub->email = $request->email;
        $new_sub->save();
        
        return redirect()->back()->with([
            'message' => 'you have successfuly subcribed'
        ]);
    }
}
