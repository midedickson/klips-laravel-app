<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo MyFunctions::getSiteTitle(); ?> </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php $version=MyFunctions::getCurrentVersion(); ?>
	<!-- Stylesheets -->

	<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css?v=').$version); ?>"/>
	<link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css?v=').$version); ?>"/>
	<link rel="stylesheet" href="<?php echo e(asset('css/style.css?v=').$version); ?>"/>
	
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
<style>
    body{
        background-color: #095cac;
    }
    .login_logo{
        /* background-color: #095cac; */
        padding-top:15px;
        text-align:center
    }
    .login_div{
        position: absolute;
    right: 0;
    left: 0;
    margin: auto;
    top:8rem;
    
    }
</style>

</head>
<body >
	<section class="no-pad"> 
		<div class="main">	
				
		<!-- left menu -->	
		<div class="container-fluid">	
		<div class="row">
           	
		<!-- left menu -->		
		<!-- rightside-main -->
		<div class="col-lg-12 no-pad">
             <?php echo $__env->yieldContent('content'); ?>
        </div>
		<!-- rightside-main -->			
				</div>
				</div>	
			</div>	
			</div>	
	</section>
		
	<!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="<?php echo e(asset('js/bootstrap.min.js?v=').$version); ?>"></script>

	

</body>
</html>
<?php /**PATH /home/mide_dickson/klips/laravel_admin/resources/views/layouts/admin_login.blade.php ENDPATH**/ ?>