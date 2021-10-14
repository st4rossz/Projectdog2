<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        if (auth()->user()->is_admin == 0) {
            return redirect(route('welcome'));
        }elseif(auth()->user()->is_admin == 1){
            return redirect(route('admin.home'));
        }else
        return redirect('home')->with('error',"You don't have admin access");
    }
}
