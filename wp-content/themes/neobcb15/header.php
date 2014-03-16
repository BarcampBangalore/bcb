<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta property="og:title" content="Barcamp Bangalore Spring 2014" />
        <meta property="og:description" content="Barcamp Bangalore is an open event focused around people, ideas and collaboration. You don't want to miss this confluence of amazing minds. It's the largest unconference in India and there are talks on variety of topics like Technology, Design, Startups & Entrepreneurship, Business & Management, Photography, User Experience, Your life learnings, and a lot more... " />
        <meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/barcamp-logo_fbog.png" />
        <title>Barcamp Bangalore Spring 2014<?php
if (!is_home())
{
    wp_title('|');
}
?>
        </title>
        <link href='http://fonts.googleapis.com/css?family=Questrial|Dosis|News+Cycle:400,700|PT+Sans|Pontano+Sans|Oxygen|Quattrocento+Sans' rel='stylesheet' type='text/css'>
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
            <div>
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
            </div>
            <img id="logo" src="<?php bloginfo('template_url'); ?>/images/barcamp-logo.png" />
        </div>
        <div id="navbar">
            <?php wp_nav_menu(array()); ?> 
            <?php get_search_form(true);  ?>
        </div>
        
        
