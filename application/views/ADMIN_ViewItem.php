<!DOCTYPE html>
<html>
	<head>
		<title>Add Subcategory</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>">
	    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
	    <script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
	    <script src ="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			    $("#subdropdown").change(function() {
			        var selVal = $(this).val();
			        $("#subtextbox").html('');
			        if(selVal > 0) {
			            for(var i = 1; i<= selVal; i++) {
			                $("#subtextbox").append('<label class="col-sm-12 control-label">New Subcategory</label><input type="text" name="textVal[]" value="" class="col-sm-12" placeholder="Enter New Subcategory"/><br />');
			            }
			        }
			    });

			    $("#itemdropdown").change(function() {
			        var selVal = $(this).val();
			        $("#itemtextbox").html('');
			        if(selVal > 0) {
			            for(var i = 1; i<= selVal; i++) {
			                $("#itemtextbox").append('<label class="col-sm-12 control-label">New Item</label><input type="text" name="textVal[]" value="" class="col-sm-12" placeholder="Enter New Item"/><input type="text" name="textVal[]" value="" class="col-sm-12" placeholder="Enter Unit"/><input type="text" name="textVal[]" value="" class="col-sm-12" placeholder="Enter Price"/><br />');
			            }
			        }
			    });
			});
		</script>
	</head>
	<body>
	<br />
	<br />
		<div class="container">
			<ul class="nav nav-tabs">
			  	<li class="active"><a data-toggle="tab" href="#addcateg">Category</a></li>
			  	<li><a data-toggle="tab" href="#addsubcateg">Subcategory</a></li>
			  	<li><a data-toggle="tab" href="#additem">Items</a></li>
			</ul>

			<div class="tab-content">
			<!--CATEGORY-->
			  	<div id="addcateg" class="tab-pane fade in active">
			    	<div class="container">
			    		<br />
						<h3 class="text-right">Category</h3>
						<hr />
						<div class="container">	
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
								      		<th>Category Code</th>
								      		<th>Category Name</th>
								      		<th>Status</th>
								      		<th><!--Edit--></th>
								    	</tr>
								  	</thead>

								  	<tbody>
								    	<tr>
								      		<td>Column content</td>	
					         	  			<td>Column content</td>      	
								      		<td>Column content</td>
								      		<td class="text-nowrap">
												<a href="#" class="btn btn-default btn-sm col-sm-12" data-toggle="modal" data-target="#CategoryEdit">Edit</a>	
								      		</td>
								    	</tr>
								  	</tbody>
								</table> 
							</div>
							<!--EDIT MODAL-->
							<div class="modal fade" id="CategoryEdit" tabindex="-1" role="dialog">
								 <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      	<div class="modal-header">
								        <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
								     	</div>
								      	<div class="modal-body">
								        	<div class="form-group">
												<label class="control-label col-md-4">SCategory Code: </label>
												<input type="text" class="col-md-6" >
											</div>
								        	<div class="form-group">
												<label class="control-label col-md-4">Change Category Name: </label>
												<input type="text" class="col-md-6" style="margin-top:10px">
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
			  	</div>
			  	<!--SUBCATEGORY-->
			  	<div id="addsubcateg" class="tab-pane fade">
			    	<div class="container">
			    		<br />
						<h3 class="text-right">Subcategory</h3>
						<hr />
						<div class="container">	
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
								      		<th>Subcategory Code</th>
								      		<th>Subcategory Name</th>
								      		<th>Category</th>
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
								      		<td class="text-nowrap">
												<a href="#" class="btn btn-default btn-sm col-sm-12" data-toggle="modal" data-target="#SubcategoryEdit">Edit</a>	
								      		</td>
								    	</tr>
								  	</tbody>
								</table> 
							</div>
							<!--EDIT MODAL-->
							<div class="modal fade" id="SubcategoryEdit" tabindex="-1" role="dialog">
								 <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      	<div class="modal-header">
								        <h4 class="modal-title" id="myModalLabel">Edit Subcategory</h4>
								     	</div>
								      	<div class="modal-body">
								        	<div class="form-group">
												<label class="control-label col-md-4">Subcategory Code: </label>
												<input type="text" class="col-md-6" >
											</div>
								        	<div class="form-group">
												<label class="control-label col-md-4">Change Subcategory Name: </label>
												<input type="text" class="col-md-6" style="margin-top:10px">
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
			  	</div>
			  	<!--ITEMS-->
			  	<div id="additem" class="tab-pane fade">
			    	<div class="container">
			    		<br />
						<h3 class="text-right">Items</h3>
						<hr />
						<div class="container">	
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
								      		<th>Item Code</th>
								      		<th>Item</th>
								      		<th>General Description</th>
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
								      		<td class="text-nowrap">
												<a href="#" class="btn btn-default btn-sm col-sm-12" data-toggle="modal" data-target="#ItemEdit">Edit</a>	
								      		</td>
								    	</tr>
								  	</tbody>
								</table> 
							</div>
							<!--EDIT MODAL-->
							<div class="modal fade" id="ItemEdit" tabindex="-1" role="dialog">
								 <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      	<div class="modal-header">
								        <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
								     	</div>
								      	<div class="modal-body">
								        	<div class="form-group">
												<label class="control-label col-md-4">Item Code: </label>
												<input type="text" class="col-md-6" >
											</div>
								        	<div class="form-group">
												<label class="control-label col-md-4">Change Item Name: </label>
												<input type="text" class="col-md-6" style="margin-top:10px">
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
			  	</div>
			</div>
		</div>		
	</body>
</html>