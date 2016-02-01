<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href= "assets/css/bootstrap-responsive.css">
		<link rel="stylesheet" href="'assets/css/bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="assets/css/mycss.css">
		<link rel="stylesheet" type="text/css" href="assets/css/ADMINsidenav.css">
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
			      		<a class="navbar-brand" href="#">E-PPMP Admin</a>
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

		<!-- SIDE NAV BAR -->
		<div id="wrapper" class="active">
		 	<div id="sidebar-wrapper">
			    <nav class="navbar navbar-default sidebar" role="navigation">
					<div class="container-fluid">
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>      
					    </div>
					    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
					      <ul class="nav navbar-nav" id="sidebar">
					        <li class="active"><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
					        <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Supplies <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-edit"></span></a>
					          <ul class="dropdown-menu forAnimate" role="menu">
					            <li><a href="#">Add Category</a></li>
					            <li><a href="#">Add Subcatgory</a></li>
					            <li><a href="#">Add Items</a></li>
					          </ul>
					        </li>          
					        <li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accounts <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
					          <ul class="dropdown-menu forAnimate" role="menu">
					            <li><a href="#">Users</a></li>
					            <li class="divider"></li>
					            <li><a href="#">Offices</a></li>
					          </ul>
					        </li>  
					        <li ><a href="#">Budget<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-pencil"></span></a></li>
					        <li ><a href="#">Consolidate<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-file"></span></a></li>
					        <li ><a href="#">Generate APP<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-open"></span></a></li>
					      </ul>
					    </div>
					</div>
				</nav>
			</div>	
			<div id="page-content-wrapper">
	        <!-- Keep all page content within the page-content inset div! -->
		        <div class="page-content inset">
		          	<div class="row">
		              	<div class="col-md-12">
		            		<div class="container" id="ADMINcontainer">
		            		<!--MAIN-->

		            		
							<!--END MAIN-->
			          		</div>
		       		 	</div>
		      		</div>
		    	</div>
		    </div>	
		</div>
	</body>
</html>