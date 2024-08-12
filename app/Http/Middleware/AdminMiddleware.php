<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
         if (Auth::check() && Auth::user()->is_admin) {
           return $next($request);
        }

         //Optionally, you can redirect or abort with a 403 status code
        return redirect()->route('home')->with('error', 'You do not have admin access.');
         //or
         //abort(403, 'Unauthorized action.');
    }
}
