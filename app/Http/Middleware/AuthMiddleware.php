<?php namespace App\Http\Middleware;

use Closure;

class AuthMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		// Check login
		if (!Auth::check()) {
			return redirect('login');
		}

		return $next($request);
    }

}
