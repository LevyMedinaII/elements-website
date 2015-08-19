<!--Elements Home Page Created by Levy V. Medina II-->
<?php get_header(); ?>
<body
        <meta charset="utf-8">
        
        
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo get_bloginfo('template_url') ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<?php if (is_home()): ?>

<div class="container">
    <div id = "content">
    <?php while(have_posts()) :the_post(); ?>

        <div class="row">
            <div class="col-sm-6 col-md-10">
                <div class="thumbnail">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <img alt="Elements Magazine" id="bigpuppy" src="<?php echo get_bloginfo('template_url') ?>/images/placepuppy.jpg"/>
                        <div class="caption">
                            <p> <a href="<?php the_permalink() ?>" class="btn btn-default" role="button">Read</a> </p>
                        </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
        <!--<div class="row">
            <div class="col-sm-6 col-md-5">
                <div class="thumbnail">
                    <img alt="Elements Magazine" id="bigpuppy" src="<?php /*echo*/ get_bloginfo(/*'template_url'*/) ?>/images/placepuppy.jpg"/>
                        <div class="caption">
                            <p> <a href="#" class="btn btn-default" role="button">Button</a> </p>
                        </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-5">
                <div class="thumbnail">
                    <img alt="Elements Magazine" id="bigpuppy" src="<?php /*echo*/ get_bloginfo(/*'template_url'*/) ?>/images/placepuppy.jpg"/>
                        <div class="caption">
                            <p> <a href="#" class="btn btn-default" role="button">Button</a> </p>
                        </div>
                </div>
            </div>
        </div>-->
    </div>
    </div>
    <?php endif; ?>
<div class="navbar-right">
                    <ul class="nav navbar-nav">

                        <li style=" font-size: 18px;">Follow Us: </li>
                        <li><a class="icon" href="https://www.facebook.com/CeladonElementsMagazine"><img alt="Elements Magazine" id="icon" src="<?php echo get_bloginfo('template_url') ?>/images/facebook.png"/></a></li>
                        <li><a class="icon" href="https://twitter.com/ElementsCeladon"><img alt="Elements Magazine" id="icon" src="<?php echo get_bloginfo('template_url') ?>/images/twitter.png"/></a></li>
                        <li><a class="icon" href="#"><img alt="Elements Magazine" id="icon" src="<?php echo get_bloginfo('template_url') ?>/images/instagram.png"/></a></li>
                    </ul>
                </div>
                <!-- <div class="btn-group" role="group" aria-label="...">
  <a href="https://www.facebook.com/CeladonElementsMagazine" type="button" class="btn btn-default btn-icon"><img alt="Elements Magazine" id="icon" src="<?php echo get_bloginfo('template_url') ?>/images/facebook.png"/></a>
  <button type="button" class="btn btn-default">Middle</button>
  <button type="button" class="btn btn-default">Right</button>
</div> -->

</body>
<script type = "text/javascript">
    function toggle_visibility(id) {
        var e = document.getElementById(id);
        if(e.style.display == 'block')
            e.style.display = 'none';
        else
            e.style.display = 'block';
        }
</script>
<script src="<?php echo get_bloginfo('template_url') ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


</html>


