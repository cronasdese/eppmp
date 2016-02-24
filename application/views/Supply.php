<!DOCTYPE html>
<html>
	<head>
		<title>Supply</title>
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
				<h2>Supply</h2>
				<hr/>
					
				<div class="row">
					<table>
						<tr>
							<td style="padding:10px">
								<div class="control-group">
                                	<div class="controls">
                                    	<label class="col-sm-1">Category</label>
                                    	<select  class="col-sm-12">
                                        	<option value="0">Select Category</option>
                                    	</select>
                                	</div>
                            	</div>
                            </td>
							<td style="padding:10px">
								<div class="control-group">
                                	<div class="controls">
                                    	<label class="col-sm-1">Project</label>
                                    	<select class="col-sm-12" style="margin-right:5px">
                                        	<option value="0">Select Project</option>
                                    	</select>
                                	</div>
                            	</div>
                            </td>
							<td style="padding:10px">
								<div class="control-group">
                                	<div class="controls">
                                    	<label class="col-sm-1">Item</label>
                                    	<select class="col-sm-12" style="margin-right:5px">
                                        	<option value="0">Select Item</option>
                                    	</select>
                                	</div>
                            	</div>
                            </td>
							<td>
								<div class="control-group">
                                	<div class="controls">
                                    	<label class="col-sm-1">Price</label>
                                    	<input type="text" placeholder="Enter Price" style="margin-top:25px;margin-left:-20px; margin-right:0px"/>
                                	</div>
                            	</div>
                            </td>
							<td> 
								<button class="btn btn-default btn-sm col-sm-12" style="margin-top:25px">Delivered</button>	
							</td>
						</tr>	
					</table>	                    
				</div>
				<br />
				<br />
				<div class="row">		
			    	<table class="table table-bordered table-hover">
					  	<thead>
					    	<tr>
					      		<th class="text-center">Office</th>
					      		<th class="text-center">Project</th>
					      		<th class="text-center">Item</th>
					      		<th class="text-center">Price</th>
					      		<th class="text-center">Date Delivered</th>
					    	</tr>
					  	</thead>
					  	<tbody>
					    	<tr>
					      		<td class="text-center">Column content</td>	
		         	  			<td class="text-center">Column content</td>	      	
					      		<td class="text-center">Column content</td>
					      		<td class="text-center">Column content</td>
					      		<td class="text-center">Column content</td>
					    	</tr>
					  	</tbody>
					</table> 
				</div>	
      	</div>
	</body>
</html>