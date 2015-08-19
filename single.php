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
<div class="navbar-right">
					<ul class="nav navbar-nav">
						<li style=" font-size: 18px;">Follow Us: </li>
						<li><a class="icon" href="https://www.facebook.com/CeladonElementsMagazine"><img alt="Elements Magazine" id="icon" src="<?php echo get_bloginfo('template_url') ?>/images/facebook.png"/></a></li>
						<li><a class="icon" href="https://twitter.com/ElementsCeladon"><img alt="Elements Magazine" id="icon" src="<?php echo get_bloginfo('template_url') ?>/images/twitter.png"/></a></li>
						<li><a class="icon" href="#"><img alt="Elements Magazine" id="icon" src="<?php echo get_bloginfo('template_url') ?>/images/instagram.png"/></a></li>
					</ul>
				</div>
</div>