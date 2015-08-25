<?php /*
Template Name: Article Page
*/ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container">
<h2 class="article-title"><?php the_title(); ?></h2>
<div class="article-content">
<div class="article-pic">
	<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail(array(1100,1100));

	}  ?>
</div>
<br>
	 <?php the_content(); ?>
 <?php echo get_the_date(); ?>
</div> 

<?php endwhile; ?>
<?php endif; ?>
<div class="navbar-right">
					<ul class="nav navbar-nav">
						<li style=" font-size: 18px;">Follow Us: </li>
						<li><a class="icon" href="https://www.facebook.com/CeladonElementsMagazine"><img alt="Elements Magazine" id="icon" src="<?php echo get_bloginfo('template_url') ?>/images/facebook.png"/></a></li>
						<li><a class="icon" href="https://twitter.com/ElementsCeladon"><img alt="Elements Magazine" id="icon" src="<?php echo get_bloginfo('template_url') ?>/images/twitter.png"/></a></li>
						<li><a class="icon" href="#"><img alt="Elements Magazine" id="icon" src="<?php echo get_bloginfo('template_url') ?>/images/instagram.png"/></a></li>
					</ul>
				</div>
</div>

<script src="<?php echo get_bloginfo('template_url') ?>/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<?php get_footer(); ?>