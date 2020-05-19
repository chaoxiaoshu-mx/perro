@extends('front-end.layouts.app')
@section('content')
    <!-- nacigation -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="/images/logo.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/" onclick="clickNavLink(this.id)">首页</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/shopping" onclick="clickNavLink(this.id)">挑选宠物</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="clickNavLink(this.id)">宠物商城</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/adopt" onclick="clickNavLink(this.id)">领养</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="clickNavLink(this.id)">秀站</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="clickNavLink(this.id)">社区</a>
            </li>
          </ul>
          <form class="form-inline my-6 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="搜索" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜索</button>
            </form>
            
        </div>
      </div>
    </nav>
    <!-- /navigation -->
    
    <!-- Jumbotron -->
      <div class="container-fluid">
        <div class="row jumbotron text-center">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h1>Bootstrap相关优质项目推荐</h1>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Web Hosting</button></a>
          </div>
        </div>
      </div>
    <!-- /Jumbotron -->
    
@endsection