<!DOCTYPE html>
<html>
	<head>
		<title>New Category</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href= "<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ADMINsidenav.css'); ?>">
		<script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
		<script src ="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
		<script src ="<?php echo base_url('assets/js/admin.js'); ?>"></script>
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
								<div class="row">
									<ul class="breadcrumb">
					  				<li><a href="#"> Home </a></li>
					  				<li class="active">Add Category</li>
									</ul>
								</div>
								<div class="container">
									<h1>New Category</h1>
									  <ul>
									    <li> Enter the new Category you want to add.</li> 
									    <li> Submit your new category and add subcategory and items</li>
									  </ul>
									  <br />
									<form class="form" pb-autologin="true" autocomplete="off" action="<?php //echo base_url("Admin_controller/insertCategory"); ?>" method="POST" enctype="multipart/form-data">
										<div class="container">
											<div class="col-md-12">	
												<div class="form-group">    
											        <label class="col-sm-12 control-label">Category : </label>
													    <div class="col-sm-6">
													        <input type="text" class="form-control input-sm" id="category" name="category" placeholder="Enter new Category here...">
													    </div>
										        </div>
											    <div class="form-group">    
											        <label class="col-sm-12 control-label">Subcategory : </label>
													    <div class="col-sm-6">
													        <input type="text" class="form-control input-sm" id="subcategory" name="subcategory" placeholder="Enter new subcategory here...">
													    </div>
									            </div>
										        <div class="col-md-12 col-sm-offset-4">
										        	<div class="btn-group" id="categButton">
														<button type="submit" class="btn btn-default btn-md" id="submit" name="submit">Submit this</button>	
													</div>
												</div>	     
								            </div> 
										</div>
									</form>  
									<br />
									<div class="container">
										<div class="panel panel-default">
					 						<div class="panel-heading">Succefully Added the Subcategory!!!</div>
											  <div class="panel-body">
											    <p>You can now add items in this subcategory below...</p>
											</div>
										</div>
									</div>	
										<div id="table" class="table-editable tablesize">
											<span class="table-add glyphicon glyphicon-plus"></span>
											    <table class="table">
											    <tr>
											        <th>Item/Specification</th>
											        <th>Unit</th>
											        <th>Price</th>
											        <th></th>
											        <th></th>
											    </tr>
											    <tr>
											        <td contenteditable="true">Column Content</td>
											        <td contenteditable="true">Column Content</td>
											        <td contenteditable="true">Column Content</td>
											        <td>
											          <span class="table-remove glyphicon glyphicon-remove"></span>
											        </td>
											    </tr>
											      <!-- This is our clonable table line -->
											    <tr class="hide">
											        <td contenteditable="true">Empty</td>
											        <td contenteditable="true">Empty</td>
											        <td contenteditable="true">Empty</td>
											        <td>
											          <span class="table-remove glyphicon glyphicon-remove"></span>
											        </td>
											    </tr>
											</table>
									  	</div>
									  <button id="export-btn" class="btn btn-primary">Update</button>
									  <p id="export"></p>	
								</div>	
								<script type="text/javascript">
									var $TABLE = $('#table');
									var $BTN = $('#export-btn');
									var $EXPORT = $('#export');

									$('.table-add').click(function () {
									  var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
									  $TABLE.find('table').append($clone);
									});

									$('.table-remove').click(function () {
									  $(this).parents('tr').detach();
									});

									// A few jQuery helpers for exporting only
									jQuery.fn.pop = [].pop;
									jQuery.fn.shift = [].shift;

									$BTN.click(function () {
									  var $rows = $TABLE.find('tr:not(:hidden)');
									  var headers = [];
									  var data = [];
									  
									  // Get the headers (add special header logic here)
									  $($rows.shift()).find('th:not(:empty)').each(function () {
									    headers.push($(this).text().toLowerCase());
									  });
									  
									  // Turn all existing rows into a loopable array
									  $rows.each(function () {
									    var $td = $(this).find('td');
									    var h = {};
									    
									    // Use the headers from earlier to name our hash keys
									    headers.forEach(function (header, i) {
									      h[header] = $td.eq(i).text();   
									    });
									    
									    data.push(h);
									  });
									  
									  // Output the result
									  $EXPORT.text(JSON.stringify(data));
									});
								</script>
							<!--END MAIN-->
			          		</div>
		       		 	</div>
		      		</div>
		    	</div>
		    </div>	
		</div>
	</body>
</html>