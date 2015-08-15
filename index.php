<?php get_header(); ?>

        <meta charset="utf-8">
              
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        
<body>
    
    <div id = "content">
        <div class="row">
            <div class="col-sm-6 col-md-10">
                <div class="thumbnail">
                    <img alt="Elements Magazine" id="bigpuppy" " src="<?php echo get_bloginfo('template_url') ?>/images/placepuppy.jpg"/>
                        <div class="caption">
                            <p> <a href="#" class="btn btn-default" role="button">Button</a> </p>
                        </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-5">
                <div class="thumbnail">
                    <img alt="Elements Magazine" id="bigpuppy" " src="<?php echo get_bloginfo('template_url') ?>/images/placepuppy.jpg"/>
                        <div class="caption">
                            <p> <a href="#" class="btn btn-default" role="button">Button</a> </p>
                        </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-5">
                <div class="thumbnail">
                    <img alt="Elements Magazine" id="bigpuppy" src="<?php echo get_bloginfo('template_url') ?>/images/placepuppy.jpg"/>
                        <div class="caption">
                            <p> <a href="#" class="btn btn-default" role="button">Button</a> </p>
                        </div>
                </div>
            </div>
        </div>
    </div>
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
</html>
