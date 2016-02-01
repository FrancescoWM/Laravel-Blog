<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Login to my blog</title>
		<meta name="description" content="" />
		<meta name="Author" content="" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<link rel="stylesheet" href="{{ url('assets/backend/css/bootstrap.css') }}" type="text/css" />
		<link rel="stylesheet" href="{{ url('assets/backend/css/style.css') }}" type="text/css" />

	</head>
	<!--
		.boxed = boxed version
	-->
	<body>

    <div class="container">
    	<div class="row">
    		<form class="form-signin mg-btm" role="form" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
        	<h3 class="heading-desc" style="text-align:center;"> MY BLOG </h3>
    		<div class="social-box">
    			<div class="row mg-btm">
             <div class="col-md-12">
                <a href="#" class="btn btn-primary btn-block"><i class="icon-facebook"></i> Login with Facebook </a>
						</div>
    			</div>
    			<div class="row">
	    			<div class="col-md-12">
	              <a href="#" class="btn btn-info btn-block" ><i class="icon-twitter"></i> Login with Twitter </a>
	          </div>
        	</div>
    		</div>
    		<div class="main">

    			<input type="text" name="email" class="form-control" placeholder="Email" autofocus>
          <input type="password" name="password" class="form-control" placeholder="Password">

					  <button type="submit" class="btn btn-large btn-danger btn-block">Login</button>

        </div>
    		<div class="login-footer">
    		<div class="row">
            <div class="col-xs-6 col-md-6">
                <div class="left-section">
    								<a href="">Forgot your password?</a>
    							</div>
            </div>
        </div>

    		</div>
          </form>
    	</div>
    </div>

  </body>
</html>
