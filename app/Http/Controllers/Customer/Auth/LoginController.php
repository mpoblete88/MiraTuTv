<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
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

    protected $loginView = 'customer.auth.login';
    protected $guard = 'customer';
    protected $registerView = 'customer.auth.register';
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/customer';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:customer')->except('logout');
    }

    public function showLoginForm() {
        return view( 'customer.auth.login' );
    }

    public function login( Request $request ) {

        $this->validate( $request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if( auth()->guard( 'customer' )->attempt( [
            'email' => $request->input( 'email' ),
            'password' => $request->input( 'password' ),
        ])) {
            return view( 'customer.index' );
        } else {
            return view( 'customer.auth.login' )->withErrors( [ 'email' => 'Authentication failed' ] );
        }
    }

    protected function guard() {
        return \Auth::guard( 'customer' );
    }

}
