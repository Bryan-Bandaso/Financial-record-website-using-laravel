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
<<<<<<< HEAD
        if (!$request->expectsJson()) {
=======
        if (! $request->expectsJson()) {
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
            return route('login');
        }
    }
}
