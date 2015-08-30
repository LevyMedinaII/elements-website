<!--Elements Home Page Created by Levy V. Medina II--><?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Elements
 * @since Elements 1.0
 */?>
<?php get_header(); ?> 
<body <?php body_class( $class ); ?>>
       
<?php if (is_home()): ?>

<div class="container">
    <div id = "content">
    <?php while(have_posts()) :the_post(); ?>
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <?php else :
    $image = get_bloginfo('stylesheet_directory') . '/images/placepuppy.jpg'; ?>
    <?php endif; ?>
        <div class="row">
            <div class="col-sm-6 col-md-10">
                <div id="category-name" class="post-box" onclick="location.href='<?php the_permalink() ?>';" style="background-image: url('<?php echo $image[0]; ?>'); cursor:pointer;">
                    <div class="post-inside">
                    <h2 class="topTitle"><a class="topTitle" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <p class="topMeta">by <?php the_author_posts_link(); ?> on <?php the_time('M.d, Y') ?>, under <?php the_category(', '); ?></p>
    <!-- <div class="topContent"><?php the_content('(continue reading...)'); ?></div>
    <span class="topComments btn btn-default"><?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></span>
    <span class="topTags"><?php the_tags('<em>:</em>', ', ', ''); ?></span>
    <a class="topMore btn btn-default" href="<?php the_permalink() ?>">Read More...</a> -->
                    </div> <!-- Closes post-inside -->
                    <div class="cleared"></div>

                </div> <!-- Closes post-box -->
            </div>
        </div> <!-- Closes row -->
    <?php endwhile; ?>
        
    </div> <!-- Closes content -->
    </div> <!-- Closes container -->
    <?php endif; ?>



 <script src="<?php echo get_bloginfo('template_url') ?>/bootstrap/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>

<?php get_footer(); ?>
</html>


