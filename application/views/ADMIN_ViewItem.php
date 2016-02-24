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
			  	<li class="active"><a data-toggle="tab" href="#categ">Category</a></li>
			  	<li><a data-toggle="tab" href="#subcateg">Subcategory</a></li>
			  	<li><a data-toggle="tab" href="#item">Items</a></li>
			  	<li class="nav nav-tabs navbar-right tabbg" style="margin:0px;padding:0px"><a style="margin:0px;" class="tabfont" data-toggle="tab" href="#additem">Add Items</a></li> 
			  	<li class="nav nav-tabs navbar-right tabbg" style="margin:0px;padding:0px"><a style="margin:0px;" class="tabfont" data-toggle="tab" href="#additem">Add Subcategory</a></li>
				<li class="nav nav-tabs navbar-right tabbg" style="margin:0px;padding:0px"><a style="margin:0px;" class="tabfont" data-toggle="tab" href="#addsubcateg">Add Category</a></li>
			</ul>
			<div class="tab-content">
			<!--CATEGORY-->
			  	<div id="categ" class="tab-pane fade in active">
			    	<div class="container">
			    		<br />
			    		<h3>Category</h3>
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
												<label class="control-label col-md-4">Category Code: </label>
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
			  	<div id="subcateg" class="tab-pane fade">
			    	<div class="container">
			    		<br />
			    		<h3>Subcategory</h3>
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
												<label class="control-label col-md-5">Subcategory Code: </label>
												<input type="text" class="col-md-6" >
											</div>
								        	<div class="form-group">
												<label class="control-label col-md-5">Change Subcategory Name: </label>
												<input type="text" class="col-md-6" style="margin-top:10px">
											</div>
							            	<div class="form-group">
												<label class="control-label col-md-5">Change Status: </label>
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
			  	<div id="item" class="tab-pane fade">
			    	<div class="container">
			    		<br />
			    		<h3>Items</h3>
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
								      		<th>Category</th>
								      		<th>Subcategory</th>
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
			  	<!--ADD CATEGORY-->
			  	<div id="addcateg" class="tab-pane fade">
			    	<div class="container">
			    		<br />
						<h3 class="text-right">Add Category</h3>
						<hr />
						<div class="container">	
							<table>
								<tr>
									<td class="text-nowrap">
										<label class="col-sm-5 control-label">New Category: </label>
										<input type="text" class="col-sm-12" placeholder="Enter New Subcategory"/>
									</td>
								</tr>
							</table>
							<br />
							<br />	
							<div class="row">
							 	<button type="submit" class="btn btn-primary btn-sm col-sm-2" style="margin-right:10px">Add</button>
							 	<button type="button" class="btn btn-sm col-sm-1">Cancel</button>
							</div>				
						</div>	
					</div>
			  	</div>
			  	<!--ADD SUBCATEGORY-->
			  	<div id="addsubcateg" class="tab-pane fade">
			    	<div class="container">
			    		<br />
						<h3 class="text-right">Add Subcategory</h3>
						<hr />
						<div class="container">	
							<table>
								<tr>
									<td class="text-nowrap">
										<label class="col-sm-5 control-label">Category: </label>
										<select name="category" id="category" class="col-sm-12">
						                	<option>Select Category</option>
						                </select>
									</td>
								</tr>
								<tr>	
									<td class="text-nowrap">
										<label class="control-label col-sm-3">Add Subcategory:</label>	
								    	<select name="subnum" id="subdropdown" class="col-md-12">
								    		<option value="">Select number</option>
								    		<option value="1">1</option>
								    		<option value="2">2</option>
								    		<option value="3">3</option>
								    		<option value="4">4</option>
								    		<option value="5">5</option>
								    		<option value="6">6</option>
								    		<option value="7">7</option>
								    		<option value="8">8</option>
								    		<option value="9">9</option>
								    		<option value="10">10</option>
								    	</select>
								    </td>
								</tr>
								<tr id="subtextbox" class="inline" colspan="3">
								</tr>
							</table>
							<br />
							<br />	
							<div class="row">
							 	<button type="submit" class="btn btn-primary btn-sm col-sm-2" style="margin-right:10px">Add</button>
							 	<button type="button" class="btn btn-sm col-sm-1">Cancel</button>
							</div>				
						</div>	
					</div>	
			  	</div>
			  	<!--ADD ITEMS-->
			  	<div id="additem" class="tab-pane fade">
			    	<div class="container">
			    		<br />
						<h3 class="text-right">Add Items</h3>
						<hr />
						<div class="container">	
							<table>
								<tr>
									<td class="text-nowrap">
										<label class="col-sm-5 control-label">Category: </label>
										<select name="category" id="category" class="col-sm-12">
						                	<option>Select Category</option>
						                </select>
									</td>
								</tr>
								<tr>
									<td class="text-nowrap">
										<label class="col-sm-5 control-label">Subcategory: </label>
										<select name="category" id="category" class="col-sm-12">
						                	<option>Select Subcategory</option>
						                </select>
									</td>
								</tr>
								<tr>	
									<td class="text-nowrap">
										<label class="control-label col-sm-3">Items: </label>	
								    	<select name="subnum" id="itemdropdown" class="col-md-12">
								    		<option value="">Select number</option>
								    		<option value="1">1</option>
								    		<option value="2">2</option>
								    		<option value="3">3</option>
								    		<option value="4">4</option>
								    		<option value="5">5</option>
								    		<option value="6">6</option>
								    		<option value="7">7</option>
								    		<option value="8">8</option>
								    		<option value="9">9</option>
								    		<option value="10">10</option>
								    	</select>
								    </td>
								</tr>
								<tr id="itemtextbox" class="inline" colspan="3">
								</tr>
							</table>
							<br />
							<br />	
							<div class="row">
							 	<button type="submit" class="btn btn-primary btn-sm col-sm-2" style="margin-right:10px">Add</button>
							 	<button type="button" class="btn btn-sm col-sm-1">Cancel</button>
							</div>				
						</div>	
					</div>
			  	</div>
			</div>
		</div>		
	</body>
</html>