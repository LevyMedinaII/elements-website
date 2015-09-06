<?php /*
Template Name: Category Page
*/ ?>

<?php get_header(); ?>
<body <?php body_class(); ?>>

<div id="main">

<div id="contentwrapper">



<?php if (have_posts()) : ?>
  <div class="row">
<?php while (have_posts()) : the_post(); ?>


<?php $postid = get_the_ID(); ?> 

<div class="col-md-4">
<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<?php else :
$image = get_bloginfo( 'template_url') . '/images/placepuppy.jpg'; ?>
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
</div>
</div> <!-- Closes contentwrapper-->


<div class="cleared"></div>

</div><!-- Closes Main -->


<script src="<?php echo get_bloginfo('template_url') ?>/bootstrap/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</body>
<?php get_footer(); ?>