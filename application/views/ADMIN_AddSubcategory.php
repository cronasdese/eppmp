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
			    $("#dropdown").change(function() {
			        var selVal = $(this).val();
			        $("#textboxDiv").html('');
			        if(selVal > 0) {
			            for(var i = 1; i<= selVal; i++) {
			                $("#textboxDiv").append('<label class="col-sm-12 control-label">New Subcategory</label><input type="text" name="textVal[]" value="" class="col-sm-12" placeholder="Enter New Subcategory"/><br />');
			            }
			        }
			    });
			});
		</script>
	</head>
	<body>
		<div class="container">
			<h1>Add Subcategory</h1>
			<hr />
			<div class="container">	
				<form>
					<div class="form-group">
						<label class="col-sm-2 control-label">Category: </label>
						<select name="category" id="category">
		                	<option>Select Category</option>
		                </select>
		            </div>
		            <div class="row">  
						<table>
							<tr>
								<!--td> Add Subcategory: </td-->
								<td class="text-nowrap col-sm-3">
									<label class="control-label">Add Subcategory:</label>	
							    </td>
							    <td>
							    	<select name="numDep" id="dropdown" class="col-md-4">
							    		<option value="">Select number</option>
							    		<option value="0">0</option>
							    		<option value="1">1</option>
							    		<option value="2">2</option>
							    		<option value="3">3</option>
							    		<option value="4">4</option>
							    		<option value="5">5</option>
							    	</select>
							    </td>
							</tr>
							<tr id="textboxDiv" class="inline" colspan="3">
							</tr>
						</table>
					</div>
					<br />
					<br />	
					<div class="form-group col-sm-offset-1">
					 	<button type="submit" class="btn btn-primary btn-sm col-sm-1" name="action">Add</button>
                    	<button type="button" class="btn btn-sm col-sm-1" data-dismiss="modal">Cancel</button>
					</div>
				</form>				
			</div>	
		</div>		
	</body>
</html>