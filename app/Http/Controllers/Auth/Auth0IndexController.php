<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Auth0IndexController extends Controller
{
    public function login()
    {
        return \App::make('auth0')->login(null, null, ['scope' => 'openid email email_verified'], 'code');
    }

    public function logout()
    {
        \Auth::logout();
        return  \Redirect::intended('/');
    }
}
