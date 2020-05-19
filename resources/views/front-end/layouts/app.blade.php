<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/app.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/front-end/index.css" crossorigin="anonymous">
    <script type="text/javascript" src="/js/app.js" ></script>
    <script type="text/javascript">
      $('.carousel').carousel({
        interval: 2000
      })
      
    </script>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="top-banner">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="container ">
              <ul class="nav justify-content-end ">
                @guest
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">登录</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">注册</a>
                  </li>
                @else
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">进入控制台</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">退出登录</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </div>
                  </li>
                @endguest
                <li class="nav-item">
                  <a class="nav-link" href="#">关于</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">联系我们</a>
                </li>
              </ul>
            </div>
            
            
          </div>
        </div>
        
      </div>
    </div>

    @yield('content')
    <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex text-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; <a href="/">www.perro.com</a> 2019</div>
                            <div>
                                <a href="/admin/login" target="_blank">管理员登录</a>
                                &middot;
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    
  </body>
</html>
