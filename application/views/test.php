<!DOCTYPE html>
<html>
	<head>
		<title>TEST</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href= "assets/css/bootstrap-responsive.css">
		<link rel="stylesheet" href="'assets/css/bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="assets/css/mycss.css">
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.css">
		<link rel="stylesheet" href="assets/css/testcss.css">
		<script type="text/javascript" src="assets/js/lite-all.js"></script>
		<script type="text/javascript" src="assets/js/shortGridData.js"></script>
		<script src ="assets/js/jquery-2.1.4.min.js"></script>
		<script src ="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap-datetimepicker.*js"></script>
		<script src ="assets/js/ppmp.js"></script>
		<script src ="assets/js/testjs.js"></script>
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

		<!-- PPMP TABLE -->
		<div class="container">
			<div class="col-md-12">
			
			</div>
			<div class="row container-liquid">
				<label for="select" class="col-sm-1 control-label">Office/Unit: </label>
			      <div class="col-sm-3">
			        <select class="form-control input-sm" id="select" required>
			        	<option>Select Department</option>		
			          	<option>Math Department</option>
			          	<option>Physics Department</option>
			          	<option>Chemistry Department</option>
			        </select>
				</div>
				<div class="form-group col-sm-6 col-md-offset-1">
						<label class="col-sm-5 control-label">Date of Implementation:</label>
			            <div class='input-group date' id='datetimepicker1'>
			                <input type='text' class="col-sm-2 form-control input-sm" />
			                    <span class="input-group-addon">
			                        <span class="glyphicon glyphicon-calendar"></span>
			                    </span>
			            </div>
			    </div>
			</div>	
			<div class="row container-liquid">
				<label class="col-sm-1 control-label">Project Name/Title:</label>
					<div class="col-sm-6">
					    <input type="text" class="form-control input-sm" placeholder="Enter Project Name/Title here...">
					</div>		
				</div>	
			<div class="container" id="dropdownTest">
				<form id="make_checkbox_select">   
				    <select name="Select Category">
				    	<option value="Services">Services</option>
				    	<option value="Supplies & Materials">Supplies & Materials</option>
				    	<option value="Equipment">Equipment</option>
				    </select>
				    <input type="submit" />
				</form>
				
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
				<script>

					$(function()
					{
						var mySelectCheckbox = new checkbox_select(
						{
							selector : "#make_checkbox_select",
				            selected_translation : "selected",
				            all_translation : "Selected All",
				            not_found : "Not found",

							// Event during initialization
							onApply : function(e)
							{
				                alert("Custom Event: " + e.selected);
							}
						});
				  
					});
						
				</script>				
			</div>		
		</div>
		<div class="container">
			<div class="row">		
		    	<table class="table table-striped table-hover ">
				  	<thead>
				    	<tr>
				      		<th>Category</th>
				      		<th>Item Description</th>
				      		<th>Unit</th>
				      		<th>Quantity/Size</th>
				      		<th>Schedule/Milestone</th>
				      		<th>Price</th>
				      		<th>Sub-total</th>
				      		<th> </th>
				      		<th> </th>
				    	</tr>
				  	</thead>

				  	<tbody>
				    	<tr>
				      		<td>Column content</td>
				      		<td>Column content</td>
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
		<div class="container">

		</div>
	</body>
</html>