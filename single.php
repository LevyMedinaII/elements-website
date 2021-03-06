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
<body <?php body_class(); ?>>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container">

<div class="wrapper">
<div class="article">
<div class="article-pic"> <!-- Displays featured image of the article -->
  <?php if ( has_post_thumbnail() ) {
  the_post_thumbnail(array(1000,1000));
  }  ?>
  
</div> <!--Closes article-pic-->
<div class="article-content">
<div class="row">

<div class="col-md-9 col-xs-offset-1">


<h2 class="article-title"><?php the_title(); ?><br><small class="article-author">  by <?php echo get_the_author(); ?> </small></h2>
 
<hr>
  
    
   <?php the_content(); ?> <!-- displays article content -->
 <?php echo get_the_date(); ?>
</div> <!-- Closes col-md-9 -->

</div> <!-- Closes row -->
<hr>
<div class="row">
  <div class="sidebar">
  <?php get_sidebar(); ?>
  </div>
</div>

</div> <!-- Closes article-content -->

 

</div> <!--Closes article-->
</div> <!--Closes wrapper-->

<?php endwhile; ?>
<?php endif; ?>

</div>

<script src="<?php echo esc_url(get_template_directory_uri()) ?>/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
 <!-- Calls the sidebar.php -->
<?php get_footer(); ?>  <!-- Calls the footer.php -->