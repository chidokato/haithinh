<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<base href="{{asset('')}}">
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="admin_asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin_asset/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="admin_asset/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="admin_asset/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">

			

			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href=""><i class="halflings-icon home"></i></a>
						<a href=""><i class="halflings-icon cog"></i></a>
					</div>
					<h2>Login to your account</h2>
					@if(count($errors) > 0)
						@foreach($errors->all() as $err)
							<div class="alert alert-error">
								<button type="button" class="close" data-dismiss="alert">×</button>
								<strong>{{$err}} !</strong>
							</div>
						@endforeach
					@endif

					@if(session('Alerts'))
						<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>
							{{session('Alerts')}} !
							</strong>
						</div>
					@endif
					<form role="form" class="form-horizontal" action="admin/login" method="POST">

					<input type="hidden" name="_token" value="{{csrf_token()}}" />
					
						<fieldset>
							
							<div class="input-prepend" title="email">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="email" type="text" placeholder="Nhập email"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>
							</div>
							<div class="clearfix"></div>
							
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>
					<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p>	
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	    <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-content">
				<ul class="list-inline item-details">
					<li><a href="http://themifycloud.com">Admin templates</a></li>
					<li><a href="http://themescloud.org">Bootstrap themes</a></li>
				</ul>
			</div>
		</div>
	<!-- start: JavaScript-->

		<script src="admin_asset/js/jquery-1.9.1.min.js"></script>
		<script src="admin_asset/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="admin_asset/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="admin_asset/js/jquery.ui.touch-punch.js"></script>
	
		<script src="admin_asset/js/modernizr.js"></script>
	
		<script src="admin_asset/js/bootstrap.min.js"></script>
	
		<script src="admin_asset/js/jquery.cookie.js"></script>
	
		<script src='admin_asset/js/fullcalendar.min.js'></script>
	
		<script src='admin_asset/js/jquery.dataTables.min.js'></script>

		<script src="admin_asset/js/excanvas.js"></script>
		<script src="admin_asset/js/jquery.flot.js"></script>
		<script src="admin_asset/js/jquery.flot.pie.js"></script>
		<script src="admin_asset/js/jquery.flot.stack.js"></script>
		<script src="admin_asset/js/jquery.flot.resize.min.js"></script>
	
		<script src="admin_asset/js/jquery.chosen.min.js"></script>
	
		<script src="admin_asset/js/jquery.uniform.min.js"></script>
		
		<script src="admin_asset/js/jquery.cleditor.min.js"></script>
	
		<script src="admin_asset/js/jquery.noty.js"></script>
	
		<script src="admin_asset/js/jquery.elfinder.min.js"></script>
	
		<script src="admin_asset/js/jquery.raty.min.js"></script>
	
		<script src="admin_asset/js/jquery.iphone.toggle.js"></script>
	
		<script src="admin_asset/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="admin_asset/js/jquery.gritter.min.js"></script>
	
		<script src="admin_asset/js/jquery.imagesloaded.js"></script>
	
		<script src="admin_asset/js/jquery.masonry.min.js"></script>
	
		<script src="admin_asset/js/jquery.knob.modified.js"></script>
	
		<script src="admin_asset/js/jquery.sparkline.min.js"></script>
	
		<script src="admin_asset/js/counter.js"></script>
	
		<script src="admin_asset/js/retina.js"></script>

		<script src="admin_asset/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
