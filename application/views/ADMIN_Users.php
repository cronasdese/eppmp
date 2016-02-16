<!DOCTYPE html>
<html>
	<head>
		<title>Users</title>
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
			<nav class="navbar navbar-default fixed-nav-bar">
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
		            			<div class="row">
									<ul class="breadcrumb">
									<li><a href="#"></a>Home</li>
					  				<li class="active">Users</li>
									</ul>
								</div>
								<div class="container-liquid">
									<h2>Accounts</h2>
									<hr/>
									<div class="col-md-8 col-md-offset-9 ">
										<div class="btn-toolbar">
										  	<div class="btn-group">
											   	<a href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#userModal">
											   		<span class="glyphicon glyphicon-plus" aria-hidden="true"> </span>	Add User
											   	</a>
													<!-- User Modal -->
														<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
														  <div class="modal-dialog" role="document">
														    <div class="modal-content">
														      <div class="modal-header">
														        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														        <h4 class="modal-title" id="myModalLabel">New User</h4>
														      </div>
														      <div class="modal-body">
														        	<div class="form-group">
																		<label class="control-label col-md-3">User ID: </label>
																		<input type="text" label="Autogenerate id">
													            	</div>
													            	
														        	<div class="form-group">
																		<label class="control-label col-md-3">First name: </label>
																		<input type="text" label="Enter First name">
																	</div>
																	<div class="form-group">	
																		<label class="control-label col-md-3">Last name: </label>
																		<input type="text" label="Enter Last name">
																	</div>
																	<div class="form-group">	
																		<label class="control-label col-md-3">Middle name: </label>
																		<input type="text" label="Enter Middle name">
													            	</div>
													            	<div class="form-group">
																		<label class="control-label col-md-3">Unit/Office: </label>
																	    <select name="Select unit">
																	    	<!--generate from db offices-->
																	    </select>
													            	</div>
													            	<div class="form-group">
																		<label class="control-label col-md-3">Role: </label>
																	    <select name="Select role">
																	    	<option>User</option>
																	    	<option>Admin</option>
																	    </select>
													            	</div>

														      </div>
														      <div class="modal-footer">
														        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														        <button type="button" class="btn btn-primary">Save changes</button>
														      </div>
														    </div>
														  </div>
														</div>	
											</div>
										  	<div class="btn-group">
											    <a href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#officeModal">
											   		<span class="glyphicon glyphicon-plus" aria-hidden="true"> </span>	Add Office
											   	</a>
											   		<!-- Office Modal -->
														<div class="modal fade" id="officeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
														  <div class="modal-dialog" role="document">
														    <div class="modal-content">
														      <div class="modal-header">
														        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														        <h4 class="modal-title" id="myModalLabel">New Office</h4>
														      </div>
														      <div class="modal-body">
														        	<div class="form-group">
																		<label class="control-label col-md-3">Office ID: </label>
																		<input type="text" label="Autogenerate id">
													            	</div>
														        	<div class="form-group">
																		<label class="control-label col-md-3">Office name: </label>
																		<input type="text" label="Enter First name">
																	</div>
																	<!--Di ko knows kung ano pa kailangan dito hahahaha-->

														      </div>
														      <div class="modal-footer">
														        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														        <button type="button" class="btn btn-primary">Save changes</button>
														      </div>
														    </div>
														  </div>
														</div>
										  	</div>
										  	<script type="text/javascript">
												$(function () {
												  $('[data-toggle="tooltip"]').tooltip()
													})
											</script>	
										</div>
									</div>	
								</div>
								<div class="row">
									<div class="container">
										<div class="">
											<h4>SEARCH & DISPLAY</h4>
											<br/>
										</div>	
										<div class="btn-tooltip">
											<div class="col-md-12">	
												<div class="btn-group adminSPACE">
													<div class="form-group">
														<label class="control-label">Search : </label>
														<input type="text" label="Search user here...">
									            	</div>
									            </div>	
										        <div class="btn-group adminSPACE">
										            <div class="form-group ">    
										                <label class="control-label">Search by: </label>
													    <select name="Select user">
													    	<option>Office</option>
													    	<option>College</option>
													    	<option>Etc</option>
													    </select>
									            	</div> 
									            </div>	
									            <div class="btn-group adminSPACE">
													<a href="#" class="btn btn-default btn-sm adminBUTTON">Display</a>	
												</div> 
										        <div class="btn-group adminSPACE">
													<a href="#" class="btn btn-default btn-sm adminBUTTON">Show All</a>	
												</div> 
											</div>      
							            </div>    
						            </div>                        
								</div>	
								<div class="row">		
							    	<table class="table table-striped table-hover ">
									  	<thead>
									    	<tr>
									      		<th>User Code</th>
									      		<th>Budget ID</th>
									      		<th>Name</th>
									      		<th>Office/Unit</th>
									      		<th>Default PW</th>
									      		<th>Role</th>
									      		<th>    </th>
									      		<th>    </th>
									      		<th>    </th>
									    	</tr>
									  	</thead>

									  	<tbody>
									    	<tr>
									      		<td>Column content<</td>	
						         	  			<td>Column content<</td>	      	
									      		<td>Column content</td>
									      		<td>Column content</td>
									      		<td>Column content</td>
									      		<td> 
									      		Column content
									      		</td>
									      		<td>
									      			<div class="btn-group">
														<a href="#" class="btn btn-default btn-sm accountBUTTON">Edit</a>	
													</div>
									      		</td>
									      		<td>
									      			<div class="btn-group">
														<a href="#" class="btn btn-default btn-sm accountBUTTON">Disable</a>	
													</div>
									      		</td>
									    	</tr>
									  	</tbody>
									</table> 
								</div>	
							</div>
		            		
							<!--END MAIN-->
			          		</div>
		       		 	</div>
		      		</div>
		    	</div>
		    </div>	
		</div>
	</body>
</html>