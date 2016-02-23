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
			<!--ADD CATEGORY-->
			  	<div id="addcateg" class="tab-pane fade in active">
			    	<div class="container">
			    		<br />
						<h3 class="text-right">Add Category</h3>
						<hr />
						<form enctype="multipart/form-data" method="POST" action="<?php echo base_url('Admin_controller/addCategory'); ?>" enctype="multipart/form-data" data-parsley-validate>
							<div class="container">	
								<table>
									<tr>
										<td class="text-nowrap">
											<label class="col-sm-5 control-label">New Category: </label>
											<input id="category" name="category" type="text" class="col-sm-12" placeholder="Enter New Category" required />
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
						</form>
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