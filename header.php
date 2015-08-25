<html>
<head>
<title>Elements Magazine: Ateneo Celadon's Official Publication</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="<?php echo get_bloginfo('template_url') ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>


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
      			</button>
		      	<a class="navbar-brand" href="http://elements.ateneo-celadon.org/">
		      		<img alt="Elements Magazine" id="logo" src="<?php echo get_bloginfo('template_url') ?>/images/logo.png"/>
				</a>

	      	</div>

	
	      	<div class="collapse navbar-collapse menu navbar-right" id="bs-example-navbar-collapse-1">
				
	      		<ul class="nav navbar-nav ">
	      			
	      			<li class="nav-item"><a href="http://localhost/wordpress">HOME<span class="sr-only">(current)</span></a></li>
	      			<li class="dropdown nav-item" >
	      				<a href="#" class="dropdown-toggle" id="sections" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SECTIONS<span class="caret"></span></a>
	      				<ul class="dropdown-menu" aria-labelledby="sections">
	      					<?php wp_list_categories('title_li='); ?>
	      				</ul>
	      			</li>
	      			<li class="nav-item"><a href="#">ABOUT US</a></li>
	      			<li class="nav-item"><a href="#">CELADON</a></li>
	      			<li class="nav-item"><a href="#">PAST ISSUES</a></li>
	      			

	      			<!-- <li class="btn btn-danger btn-lg search-button" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></li>
	      			<br>
	      			<form class="navbar-form navbar-right" role="search">
        				<div class="form-group">
          					<input type="text" class="form-control" placeholder="Search">
        				</div>
        			<button type="submit" class="btn btn-default">Submit</button>
      				</form>
      				</li> -->

      				<li><a class="btn btn-danger btn-lg" data-placement="bottom" data-toggle="popover" data-container="body" type="button" data-html="true" href="#" id="login"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
    <div id="popover-content" class="hide">
      <form class="form-inline" role="form">
        <div class="form-group">
          <input type="text" placeholder="Search" class="form-control" maxlength="5">
            <button type="submit" class="btn btn-primary btn-danger">Go!</button>
        </div>

        
      </form>
    </div>
	      		</ul>
	      		
				
				<br><br><br>
				
	      	</div>
	    </div>
	</nav>
	</div>
</div>
</head>


 <script src="<?php echo get_bloginfo('template_url') ?>/bootstrap/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
//     $(document).on('click','.navbar-collapse.in',function(e) {
//     if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
//         $(this).collapse('hide');
//     }
// });
//     </script>