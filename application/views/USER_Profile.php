<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
		<script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
		<script src ="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#update_user').click(function(){
					var name = document.getElementById('name').innerHTML,
						office = document.getElementById('office').innerHTML,
						position = document.getElementById('position').innerHTML;
					
					document.getElementById('name_edit').value = name;
					document.getElementById('position_edit').value = position;
					document.getElementById('office_edit').value = office;
				});

				var checkValue = false;
				$('#update_button').click(function(){
					var name = document.getElementById('name_edit').value,
						old_password = document.getElementById('old_password_edit').value,
						new_password = document.getElementById('new_password_edit').value;

					if((name == "") || (old_password == "")){
						alert('Please fill-up all input fields.');
					}
					else{
						$.ajax({
	                        type: "POST",
	                        url: "<?php echo base_url('User_controller/validatePassword'); ?>",
	                        data: { old_password : old_password },
	                        async: false,
	                        dataType: 'json',
	                        success: function(data) {
	                            if($.isEmptyObject(data)){
	                            	alert('Incorrect old password.');
	                            }
	                            else{
	                            	alert('Change user details successful');
	                            	checkValue = true;
	                            	$('form').attr('action', '<?php echo base_url('User_controller/saveEditUser'); ?>');
	                            	$('form').submit();
	                            }
	                        },
	                        error: function(errorw) {
	                            alert("error");
	                        }
	                    }); 
					}
					return checkValue; 
				});
			});
		</script>
	</head>
	<body>
		
		<!-- Sidebar -->
		<div id="wrapper" class="active">

		    <div id="page-content-wrapper">
		        <!-- Keep all page content within the page-content inset div! -->
		        <div class="page-content inset">
		          	<div class="row">
		              	<div class="col-md-12">
		              		<div>
		              			<?php echo '<h3 id="name">'. $user_details[0]->name .'</h3>'; ?>
		              		</div>
		              		<br/>	
			              	<br/>	              		
			              	<div class="col-md-5">
			              		<div class="panel panel-default">
								  	<div class="panel-heading">
								   		<h3 class="panel-title"><b>Basic Information</b>
								   		<a id="update_user" href="#" class="col-md-offset-7" data-toggle="modal" data-target="#editModal"><span class="glyphicon glyphicon-edit"></span></a></h3> <!--glyphicon glyphicon-edit-->
								  	</div>
								 	<div class="panel-body">
								 		<div class="form-group">	
											<label class="control-label col-md-4">Office/Unit: </label>
											<?php echo '<p id="office">'. $user_details[0]->office_name .'</p>'; ?>
									    </div>
									    <div class="form-group">
											<label class="control-label col-md-4">Position/Designation</label>
											<?php echo '<p id="position">'. $user_details[0]->position .'</p>'; ?>
									    </div>
									    <div class="form-group">
											<label class="control-label col-md-4">Password: </label>
											<p> ********** </p>
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
											<label class="control-label col-md-5">Project submitted: </label>
											<?php echo '<p>'. $projects_submitted[0]->projects_submitted .'</p>'; ?>
									    </div>
								  		<div class="form-group">
											<label class="control-label col-md-5">Project approved: </label>
											<?php echo '<p>'. $projects_approved[0]->projects_approved .'</p>'; ?>
									    </div>
										<div class="form-group">
											<label class="control-label col-md-5">Project rejected: </label>
											<?php echo '<p>'. $projects_rejected[0]->projects_rejected .'</p>'; ?>
										</div>
								  	</div>
								</div>
							</div>	
		            	</div>
		          	</div>
		        </div>
		    </div>
			
  			<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Edit Information</h4>
						</div>
						<form id="edit_form" enctype="multipart/form-data" method="POST" action="<?php echo base_url('User_controller/saveEditUser'); ?>" enctype="multipart/form-data" data-parsley-validate>
							<div class="modal-body">
									<br/>
									<div class="form-group">
								    	<label class="control-label col-md-3">Old Password</label>
								        <input id="old_password_edit" name="old_password_edit" type="password" class="input-xlarge" placeholder="**********">
								    </div>
								    <div class="form-group">
								    	<label class="control-label col-md-3">New Password</label>
								        <input id="new_password_edit" name="new_password_edit" type="password" class="input-xlarge" placeholder="**********">
								    </div>
								    <div class="form-group">
								    	<label class="control-label col-md-3">Full Name</label>
								    	<input id="name_edit" name="name_edit" type="text" class="input-xlarge">
								    </div>
								    <div class="form-group">
								    	<label class="control-label col-md-3">Office Name</label>
								    	<input id="office_edit" name="office_edit" type="text" class="input-xlarge" readonly>
								    </div>
								    <div class="form-group">
								    	<label class="control-label col-md-3">Position</label>
								        <input id="position_edit" name="position_edit" type="text" class="input-xlarge" readonly>
								    </div>	
							</div>
							<div class="modal-footer">
								<button type="submit" name="action" id="update_button" class="btn btn-primary">Update</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</form>	
					</div>
				</div>
			</div>	
	    </div>
	</body>
</html>