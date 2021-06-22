<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class CustomerAuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('LoggedUser') && ($request->path() !='/login' &&  $request->path() !='/customer-create')){

            return redirect('/login')->with('fail','Vui lòng đăng nhập');
        }
        if(session()->has('LoggedUser') && ($request->path() =='/login' || $request->path() =='/customer-create')){
            return back('/welcome');
        }

        return $next($request)->withHeaders([
            'Cache-Control' => 'no-cache, no-store, max-age=0, must-revalidate',
            'Pragma' => 'no-cache',
            'Expires' => 'Wed, 01 Jan 1970 00:00:00 GMT'
]);
        // if (Auth::check(session()->has('LoggedUser'))) {
        //     if($request->path() !='/login' && $request->path() !='customer-create'){
        //         return redirect('/login')->with('fail','Vui lòng đăng nhập');
        //     }
        // } else {
        //     if($request->path() =='/login' || $request->path() =='/customer-create'){
        //         return back('/welcome');
        //     }
        // }
    }
}

        