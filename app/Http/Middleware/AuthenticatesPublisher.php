<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use \App\User;
use Auth;

class AuthenticatesPublisher
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if( Auth::check() ){
            if ( ! $this->isPublisher()) {
                if ($request->ajax()) {
                    return response('Unauthorized.', 401);
                } else {
                    // Insert Message: "Publishers cannot access this page"
                    return redirect('/');
                }
            }
            return $next($request);
        }
        else{
            // Flash here!
            return redirect('/');
        }
    }

    public function isPublisher()
    {
        if( Auth::check() )
            if(strcmp(Auth::user()->level,'publisher')==0)
                return true;
        
        return false;
    }
}