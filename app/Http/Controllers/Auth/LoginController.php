<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    // protected function authenticated(\Illuminate\Http\Request $request, $user)
    // {

    //     if($user->role == 'ROLE_USER' && session()->has('cart'))
    //     {
    // protected function authenticated(Request $request, $user)
    // {
    //     if (session()->has('cart')) {
    //         return redirect()->route('checkout.index');
    //     }
    //     else
    //     {
    //         return redirect()->route('home');
    //     }

    //     return null;
    // }


    protected function authenticated(\Illuminate\Http\Request $request, $user)
    {

        if (session()->has('cart')) {
            return redirect()->route('checkout.index');
        }

        return null;
    }
}
