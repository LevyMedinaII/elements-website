<div id="sidebar">
<h3>Latest Articles</h3>
<br>
<ul>
<?php
	$args = array( 'numberposts' => '5' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		 ?>
<?php 
		echo '<div class="row">
				
				<div class="recent-post">

					<h5 ><a class="recent-post-title" href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a></h5>

				</div>
			</div>';
	}
?>
</ul>
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