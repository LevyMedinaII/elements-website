<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_CN/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="sidebar">
<h3>Latest Articles</h3>
<br>
<ul>
<?php
	$args = array( 'numberposts' => '3' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		 ?>
     <?php if (has_post_thumbnail( $recent->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent->ID ), 'single-post-thumbnail' ); ?>
    <?php else :
    $image = get_bloginfo('stylesheet_directory') . '/images/placepuppy.jpg'; ?>
    <?php endif; ?>
<?php 
		echo '
				
				<div class="col-md-4">


					<h5 ><a class="recent-post-title" href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a></h5>

				</div>';
	}
?>
</ul>
<div class="fb-follow" data-href="https://www.facebook.com/CeladonElementsMagazine" data-layout="standard" data-show-faces="true"></div>
<div class="fb-share-button" 
        data-href="<?php get_post_permalink(); ?>" 
        data-layout="button_count">
    </div>
</div>

<!-- <div id="category-name" class="post-box" onclick="location.href='<?php the_permalink() ?>';" style="background-image: url('<?php echo $image[0]; ?>'); cursor:pointer;">


  <div class="post-inside">
    <h2 class="topTitle"><a class="topTitle" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <!-- <p class="topMeta">by <?php the_author_posts_link(); ?> on <?php the_time('M.d, Y') ?>, under <?php the_category(', '); ?></p> -->
    <!-- <div class="topContent"><?php the_content('(continue reading...)'); ?></div>
    <span class="topComments btn btn-default"><?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></span>
    <span class="topTags"><?php the_tags('<em>:</em>', ', ', ''); ?></span>
    <a class="topMore btn btn-default" href="<?php the_permalink() ?>">Read More...</a> -->
<!--   </div>
<div class="cleared"></div>

</div> --> 



<!-- <li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> -->