<?php /*
Template Name: Article Page
*/ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container">
<h2 class="article-title"><?php the_title(); ?></h2> 
 <?php the_content(); ?>
 <?php echo get_the_date(); ?>

<?php endwhile; ?>
<?php endif; ?>
</div>