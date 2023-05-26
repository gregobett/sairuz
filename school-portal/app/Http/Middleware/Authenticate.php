<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }

        else if(auth()->user()->usertype == 'admin')
        {
            return view('admin-dashboard');
        }

        else if(auth()->user()->usertype == 'Student')
        {
            return view('dashboard');
        }

        else 
        {
            return view('faculty-dashboard');
        }
    }
}