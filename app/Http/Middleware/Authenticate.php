<?php

namespace App\Http\Middleware;

use App\Http\Controllers\HelperController;
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
            HelperController::flashSession(false, 'Access Denied, please sign in' );

            return route('login');
        }
    }
}
