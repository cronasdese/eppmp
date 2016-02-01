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
			<nav class="navbar  navbar-default">
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
		    <div id="sidebar-wrapper">
			    <ul id="sidebar_menu" class="sidebar-nav">
			        <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
			    </ul>
			    <ul class="sidebar-nav" id="sidebar">     
			        <li><a href="#">Home<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
			        <li><a href="#">Create <span class="sub_icon glyphicon glyphicon-link"></span></a></li>
			        <li><a href="#">Projects<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
			        <li><a href="#">Drafts<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
			        <li><a href="#">History<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
			    	<!--SPACE DAPAT TO OR DIVIDER-->
			        <li><a href="#">Approve PPMP<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
			    </ul>
		    </div>
	          
	      <!-- Page content -->
		    <div id="page-content-wrapper">
		        <!-- Keep all page content within the page-content inset div! -->
		        <div class="page-content inset">
		          	<div class="row">
		              	<div class="col-md-12">
		              		<div>
		              			<h3> User full name</h3>
		              		</div>
		              		<br/>	
			              	<br/>	              		
			              	<div class="col-md-5">
			              		<div class="panel panel-default">
								  	<div class="panel-heading">
								   		<h3 class="panel-title"><b>Basic Information</b>
								   		<a href="#" class="col-md-offset-7" data-toggle="modal" data-target="#editModal"><span class="glyphicon glyphicon-edit"></span></a></h3> <!--glyphicon glyphicon-edit-->
								  	</div>
								 	<div class="panel-body">
								 		<div class="form-group">	
											<label class="control-label col-md-4">Office/Unit: </label>
											<p>Math Depart</p>
									    </div>
									    <div class="form-group">
											<label class="control-label col-md-4">User ID: </label>
											<p> churva123 </p>
									    </div>
									    <div class="form-group">
											<label class="control-label col-md-4">Password: </label>
											<p> ********** </p>
									    </div>
								  		<div class="form-group">
											<label class="control-label col-md-4">Email: </label>
											<p> churvanes@yahoo.com </p>
									    </div>
										<div class="form-group">
											<label class="control-label col-md-4">Telephone: </label>
											<p> 123-4567</p>
										</div>
										<div class="form-group">	
											<label class="control-label col-md-4">Mobile: </label>
											<p> 123456789</p>
										</div>
										<div class="form-group">	
											<label class="control-label col-md-4">Address: </label>
											<p> Ayala blv., Ermita, Manila </p>
									    </div>
								  	</div>
								</div>
							</div >	
							<div class="col-md-5">
								<div class="panel panel-default col-md-offset-0">
								  	<div class="panel-heading">
								   		<h3 class="panel-title"><b>Statistics</b></h3>
								  	</div>
								 	<div class="panel-body">
								 		<div class="form-group">	
											<label class="control-label col-md-5">Last Login: </label>
											<p> 1 minute ago</p>
									    </div>
									    <div class="form-group">
											<label class="control-label col-md-5">Project created: </label>
											<p> 100 </p>
									    </div>
								  		<div class="form-group">
											<label class="control-label col-md-5">Project submitted: </label>
											<p> 50 </p>
									    </div>
										<div class="form-group">
											<label class="control-label col-md-5">Project approved: </label>
											<p> 20 </p>
										</div>
										<div class="form-group">	
											<label class="control-label col-md-5">Logins/Day: </label>
											<p> 2 </p>
										</div>
										<div class="form-group">	
											<label class="control-label col-md-5">Logins: </label>
											<p> 48 </p>
									    </div>
								  	</div>
								</div>
							</div>	
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
			
  			<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Edit Information</h4>
						</div>
							<div class="modal-body">
								<div class="well">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
										<li><a href="#profile" data-toggle="tab">Password</a></li>
									</ul>
										<div id="myTabContent" class="tab-content">
											<div class="tab-pane active in" id="home">
												<form id="tab">
													<br/>
												    <div class="form-group">
												    	<label class="control-label col-md-3">Username</label>
												    	<input type="text" value="Username" class="input-xlarge">
												    </div>
												    <div class="form-group">
												    	<label class="control-label col-md-3">First Name</label>
												    	<input type="text" value="First Name" class="input-xlarge">
												    </div>
												    <div class="form-group">
												    	<label class="control-label col-md-3">Last Name</label>
												    	<input type="text" value="Last Name" class="input-xlarge">
												    </div>
												    <div class="form-group">
												    	<label class="control-label col-md-3">Email</label>
												    	<input type="text" value="churva@yourcompany.com" class="input-xlarge">
												    </div>
												    <div class="form-group">
												    	<label class="control-label col-md-3">Telephone</label>
												        <input type="text" value="123-5678" class="input-xlarge">
												    </div>
												    <div class="form-group">
												    	<label class="control-label col-md-3">Mobile</label>
												        <input type="text" value="0123456789" class="input-xlarge">
												    </div>
												    <div class="form-group">	
												    	<label class="control-label col-md-3">Address</label>
												        <textarea value="" rows="3" class="input-xlarge">
												        </textarea>
												    </div>    
												          	<div>
												        	    <button class="btn btn-primary">Update</button>
												        	</div>
												</form>
											</div>
											<div class="tab-pane fade" id="profile">
												<form id="tab2">
													<br/>
												    <label class="control-label col-md-3">New Password</label>
												        <input type="password" class="input-xlarge">
												        <br/>
												        <br/>	
												        	<div>
												        	    <button class="btn btn-primary">Update</button>
												        	</div>
												</form>
											</div>
										</div>
  								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
					</div>
				</div>
			</div>	

	    </div>
	</body>
</html>