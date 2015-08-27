<html>
<head>
<title>Elements Magazine: Ateneo Celadon's Official Publication</title>
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

	      	</div> <!-- Closes navbar-header -->

	
	      	<div class="collapse navbar-collapse menu navbar-right" id="bs-example-navbar-collapse-1"> <!-- Collapsible navigation bar -->
				
	      		<ul class="nav navbar-nav "> <!-- Navbar items -->
	      			
	      			<li class="nav-item"><a href="http://localhost/wordpress">HOME<span class="sr-only">(current)</span></a></li>
	      			<li class="dropdown nav-item" >
	      				<a href="#" class="dropdown-toggle" id="sections" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SECTIONS<span class="caret"></span></a>
	      				<ul class="dropdown-menu" aria-labelledby="sections">
	      					<?php wp_list_categories('title_li='); ?>
	      				</ul> <!-- Lists categories added by the admin -->
	      			</li>
	      			<li class="nav-item"><a href="#">ABOUT US</a></li>
	      			<li class="nav-item"><a href="#">CELADON</a></li>
	      			<li class="nav-item"><a href="#">PAST ISSUES</a></li>
      				<li> <!-- The search button -->
      					<a class="btn btn-danger btn-lg search-button" data-placement="bottom" data-toggle="popover" data-container="body" type="button" data-html="true" id="login">
      						<span class="glyphicon glyphicon-search" aria-hidden="true">
      						</span>
      					</a>
      				</li>
    				<div id="popover-content" class="hide"> <!-- Hidden search form -->
      					<form class="form-inline" role="form" method="get" action="<?php echo esc_url( home_url( '/' )); ?>"> 
        					<div class="form-group">
          						<input type="text" placeholder="Search" class="form-control" maxlength="5">
            					<button type="submit" class="btn btn-primary btn-danger">Go!</button>
       						 </div>
      					</form>
    				</div>
	      		</ul>
	      		
				
				<br><br><br>
				
	      	</div> <!-- Closes navbar-collapse -->
	    </div> <!-- Closes container-fluid -->
	</nav>
	</div> <!-- Closes header -->
</div> <!-- Closes wrapper -->
</head>


 <script src="<?php echo get_bloginfo('template_url') ?>/bootstrap/js/bootstrap.min.js"></script>
    
