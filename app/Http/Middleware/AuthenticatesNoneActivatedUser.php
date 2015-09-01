<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use \App\User;
use Auth;

class AuthenticatesNoneActivatedUser
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
            if ( ! $this->isNoneActivatedUser()) {
                if ($request->ajax()) {
                    return response('Unauthorized.', 401);
                } else {
                    // Insert Message: "Only Managers can access this page"
                    return $next($request);
                }
            }
            else{
                //Flash MSG 
                redirect('auth/logout');
            }

        }
        else{
            return redirect('/');
        }
    }

    public function isNoneActivatedUser()
    {
        if( Auth::check() )
            if(strcmp(Auth::user()->level,'none')==0)
                return true;
        
        return false;
    }
}