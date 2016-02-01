<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href= "assets/css/bootstrap-responsive.css">
		<link rel="stylesheet" href="'assets/css/bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="assets/css/mycss.css">
		<script src ="assets/js/jquery-2.1.4.min.js"></script>
		<script src ="assets/js/bootstrap.min.js"></script>
		<script src ="assets/js/populate_dropdown.js"></script>
	</head>
	<body>
		<!-- WHOLE NAVBAR -->
		<div>
			<nav class="navbar navbar-default">
			  	<div class="container">

			  		<!-- NAVBAR HEADER LEFT -->
			    	<div class="navbar-header">
			      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        	<span class="sr-only">Toggle navigation</span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
			      		</button>
			      		<a class="navbar-brand" href="#">E-PPMP</a>
			    	</div>

			    	<!-- NAVBAR HEADER RIGHT -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav navbar-right">
				        	<li class="dropdown">
					          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Notifications <span class="caret"></span></a>
					          	<ul class="dropdown-menu" role="menu">
					            	<li><a href="#">Action</a></li>
					            	<li><a href="#">Another action</a></li>
					            	<li><a href="#">Something else here</a></li>
					         	</ul>
				        	</li>
				        	<li class="dropdown">
					          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sammera Alim <span class="caret"></span></a>
					          	<ul class="dropdown-menu" role="menu">
					            	<li><a href="#">Profile</a></li>
					            	<li class="divider"></li>
					            	<li><a href="#">Logout</a></li>
					         	</ul>
				        	</li>
				      	</ul>
				    </div>
			  	</div>
			</nav>
		</div>
		<!-- Sidebar -->
		<div id="wrapper" class="active">
     
	      <!-- Sidebar -->
	            <!-- Sidebar -->
	      <div id="sidebar-wrapper">
	      <ul id="sidebar_menu" class="sidebar-nav">
	           <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
	      </ul>
	        <ul class="sidebar-nav" id="sidebar">     
	          <li><a>Link1<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
	          <li><a>link2<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
	        </ul>
	      </div>
	          
	      <!-- Page content -->
	      <div id="page-content-wrapper">
	        <!-- Keep all page content within the page-content inset div! -->
	        <div class="page-content inset">
	          <div class="row">
	              <div class="col-md-12">
	              <p class="well lead">An Experiment using the sidebar template from startbootstrap.com which I integrated in my website (<a href="http://animeshmanglik.name">animeshmanglik.name</a>)</p>
	              <p class="well lead">Click on the Menu to Toggle Sidebar . Hope you enjoy it!</p> 
	            </div>
	          </div>
	        </div>
	      </div>
	      <script type="text/javascript">
			$("#menu-toggle").click(function(e) {
		        e.preventDefault();
		        $("#wrapper").toggleClass("active");
				});
			});
		  </script>
	    </div>

		<!-- PPMP TABLE -->
	</body>
</html>