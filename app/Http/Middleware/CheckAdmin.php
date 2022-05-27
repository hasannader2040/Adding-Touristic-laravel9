<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
//        echo 'the best';
//        exit();



        $userRoles = Auth::user()->roles->pluck('name');
//        dd($userRoles);  // its for checking the code
        if(!$userRoles->contains('admin')){
         return redirect(route('admin.login'))->with('error','you dont have a permission');
        }

        return $next($request);
    }
}

//If(Auth::check) {
//    And place your line no. 22 code here
//}



