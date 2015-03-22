<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta property="og:title" content="Barcamp Bangalore Spring 2015" />
        <meta property="og:description" content="Barcamp Bangalore is an open event focused around people, ideas and collaboration. You don't want to miss this confluence of amazing minds. It's the largest unconference in India and there are talks on variety of topics like Technology, Design, Startups & Entrepreneurship, Business & Management, Photography, User Experience, Your life learnings, and a lot more... " />
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,600,700' rel='stylesheet' type='text/css'>
        <meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/bcbfbog.png" />
        <!-- twitter cards meta -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@barcampbng">
        <meta name="viewport" content="width=510, user-scalable=no">
        <meta name="twitter:title" content="Barcamp Bangalore Spring 2015">
        <meta name="twitter:description" content="Barcamp Bangalore is an open event focused around people, ideas and collaboration. There is no fixed format and agenda. If you have an interesting topic to share or want to collaborate with folks with a variety of experience, Barcamp is the place for you.">
        <meta name="twitter:creator" content="">
        <meta name="twitter:image:src" content="<?php bloginfo('template_url'); ?>/images/bcbfbog.png">
        <meta name="twitter:domain" content="barcampbangalore.org">
        <meta name="twitter:app:name:iphone" content="">
        <meta name="twitter:app:name:ipad" content="">
        <meta name="twitter:dnt" content="on">
        <meta name="twitter:app:name:googleplay" content="">
        <meta name="twitter:app:url:iphone" content="">
        <meta name="twitter:app:url:ipad" content="">
        <meta name="twitter:app:url:googleplay" content="https://play.google.com/store/apps/details?id=com.bangalore.barcamp">
        <meta name="twitter:app:id:iphone" content="">
        <meta name="twitter:app:id:ipad" content="">
        <meta name="twitter:app:id:googleplay" content="com.bangalore.barcamp‎">
        <!-- done with twitter cards --> 
        <title>Barcamp Bangalore Spring 2015<?php
if (!is_home())
{
    wp_title('|');
}
?>
        </title>
        
        <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
        <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/edtalmadge-Agile-Carousel-6bbb5fd/agile_carousel.css" >
        <link rel="shortcut icon" href="favicon.ico">

        <?php wp_head(); ?>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/libs/jquery-2.1.0.js" ></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/libs/edtalmadge-Agile-Carousel-6bbb5fd/agile_carousel.alpha.js" ></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/libs/jquery.isotope.js" ></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/libs/unslider.js"></script>
        
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/libs/jssor.slider.mini.js"></script>
        
        
        
        
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
<!-- include this stylesheet in your <head> -->
<link href="//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css" rel="stylesheet" />

 
<!-- And the oldIE version of course. Just think, one day we'll no longer have to do this! -->
<!--[if lte IE 8]>
<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.ie.css" />
<![endif]-->
 
<!-- then include the script file. if you're not sure where to include it, just before the </body> is probably a good choice -->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.js"></script>

 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#dialog-message" ).dialog({
modal: true,
minWidth: 350,
width: 350,
autoOpen: false,
 buttons: [
    {
        text: 'Save My Location',
        open: function() { $(this).addClass('b') }, //will append a class called 'b' to the created 'OK' button.
        click: function() {
        	var latlng = window['marker'].getLatLng();
        	console.log(latlng);
        	window['showMap']  = 1;
        	
         $.post("<?php echo admin_url('admin-ajax.php?' . http_build_query(array("action" => "set_user_location"))); ?>&location=" + latlng.lat + "%2c" + latlng.lng
         	 , {"location": this.loc }, function(data){
                 console.log(data);   
                   
                }, 'json'); 
         window['neverask'] = 1;
         $( this ).dialog( "close" );
         
        }
    },
    {
        text: "Never Ask",
        click: function() {$( this ).dialog( "close" );
            window['neverask'] = 1;
            $.post("<?php echo admin_url('admin-ajax.php?' . http_build_query(array("action" => "neverask"))); ?>"
             , {"sd": 0 }, function(data){
                   
                }, 'json'); 
        }
    },    
    {
        text: "Later",
        click: function() {$( this ).dialog( "close" );}
    }
  ]
});
});
</script>
<script type="application/ld+json">
{
   "@context": "http://schema.org",
   "@type": "WebSite",
   "url": "https://barcampbangalore.org/",
   "potentialAction": {
     "@type": "SearchAction",
     "target": "https://barcampbangalore.org/bcb/?s={search_term_string}",
     "query-input": "required name=search_term_string"
   }
}
</script>
<div itemscope itemtype="http://schema.org/WebSite">
  <meta itemprop="url" content="https://barcampbangalore.org/"/>
  <form itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction">
    <meta itemprop="target" content="https://barcampbangalore.org/bcb/?s={search_term_string}"/>
    <input itemprop="query-input" type="text" name="search_term_string" required/>
    <input type="submit"/>
  </form>
</div>
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
            
            <a href='<?php echo get_site_url(); ?>'><img id="logo" src="<?php bloginfo('template_url'); ?>/images/barcamp_17_logo.png" /></a>
        </div>
        <div id="navbar">
            <?php wp_nav_menu(array()); ?> 
            <?php get_search_form(true);  ?>
        </div>