<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->helper('url'); ?>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href= "<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ADMINsidenav.css'); ?>">
		<script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
		<script src ="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
		<script src ="<?php echo base_url('assets/js/populate_dropdown.js'); ?>"></script>
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
								<div class="row">
									<ul class="breadcrumb">
					  				<li class="active"> ADMIN |  Home </li>
									</ul>
								</div>
									<div class="container-liquid">
											<h2>Home</h2>
											<hr/>
											<div class="col-md-8 col-md-offset-7">
													<div class="btn-toolbar">
														<div class="btn-group">	
														<a href="#" class="btn btn-default btn-sm " data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to add Category">
													    <span class="glyphicon glyphicon-plus" aria-hidden="true"> </span>	Add Category</a>
													  	</div>
													  	<div class="btn-group">
													   	<a href="#" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to add Subcategory">
													   	<span class="glyphicon glyphicon-plus" aria-hidden="true"> </span>	Add Subcategory</a>
													  	</div>
													  	<div class="btn-group">
													    <a href="#" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to add Items">
													    <span class="glyphicon glyphicon-plus" aria-hidden="true"> </span>	Add Items</a>
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
																<label class="control-label">Category : </label>
																<select name="category" id="category">
												                </select>
											            	</div>
											            </div>	
												        <div class="btn-group adminSPACE">
												            <div class="form-group ">    
												                <label class="control-label">Subcategory : </label>
															    <select name="subcategory" id="subcategory">
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
										</div-->	
										<div class="row">		
									    	<table class="table table-striped table-hover ">
											  	<thead>
											    	<tr>
											      		<th>Item Code</th>
											      		<th>Item/Specification</th>
											      		<th>Quantity/Size</th>
											      		<th>Price</th>
											      		<th>Sub-total</th>
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
											      		<td>Column content</td>
											      		<td>Column content</td>
											    	</tr>
											  	</tbody>
											</table> 
										</div>	
									</div>  			
			              	</div>
			          	</div>
		       		 </div>
		      	</div>
		    </div>
		</div>
	</body>
</html>