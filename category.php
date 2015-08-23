<?php /*
Template Name: Category Page
*/ ?>

<?php get_header(); ?>
<body>

<div id="main">

<div id="contentwrapper">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="topPost">
  <h2 class="pageTitle"> <!-- <a class="pageTitle" href="<?php the_permalink() ?>"> --> <?php the_title(); ?> <!-- </a> --> </h2>
  <div class="topContent"><?php the_content('(continue reading...)'); ?></div>
<div class="cleared"></div>
</div>
	<?php endwhile; else: endif; ?>

<?php query_posts('category_name='.get_permalink().'&post_status=publish,future');?>

<?php if (have_posts()) : ?>
  <div class="row">
<?php while (have_posts()) : the_post(); ?>

<?php if (function_exists('wp_list_comments')): ?>
<div <?php post_class(topPost); ?>>

<?php else : ?>
<div class="topPost">
<?php endif; ?>
<?php $postid = get_the_ID(); ?> 
<!-- <?php
$thumbnail = '';
if (function_exists('has_post_thumbnail')) {
    if ( has_post_thumbnail() ) {
         $thumbnail = get_the_post_thumbnail($postid->ID,'thumbnail');
    }

}
?>

  <div class="post-box" style="background-image: url('<?php echo $thumbnail; ?>')">
  <?php if ( has_post_thumbnail() ) {
  
}  ?> -->
<div class="col-md-4">
<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<?php else :
$image = get_bloginfo( 'stylesheet_directory') . '/images/default_cat_img.jpg'; ?>
<?php endif; ?>

<div id="category-name" class="post-box" onclick="location.href='<?php the_permalink() ?>';" style="background-image: url('<?php echo $image[0]; ?>'); cursor:pointer;">


  <div class="post-inside">
    <h2 class="topTitle"><a class="topTitle" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <!-- <p class="topMeta">by <?php the_author_posts_link(); ?> on <?php the_time('M.d, Y') ?>, under <?php the_category(', '); ?></p> -->
    <!-- <div class="topContent"><?php the_content('(continue reading...)'); ?></div>
    <span class="topComments btn btn-default"><?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></span>
    <span class="topTags"><?php the_tags('<em>:</em>', ', ', ''); ?></span>
    <a class="topMore btn btn-default" href="<?php the_permalink() ?>">Read More...</a> -->
  </div>
<div class="cleared"></div>

</div> <!-- Closes topPost -->

</div>
</div>
<?php endwhile; ?>
</div>
<?php else : ?>

<div class="topPost">
  <h2 class="topTitle"><a href="<?php the_permalink() ?>">Not Found</a></h2>
  <div class="topContent"><p>Sorry, but you are looking for something that isn't here. You can search again by using <a href="#searchform">this form</a>...</p></div>
</div> <!-- Closes topPost -->

<?php endif; ?>

<div id="nextprevious">
<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
<div class="cleared"></div>
</div>
</div> <!-- Closes contentwrapper-->

<?php get_sidebar(); ?>
<div class="cleared"></div>

</div><!-- Closes Main -->
</body>



<?php get_footer(); ?>