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
		<div>
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">  
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        	<span class="sr-only">Toggle navigation</span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
				        	<span class="icon-bar"></span>
				      	</button>
				      	<img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="logo" class="img-responsive" width="40" height="30" style="float:left; margin-top:5px; margin-right:10px"/> 
				      	<div class="navbar-brand">E-PPMP</div>
				    </div>

				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav">
					        <li> &nbsp; &nbsp; &nbsp; </li>
					        <li class="active"><a href="<?php echo base_url('Pages_controller/home'); ?>">Home</a></li>			      
					    </ul>
			      		<ul class="nav navbar-nav navbar-right">
			       		 	<li><a href="#" class="bodyclass">Notification &nbsp; <i class="glyphicon glyphicon-bell"></i></a></li>
					        <li class="dropdown">
					          	<?php echo'<a href="#" class="dropdown-toggle bodyclass" data-toggle="dropdown">'. $user_details[0]->name .' &nbsp; <b class="caret"></b></a>'; ?>
					         	<ul class="dropdown-menu">
						            <li><a href="<?php echo base_url('Pages_controller/profile'); ?>" class="bodyclass">Profile</a></li>
			            			<li class="divider"></li>
			            			<li><a href="<?php echo base_url('Pages_controller/logout'); ?>" class="bodyclass">Log-out</a></li>
			          			</ul>
			        		</li>
			      		</ul>
			    	</div><!-- /.navbar-collapse -->
				</div>	 	  
			</nav>	
		</div>   
	</body>
</html>