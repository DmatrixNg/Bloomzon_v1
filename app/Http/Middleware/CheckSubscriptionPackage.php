<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckSubscriptionPackage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard_name, $package)
    {
        $subscription = Auth::guard($guard_name)->user()->is_subscribed();

        if($subscription){
            if($subscription->package == $package || $subscription->package == 'premium') {
                return $next($request);
            }
        }

        if($guard_name == 'seller'){
            return redirect('/seller/subscription');
        }
        
    }
}
