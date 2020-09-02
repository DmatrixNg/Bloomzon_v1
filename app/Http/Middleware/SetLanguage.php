<?php

namespace App\Http\Middleware;

use Closure;

class SetLanguage
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
      // dd($request->has('fr'));
      if ($request->lang == 'fr' || $request->has('fr')) {
        \App::setLocale("fr");
      }else {
        \App::setLocale("en");
      }

        return $next($request);
    }
}
