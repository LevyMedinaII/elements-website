<html>
<head>
<title>Elements Magazine: Ateneo Celadon's Official Publication</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo get_bloginfo('template_url') ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<div class="wrapper">
<div id="header">

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="custom-bootstrap-menu">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
      			</button>
		      	<a class="navbar-brand" href="http://elements.ateneo-celadon.org/">
		      		<img alt="Elements Magazine" id="logo" src="<?php echo get_bloginfo('template_url') ?>/images/logo.png"/>
				</a>

	      	</div>

	
	      	<div class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">
				
	      		<ul class="nav navbar-nav ">
	      			
	      			<li class="nav-item"><a href="http://localhost/wordpress">HOME<span class="sr-only">(current)</span></a></li>
	      			<li class="dropdown nav-item" >
	      				<a href="#" class="dropdown-toggle" id="sections" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SECTIONS<span class="caret"></span></a>
	      				<ul class="dropdown-menu" aria-labelledby="sections">
	      					<!-- <li><a href="http://localhost/wordpress/buhay-celadon">Buhay Celadon</a></li>
	      					<li><a href="http://localhost/wordpress/traditions">Traditions</a></li>
	      					<li><a href="http://localhost/wordpress/language/">Language</a></li>
	      					<li><a href="#">Lifestyle</a></li>
	      					<li><a href="#">People</a></li>
	      					<li><a href="#">Voices</a></li>
	      					<li><a href="#">Skills</a></li>
	      					<li><a href="#">Partners</a></li> -->
	      					<?php wp_list_categories('title_li='); ?>
	      				</ul>
	      			</li>
	      			<li class="nav-item"><a href="#">ABOUT US</a></li>
	      			<li class="nav-item"><a href="#">CELADON</a></li>
	      			<li class="nav-item"><a href="#">PAST ISSUES</a></li>
	      			<form class="navbar-form navbar-left" role="search" >
					        <div class="form-group">
					          <input type="text" class="form-control" placeholder="Search">
					        </div>
				        	<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				</form>
	      		</ul>
	      		
				
				<br><br><br>
				
	      	</div>
	    </div>
	</nav>
	</div>
</div>
</head>
<script src="<?php echo get_bloginfo('template_url') ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
        $(this).collapse('hide');
    }
});
    </script>