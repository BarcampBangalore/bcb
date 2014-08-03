<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta property="og:title" content="Barcamp Bangalore Spring 2014" />
        <meta property="og:description" content="Barcamp Bangalore is an open event focused around people, ideas and collaboration. You don't want to miss this confluence of amazing minds. It's the largest unconference in India and there are talks on variety of topics like Technology, Design, Startups & Entrepreneurship, Business & Management, Photography, User Experience, Your life learnings, and a lot more... " />
        <meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/barcamp-logo_fbog.png" />
        <!-- twitter cards meta -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@barcampbng">
        <meta name="twitter:title" content="BarCamp Bangalore Spring Edition 2014">
        <meta name="twitter:description" content="Barcamp Bangalore is an open event focused around people, ideas and collaboration. There is no fixed format and agenda. If you have an interesting topic to share or want to collaborate with folks with a variety of experience, Barcamp is the place for you.">
        <meta name="twitter:creator" content="">
        <meta name="twitter:image:src" content="https://pbs.twimg.com/media/BjLVbl3CAAAcgiD.png">
        <meta name="twitter:domain" content="barcampbangalore.org">
        <meta name="twitter:app:name:iphone" content="">
        <meta name="twitter:app:name:ipad" content="">
        <meta name="twitter:app:name:googleplay" content="">
        <meta name="twitter:app:url:iphone" content="">
        <meta name="twitter:app:url:ipad" content="">
        <meta name="twitter:app:url:googleplay" content="https://play.google.com/store/apps/details?id=com.bangalore.barcamp">
        <meta name="twitter:app:id:iphone" content="">
        <meta name="twitter:app:id:ipad" content="">
        <meta name="twitter:app:id:googleplay" content="com.bangalore.barcamp‎">
        <!-- done with twitter cards --> 
        <title>Barcamp Bangalore Spring 2014<?php
if (!is_home())
{
    wp_title('|');
}
?>
        </title>
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        
        <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
        <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/edtalmadge-Agile-Carousel-6bbb5fd/agile_carousel.css" >
        <link rel="shortcut icon" href="favicon.ico">

        <?php wp_head(); ?>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/libs/jquery-2.1.0.js" ></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/libs/edtalmadge-Agile-Carousel-6bbb5fd/agile_carousel.alpha.js" ></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/libs/jquery.isotope.js" ></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/libs/unslider.js"></script>
        <?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18321549-1']);
  _gaq.push(['_setDomainName', 'barcampbangalore.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



    </head>
    <body>


        <div id="header">
            
            <div id="user_login_div">
                <?php
                global $current_user;
                get_currentuserinfo();

                if (is_user_logged_in())
                {
                    echo '<a href="'.admin_url('profile.php').'">Hi '.$current_user->user_login.'</a> | ';

                }
                wp_loginout(get_permalink());
                ?>
                <?php if(is_user_logged_in()) : ?>
                | <a id="my_sessions_link" href="<?php echo get_author_posts_url($current_user->ID); ?>">My Sessions</a>

                <?php endif; ?>
            </div>
            
            <img id="logo" src="<?php bloginfo('template_url'); ?>/images/barcamp-logo.png" />
        </div>
        <div id="navbar">
            <?php wp_nav_menu(array()); ?> 
            <?php get_search_form(true);  ?>
        </div>
        
        
