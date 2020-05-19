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
              <a class="nav-link active" href="/" onclick="clickNavLink(this.id)">首页</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/shopping" onclick="clickNavLink(this.id)">挑选宠物</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="clickNavLink(this.id)">宠物商城</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="clickNavLink(this.id)">领养</a>
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
    <!-- Image Slider -->
    <div id="slides" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
        <li data-target="#slides" data-slide-to="3"></li>

      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/images/carousel-dog-3.jpg" class="d-block w-100">
          <div class="carousel-caption">
            <h1 class="display-2">Bootstrap</h1>
            <h3>Complete Website Layout</h3>
            <button type="button" class="btn btn-outline-light btn-lg">View Demo</button>
            <button type="button" class="btn btn-primary btn-lg">Get Start</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/images/carousel-dog-8.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="/images/carousel-dog-7.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="/images/carousel-dog-2.jpg" class="d-block w-100">
        </div>
      </div>
    </div>
    <!-- /Image Slider -->
    <!-- stray -->
    <div class="container-xl">
    	<div class="row stray-adopt text-center">
    		<div class="stray col-9">
    			<div class="card">
    				<div class="card-header">
    					<div class="row">
    						<div class="col-lg-9 text-left">
								<h4 class="display-5 float-left">流浪狗救助</h4>
	    						<p class="float-left">有197只流浪狗</p>
	    					</div>
	    					<div class="col-lg-3 text-right">
	    						<a href="javascript:;" onclick="javascript:alert(0)"><svg class="bi bi-arrow-repeat" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z" clip-rule="evenodd"/>
</svg></a>
	    						<a href="#">更多</a>
	    					</div>
    					</div>
    				</div>
    				<div class="card-body">
    					<div class="row padding">
				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗s哥哥哥哥翁或晕晕军奥所若翁付多狗</p>
						    		</div>
						    	</div>
				    		</div>

				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗狗</p>
						    		</div>
						    	</div>
				    		</div>
				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗狗</p>
						    		</div>
						    	</div>
				    		</div>
				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗狗</p>
						    		</div>
						    	</div>
				    		</div>
				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗狗</p>
						    		</div>
						    	</div>
				    		</div>
				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗狗</p>
						    		</div>
						    	</div>
				    		</div>
				    	</div>
    				</div>
    			</div>
    		</div>
    		<!-- /stray -->
    		<!-- stray rank -->
    		<div class="stray-rank col-lg-3">
    			<div class="card">
    				<div class="card-header">
    					<h5 class="float-left display-5">排行</h5>
    					<a href="#" class="float-right">更多</a>
    				</div>
    				<div class="card-body">
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>

    				</div>
    			</div>
    		</div>
    		<!-- /stray rank -->
    		
    		
    		
    	</div>
    </div>
    <!-- /stray -->
    <!-- adopt -->
    <div class="container-xl">
    	<div class="row stray-adopt text-center">
    		<div class="adopt col-9">
    			<div class="card">
    				<div class="card-header">
    					<div class="row">
    						<div class="col-lg-9 text-left">
	    						<h4 class="display-5 float-left">待领养宠物</h4>
	    						<p class="float-left">有7只待领养</p>
	    					</div>
	    					<div class="text-right col-lg-3">
	    						<a href="javascript:;" onclick="javascript:alert(0)"><svg class="bi bi-arrow-repeat" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z" clip-rule="evenodd"/>
</svg></a>
	    						<a href="">更多</a>
	    					</div>
    					</div>
    					
    					
    				</div>
    				<div class="card-body">
    					<div class="row padding">
				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗s哥哥哥哥翁或晕晕军奥所若翁付多狗</p>
						    		</div>
						    	</div>
				    		</div>

				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗狗</p>
						    		</div>
						    	</div>
				    		</div>
				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗狗</p>
						    		</div>
						    	</div>
				    		</div>
				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗狗</p>
						    		</div>
						    	</div>
				    		</div>
				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗狗</p>
						    		</div>
						    	</div>
				    		</div>
				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗狗</p>
						    		</div>
						    	</div>
				    		</div>
				    	</div>
    				</div>
    			</div>
    		</div>
    		<!-- stray rank -->
    		<div class="adopt-rank col-lg-3">
    			<div class="card">
    				<div class="card-header">
    					<h5 class="float-left  display-5">排行</h5>
    					<a href="#" class="float-right">更多</a>
    				</div>
    				<div class="card-body">
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>

    				</div>
    			</div>
    		</div>
    		<!-- /stray rank -->
    	</div>
    </div>
    		<!-- /adopt -->
    <!-- star -->
    <div class="container-xl">
    	<div class="row stray-adopt text-center">
    		<div class="stray col-9">
    			<div class="card">
    				<div class="card-header">
    					<div class="row">
    						<div class="col-lg-9 text-left">
								<h4 class="display-5 float-left">明星宠物</h4>
	    						<!-- <p class="float-left"></p> -->
	    					</div>
	    					<div class="col-lg-3 text-right">
	    						<a href="javascript:;" onclick="javascript:alert(0)"><svg class="bi bi-arrow-repeat" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z" clip-rule="evenodd"/>
</svg></a>
	    						<a href="#">更多</a>
	    					</div>
    					</div>
    				</div>
    				<div class="card-body">
    					<div class="row padding">
				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗s哥哥哥哥翁或晕晕军奥所若翁付多狗</p>
						    		</div>
						    	</div>
				    		</div>

				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗狗</p>
						    		</div>
						    	</div>
				    		</div>
				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗狗</p>
						    		</div>
						    	</div>
				    		</div>
				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗狗</p>
						    		</div>
						    	</div>
				    		</div>
				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗狗</p>
						    		</div>
						    	</div>
				    		</div>
				    		<div class="col-lg-3">
				    			<div class="card">
					    			<img class="card-img-top" src="/uploads/stray/5.jpg">
						    		<div class="card-body">
										<p class="card-text">官方的狗狗狗</p>
						    		</div>
						    	</div>
				    		</div>
				    	</div>
    				</div>
    			</div>
    		</div>
    		<!-- /stray -->
    		<!-- stray rank -->
    		<div class="stray-rank col-lg-3">
    			<div class="card">
    				<div class="card-header">
    					<h5 class="float-left display-5">排行</h5>
    					<a href="#" class="float-right">更多</a>
    				</div>
    				<div class="card-body">
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>
    					<p class="lead">官方的狗狗狗</p>

    				</div>
    			</div>
    		</div>
    		<!-- /stray rank -->
    	</div>
    </div>
    <!-- /star -->
    
    <!-- Jumbotron -->
      <!-- <div class="container-fluid">
        <div class="row jumbotron text-center">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          	<span>流浪狗救助</span>
             <h1>流浪狗救助</h1>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Web Hosting</button></a>
          </div>
        </div>
      </div> -->
    <!-- /Jumbotron -->

@endsection