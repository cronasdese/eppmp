<!DOCTYPE html>
<html>
	<head>
		<title>Accounts</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href= "<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
		<script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
		<script src ="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				//if edit user is clicked
				$('#tablebody').on('click', function(event){
					var id = event.target.id,
                    	type = id.replace(/[0-9]/g, ''),
                    	numberId = id.match(/\d+/)[0];

                    var user_id = document.getElementById('user_id' + numberId).innerHTML,
                    	office_id = document.getElementById('office_id' + numberId).innerHTML,
                    	name = document.getElementById('name' + numberId).innerHTML,
                    	position = document.getElementById('position' + numberId).innerHTML,
                    	status = document.getElementById('status' + numberId).innerHTML;

                    document.getElementById('user_id').value = user_id;
                    document.getElementById('name').value = name;
                    document.getElementById('position').value = position;
                    //alert(office_id);

                    $.ajax({ 
                    	type: "POST",
		                url: "<?php echo base_url('Admin_controller/getOffices'); ?>",
		                data: { user_id : user_id },
		                dataType: 'json',
		                success: function(data) {
		                    $(data).each(function(){
		                        $("#office_id").append($('<option>', {
		                            value: this.id,
		                            text: this.office_name,
		                        }));
		                    })
		                    document.getElementById('office_id').value = office_id;
		                },
		                error: function(errorw) {
		                    alert("error");
		                }
		            });

		            if(status == "Activated"){
		            	document.getElementById('status').value = "1";
		            }
		            else{
		            	document.getElementById('status').value = "0";
		            }
				});

				//if save changes for edit user has been clicked
				$('#save_edit_user').click(function(){
					var user_id = document.getElementById('user_id').value,
					office_id = category = $('#office_id').val(),
					name = document.getElementById('name').value,
					position = document.getElementById('position').value,
					status = document.getElementById('status').value;

					$.ajax({
                        type: "POST",
                        url: "<?php echo base_url('Admin_controller/saveUserChanges'); ?>",
                        data: { user_id : user_id,
                        		office_id : office_id,
                        		name : name,
                        		position : position,
                        		status : status
                        	},
                        dataType: 'json',
                        success: function(data) {
                            alert('You have successfully updated this user.');
                            location.reload();
                        },
                        error: function(errorw) {
                            alert("error");
                        }
                    });
				});

				$('#addUser').click(function(){
					$.ajax({
                        url: "<?php echo base_url('Admin_controller/getOfficesWithNoDesignation'); ?>",
                        dataType: 'json',
                        success: function(data) {
                            $(data).each(function(){
		                        $("#office_id_add_user").append($('<option>', {
		                            value: this.id,
		                            text: this.office_name,
		                        }));
		                    })
                        },
                        error: function(errorw) {
                            alert("error");
                        }
                    });

                    $.ajax({
                        url: "<?php echo base_url('Admin_controller/getUserTypes'); ?>",
                        dataType: 'json',
                        success: function(data) {
                            $(data).each(function(){
		                        $("#user_type_add").append($('<option>', {
		                            value: this.id,
		                            text: this.type,
		                        }));
		                    })
                        },
                        error: function(errorw) {
                            alert("error");
                        }
                    });
				});

				$('#add_add_user').click(function(){
					var office_id = $('#office_id_add_user').val(),
						name = document.getElementById('name_add_user').value,
						position = document.getElementById('position_add_user').value,
						password = document.getElementById('password_add_user').value,
						user_type = $('#user_type_add').val(),
						status = $('#status_add_user').val();

					$.ajax({
                        type: "POST",
                        url: "<?php echo base_url('Admin_controller/addUser'); ?>",
                        data: { office_id : office_id,
                        		name : name,
                        		position : position,
                        		password : password,
                        		user_type : user_type,
                        		status : status
                        	},
                        dataType: 'json',
                        success: function(data) {
                            alert('You have successfully added a user.');
                            location.reload();
                        },
                        error: function(errorw) {
                            alert("error");
                        }
                    });
				});

				$('#add_office').click(function(){
					var office_name = document.getElementById('office_name_add_office').value,
						status = $('#status_add_office').val();

					$.ajax({
                        type: "POST",
                        url: "<?php echo base_url('Admin_controller/addOffice'); ?>",
                        data: { office_name : office_name,
                        		status : status },
                        dataType: 'json',
                        success: function(data) {
                            alert('You have successfully added an office.');
                            location.reload();
                        },
                        error: function(errorw) {
                            alert("error");
                        }
                    });
				});
			});
		</script>
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
					   	<button id="addUser" class="btn btn-default btn-sm col-sm-12" data-toggle="modal" data-target="#userModal">
					   		<span class="glyphicon glyphicon-plus" aria-hidden="true" style="margin-right:10px"> </span>	Add User
					   	</button>
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
											    <select id="office_id_add_user">
											    </select>
							            	</div>
								        	<div class="form-group">
												<label class="control-label col-md-3">Full Name: </label>
												<input id="name_add_user" type="text" placeholder="Lastname,  Firstname   Middle Initial" class="col-md-8" >
											</div>
											<div class="form-group">	
												<label class="control-label col-md-3">Position: </label>
												<input id="position_add_user" type="text" placeholder="Enter Position/Designation"  class="col-md-8" style="margin-top:10px">
											</div>
											<div class="form-group">	
												<label class="control-label col-md-3">Password: </label>
												<input id="password_add_user" type="text" placeholder="Enter Default Password"  class="col-md-8" style="margin-top:10px">
							            	</div>
							            	<div class="form-group">
												<label class="control-label col-md-3">User Type: </label>
											    <select id="user_type_add" style="margin-top:10px">
											    </select>
							            	</div>	
							            	<div class="form-group">
												<label class="control-label col-md-3">Status: </label>
											    <select id="status_add_user" style="margin-top:10px">
											    	<option value="1">Activate</option>
											    	<option value="0">Deactivate</option>
											    </select>
							            	</div>	
								      	</div>
								      	<div class="modal-footer">
								      		<div class="col-sm-offset-7">
									        	<button id="add_add_user" type="button" class="btn btn-primary btn-md">Add User</button>
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
											<input id="office_name_add_office" type="text" label="Enter First name">
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Status: </label>
										    <select id="status_add_office" style="margin-top:10px">
										    	<option value="1">Activate</option>
										    	<option value="0">Deactivate</option>
										    </select>
						            	</div>	
										<!--Di ko knows kung ano pa kailangan dito hahahaha-->

							      	</div>
							      	<div class="modal-footer">
								        <div class="col-sm-offset-7">
								        	<button id="add_office" type="button" class="btn btn-primary btn-md">Save changes</button>
								       		<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Cancel</button>
								    	</div> 
							      	</div>
							    </div>
							</div>
						</div>
						<!--END OF ADD OFFICE MODAL-->
				  	</div>
					  	<!--script type="text/javascript">
							$(function () {
							  $('[data-toggle="tooltip"]').tooltip()
								});
						</script-->	
					</div>	
				</div>
				<div class="row">	
					<div class="btn-tooltip">
						<div class="col-md-12">	
							<form enctype="multipart/form-data" method="POST" action="<?php echo base_url('Admin_controller/search'); ?>" enctype="multipart/form-data" data-parsley-validate>
								<div class="btn-group">
									<div class="form-group">
										<input id="search" name="search" type="text" placeholder="Search" required>
					            	</div>
					            </div>	
					            <div class="btn-group">
									<button id="search_button" name="action" class="btn btn-default btn-sm" style="margin-top:-14px">Display</button>	
								</div> 
							</form>
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

					  	<tbody id="tablebody">
				    		<?php
				    			if(is_array($users) || is_object($users)){
				    				$row = 1;
				    				foreach ($users as $user_data) {
				    					echo '<tr>
				    					<td id="user_id'. $row .'">'. $user_data->user_id .'</td>	
				         	  			<td id="office_name'. $row .'">
				         	  				<p id="office_id'. $row .'"class="hidden">'. $user_data->office_id .'</p>
				         	  				'. $user_data->office_name .'
				         	  			</td>	      	
							      		<td id="name'. $row .'">'. $user_data->name .'</td>
							      		<td id="position'. $row .'">'. $user_data->position .'</td>';
							      		if($user_data->status == 1){
							      			echo '<td id="status'. $row .'">Activated</td>';
							      		}
							      		else{
							      			echo '<td id="status'. $row .'">Deactivated</td>';
							      		}
							      		echo '<td class="text-nowrap">
											<a href="#" id="editModal'. $row .'" class="btn btn-default btn-sm col-sm-12" data-toggle="modal" data-target="#editModal">Edit</a>	
							      		</td>
							      		</tr>';
							      		$row++;
				    				}
				    			}
				    		?>
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
									<input id="user_id" type="text" name="user_id" placeholder="-----" class="col-md-6" readonly>
								</div>
					        	<div class="form-group">
									<label class="control-label col-md-4">Change Office: </label>
								    <select id="office_id" name="office_id" style="margin-top:12px">
								    	<!--option>Select Office</option-->
								    </select>
				            	</div>
					        	<div class="form-group">
									<label class="control-label col-md-4">Change FullName: </label>
									<input id="name" type="text" name="name" placeholder="Lastname,  Firstname   Middle Initial" class="col-md-6" >
								</div>
								<div class="form-group">	
									<label class="control-label col-md-4">Change Position: </label>
									<input id="position" type="text" name="position" placeholder="Enter Position/Designation"  class="col-md-6" style="margin-top:12px">
								</div>
								<!--div class="form-group">	
									<label class="control-label col-md-4">Change Password: </label>
									<input id="password" type="text" placeholder="Enter Default Password"  class="col-md-6" style="margin-top:12px">
				            	</div-->
				            	<div class="form-group">
									<label class="control-label col-md-4">Change Status: </label>
								    <select id="status" name="status" style="margin-top:12px">
								    	<option value="0">Deactivate</option>
								    	<option value="1">Activate</option>								    	
								    </select>
				            	</div>	
					      	</div>
					      	<div class="modal-footer">
					      		<div class="col-sm-offset-7">
						        	<button type="button" id="save_edit_user" class="btn btn-primary btn-md">Save changes</button>
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