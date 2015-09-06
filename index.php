<!--Elements Home Page Created by Levy V. Medina II--><?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Elements
 * @since Elements 1.0
 */?>
<?php get_header(); ?> 
<body <?php body_class(); ?>>
       
<?php if (is_home()): ?>
<?php $args = array( 'numberposts' => '6' ); ?>
<?php query_posts( $args ); ?>
<div class="container">
    <div id = "content">
        <?php $counter = 1; ?>
        <div class="row">
            <?php while(have_posts()) :the_post(); ?>
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <?php else :
            $image = get_bloginfo('stylesheet_directory') . '/images/placepuppy.jpg'; ?>
            <?php endif; ?>
            <?php if ($counter == 1): ?> 
            
              <div class="col-md-12">
                <div id="category-name" class="post-box" onclick="location.href='<?php the_permalink() ?>';" style="background-image: url('<?php echo $image[0]; ?>'); cursor:pointer;">
                      <div class="post-inside">
                      <h2 class="topTitle"><a class="topTitle" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                      
                      </div> <!-- Closes post-inside -->
                      <div class="cleared"></div>

                  </div> <!-- Closes post-box -->
                  &nbsp;
              </div>
            <?php $counter = $counter + 1; ?>
          <?php elseif ($counter == 2 || $counter == 3): ?> 
          
            <div class="col-md-6">
              <div id="category-name" class="post-box" onclick="location.href='<?php the_permalink() ?>';" style="background-image: url('<?php echo $image[0]; ?>'); cursor:pointer;">
                    <div class="post-inside">
                    <h2 class="topTitle"><a class="topTitle" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    
                    </div> <!-- Closes post-inside -->
                    <div class="cleared"></div>

                </div> <!-- Closes post-box -->
                &nbsp;
            </div>
           <?php $counter = $counter + 1; ?>
        <?php else: ?>
            <div class="col-md-4">
                <div id="category-name" class="post-box" onclick="location.href='<?php the_permalink() ?>';" style="background-image: url('<?php echo $image[0]; ?>'); cursor:pointer;">
                    <div class="post-inside">
                    <h2 class="topTitle"><a class="topTitle" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    
                    </div> <!-- Closes post-inside -->
                    <div class="cleared"></div>

                </div> <!-- Closes post-box -->
                &nbsp;
            </div>
             <?php $counter = $counter + 1; ?>
          <?php endif; ?>
        <?php endwhile; ?>
        </div> <!-- Closes row -->

        
    </div> <!-- Closes content -->
    </div> <!-- Closes container -->
    <?php endif; ?>



 <script src="<?php echo get_bloginfo('template_url') ?>/bootstrap/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>

<?php get_footer(); ?>
</html>


