<!DOCTYPE html>
<html>
	<head>
		<title>Accounts</title>
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
				<h2>Accounts</h2>
				<hr/>
				<div class="col-md-8 col-md-offset-9 ">
					<div class="btn-toolbar">
				 	 	<div class="btn-group">
					   	<a href="#" class="btn btn-default btn-sm col-sm-12" data-toggle="modal" data-target="#userModal">
					   		<span class="glyphicon glyphicon-plus" aria-hidden="true" style="margin-right:10px"> </span>	Add User
					   	</a>
							<!-- User Modal -->
							<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								 <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      	<div class="modal-header">
								        <h4 class="modal-title" id="myModalLabel">New User</h4>
								     	</div>
								      	<div class="modal-body">
								        	<div class="form-group">
												<label class="control-label col-md-3">Office: </label>
											    <select>
											    	<option>Select Office</option>
											    </select>
							            	</div>
								        	<div class="form-group">
												<label class="control-label col-md-3">Full Name: </label>
												<input type="text" placeholder="Lastname,  Firstname   Middle Initial" class="col-md-8" >
											</div>
											<div class="form-group">	
												<label class="control-label col-md-3">Position: </label>
												<input type="text" placeholder="Enter Position/Designation"  class="col-md-8" style="margin-top:10px">
											</div>
											<div class="form-group">	
												<label class="control-label col-md-3">Password: </label>
												<input type="text" placeholder="Enter Default Password"  class="col-md-8" style="margin-top:10px">
							            	</div>
							            	<div class="form-group">
												<label class="control-label col-md-3">Status: </label>
											    <select style="margin-top:10px">
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
							<!--END OF ADD USER MODAL-->	
					</div>
				  	<div class="btn-group">
					   	<a href="#" class="btn btn-default btn-sm col-sm-12" data-toggle="modal" data-target="#officeModal">
					   		<span class="glyphicon glyphicon-plus" aria-hidden="true" style="margin-right:10px"> </span>	Add Office
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
												<label class="control-label col-md-3">Office name: </label>
												<input type="text" label="Enter First name">
											</div>
											<!--Di ko knows kung ano pa kailangan dito hahahaha-->

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
					      		<th>User Code</th>
					      		<th>Office/Unit</th>
					      		<th>Name</th>
					      		<th>Designation</th>
					      		<th>Status</th>
					      		<th><!--Edit--></th>
					    	</tr>
					  	</thead>

					  	<tbody>
					    	<tr>
					      		<td>Column content</td>	
		         	  			<td>Column content</td>	      	
					      		<td>Column content</td>
					      		<td>Column content</td>
					      		<td> Column content</td>
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
					        <h4 class="modal-title" id="myModalLabel">Edit User Account</h4>
					     	</div>
					      	<div class="modal-body">
					        	<div class="form-group">
									<label class="control-label col-md-4">User Code: </label>
									<input type="text" placeholder="-----" class="col-md-6" >
								</div>
					        	<div class="form-group">
									<label class="control-label col-md-4">Change Office: </label>
								    <select style="margin-top:12px">
								    	<option>Select Office</option>
								    </select>
				            	</div>
					        	<div class="form-group">
									<label class="control-label col-md-4">Change FullName: </label>
									<input type="text" placeholder="Lastname,  Firstname   Middle Initial" class="col-md-6" >
								</div>
								<div class="form-group">	
									<label class="control-label col-md-4">Change Position: </label>
									<input type="text" placeholder="Enter Position/Designation"  class="col-md-6" style="margin-top:12px">
								</div>
								<div class="form-group">	
									<label class="control-label col-md-4">Change Password: </label>
									<input type="text" placeholder="Enter Default Password"  class="col-md-6" style="margin-top:12px">
				            	</div>
				            	<div class="form-group">
									<label class="control-label col-md-4">Change Status: </label>
								    <select style="margin-top:12px">
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