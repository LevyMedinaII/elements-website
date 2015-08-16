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

<div class="container">
    <div id = "content">
        <div class="row">
            <div class="col-sm-6 col-md-10">
                <div class="thumbnail">
                    <img alt="Elements Magazine" id="bigpuppy" src="<?php echo get_bloginfo('template_url') ?>/images/placepuppy.jpg"/>
                        <div class="caption">
                            <p> <a href="#" class="btn btn-default" role="button">Button</a> </p>
                        </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-5">
                <div class="thumbnail">
                    <img alt="Elements Magazine" id="bigpuppy" src="<?php echo get_bloginfo('template_url') ?>/images/placepuppy.jpg"/>
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
<script src="<?php echo get_bloginfo('template_url') ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</html>
