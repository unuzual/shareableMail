<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head> 
	<title><?php echo SITE_TITLE; ?></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=ST_PATH?>css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?=ST_PATH?>css/custom.css" />
	<script type="text/javascript" src="<?=ST_PATH?>js/bootstrap.js"></script>
	<link rel="shortcut icon" href="framework/assets/img/favicon.png" type="image/x-icon">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
      	<div class="col-md-12">
      	<div class="col-md-2">
      		<div class="col-md-1">
      			<a href="<?php echo SOCIAL_FB;?>" class="img-responsive">
                	
                </a>
      		</div>
      		<div class="col-md-1 social" style="background-color: #7f4098; font-size:20px;">E</div>
      	</div>
        <div class="col-md-offset-2 col-md-8">
        	<?php headerLogin($_SESSION["logado"]);?>
		</div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>