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
			                $("#subtextbox").append('<label class="col-sm-12 control-label">New Subcategory</label><input type="text" name="subcategory['+i+'][subcategory]" value="" class="col-sm-12" placeholder="Enter New Subcategory" required/><br />');
			            }
			        }
			    });

			    $("#itemdropdown").change(function() {
			        var selVal = $(this).val();
			        $("#itemtextbox").html('');
			        if(selVal > 0) {
			            for(var i = 1; i<= selVal; i++) {
			                $("#itemtextbox").append('<label class="col-sm-12 control-label">New Item</label><input type="text" name="item['+i+'][item]" value="" class="col-sm-12" placeholder="Enter New Item" required/><input type="text" name="item['+i+'][unit]" value="" class="col-sm-12" placeholder="Enter Unit" required/><input type="text" name="item['+i+'][price]" value="" class="col-sm-12" placeholder="Enter Price" required pattern="^[0-9]*\.[0-9]{2}$"/><br />');
			            }
			        }
			    });

			    $('#tablecategory').on('click', function(){
			    	var id = event.target.id,
                    	type = id.replace(/[0-9]/g, ''),
                    	numberId = id.match(/\d+/)[0];

                    var category_id = document.getElementById('category_id' + numberId).innerHTML,
                    	category = document.getElementById('category_category' + numberId).innerHTML,
                    	status = document.getElementById('category_status' + numberId).innerHTML;

                    document.getElementById('category_id_edit').value = category_id;
                    document.getElementById('category_edit').value = category;

                    if(status == "Activated"){
                    	status = 1;
                    }
                    else{
                    	status = 0;
                    }

                    document.getElementById('category_status_edit').value = status;
			    });

			    $('#edit_category_button').click(function(){
			    	var category_id = document.getElementById('category_id_edit').value,
			    		category = document.getElementById('category_edit').value,
			    		status = $('#category_status_edit').val();

			    	if(category == ""){
			    		alert('Category field must have a value');
			    	}
			    	else{
			    		$.ajax({
	                        type: "POST",
	                        url: "<?php echo base_url('Admin_controller/editCategory'); ?>",
	                        data: { category_id : category_id,
	                        		category : category,
	                        		status : status
	                        	},
	                        dataType: 'json',
	                        success: function(data) {
	                            alert('You have successfully edited a category.');
	                            location.reload();
	                        },
	                        error: function(errorw) {
	                            alert("error");
	                        }
	                    });
			    	}
			    });

			    $('#tablesubcategory').on('click', function(){
			    	var id = event.target.id,
                    	type = id.replace(/[0-9]/g, ''),
                    	numberId = id.match(/\d+/)[0];

                    var subcategory_id = document.getElementById('subcategory_id' + numberId).innerHTML,
                    	subcategory = document.getElementById('subcategory_subcategory' + numberId).innerHTML,
                    	status = document.getElementById('subcategory_status' + numberId).innerHTML;

                    //alert(subcategory_id);
                    document.getElementById('subcategory_id_edit').value = subcategory_id;
                    document.getElementById('subcategory_edit').value = subcategory;

                    if(status == "Activated"){
                    	status = 1;
                    }
                    else{
                    	status = 0;
                    }

                    document.getElementById('subcategory_status_edit').value = status;
			    });

			    $('#edit_subcategory_button').click(function(){
			    	var subcategory_id = document.getElementById('subcategory_id_edit').value,
			    		subcategory = document.getElementById('subcategory_edit').value,
			    		status = $('#subcategory_status_edit').val();

			    	if(subcategory == ""){
			    		alert('Subcategory field must have a value');
			    	}
			    	else{
			    		$.ajax({
	                        type: "POST",
	                        url: "<?php echo base_url('Admin_controller/editSubcategory'); ?>",
	                        data: { subcategory_id : subcategory_id,
	                        		subcategory : subcategory,
	                        		status : status
	                        	},
	                        dataType: 'json',
	                        success: function(data) {
	                            alert('You have successfully edited a subcategory.');
	                            location.reload();
	                        },
	                        error: function(errorw) {
	                            alert("error");
	                        }
	                    });
			    	}
			    });

			    $('#tableitem').on('click', function(){
			    	var id = event.target.id,
                    	type = id.replace(/[0-9]/g, ''),
                    	numberId = id.match(/\d+/)[0];

                    var item_id = document.getElementById('item_id' + numberId).innerHTML,
                    	item_name = document.getElementById('supply_description' + numberId).innerHTML,
                    	unit = document.getElementById('unit' + numberId).innerHTML,
                    	price = document.getElementById('price' + numberId).innerHTML,
                    	status = document.getElementById('item_status' + numberId).innerHTML;

                    //alert(subcategory_id);
                    document.getElementById('item_id_edit').value = item_id;
                    document.getElementById('item_name_edit').value = item_name;
                    document.getElementById('item_unit_edit').value = unit;
                    document.getElementById('item_price_edit').value = price;

                    if(status == "Activated"){
                    	status = 1;
                    }
                    else{
                    	status = 0;
                    }

                    document.getElementById('item_status_edit').value = status;
			    });

			    $('#edit_item_button').click(function(){
			    	var item_id = document.getElementById('item_id_edit').value,
			    		supply_description = document.getElementById('item_name_edit').value,
			    		unit = document.getElementById('item_unit_edit').value,
			    		price = document.getElementById('item_price_edit').value,
			    		status = $('#item_status_edit').val();

			    	if(supply_description== ""){
			    		alert('Item name field must have a value');
			    	}
			    	else if(isNaN(price)){
			    		alert('Unit field must have a value');
			    	}
			    	else if(price == ""){
			    		alert('Price must have a value and must be a number');
			    	}
			    	else{
			    		$.ajax({
	                        type: "POST",
	                        url: "<?php echo base_url('Admin_controller/editItem'); ?>",
	                        data: { item_id : item_id,
	                        		supply_description : supply_description,
	                        		unit : unit,
	                        		price : price,
	                        		status : status
	                        	},
	                        dataType: 'json',
	                        success: function(data) {
	                            alert('You have successfully edited an item.');
	                            location.reload();
	                        },
	                        error: function(errorw) {
	                            alert("error");
	                        }
	                    });
			    	}
			    });

			    $.ajax({ 
	                url: "<?php echo base_url('Supplies_controller/getCategory'); ?>",
	                dataType: 'json',
	                success: function(data) {
	                    $(data).each(function(){
	                        $("#subcategory_category").append($('<option>', {
	                            value: this.id,
	                            text: this.category,
	                        }));
	                    })
	                },
	                error: function(errorw) {
	                    alert("error");
	                }
	            });

	            $.ajax({ 
	                url: "<?php echo base_url('Supplies_controller/getCategoryWithSubcategory'); ?>",
	                dataType: 'json',
	                success: function(data) {
	                    $(data).each(function(){
	                        $("#item_category").append($('<option>', {
	                            value: this.id,
	                            text: this.category,
	                        }));
	                    })
	                },
	                error: function(errorw) {
	                    alert("error");
	                }
	            });

			    var init_category = 1;
	            $.ajax({ 
	            	type: "POST",
	                url: "<?php echo base_url('Supplies_controller/getSubcategory'); ?>",
	                data: { category : init_category },
	                dataType: 'json',
	                success: function(data) {
	                	//alert(data);
	                    $(data).each(function(){
	                        $("#item_subcategory").append($('<option>', {
	                            value: this.id,
	                            text: this.subcategory,
	                        }));
	                    })
	                },
	                error: function(errorw) {
	                    alert("error");
	                }
	            });

	            $('#item_category').change(function(){
	            	var category = $('#item_category').val();

	            	$('#item_subcategory > option').remove();

	            	$.ajax({ 
		            	type: "POST",
		                url: "<?php echo base_url('Supplies_controller/getSubcategory'); ?>",
		                data: { category : category },
		                dataType: 'json',
		                success: function(data) {
		                	//alert(data);
		                    $(data).each(function(){
		                        $("#item_subcategory").append($('<option>', {
		                            value: this.id,
		                            text: this.subcategory,
		                        }));
		                    })
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
	<br />
	<br />
		<div class="container">		
			<ul class="nav nav-tabs">
			  	<li class="active"><a data-toggle="tab" href="#categ">Category</a></li>
			  	<li><a data-toggle="tab" href="#subcateg">Subcategory</a></li>
			  	<li><a data-toggle="tab" href="#item">Items</a></li>
			  	<li class="nav nav-tabs navbar-right tabbg" style="margin:0px;padding:0px"><a style="margin:0px;" class="tabfont" data-toggle="tab" href="#additem">Add Items</a></li> 
			  	<li class="nav nav-tabs navbar-right tabbg" style="margin:0px;padding:0px"><a style="margin:0px;" class="tabfont" data-toggle="tab" href="#addsubcateg">Add Subcategory</a></li>
				<li class="nav nav-tabs navbar-right tabbg" style="margin:0px;padding:0px"><a style="margin:0px;" class="tabfont" data-toggle="tab" href="#addcateg">Add Category</a></li>
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

								  	<tbody id="tablecategory">
								  		<?php
								  			if(is_array($category) || is_object($category)){
								  				$row = 1;
								  				foreach ($category as $category_details) {
								  					echo								
											    	'<tr>
											      		<td id="category_id'. $row .'">'. $category_details->id .'</td>	
								         	  			<td id="category_category'. $row .'">'. $category_details->category .'</td>';      	
											      		if($category_details->status == 1){
											      			echo '<td id="category_status'. $row .'">Activated</td>';
											      		}
											      		else{
											      			echo '<td id="category_status'. $row .'">Deactivated</td>';
											      		}
											      		echo '<td class="text-nowrap">
															<a id="edit_category'. $row .'"href="#" class="btn btn-default btn-sm col-sm-12" data-toggle="modal" data-target="#CategoryEdit">Edit</a>	
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
							<div class="modal fade" id="CategoryEdit" tabindex="-1" role="dialog">
								 <div class="modal-dialog" role="document">
							 		<div class="modal-content">
								      	<div class="modal-header">
								        <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
								     	</div>
								      	<div class="modal-body">
								        	<div class="form-group">
												<label class="control-label col-md-5">Category Code: </label>
												<input id="category_id_edit" type="text" class="col-md-6" readonly>
											</div>
								        	<div class="form-group">
												<label class="control-label col-md-5">Change Category Name: </label>
												<input id="category_edit" type="text" class="col-md-6" style="margin-top:10px" required>
											</div>
							            	<div class="form-group">
												<label class="control-label col-md-5">Change Status: </label>
											    <select id="category_status_edit" style="margin-top:12px">
											    	<option value="0">Deactivate</option>
											    	<option value="1">Activate</option>
											    </select>
							            	</div>	
								      	</div>
								      	<div class="modal-footer">
								      		<div class="col-sm-offset-7">
									        	<button id="edit_category_button" type="button" class="btn btn-primary btn-md">Save changes</button>
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

								  	<tbody id="tablesubcategory">
								  		<?php
								  			if(is_array($subcategory) || is_object($subcategory)){
								  				$row = 1;
								  				foreach ($subcategory as $subcategory_details) {
								  					echo								
											    	'<tr>
											      		<td id="subcategory_id'. $row .'">'. $subcategory_details->id .'</td>	
								         	  			<td id="subcategory_subcategory'. $row .'">'. $subcategory_details->subcategory .'</td>
								         	  			<td id="category_subcategory'. $row .'">'. $subcategory_details->category .'</td>';      	
											      		if($subcategory_details->status == 1){
											      			echo '<td id="subcategory_status'. $row .'">Activated</td>';
											      		}
											      		else{
											      			echo '<td id="subcategory_status'. $row .'">Deactivated</td>';
											      		}
											      		echo '<td class="text-nowrap">
															<a id="edit_category'. $row .'"href="#" class="btn btn-default btn-sm col-sm-12" data-toggle="modal" data-target="#SubcategoryEdit">Edit</a>	
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
							<div class="modal fade" id="SubcategoryEdit" tabindex="-1" role="dialog">
								 <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      	<div class="modal-header">
								        <h4 class="modal-title" id="myModalLabel">Edit Subcategory</h4>
								     	</div>
								      	<div class="modal-body">
								        	<div class="form-group">
												<label class="control-label col-md-5">Subcategory Code: </label>
												<input id="subcategory_id_edit" type="text" class="col-md-6" readonly>
											</div>
								        	<div class="form-group">
												<label class="control-label col-md-5">Change Subcategory Name: </label>
												<input id="subcategory_edit" type="text" class="col-md-6" style="margin-top:10px">
											</div>
							            	<div class="form-group">
												<label class="control-label col-md-5">Change Status: </label>
											    <select id="subcategory_status_edit" style="margin-top:12px">
											    	<option value="0">Deactivate</option>
											    	<option value="1">Activate</option>
											    </select>
							            	</div>	
								      	</div>
								      	<div class="modal-footer">
								      		<div class="col-sm-offset-7">
									        	<button id="edit_subcategory_button"type="button" class="btn btn-primary btn-md">Save changes</button>
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
								      		<th>Category</th>
								      		<th>Subcategory</th>
								      		<th>Item</th>
								      		<th>Unit</th>
								      		<th>Price</th>
								      		<th>Status</th>
								      		<th><!--Edit--></th>
								    	</tr>
								  	</thead>

								  	<tbody id="tableitem">
								  		<?php
								  			if(is_array($items) || is_object($items)){
								  				$row = 1;
								  				foreach ($items as $item_details) {
								  					echo								
											    	'<tr>
											      		<td id="item_id'. $row .'">'. $item_details->id .'</td>	
								         	  			<td id="category_item'. $row .'">'. $item_details->category .'</td>
								         	  			<td id="subcategory_item'. $row .'">'. $item_details->subcategory .'</td>
								         	  			<td id="supply_description'. $row .'">'. $item_details->supply_description .'</td>
								         	  			<td id="unit'. $row .'">'. $item_details->unit .'</td>
								         	  			<td id="price'. $row .'">'. $item_details->price .'</td>';      	
											      		if($item_details->status == 1){
											      			echo '<td id="item_status'. $row .'">Activated</td>';
											      		}
											      		else{
											      			echo '<td id="item_status'. $row .'">Deactivated</td>';
											      		}
											      		echo '<td class="text-nowrap">
															<a id="edit_category'. $row .'"href="#" class="btn btn-default btn-sm col-sm-12" data-toggle="modal" data-target="#ItemEdit">Edit</a>	
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
							<div class="modal fade" id="ItemEdit" tabindex="-1" role="dialog">
								 <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      	<div class="modal-header">
								        <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
								     	</div>
								      	<div class="modal-body">
								        	<div class="form-group">
												<label class="control-label col-md-4">Item Code: </label>
												<input id="item_id_edit" type="text" class="col-md-6" readonly>
											</div>
								        	<div class="form-group">
												<label class="control-label col-md-4">Change Item Name: </label>
												<input id="item_name_edit" type="text" class="col-md-6" style="margin-top:10px">
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Change Item Price: </label>
												<input id="item_price_edit" type="text" class="col-md-6" style="margin-top:10px">
											</div>
											<div class="form-group">
												<label class="control-label col-md-4">Change Item Unit: </label>
												<input id="item_unit_edit" type="text" class="col-md-6" style="margin-top:10px">
											</div>
							            	<div class="form-group">
												<label class="control-label col-md-4">Change Status: </label>
											    <select id="item_status_edit" style="margin-top:12px">
											    	<option value="0">Deactivate</option>
											    	<option value="1">Activate</option>
											    </select>
							            	</div>	
								      	</div>
								      	<div class="modal-footer">
								      		<div class="col-sm-offset-7">
									        	<button id="edit_item_button" type="button" class="btn btn-primary btn-md">Save changes</button>
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
							<form enctype="multipart/form-data" method="POST" action="<?php echo base_url('Admin_controller/addCategory'); ?>" enctype="multipart/form-data" data-parsley-validate>
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
								 	<button type="submit" name="action" class="btn btn-primary btn-sm col-sm-2" style="margin-right:10px">Add</button>
								</div>	
							</form>	
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
							<form enctype="multipart/form-data" method="POST" action="<?php echo base_url('Admin_controller/addSubcategory'); ?>" enctype="multipart/form-data" data-parsley-validate>
								<table>
									<tr>
										<td class="text-nowrap">
											<label class="col-sm-5 control-label">Category: </label>
											<select id="subcategory_category" name="subcategory_category" id="category" class="col-sm-12">
							                </select>
										</td>
									</tr>
									<tr>	
										<td class="text-nowrap">
											<label class="control-label col-sm-3">Add Subcategory:</label>	
									    	<select id="subdropdown" class="col-md-12">
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
								 	<button type="submit" name="action" class="btn btn-primary btn-sm col-sm-2" style="margin-right:10px">Add</button>
								</div>	
							</form>			
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
							<form enctype="multipart/form-data" method="POST" action="<?php echo base_url('Admin_controller/addItems'); ?>" enctype="multipart/form-data" data-parsley-validate>
								<table>
									<tr>
										<td class="text-nowrap">
											<label class="col-sm-5 control-label">Category: </label>
											<select id="item_category" name="item_category" class="col-sm-12">
							                </select>
										</td>
									</tr>
									<tr>
										<td class="text-nowrap">
											<label class="col-sm-5 control-label">Subcategory: </label>
											<select id="item_subcategory" name="item_subcategory" class="col-sm-12">
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
								 	<button type="submit" name="action" class="btn btn-primary btn-sm col-sm-2" style="margin-right:10px">Add</button>
								 	<button type="button" class="btn btn-sm col-sm-1">Cancel</button>
								</div>	
							</form>	
						</div>	
					</div>
			  	</div>
			</div>
		</div>		
	</body>
</html>