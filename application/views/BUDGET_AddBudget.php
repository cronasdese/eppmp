<!DOCTYPE html>
<html>
	<head>
		<title>Budget</title>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>">
	    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
	    <script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
	    <script src ="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	</head>
	<body>
		<!-- WHOLE NAVBAR -->
		<div class="container">
				<h2>Budget</h2>
				<hr/>
				<div class="col-md-8 col-md-offset-10 ">
					<div class="btn-toolbar">
					  	<div class="btn-group">
						   	<a href="#" class="btn btn-default btn-sm col-sm-12" data-toggle="modal" data-target="#addbudgetModal">
						   		<span class="glyphicon glyphicon-plus" aria-hidden="true" style="margin-right:5px" > </span> Add Budget
						   	</a>
						   		<!-- Add Office Modal -->
								<div class="modal fade" id="addbudgetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
									    <div class="modal-content">
									      	<div class="modal-header">
									        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        	<h4 class="modal-title" id="myModalLabel">Add Budget</h4>
									      	</div>
									      	<div class="modal-body">
									        	<div class="form-group">
													<label class="control-label col-md-3">Offices: </label>
												    <select>
												    	<option>Select Office</option>											    
												    </select>
								            	</div>
									        	<div class="form-group">
													<label class="control-label col-md-3">Budget: </label>
													<input type="text" label="Enter Budget">
												</div>	
									      	</div>
									      	<div class="modal-footer">
										        <div class="col-sm-offset-7">
										        	<button type="button" class="btn btn-primary btn-md">Add Budget</button>
										       		<button type="button" class="btn btn-default btn-md" data-dismiss="modal">Cancel</button>
										    	</div> 
									      	</div>
									    </div>
									</div>
								</div>
								<!--END OF ADD BUDGET MODAL-->
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
			    	<table class="table table-bordered table-hover">
					  	<thead>
					    	<tr>
					      		<th class="text-center">Office Code</th>
					      		<th class="text-center">Office/Unit</th>
					      		<th class="text-center">Estimated Budget</th>
					      		<th class="text-center">Alloted Budget</th>
					      		<!-- <th><!--Edit--><!--/th-->
					    	</tr>
					  	</thead>
					  	<tbody>
					    	<tr>
					      		<td class="text-center">Column content</td>	
		         	  			<td class="text-center">Column content</td>	      	
					      		<td class="text-center">Column content</td>
					      		<td class="text-center">Column content</td>
					      		<!--td class="text-nowrap">
									<a href="#" class="btn btn-default btn-sm col-sm-12" data-toggle="modal" data-target="#editModal">Edit</a>	
					      		</td-->
					    	</tr>
					  	</tbody>
					</table> 
				</div>	
      	</div>
	</body>
</html>