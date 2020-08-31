<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
            'image'   => ['required'],
            'message' => ['required'],
        ]);

        dd();
    }
}
