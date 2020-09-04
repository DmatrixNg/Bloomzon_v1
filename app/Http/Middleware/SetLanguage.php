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
      }elseif($request->lang == 'es' || $request->has('es')){
        \App::setLocale("es");
      }elseif($request->lang == 'ar' || $request->has('ar')){
        \App::setLocale("ar");
      }elseif($request->lang == 'zh_CH' || $request->has('zh_CH')){
        \App::setLocale("zh_CH");

      }else {
        \App::setLocale("en");
      }

        return $next($request);
    }
}
