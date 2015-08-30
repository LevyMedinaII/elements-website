<?php /*
Template Name: Article Page
*/ ?>
<?php get_header(); ?> <!-- Calls the header.php -->
<head>
	<meta property="og:url"           content="<?php get_post_permalink(); ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="<?php echo get_template_directory_uri()  ?>/images/logo.png" />
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_CN/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container">

<div class="wrapper">
<div class="article">
<div class="article-pic"> <!-- Displays featured image of the article -->
	<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail(array(1000,1000));

	}  ?>
</div> <!--Closes article-pic-->
<div class="row">
<div class="col-md-9">
<div class="article-content">

<h2 class="article-title"><?php the_title(); ?><small class="article-author">  by <?php echo get_the_author(); ?> </small></h2> 
<hr>
	
    
 	 <?php the_content(); ?> <!-- displays article content -->
 <?php echo get_the_date(); ?>
</div> <!-- Closes article-content -->
</div> <!-- Closes col-md-9 -->
<div class="col-md-3">
	<?php get_sidebar(); ?>
</div>
 
</div> <!-- Closes row -->
</div> <!--Closes article-->
</div> <!--Closes wrapper-->

<?php endwhile; ?>
<?php endif; ?>

</div>

<script src="<?php echo get_bloginfo('template_url') ?>/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
<?php get_sidebar(); ?> <!-- Calls the sidebar.php -->
<?php get_footer(); ?>	<!-- Calls the footer.php -->