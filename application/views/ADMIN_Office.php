<!DOCTYPE html>
<html>
	<head>
		<title>Offices</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href= "assets/css/bootstrap-responsive.css">
		<link rel="stylesheet" href="'assets/css/bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="assets/css/mycss.css">
		<script src ="assets/js/jquery-2.1.4.min.js"></script>
		<script src ="assets/js/bootstrap.min.js"></script>
	</head>
	<body>
		<!-- WHOLE NAVBAR -->
		<div class="container">
			<div class="container-liquid">
				<h2>Offices</h2>
				<hr/>
				<div class="col-md-8 col-md-offset-10 ">
					<div class="btn-toolbar">
				  	<div class="btn-group">
					   	<a href="#" class="btn btn-default btn-sm col-sm-9" data-toggle="modal" data-target="#addofficeModal" style="margin-right:15px;margin-left:-105px">
					   		<span class="glyphicon glyphicon-plus" aria-hidden="true" style="margin-right:5px" > </span>	Add Office
					   	</a>
					   		<!-- Add Office Modal -->
							<div class="modal fade" id="addofficeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
								    <div class="modal-content">
								      	<div class="modal-header">
								        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								        	<h4 class="modal-title" id="myModalLabel">New Office</h4>
								      	</div>
								      	<div class="modal-body">
								        	<div class="form-group">
												<label class="control-label col-md-3">Office name: </label>
												<input type="text" label="Enter First name">
											</div>
											<div class="form-group">
												<label class="control-label col-md-3">Status: </label>
											    <select style
											    	<option>Select Status</option>
											    	<option value="activate">Activate</option>
											    	<option value="deactivate">Deactivate</option>
											    </select>
							            	</div>	
								      	</div>
								      	<div class="modal-footer">
									        <div class="col-sm-offset-7">
									        	<button type="button" class="btn btn-primary btn-md">Save changes</button>
									       		<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Cancel</button>
									    	</div> 
								      	</div>
								    </div>
								</div>
							</div>
							<!--END OF ADD OFFICE MODAL-->
					   	<a href="#" class="btn btn-default btn-sm col-sm-11" data-toggle="modal" data-target="#addapproverModal">
					   		<span class="glyphicon glyphicon-plus" aria-hidden="true" style="margin-right:5px"> </span>	Add Approver
					   	</a>
					   		<!-- Office Modal -->
							<div class="modal fade" id="addapproverModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
								    <div class="modal-content">
								      	<div class="modal-header">
								        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								        	<h4 class="modal-title" id="myModalLabel">Office Approver</h4>
								      	</div>
								      	<div class="modal-body">
								        	<div class="form-group">
												<label class="control-label col-md-3">Office: </label>
											    <select>
											    	<option>Select Office</option>
											    </select>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3">1st Level: </label>
											    <select>
											    	<option>Select User</option>
											    </select>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3">2nd Level: </label>
											    <select>
											    	<option>Select User</option>
											    </select>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3">3rd Level: </label>
											    <select>
											    	<option>Select User</option>
											    </select>
											</div>			
								      	</div>
								      	<div class="modal-footer">
									        <div class="col-sm-offset-7">
									        	<button type="button" class="btn btn-primary btn-md">Add Now</button>
									       		<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Cancel</button>
									    	</div> 
								      	</div>
								    </div>
								</div>
							</div>
							<!--END OF ADD OFFICE MODAL-->
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
					<div class="btn-tooltip">
						<div class="col-md-12">	
							<div class="btn-group">
								<div class="form-group">
									<input type="text" placeholder="Search">
				            	</div>
				            </div>	
				            <div class="btn-group">
								<a href="#" class="btn btn-default btn-sm" style="margin-top:-14px">Display</a>	
							</div> 
						</div>      
		            </div>                         
				</div>
				<hr />	
				<div class="row">		
			    	<table class="table table-striped table-hover ">
					  	<thead>
					    	<tr>
					      		<th rowspan="2">Office Code</th>
					      		<th rowspan="2">Office/Unit</th>
<<<<<<< HEAD
					      		<th colspan="3" class="text-center">Approver</th>
=======
					      		<th colspan="3" class="text-center">1st Level Approver</th>
>>>>>>> 42647bb82b1c84c4126f2ae56223def2c8bb791d
					      		<th rowspan="2">Status</th>
					      		<th rowspan="2"><!--Edit--></th>
					    	</tr>
					    	<tr>
					    		<th>1st Level</th>
					    		<th>2nd Level</th>
					    		<th>3rds Level</th>
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
					      		<td class="text-nowrap">
									<a href="#" class="btn btn-default btn-sm col-sm-12" data-toggle="modal" data-target="#editModal">Edit</a>	
					      		</td>
					    	</tr>
					  	</tbody>
					</table> 
				</div>
				<!--EDIT MODAL-->
				<div class="modal fade" id="editModal" tabindex="-1" role="dialog">
					 <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      	<div class="modal-header">
					        <h4 class="modal-title" id="myModalLabel">Edit Office</h4>
					     	</div>
					      	<div class="modal-body">
					        	<div class="form-group">
									<label class="control-label col-md-4">Office Code: </label>
									<input type="text" class="col-md-6" >
								</div>
					        	<div class="form-group">
									<label class="control-label col-md-4">Change Office Name: </label>
									<input type="text" class="col-md-6" style="margin-top:10px">
								</div>
								<div class="form-group">
									<label class="control-label col-md-4">1st Level: </label>
								    <select style="margin-top:10px">
								    	<option>Select User</option>
								    </select>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4">2nd Level: </label>
								    <select>
								    	<option>Select User</option>
								    </select>
								</div>
								<div class="form-group">
									<label class="control-label col-md-4">3rd Level: </label>
								    <select>
								    	<option>Select User</option>
								    </select>
								</div>			
				            	<div class="form-group">
									<label class="control-label col-md-4">Change Status: </label>
								    <select style="margin-top:5px">
								    	<option>Select Status</option>
								    	<option value="activate">Activate</option>
								    	<option value="deactivate">Deactivate</option>
								    </select>
				            	</div>	
					      	</div>
					      	<div class="modal-footer">
					      		<div class="col-sm-offset-7">
						        	<button type="button" class="btn btn-primary btn-md">Save changes</button>
						       		<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Cancel</button>
						    	</div>    
					      	</div>
					    </div>
					</div>
				</div>
				<!--END OF EDIT USER MODAL-->	
			</div>
      	</div>
	</body>
</html>