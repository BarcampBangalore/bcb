<?php get_header(); ?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


<div id="homepage_cb1" style="background-image: url('<?php echo get_bloginfo('template_url').'/images/backdrop_bw.jpg' ?>')">
    <div id="homepage_ct1" class="container" >
        <div id="homepage_ct1_r1" class="row">
            <div class="col-xs-12">
                <div id="homepage_big_title">Barcamp Bangalore Monsoon 2015</div>
                <div id="homepage_big_title_tagline">Share your knowledge!</div>
            </div>
        </div>

        <div id="homepage_ct1_r2" class="row">
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2">
                <div class="homepage_location_card">
                    <img src="<?php echo get_bloginfo('template_url').'/images/calendar-icon_white.png' ?>" />
                    31st October 2015<br>
                    8:00 AM
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
                <div class="homepage_location_card">
                    <a target="_blank" href="https://www.google.co.in/maps/place/CMRIT/@12.9666193,77.7117629,17z/data=!3m1!4b1!4m2!3m1!1s0x3bae1225e87bd8f5:0x7896436c100b0272?hl=en">
                        <img src="<?php echo get_bloginfo('template_url').'/images/map-icon_white.png' ?>" />
                    </a>
                    CMR Institute of Technology<br>
                    ITPL Main road, Bangalore
                    
                </div>
            </div>
        </div>
        <div id="homepage_ct1_r3" class="row">
            <div class="col-xs-4 col-xs-offset-4 col-md-4 col-md-offset-4">
                <a href="#howtoregister">
                <div class="homepage_register_card">
                    Register Now
                </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="homepage_ct2" class="container">
    <div id="homepage_about_bcb_title">
        About BCB
    </div>
    <div id="homepage_about_bcb_description">
        Barcamp Bangalore is an open event focused around people, ideas and collaboration. 
        There is no fixed format and agenda. If you have an interesting topic to share or
        want to collaborate with folks with a variety of experience, Barcamp is the place 
        for you.
    </div>
</div>


<div id="homepage_cb3">
    <span id="howtoregister"></span>
    <div id="homapage_ct3" class="container">
        <div id="homepage_how_to_register_title">
            How to Register
        </div>
        <div id="homepage_how_to_register_description">
            This is how you register
        </div>
    </div>
</div>

<div id="homepage_cb4">
    <div id="homepage_ct4" class="container">
        <div id="homepage_techlash_title">
            Techlash
        </div>
        <div id="homepage_techlash_description">
            Techlash description
        </div>
    </div>
</div>

<div id="homepage_cb5">
    <div id="homepage_ct5" class="container">
        <div id="homepage_planners_title">
            Meet the Planners
        </div>
        <div id="homepage_planners_description row">
            <div class="homepage_planner_card col-xs-4 col-md-2 col-md-offset-1">
                <img class="homepage_planner_pic" src="<?php echo get_bloginfo('template_url').'/images/team/saurabh.jpg' ?>" />
                <div class="homepage_planner_name">Saurabh Minni</div>
                <div><a href="https://twitter.com/the100rabh">@the100rabh</a></div>
            </div>
            <div class="homepage_planner_card col-xs-4 col-md-2">
                <img class="homepage_planner_pic" src="<?php echo get_bloginfo('template_url').'/images/team/sathya.jpg' ?>" />
                <div class="homepage_planner_name">Sathyajit Bhat</div>
                <div><a href="https://twitter.com/SathyaBhat">@SathyaBhat</a></div>
            </div>
            <div class="homepage_planner_card col-xs-4 col-md-2">
                <img class="homepage_planner_pic" src="<?php echo get_bloginfo('template_url').'/images/team/aman.jpg' ?>" />
                <div class="homepage_planner_name">Aman Manglik</div>
                <div><a href="https://twitter.com/amanmanglik">@amanmanglik</a></div>
            </div>
            <div class="homepage_planner_card col-xs-4 col-md-2">
                <img class="homepage_planner_pic" src="<?php echo get_bloginfo('template_url').'/images/team/daaku.jpg' ?>" />
                <div class="homepage_planner_name">Amit Khare</div>
                <div><a href="https://twitter.com/daaku">@daaku</a></div>
            </div>
            <div class="homepage_planner_card col-xs-4 col-md-2">
                <img class="homepage_planner_pic" src="<?php echo get_bloginfo('template_url').'/images/team/vivek.jpg' ?>" />
                <div class="homepage_planner_name">Vivek</div>
                <div><a href="https://twitter.com/ivivekkm">@ivivekkm</a></div>
            </div>
        </div>
        
    </div>
</div>


<div id="homepage_cb6">
    <div id="homepage_ct6" class="container">
        <div id="homepage_sponsors_title">
            Sponsors
        </div>
        <div id="homepage_sponsors_description row">
            <div class="homepage_sponsor_card col-xs-6 col-md-4">
                <div class="homepage_sponsor_heading">Supported by</div>
                <div class="homepage_sponsor_logo_wrapper" ><a href="http://janastu.org/main.html"><img class="homepage_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/janastu_logo.gif" /></a></div>
            </div>
            <div class="homepage_sponsor_card col-xs-6 col-md-4">
                <div class="homepage_sponsor_heading">Friend of Barcamp</div>
                <div class="homepage_sponsor_logo_wrapper" ><a href="http://www.venturesity.com/"><img class="homepage_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/venturesity-logo.png" /></a></div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

