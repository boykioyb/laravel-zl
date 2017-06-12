<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
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
    protected $redirectTo = '/social';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function postLogin(LoginRequest $request){
        // 1. Check auth info with db
      if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
            // 2. auto create session with Auth::user()
        // check nếu user có status là deleted thì quay về login
        if(Auth::user()->status == "DELETED"){
            return redirect(route('login'))->with('msg', 'Bạn đã khóa không thể đăng nhập');
        }
        else {
            return redirect(route('social'));
        }
    }
    else{
        return redirect(route('login'))->with('msg', 'Sai username hoặc password');
    }
}
}
