<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta property="og:title" content="Barcamp Bangalore Spring 2016" />
        <meta property="og:description" content="Barcamp Bangalore is an open event focused around people, ideas and collaboration. You don't want to miss this confluence of amazing minds. It's the largest unconference in India and there are talks on variety of topics like Technology, Design, Startups & Entrepreneurship, Business & Management, Photography, User Experience, Your life learnings, and a lot more... " />
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/bcbog.png" />
        <!-- twitter cards meta -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@barcampbng">
        <meta name="viewport" content="width=510, user-scalable=no">
        <meta name="twitter:title" content="Barcamp Bangalore Spring 2016">
        <meta name="twitter:description" content="Barcamp Bangalore is an open event focused around people, ideas and collaboration. There is no fixed format and agenda. If you have an interesting topic to share or want to collaborate with folks with a variety of experience, Barcamp is the place for you.">
        <meta name="twitter:creator" content="">
        <meta name="twitter:image:src" content="<?php bloginfo('template_url'); ?>/images/bcbog.png">
        <meta name="twitter:domain" content="barcampbangalore.com">
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
        <title>Barcamp Bangalore Spring 2016<?php
if (!is_home())
{
    wp_title('|');
}
?>
        </title>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
        <link rel="shortcut icon" href="/bcb/favicon.ico">

        <?php wp_head(); ?>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/libs/jquery-2.1.0.js" ></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/libs/jquery.isotope.js" ></script>

        <?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18321549-1']);
  _gaq.push(['_setDomainName', 'barcampbangalore.com']);
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
   "url": "https://barcampbangalore.com/",
   "potentialAction": {
     "@type": "SearchAction",
     "target": "https://barcampbangalore.com/bcb/?s={search_term_string}",
     "query-input": "required name=search_term_string"
   }
}
</script>

    </head>
    <body>
        <script>

        function searchEnable(){
            document.getElementById('overlay').style.visibility = 'visible';
            document.onkeydown = function(evt) {
                evt = evt || window.event;
                if (evt.keyCode == 27) {
                    document.getElementById('overlay').style.visibility = 'hidden';
                }
            };
            enable();
        }

        function enable(){
            var overlay = document.getElementById('overlay');

            overlay.onclick = function(e){
                var overlay = document.getElementById('overlay');
                console.log(e);
                var target = (e && e.target) || (event && event.srcElement);
                var display = 'none';
                if(target == overlay){
                    overlay.style.visibility = 'hidden';

                }

            }
        }
        </script>
        <div id="header_container" class="header_container">
            
            <div id="header">

                <a href="#" onclick="javascript:searchEnable();" id="search_icon">
                    <img src="<?php bloginfo('template_url'); ?>/images/search.png" >
                </a>
                <a class="nav_item" href="https://barcampbangalore.com/planning" target="_blank">Our Story</a>
                <a class="nav_item" href="<?php echo get_permalink(get_page_by_path('sessions')) ?>">Proposed Sessions</a>
                <a class="nav_item" href="<?php echo get_permalink(get_page_by_path('add-a-session')) ?>">Add a Session</a>
                <a class="nav_item" href="http://barcampbangalore.com/bcb/live/schedule" target="_blank">Schedule</a>
                <a id="logo_large_screen" href="<?php echo home_url(); ?>" class="visible-lg-inline">
                    <div id="logo_large_screen">
                        <img height=107 src="<?php bloginfo('template_url'); ?>/images/header-05-logo.png">
                    </div>
                </a>
                <a class="nav_item" href="<?php echo get_permalink(get_page_by_path('techlash')) ?>">Techlash</a>
                <a class="nav_item" href="<?php echo get_permalink(get_page_by_path('videos')) ?>">Videos</a>
                <a class="nav_item" href="https://barcampbangalore.com/planning/sponsorship-prospectus-and-call-for-sponsors-for-barcamp-bangalore-spring-2016/" target="_blank">Become a Partner</a>
                <a class="nav_item" href="<?php echo get_permalink(get_page_by_path('archives')) ?>">Archives</a>
                <br>
                <a href="<?php echo home_url(); ?>" class="hidden-lg">
                    <div id="logo_small_screen">
                        <img height=107 src="<?php bloginfo('template_url'); ?>/images/header-05-logo.png">
                    </div>
                </a>
            </div>
            <div class="overlay" id="overlay" ><?php get_search_form(true); ?></div>

            <div id="logins">
                <?php
                global $current_user;
                get_currentuserinfo();
                if (is_user_logged_in()) {
                    echo '<a href="' . admin_url('profile.php') . '">Hi ' . $current_user->user_login . '</a>&nbsp; |&nbsp; ';
                } else {
                    echo "<a href=\"" . wp_registration_url() . "\" title=\"Sign Up\"> SIGN-UP </a>&nbsp; |&nbsp;";

                    echo "<a href=\"" . wp_login_url(get_permalink()) . "\" title=\"Login\"> LOGIN </a>";
                }
                ?>
                <?php if (is_user_logged_in()) : wp_loginout(get_permalink()); ?>
                    | <a id="my_sessions_link" href="<?php echo get_author_posts_url($current_user->ID); ?>">My Sessions</a>
                <?php endif; ?>
            </div>
            
        </div>
