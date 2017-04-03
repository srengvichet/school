<?php

namespace App\Http\Middleware;

use Closure;

class LanguageMiddleware
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
        // if(session()->has('locale')){            
        //     $locale = session()->get('locale',Config::get('app.locale'));
        // }else{
        //     $locale = 'en';
        // }
        // app()->setLocale('locale',$locale);
        return $next($request);
    }
}
