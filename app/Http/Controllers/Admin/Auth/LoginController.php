<?php

namespace App\Http\Controllers\Admin\Auth;

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

    protected $loginView = 'admin.auth.login';
    protected $guard = 'admin';
    protected $registerView = 'admin.auth.register';
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm() {
        return view( 'admin.auth.login' );
    }

    public function login( Request $request ) {

        $this->validate( $request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if( auth()->guard( 'admin' )->attempt( [
            'email' => $request->input( 'email' ),
            'password' => $request->input( 'password' ),
        ])) {
            return view( 'admin' );
        } else {
            return view( 'admin.auth.login' )->withErrors( [ 'email' => 'Authentication failed' ] );
        }
    }

    protected function guard() {
        return \Auth::guard( 'admin' );
    }

}
