<?php

namespace App\Http\Middleware;

use Closure;

class AdminAccess
{
    public function handle($request, Closure $next)
    {
		if(!session('user_name')) {
			return redirect()->route('login');
		}else if(session('user_access') != 2) {
			return redirect()->route('login');
		}
		
        return $next($request);
    }
}
