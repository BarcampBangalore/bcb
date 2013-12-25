<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Barcamp Bangalore 13<?php 
        if (!is_home())
        {
            wp_title('|');
        }
        
        ?>
        </title>
        <link href='http://fonts.googleapis.com/css?family=Questrial|Dosis|News+Cycle:400,700|PT+Sans|Pontano+Sans|Oxygen|Quattrocento+Sans' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
        <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/edtalmadge-Agile-Carousel-6bbb5fd/agile_carousel.css" >
        
        <?php wp_head(); ?>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js" ></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/libs/edtalmadge-Agile-Carousel-6bbb5fd/agile_carousel.alpha.js" ></script>
        <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
        <script type="text/javascript">
            
            tweets = new Array();
            current_tweet_index = 0;
            var images = new Array();
            
            plaza_slides = new Array();
            plaza_current_slide_index = 0; 
            
            
            function preload() {
                for (i = 0; i < preload.arguments.length; i++) {
                    images[i] = new Image()
                    images[i].src = preload.arguments[i]
                }
            }
            
            function rotate_tweets()
            {
                $("#tweets_deck").fadeOut('slow', function(){
                    $(this).html(tweets[current_tweet_index]);
                    current_tweet_index = (++current_tweet_index) % tweets.length;
                    $(this).fadeIn('slow');
                })
            }
            
            function rotate_plaza()
            {
                $(".plaza").fadeOut('slow', function(){
                    $(this).html(plaza_slides[plaza_current_slide_index].html()).fadeIn('slow', function(){
                        plaza_current_slide_index = ++plaza_current_slide_index % plaza_slides.length;
                        //setTimeout(rotate_plaza, 4000);
                    });
                });
            }
            
            
            $(function(){
                $.getJSON('http://search.twitter.com/search.json?callback=?', {q:"bcb13", result_type: "mixed", rpp: 20}, function(data){
                    
                    for (tweet in data.results)
                    {
                        tweets.push((data.results[tweet]).text + '<br><i>by ' + (data.results[tweet]).from_user + "</i>");
                    }
                    
                    rotate_tweets();
                    setInterval(rotate_tweets, 5000);
                    
                    
                });
                
                
                $("#gplus_main").hover(function(){
                   $(this).attr('src', "<?php bloginfo('template_url'); ?>/images/social/64/google_active_red.png");
                }, function(){
                    $(this).attr('src', "<?php bloginfo('template_url'); ?>/images/social/64/google_dark.png");
                });
                
                $("#fb_main").hover(function(){
                   $(this).attr('src', "<?php bloginfo('template_url'); ?>/images/social/64/facebook_active.png");
                }, function(){
                    $(this).attr('src', "<?php bloginfo('template_url'); ?>/images/social/64/facebook_dark.png");
                });
                
                $("#twitter_main").hover(function(){
                   $(this).attr('src', "<?php bloginfo('template_url'); ?>/images/social/64/twitter02_active.png");
                }, function(){
                    $(this).attr('src', "<?php bloginfo('template_url'); ?>/images/social/64/twitter02_dark.png");
                });
              
                
                preload(
                "<?php bloginfo('template_url'); ?>/images/social/64/google_active_red.png",
                "<?php bloginfo('template_url'); ?>/images/social/64/facebook_active.png",
                "<?php bloginfo('template_url'); ?>/images/social/64/twitter02_active.png"
                );
                
                
                <?php if (is_single() && is_user_logged_in()):  ?>
                    
                $("#neo_attend_button").click(function(){
                    $.post("<?php echo admin_url('admin-ajax.php?'.  http_build_query(array("action" => "toggle_attend", "post_id" => get_the_ID() ))); ?>", {}, function(data){
                        
                        if(data.status != 'OK')
                        {
                            alert(data.status);
                        }
                        else
                        {
                            $("#attendees_list").html(data.attendees_list);
                            $("#neo_attend_button").html(data.button_text);
                        }
                    }, 'json');
                });
                
                <?php endif; ?>
                
                
                
                
                $(".plaza_slide").each(function(){
                    plaza_slides.push($(this));
                });
                
                
                
                rotate_plaza();
                        
                    
                
                
                
                
            });
            
            
            
            
            
        </script>

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
        
        <div id="main_wrapper" >
            
                <header id="header">
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
                    <div style="clear: both">
                        <a href="<?php bloginfo('url'); ?>"><img id="barcamp_logo" alt="Barcamp Bangalore Logo" src="<?php bloginfo('template_url'); ?>/images/bcb13-logo.png" ></a>
                    </div>
                </header>
                <div id="main_area">
                <nav id="navigation">

                    <?php wp_page_menu(); ?>

                </nav>