<?php 
/*generic page template: the default template used for pages that are created by the admin
*/
 ?>

<?php get_header(); ?>
<body <?php body_class(); ?>>
<div class="container">
	<div id="content" class="page-content">
		<?php while (have_posts()) : the_post(); ?>
			<div class="entry-content-page">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	</div>
</div>
<script src="<?php echo get_bloginfo('template_url') ?>/bootstrap/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
<?php get_footer(); ?>
</html>