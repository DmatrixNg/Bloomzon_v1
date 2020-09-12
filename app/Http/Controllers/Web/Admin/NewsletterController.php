<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\NewsletterJob;
use App\NewsletterSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Newsletter;
use App\Newsletter as AppNewsletter;

class NewsletterController extends Controller
{

    public function index()
    {
        return view('dashboard.admin.send_newsletter');
    }

    public function send_newsletter(Request $request)
    {
        $request->validate([
            'subject' => ['required'],
            'image'   => ['nullable', 'image'],
            'message_body' => ['required'],
        ]);

        $subscribers = NewsletterSubscription::all()->pluck('email')->flatten();

        $newsletter = new AppNewsletter();
        $newsletter->message = $request->message_body;
        $newsletter->subject = $request->subject;
        $newsletter->save();

        // NewsletterJob::dispatch($subscribers, $request);

        // dd('done');

        foreach($subscribers as $subscriber)
        {
            Mail::to($subscriber)->send(new Newsletter($request));
        }


        return redirect('/admin/newsletters');

    }

    public function all_newsletters()
    {

        $newsletters = AppNewsletter::all();

        return view('dashboard.admin.newsletters', [
            'newsletters' => $newsletters
        ]);

    }


    public function subscribers()
    {

        $subscribers = NewsletterSubscription::all();

        return view('dashboard.admin.subscribers', [
            'subscribers' => $subscribers
        ]);

    }
}
