<!DOCTYPE html>
<html>
	<head>
		<title>Offices</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
		<script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
		<script src ="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#tablebody').on('click', function(event){
					var id = event.target.id,
                    	type = id.replace(/[0-9]/g, ''),
                    	numberId = id.match(/\d+/)[0];

                    var office_id = document.getElementById('office_id' + numberId).innerHTML,
                    	office_name = document.getElementById('office_name' + numberId).innerHTML,
                    	status = document.getElementById('status' + numberId).innerHTML;

                    document.getElementById('office_id_edit').value = office_id;
                    document.getElementById('office_name_edit').value = office_name;
                    if(status == "Activated"){
                    	document.getElementById('office_status_edit').value = "1";
                    }
                    else{
                    	document.getElementById('office_status_edit').value = "0";
                    }                    
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

				$('#edit_office').click(function(){
					var office_name = document.getElementById('office_name_edit').value,
						status = $('#office_status_edit').val(),
						office_id = document.getElementById('office_id_edit').value;

					$.ajax({
                        type: "POST",
                        url: "<?php echo base_url('Admin_controller/editOffice'); ?>",
                        data: { office_id : office_id,
                        		office_name : office_name,
                        		status : status },
                        dataType: 'json',
                        success: function(data) {
                            alert('You have successfully edited an office.');
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
				<h2>Offices</h2>
				<hr/>
				<div class="col-md-8 col-md-offset-10 ">
					<div class="btn-toolbar">
				  	<div class="btn-group">
					   	<a href="#" class="btn btn-default btn-sm col-sm-12" data-toggle="modal" data-target="#officeModal">
					   		<span class="glyphicon glyphicon-plus" aria-hidden="true" style="margin-right:15px"> </span>	Add Office
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
	
					</div> 
					</div>	
				</div>
				<div class="row">	
					<div class="btn-tooltip">
						<div class="col-md-12">
							<form enctype="multipart/form-data" method="POST" action="<?php echo base_url('Admin_controller/searchOffice'); ?>" enctype="multipart/form-data" data-parsley-validate>
								<div class="btn-group">
									<div class="form-group">
										<input id="search" name="search" type="text" placeholder="Search" required/>
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
					      		<th>Office Code</th>
					      		<th>Office/Unit</th>
					      		<th>Status</th>
					      		<th><!--Edit--></th>
					    	</tr>
					  	</thead>

					  	<tbody id="tablebody">
					  		<?php
					  			$row = 1;
					  			if(is_array($offices) || is_object($offices)){
					  				foreach ($offices as $office_data) {
					  					echo '<tr>
								      		<td id="office_id'. $row .'">'. $office_data->office_id .'</td>	
					         	  			<td id="office_name'. $row .'">'. $office_data->office_name .'</td>';
					         	  			if($office_data->status == 1){
					         	  				echo '<td id="status'. $row .'">Activated</td>';
					         	  			}
					         	  			else{
					         	  				echo '<td id="status'. $row .'">Deactivated</td>';
					         	  			}
								      		echo'<td class="text-nowrap">
											<a id="editOfficeModal'. $row .'" href="#" class="btn btn-default btn-sm col-sm-12" data-toggle="modal" data-target="#editModal">Edit</a>	
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
					        <h4 class="modal-title" id="myModalLabel">Edit Office</h4>
					     	</div>
					      	<div class="modal-body">
					        	<div class="form-group">
									<label class="control-label col-md-4">Office Code: </label>
									<input id="office_id_edit" type="text" class="col-md-6" readonly>
								</div>
					        	<div class="form-group">
									<label class="control-label col-md-4">Change Office Name: </label>
									<input id="office_name_edit" type="text" class="col-md-6" style="margin-top:10px">
								</div>
				            	<div class="form-group">
									<label class="control-label col-md-4">Change Status: </label>
								    <select id="office_status_edit" style="margin-top:12px">
								    	<option value="0">Deactivate</option>
								    	<option value="1">Activate</option>
								    </select>
				            	</div>	
					      	</div>
					      	<div class="modal-footer">
					      		<div class="col-sm-offset-7">
						        	<button id="edit_office" type="button" class="btn btn-primary btn-md">Save changes</button>
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