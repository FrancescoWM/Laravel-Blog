<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>@yield('title')</title>
		<meta name="description" content="" />
		<meta name="Author" content="" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ url('assets/backend/css/style.css') }}" type="text/css" />

    <script type="text/javascript" src="{{ url('assets/backend/js/jquery.js') }}"></script>
	</head>
	<!--
		.boxed = boxed version
	-->
	<body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container-fluid">
  		<!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
    			MENU
    			</button>
    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    				<span class="sr-only">Toggle navigation</span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
    			<a class="navbar-brand" href="{{ url('backend') }}">
    				Administrator's Panel
    			</a>
    		</div>

    		<!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    			<form class="navbar-form navbar-left" method="GET" role="search">
    				<div class="form-group">
    					<input type="text" name="q" class="form-control" placeholder="Search">
    				</div>
    				<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
    			</form>
    			<ul class="nav navbar-nav navbar-right">
    				<li><a href="http://www.pingpong-labs.com" target="_blank">Visit Site</a></li>
    				<li class="dropdown ">
    					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
    						Account
    						<span class="caret"></span></a>
    						<ul class="dropdown-menu" role="menu">
    							<li class="dropdown-header">SETTINGS</li>
    							<li class=""><a href="#">Other Link</a></li>
    							<li class="divider"></li>
    							<li><a href="{{ url('backend/logout') }}">Logout</a></li>
    						</ul>
    					</li>
    				</ul>
    			</div><!-- /.navbar-collapse -->
    		</div><!-- /.container-fluid -->
    	</nav>
      <div class="container-fluid main-container">
    		<div class="col-md-2 sidebar">
    			<div class="row">
  	           <!-- uncomment code for absolute positioning tweek see top comment in css -->
  	        <div class="absolute-wrapper"> </div>
  	         <!-- Menu -->
          	<div class="side-menu">
          		<nav class="navbar navbar-default" role="navigation">
          			<!-- Main Menu -->
          			<div class="side-menu-container">
          				<ul class="nav navbar-nav">
          					<li class="active"><a href="{{ url('backend') }}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>

          					<!-- Dropdown-->
          					<li class="panel panel-default" id="dropdown">
          						<a data-toggle="collapse" href="#dropdown-articoli">
          							<span class="glyphicon glyphicon-user"></span> Articoli <span class="caret"></span>
          						</a>

          						<!-- Dropdown level 1 -->
          						<div id="dropdown-articoli" class="panel-collapse collapse">
          							<div class="panel-body">
          								<ul class="nav navbar-nav">
          									<li><a href="{{ url('backend/articles') }}">Elenco </a></li>
          									<li><a href="{{ url('backend/articles/add') }}">Aggiungi nuovo</a></li>
          								</ul>
          							</div>
          						</div>
          					</li>

										<li class="panel panel-default" id="dropdown">
          						<a data-toggle="collapse" href="#dropdown-categorie">
          							<span class="glyphicon glyphicon-user"></span> Categorie <span class="caret"></span>
          						</a>

          						<!-- Dropdown level 1 -->
          						<div id="dropdown-categorie" class="panel-collapse collapse">
          							<div class="panel-body">
          								<ul class="nav navbar-nav">
          									<li><a href="{{ url('backend/categories') }}">Elenco </a></li>
          									<li><a href="{{ url('backend/categories/add') }}">Aggiungi nuovo</a></li>
          								</ul>
          							</div>
          						</div>
          					</li>

										<li class="panel panel-default" id="dropdown">
											<a data-toggle="collapse" href="#dropdown-users">
												<span class="glyphicon glyphicon-user"></span> Users <span class="caret"></span>
											</a>

											<!-- Dropdown level 1 -->
											<div id="dropdown-users" class="panel-collapse collapse">
												<div class="panel-body">
													<ul class="nav navbar-nav">
														<li><a href="{{ url('backend/users') }}">Elenco </a></li>
														<li><a href="{{ url('backend/users/add') }}">Aggiungi nuovo</a></li>
													</ul>
												</div>
											</div>
										</li>

          				</ul>
          			</div><!-- /.navbar-collapse -->
          		</nav>

          	</div>
          </div>
 		     </div>
    		<div class="col-md-10 content">
    			  <div class="panel panel-default">
  	           <div class="panel-heading">
            		@yield('title')
            	</div>
            	<div class="panel-body">
            		@yield('content')
            	</div>
            </div>
    		</div>
    		<footer class="pull-left footer">
    			<p class="col-md-12">
    				<hr class="divider">
    				Copyright &COPY; 2015 <a href="http://www.pingpong-labs.com">Gravitano</a>
    			</p>
    		</footer>
    	</div>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>
$(function () {
  	$('.navbar-toggle-sidebar').click(function () {
  		$('.navbar-nav').toggleClass('slide-in');
  		$('.side-body').toggleClass('body-slide-in');
  		$('#search').removeClass('in').addClass('collapse').slideUp(200);
  	});

  	$('#search-trigger').click(function () {
  		$('.navbar-nav').removeClass('slide-in');
  		$('.side-body').removeClass('body-slide-in');
  		$('.search-input').focus();
  	});
  });

</script>
  </body>

</html>
