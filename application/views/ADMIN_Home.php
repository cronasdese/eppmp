<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href= "<?php echo base_url('assets/css/bootstrap-responsive.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" >
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mycss.css'); ?>">
		<script src ="<?php echo base_url('assets/js/jquery-2.1.4.min.js'); ?>"></script>
		<script src ="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript">
		    $(function(){
		    $(".dropdown").hover(            
	            function() {
	                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
	                $(this).toggleClass('open');
	                $('b', this).toggleClass("caret caret-up");                
	            },
	            function() {
	                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
	                $(this).toggleClass('open');
	                $('b', this).toggleClass("caret caret-up");                
	            });
		    });
		</script>
	</head>
	<body>	
		<div class="container">
			<div class="row">

			    <div class="col-lg-12">
			        <h1 class="page-header">Home</h1>
			    </div>
			    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
		    		<a class="thumbnail theight" href="<?php echo base_url('Pages_controller/adminAdd'); ?>">
			        	<h2 class="text-center" style="margin-top:40px"><span class="glyphicon glyphicon-edit"></span></h2>
		            	<h3 class="text-center text-nowrap">Supplies/Items</h3>
			        </a>
			    </div>
			     <div class="col-lg-3 col-md-4 col-xs-6 thumb theight">
			        <a class="thumbnail theight" href="<?php echo base_url('Pages_controller/adminAccounts'); ?>">
			        	<h1 class="text-center" style="margin-top:40px"><span class="glyphicon glyphicon-user"></span></h1>
			            <h3 class="text-center">Accounts</h3>
		            	<br />
			        </a>
			    </div>
			     <div class="col-lg-3 col-md-4 col-xs-6 thumb theight">
			        <a class="thumbnail theight" href="<?php echo base_url('Pages_controller/adminOffices'); ?>">
			        	<h1 class="text-center" style="margin-top:40px"><span class="glyphicon glyphicon-phone-alt"></span></h1>
			            <h3 class="text-center">Offices</h3>
		            	<br />
			        </a>
			    </div>         
			</div>
		</div>    
	</body>
</html>