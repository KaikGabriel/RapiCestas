<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use Auth;

use Illuminate\Http\Request;

class loginController extends Controller
{
     protected function authenticated()
    {
        if(Auth::user()->role_as == '1') //1 = Admin Login
        {
            Redirect::route('dashboard');
        }
        elseif(Auth::user()->role_as == '0') // Normal or Default User Login
        {
            Redirect::route('home');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
      }
}
