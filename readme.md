一 、前台：
生成用户认证所需的路由和模板
```php
php artisan make:auth
```

二、后台
1、创建管理员(admin_users)数据表
```php
php artisan make:migration create_admin_users_table
```
2、生成模型
```php
php artisan make:model App/AdminUser
```
3、后台路由
```php
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
        // 管理员后台登录
        Route::get('login', 'LoginController@showLoginForm');
        Route::post('logout', 'LoginController@logout');

        Route::group(['middleware' => 'auth.admin'], function() {
            Route::get('index', 'HomeController@index');
        });
});
```
4、新建管理员登录控制器：
```php
php artisan make:controller Admin/LoginController
```

```php
<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Debugbar;
class LoginController extends Controller
{
    //
    use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // 这里的guest.admin就是Kernel里自定义的中间件
        $this->middleware('guest.admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.login');
    }

    protected function guard()
    {
        // 这里的 admin 就是config/auth里自定义的门卫
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
            ['name' => $username, 'password' => $password], $request->has('remember')
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
        // 这里的返回值必须和login视图的name属性一致
        // username对应name="username"
        // email对应name="email"
        return 'username';
    }
}
```

注意：
```php
public function __construct()
    {
        // 这里的guest.admin就是Kernel里自定义的中间件
        $this->middleware('guest.admin')->except('logout');
    }


protected function guard()
    {
        // 这里的 admin 就是config/auth里自定义的门卫
        return auth()->guard('admin');
    }
```

5、添加门卫（guards）
```php
'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        // 自定义guards
        'admin' => [
            'driver' => 'session',  //后期验证通过了会往session里写
            'provider' => 'admins',
        ],
        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
    ],
'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],
        'admins' => [
            'driver' => 'eloquent',
            // 之前创建的管理员模型路径
            'model' => App\admin\AdminUser::class,
        ],
        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],    
```
6、创建后台管理认证中间件
```php
php artisan make:middleware AdminAuthMiddleware
```
```php
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // 当 auth 中间件判定某个用户未认证，会返回一个 JSON 401 响应，
        // 或者，如果不是Ajax请求的话，将用户重定向到login命名路由（也就是登录页面）。
        
        // 这里的guard('admin')就是之前自定义的管门卫
        if (Auth::guard('admin')->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                // 
                return redirect()->guest('admin/login');
            }
        }
        return $next($request);
    }
}
```

7、创建后台管理登录跳转中间件，用于有些操作在登录之后的跳转
```php
php artisan make:middleware GuestAdmin
```
```php
<?php
    public function handle($request, Closure $next)
    {
        if (auth()->guard('admin')->check()) {
             return redirect('/admin/index');
        }
 
        return $next($request);
    }
php artisan make:middleware GuestAdmin
```
8、注册中间件
```php
protected $routeMiddleware = [
    'auth.admin' => \App\Http\Middleware\AdminAuthMiddleware::class,
    'guest.admin' => \App\Http\Middleware\GuestAdmin::class,
];
```
9、处理注销
经过上面的步骤，已经实现了前后台分离登录，但是不管是在前台注销，还是在后台注销，都销毁了所有的 session，导致前后台注销连在一起。所以我们还要对注销的方法处理一下。
原来的 logout 方法是写在 Illuminate\Foundation\Auth\AuthenticatesUsers 里
```php
public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect('/');
    }
```
注意这一句
```php
$request->session()->invalidate();
```
的意思是将所有的 session 全部清除，这里不分前台、后台，所以要对这里进行改造。
因为前台、后台注销都要修改，所以我们新建一个 trait，前后台都可以使用。
新建一个文件 app/Extensions/AuthenticatesLogout.php
```php
<?php
namespace App\Extensions;
use Illuminate\Http\Request;
trait AuthenticatesLogout
{
        public function logout(Request $request)
        {
            $this->guard()->logout();
            $request->session()->forget($this->guard()->getName());
        $request->session()->regenerate();
        return redirect('/');
    }
}
```
我们将上面的那一句改成
```php
 $request->session()->forget($this->guard()->getName());
```
只是删除掉当前 guard 所创建的 session，这样就达到了分别注销的目的。

修改 Auth/LoginController.php 和 Admin/LoginController.php
```php
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Extensions\AuthenticatesLogout;
class LoginController extends Controller
{
    // use AuthenticatesUsers;
    use AuthenticatesUsers, AuthenticatesLogout {
      AuthenticatesLogout::logout insteadof AuthenticatesUsers;
    }
    // ...
}    
```
到这里，就完成了整个不同用户表登录认证的过程。
