<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Auth;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'pareri/create';

    /**
     * Create a new controller instance.
     *
     * @return void
     * 
     */
    
    protected function authenticated($request,$user)
    {
    	if(Auth::check() && Auth::user()->ruolo_id == '1') {
    		return redirect()->intended('/');
    	} else {
    		redirect()->intended('pareri/create');
    	}
    }
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
