<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href= "assets/css/bootstrap-responsive.css">
		<link rel="stylesheet" href="'assets/css/bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="assets/css/mycss.css">
		<script src ="assets/js/jquery-2.1.4.min.js"></script>
		<script src ="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript">
		    $(function(){
		    $(".dropdown").hover(            
	            function() {
	                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
	                $(this).toggleClass('open');
	                $('b', this).toggleClass("caret caret-up");                
	            },
	            function() {
	                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
	                $(this).toggleClass('open');
	                $('b', this).toggleClass("caret caret-up");                
	            });
		    });
		</script>
	</head>
	<body>
		<div class="container" style="white-space:nowrap">
				<img src="assets/images/logo.png" alt="logo" class="img-responsive" width="100" height="100" style="float:left"/>
				<p> &nbsp;</p><h3>Electronic Project Procurement Management Plan</h3>
		</div>		
		<div>
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">  
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        	<span class="sr-only">Toggle navigation</span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
				      	</button>
				      	<a class="navbar-brand" href="#">E-PPMP</a>
				    </div>

				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav">
					        <li class="active"><a href="#">Home</a></li>
					        <li class="dropdown">
					          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects &nbsp; <b class="caret"></b></a>
					          	<ul class="dropdown-menu">
						            <li><a href="#">View Project</a></li>
						            <li><a href="#">Create Project</a></li>
						            <li><a href="#">Approve Project</a></li>
						            <li><a href="#">Consolidate</a></li>
						            <li><a href="#">Generate APP</a></li>

					          	</ul>
					        </li>
					        <li class="dropdown">
					          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin &nbsp; <b class="caret"></b></a>
					          	<ul class="dropdown-menu">
						            <li><a href="#">Add Category</a></li>
						            <li><a href="#">Add Subcategory</a></li>
						            <li><a href="#">Add Items</a></li>
						            <li><a href="#">Add/Disable User</a></li>

					          	</ul>
					        </li>
					    </ul>
			      		<ul class="nav navbar-nav navbar-right">
			       		 	<li><a href="#">Notification &nbsp; <i class="glyphicon glyphicon-bell"></i></a></li>
					        <li class="dropdown">
					          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">User Full Name &nbsp; <b class="caret"></b></a>
					         	<ul class="dropdown-menu">
						            <li><a href="#">Profile</a></li>
			            			<li class="divider"></li>
			            			<li><a href="#">Log-out</a></li>
			          			</ul>
			        		</li>
			      		</ul>
			    	</div><!-- /.navbar-collapse -->

				</div>	 	  
			</nav>	
		</div>
	</body>
</html>
  