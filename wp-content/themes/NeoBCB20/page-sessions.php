<?php get_header(); ?>
<div id="dialog-message" title="Update your Location">
<div id="leafletmap"></div>
<i class="fa fa-map-marker"></i>
<p>Please share your location so that we can have
an awesome chart of where people converge at the venue from.
</p>
</div>

<div class="container-fluid">
    <div id="sessions_page_content" class="row" style="padding-top: 100px;">


        <script type="text/javascript">



            $(function() {



  

                $(".sessions_page_card_attend_button").on("click", ".neo_attend_button", function() {
                    
                    var card = $(this);
                    card.html('<img src="<?php bloginfo('template_url') ?>/images/ajaxloader.gif" />');

                    $.post("<?php echo admin_url('admin-ajax.php?' . http_build_query(array("action" => "toggle_attend"))); ?>", {post_id: $(this).data("postid")}, function(data) {

                        if (data.status != 'OK')
                        {
                            var r = confirm(data.status);
                            if (r == true)
                            {
                                window.location.href = "<?php echo wp_login_url(get_permalink()); ?>";
                            }
                            card.parent().html(data.button_text);
                        }
                        else
                        {

                            $("#sessions_page_card_attendees_count_" + card.data("postid")).html(data.attendees_count );
                            card.parent().html(data.button_text);
                        }
                    }, 'json');
                });




                $(".sessions_page_track_button").hover(function(){
                    
                    $(this).animate({width: '200px'}, 300);
                    $(this).find(".sessions_page_track_icon_name").show(300);
                
                }, function(){
                    
                    $(this).animate({width: '50px'}, 300);
                    $(this).find(".sessions_page_track_icon_name").hide(300);
                    
                });
                





            });
            
            
            
            
            function showOnly(trackid){

                var allSessionCards = document.getElementsByClassName("sessions_page_card");
                var lastSelected = false;
                if(document.lastselected == trackid){
                    lastSelected = true;
                    document.lastselected = 0;
                }
                else{
                    document.lastselected = trackid;
                }
                var showCards = new Array();
                for (var i = 0; i < allSessionCards.length; i++) {
                    var sessionCard = allSessionCards[i];
                    //console.log(sessionCard.getAttribute("data-track-id"));
                    $(sessionCard).fadeOut(500, function () {
                        $(this).css({display:"none"});});
                    if(lastSelected == true){
                        //  setTimeout(function(sessionCard){$(sessionCard).fadeIn(1500, function (sessionCard) {
                        //     $(sessionCard).css({display:""});
                        // });}, 1000);
                        showCards.push(sessionCard);
                    }
                    else{
                        if(sessionCard.getAttribute("data-track-id") != trackid){
                            // $(sessionCard).fadeOut(500, function () {
                            //     $(this).css({display:"none"});
                            // });
                            // sessionCard.style.display='none' ;
                        }
                        else{
                            // setTimeout(function(sessionCard){$(sessionCard).fadeIn(1500, function (sessionCard) {
                            //     $(sessionCard).css({display:""});
                            // });}, 1000);
                            showCards.push(sessionCard);
                        }

                    }
                }
                if(showCards.length > 0 ){
                    setTimeout(function(){
                            for(var i =0; i < showCards.length; i++){
                                var sessionCard = showCards[i];
                                $(sessionCard).fadeIn(1000, function () {
                                    $(this).css({display:""});});

                            }
                    }, 400);
                }
                var  showButton = new Array();
                var allButtons = document.getElementsByClassName("sessions_page_track_button");
                for (var i = 0; i < allButtons.length; i++) {
                    var button = allButtons[i];
                    $(button).fadeIn(500, function () {
                        $(this).css({opacity:0.3});
                    });
                    if(lastSelected == true){
                        // setTimeout(function(button){$(button).fadeIn(1500, function (button) {
                        //     $(button).css({opacity:1});
                        // });}, 1000);
                        showButton.push(button);
                    }
                    else{
                        if(button.getAttribute("data-track-id") != trackid){
                            $(button).fadeIn(500, function () {
                                $(this).css({opacity:0.3});
                            });
                        }
                        else{
                            // setTimeout(function(button){$(button).fadeIn(1500, function (button) {
                            //     $(button).css({opacity:1});
                            // });}, 1000);
                            showButton.push(button);
                        }
                    }
                }

                if(showButton.length > 0 ){
                    setTimeout(function(){
                            for(var i =0; i < showButton.length; i++){
                                var button = showButton[i];
                                $(button).fadeIn(500, function () {
                                    $(this).css({opacity:1});});

                            }
                    }, 400);
                }

            }
        </script>


        <div id="sessions_page_track_buttons_container"  class="col-xs-12 col-sm-1">
            <div class="sessions_page_track_button track_color_bg_1564" onclick="showOnly(1564)" data-track-id="1564">
                <img src="<?php echo get_bloginfo('template_url').'/images/icons-11.png' ?>" />
                <span class="sessions_page_track_icon_name">Bangalore & Lifestyle</span>
            </div>
            <div class="sessions_page_track_button track_color_bg_1561" onclick="showOnly(1561)" data-track-id="1561">
                <img src="<?php echo get_bloginfo('template_url').'/images/icons-12.png' ?>" />
                <span class="sessions_page_track_icon_name">Scaling & Infrastructure</span>
            </div>
            <div class="sessions_page_track_button track_color_bg_1557" onclick="showOnly(1557)" data-track-id="1557">
                <img src="<?php echo get_bloginfo('template_url').'/images/icons-13.png' ?>" />
                <span class="sessions_page_track_icon_name">Design</span>
            </div>
            <div class="sessions_page_track_button track_color_bg_1559" onclick="showOnly(1559)" data-track-id="1559">
                <img src="<?php echo get_bloginfo('template_url').'/images/icons-14.png' ?>" />
                <span class="sessions_page_track_icon_name">Mobile & Web</span>
            </div>
            <div class="sessions_page_track_button track_color_bg_1558" onclick="showOnly(1558)" data-track-id="1558">
                <img src="<?php echo get_bloginfo('template_url').'/images/icons-15.png' ?>" />
                <span class="sessions_page_track_icon_name">Entrepreneurship</span>
            </div>
            <div class="sessions_page_track_button track_color_bg_1560" onclick="showOnly(1560)" data-track-id="1560">
                <img src="<?php echo get_bloginfo('template_url').'/images/icons-16.png' ?>" />
                <span class="sessions_page_track_icon_name">Rest of the world</span>
            </div>
            <div class="sessions_page_track_button track_color_bg_1563" onclick="showOnly(1563)" data-track-id="1563">
                <img src="<?php echo get_bloginfo('template_url').'/images/icons-17.png' ?>" />
                <span class="sessions_page_track_icon_name">Technology</span>
            </div>
        </div>


        <div id="sessions_page_list_container" class="col-xs-11 ">
            <div class="container">
                <div class="row">


                    <?php
                    
                    $tracks = array(1564, 1557, 1558, 1559, 1560, 1561, 1563);

                    $sessionsloop = new WP_Query(array('cat' => '1564, 1557, 1558, 1559, 1560, 1561, 1563'));

                    if (!$sessionsloop->have_posts()) {
                        echo '<div class="sessioncard_no_session_message">No sessions in this track yet :)</div>';
                    }

                    while ($sessionsloop->have_posts()) : $sessionsloop->the_post();
                        ?>

                        <?php

                        $post_cats = get_the_category();

                        foreach (get_the_category() as $c) {

                            if (array_search($c->cat_ID, $tracks) != FALSE) {
                                $track_id = $c->cat_ID;
                                break;
                            }

                        }


                        ?>

                        <div class="sessions_page_card col-xs-12 col-sm-6 col-md-6 col-lg-4" data-track-id="<?php echo $track_id; ?>">
                            <div class="sessions_page_card_content container-fluid track_color_border_<?php echo $track_id; ?>">
                                <div class="row">
                                    <div class="sessions_page_card_avatar col-xs-2">
                                        <?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_avatar(get_the_author_meta('ID'), 48) . '</a>'; ?><?php //echo '<img src="http://placeimg.com/48/48/any" />';     ?>
                                    </div>
                                    <div class="sessions_page_card_right_column track_color_border_<?php echo $track_id ?> col-xs-10">
                                        <div class="sessions_page_card_title">

                                            <?php
                                                $titlestr = get_the_title();
                                                $title_trimmed = false;
                                                if (strlen($titlestr) > 50) {
                                                    $titlestr = substr($titlestr, 0, 50)."...";
                                                    $title_trimmed = true;
                                                }
                                            ?>
                                            <a href="<?php echo get_permalink(); ?>" <?php if ($title_trimmed) {echo 'title="'.get_the_title().'"';} ?>>
                                                <?php echo $titlestr; ?>
                                            </a>
                                        </div>
                                        <div class="sessions_page_card_author">
                                            <?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author_meta('user_nicename') . '</a>'; ?>
                                        </div>
                                        <div class="sessions_page_card_bottomarea">

                                            <div class="sessions_page_card_comments_stats">
                                                <div class="sessions_page_card_comments_icon">
                                                    <img src="<?php echo get_bloginfo('template_url').'/images/icons-21.png' ?>" />
                                                </div>
                                                <div class="sessions_page_card_comments_count">
                                                    <?php comments_number('0', '1', '%'); ?>
                                                </div>
                                            </div>

                                            <div class="sessions_page_card_attendees_stats">
                                                <div class="sessions_page_card_attendees_icon">
                                                    <img src="<?php echo get_bloginfo('template_url').'/images/icons-20.png' ?>" />
                                                </div>
                                                <div id="sessions_page_card_attendees_count_<?php echo get_the_ID();  ?>" class="sessions_page_card_attendees_count">
                                                    <?php echo attending_users_count(get_the_ID()) ?>
                                                </div>
                                            </div>

                                            <div class="sessions_page_card_attend_button" data-postid="<?php echo get_the_ID(); ?>">
                                                <?php echo get_my_attending_button(get_the_ID()); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                    <?php endwhile; ?>
                </div>
            </div>

        </div>




    </div>








            <?php

            /*
    * 1232 Techlash
    1226 Design
    1229 Mobile & Web
    1233 General Technology
    1231 Scaling & Infra
    1225 Bangalore & Lifestyle
    1227 Entrepreneurship
    1230  Rest of the World
             *
             *
    Design - #F05353
    Mobile and Web - #5761E4
    Tech - #997A42
    Scaling and Infra -  #7C9244
    Bangalore and lifestyle - #62A4EB
    Entrepreneurship - #E9903E
    Rest of world - #5A4368

    Techlash - 1465
    Design - 1460
    Mobile & Web - 1462
    Technology - 1466
    Scaling & Infra - 1464
    Bangalore & lifestyle - 1459
    Entrepreneurship - 1461
    Rest of the World - 1463
      */
            ?>







</div>




<?php get_footer(); ?>
