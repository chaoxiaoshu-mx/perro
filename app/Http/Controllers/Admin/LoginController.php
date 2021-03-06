<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Extensions\AuthenticatesLogout;
use Debugbar;
class LoginController extends Controller
{
    //
    use AuthenticatesUsers, AuthenticatesLogout {
      AuthenticatesLogout::logout insteadof AuthenticatesUsers;
    }

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
        $this->middleware('guest.admin')->except('logout');
    }

    public function showLoginForm()
    {
        Debugbar::addMessage('showLoginForm', 'adminlogin');
        return view('admin.login');
    }

    protected function guard()
    {
        return auth()->guard('admin');
    }

    /**
     * 后台管理员退出跳转到后台登录页面
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/admin/login');
    }


    protected function attemptLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // 验证用户名登录方式
        $usernameLogin = $this->guard()->attempt(
            ['username' => $username, 'password' => $password], $request->has('remember')
        );
        if ($usernameLogin) {
            return true;
        }
        // 验证手机号登录方式
        $mobileLogin = $this->guard()->attempt(
            ['mobile' => $username, 'password' => $password], $request->has('remember')
        );
        if ($mobileLogin) {
            return true;
        }

        // 验证邮箱登录方式
        $emailLogin = $this->guard()->attempt(
            ['email' => $username, 'password' => $password], $request->has('remember')
        );
        if ($emailLogin) {
            return true;
        }
        return false;
    }

    protected function validateLogin(Request $request)
    {

        
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    public function username()
    {
        return 'username';
    }
}
