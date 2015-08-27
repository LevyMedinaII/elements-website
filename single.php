<?php /*
Template Name: Article Page
*/ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container">

<div class="wrapper">
<div class="article">
<div class="article-pic">
	<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail(array(1000,1000));

	}  ?>
</div>
<div class="row">
<div class="col-md-9">
<div class="article-content">

<h2 class="article-title"><?php the_title(); ?></h2>
<hr>
 	 <?php the_content(); ?>
 <?php echo get_the_date(); ?>
</div>
</div>
<div class="col-md-3">
	<?php get_sidebar(); ?>
</div>
 
</div>
</div> 
</div>

<?php endwhile; ?>
<?php endif; ?>

</div>

<script src="<?php echo get_bloginfo('template_url') ?>/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
<?php get_sidebar(); ?>
<?php get_footer(); ?>