<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> <!-- links the style.css -->
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="<?php echo get_bloginfo('template_url') ?>/bootstrap/js/bootstrap.min.js"></script> <!-- links to javascript files -->



<div class="wrapper">
<div id="header">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="custom-bootstrap-menu">
		<div class="container-fluid"> 
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
      			</button> <!-- Navbar toggle button -->
		      	<a class="navbar-brand" href="http://elements.ateneo-celadon.org/">
		      		<img alt="Elements Magazine" id="logo" src="<?php echo get_bloginfo('template_url') ?>/images/logo.png"/>
				</a> <!-- Displays the Elements Magazine logo -->

	      	</div>
	<?php wp_nav_menu(array('sort_column' => 'menu_order', 'container_class' => 'collapse navbar-collapse menu navbar-right',
	'container_id' => 'bs-example-navbar-collapse-1', 'menu_class' => 'nav navbar-nav',  )) ?>
		</div>
	</nav>
</div>
</div>