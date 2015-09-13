<body>
<div id="fb-root"></div>

<div id="sidebar">

<br>

  <h2>Latest Articles</h2>

<?php
  query_posts( 'posts_per_page=3' );

  while ( have_posts() ) : the_post(); 
?>
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <?php else :
    $image = get_bloginfo( 'template_url') . '/images/placepuppy.jpg'; ?>
    <?php endif; ?>
<div class="col-md-4">
  <div id="category-name" class="post-box" onclick="location.href='<?php the_permalink() ?>';" style="background-image: url('<?php echo $image[0]; ?>'); cursor:pointer;">


  <div class="post-inside">
    <h2 class="topTitle"><a class="topTitle" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
</div>
</div>
</div>
<?php endwhile; ?>
      </div>

<?php wp_reset_query(); ?>