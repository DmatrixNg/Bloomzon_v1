<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ManufacturerAcceptTermsAndConditions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(Auth::guard('manufacturer')->user()->accepted_terms_and_conditions == false) {
            return redirect('manufacturer/accept_terms_and_conditions');
        }
        
        return $next($request);

    }
}
