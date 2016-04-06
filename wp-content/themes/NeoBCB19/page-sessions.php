<?php get_header(); ?>
<div id="dialog-message" title="Update your Location">
<div id="leafletmap"></div>
<i class="fa fa-map-marker"></i>
<p>Please share your location so that we can have
an awesome chart of where people converge at the venue from. 
</p>
</div>

<div class="container-fluid">
    <div id="sessions_page_content" class="row">


        <script type="text/javascript">



            $(function() {


    //            $.Isotope.prototype._getMasonryGutterColumns = function() {
    //                var gutter = this.options.masonry.gutterWidth || 0;
    //                containerWidth = this.element.parent().width();
    //                this.masonry.columnWidth = this.options && this.options.masonry.columnWidth ||
    //                        this.$filteredAtoms.outerWidth(true) ||
    //                        containerWidth;
    //                this.masonry.columnWidth += gutter;
    //                this.masonry.cols = Math.floor(containerWidth / this.masonry.columnWidth);
    //                this.masonry.cols = Math.max(this.masonry.cols, 1);
    //            };
    //
    //            $.Isotope.prototype._masonryReset = function() {
    //                this.masonry = {};
    //                this._getMasonryGutterColumns();
    //                var i = this.masonry.cols;
    //                this.masonry.colYs = [];
    //                while (i--) {
    //                    this.masonry.colYs.push(0);
    //                }
    //            };
    //
    //            $.Isotope.prototype._masonryResizeChanged = function() {
    //                var prevColCount = this.masonry.cols;
    //                this._getMasonryGutterColumns();
    //                return (this.masonry.cols !== prevColCount);
    //            };
    //
    //            $.Isotope.prototype._masonryGetContainerSize = function() {
    //                var gutter = this.options.masonry.gutterWidth || 0;
    //                var unusedCols = 0,
    //                        i = this.masonry.cols;
    //                while (--i) {
    //                    if (this.masonry.colYs[i] !== 0) {
    //                        break;
    //                    }
    //                    unusedCols++;
    //                }
    //                return {
    //                    height: Math.max.apply(Math, this.masonry.colYs),
    //                    width: ((this.masonry.cols - unusedCols) * this.masonry.columnWidth) - gutter
    //                };
    //            };
    //
    //
    //
    //
    //
    //            var $container = $('#cards_parent');
    //            // initialize
    //            $container.isotope({
    //                //columnWidth: 400,
    //                itemSelector: '.cards_track',
    //                masonry: {
    //                    columnWidth: 380,
    //                    gutterWidth: 20
    //
    //                }
    //                //gutterWidth: 10
    //            });
    //
    //            $container.imagesLoaded(function() {
    //
    //                $container.isotope('reLayout');
    //            });


                function onLocationFound(e) {
                                            window['marker'] = L.marker(e.latlng,{draggable:'true'}).addTo(mymap);
                                            this.loc = e.latlng.lat + "," + e.latlng.lng;
                                            console.log(this.loc);

                                    }
                                    var mymap = 0;
                    window['isMapInit']  = 0;
                    window['showMap']  = 0;
                    window['neverask'] = <?php 
                    if (is_user_logged_in()){
                                    $data = get_user_meta($current_user->ID, 'neverAskLoc', true);

                                    if($data === "1"){
                                            echo "1;";
                                    }
                                    else{
                                            echo "0;";
                                    }
                            }
                    else{
                            echo "1;";
                    }
                    ?>

                $(".sessioncard_footer").on("click", ".neo_attend_button", function() {
                    if(window['neverask'] == 0){
                                            $( "#dialog-message" ).dialog("open");
                                            if(window['isMapInit'] == 0){
                                                    mymap = L.map('leafletmap');
                                                    window['layer'] = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                                            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
                                                            maxZoom: 15,
                                                            minZoom:8
                                                    }).addTo(mymap);

                                                    mymap.on('locationfound', onLocationFound);      
                                                    window['marker'] = L.marker({lat: 12.9658274, lng: 77.7118487}, {draggable: 'true'}).addTo(mymap);	

                                                    mymap.setView([ 12.9658274, 77.7118487], 15);
                                                    window['mymap'] = mymap;
                                            }
                                            window['isMapInit'] = 1;
                                            if( window['showMap'] == 0){
                                                    mymap.locate({setView: true, maxZoom: 15});


                                            }
                                    }
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

                            $("#sessioncard" + card.data("postid") + " .sessioncard_attendees_link .sessioncard_meta_text").html(data.attendees_count );
                            card.parent().html(data.button_text);
                        }
                    }, 'json');
                });





            });

        </script>


        <div id="sessions_page_track_buttons_container"  class="col-md-1">
            <div class="sessions_page_track_button track_color_bg_1459">
                <img src="<?php echo get_bloginfo('template_url').'/images/icons-11.png' ?>" />
            </div>
            <div class="sessions_page_track_button track_color_bg_1460">
                <img src="<?php echo get_bloginfo('template_url').'/images/icons-12.png' ?>" />
            </div>
            <div class="sessions_page_track_button track_color_bg_1461">
                <img src="<?php echo get_bloginfo('template_url').'/images/icons-13.png' ?>" />
            </div>
            <div class="sessions_page_track_button track_color_bg_1462">
                <img src="<?php echo get_bloginfo('template_url').'/images/icons-14.png' ?>" />
            </div>
            <div class="sessions_page_track_button track_color_bg_1463">
                <img src="<?php echo get_bloginfo('template_url').'/images/icons-15.png' ?>" />
            </div>
            <div class="sessions_page_track_button track_color_bg_1464">
                <img src="<?php echo get_bloginfo('template_url').'/images/icons-16.png' ?>" />
            </div>
            <div class="sessions_page_track_button track_color_bg_1466">
                <img src="<?php echo get_bloginfo('template_url').'/images/icons-17.png' ?>" />
            </div>
        </div>
        

        <div id="sessions_page_list_container" class="col-md-11 ">
            <div class="container">
                <div class="row">


                    <?php
                    
                    $tracks = array(1459, 1460, 1461, 1462, 1463, 1464, 1466);
                    
                    $sessionsloop = new WP_Query(array('cat' => '1459, 1460, 1461, 1462, 1463, 1464, 1466'));

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

                        <div class="sessions_page_card col-md-4">
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
                                                <div class="sessions_page_card_attendees_count">
                                                    <?php echo attending_users_count(get_the_ID()) ?>
                                                </div>
                                            </div>
                                            
                                            <div class="sessions_page_card_attend_button">
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





        <div id="cards_parent">


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

            <?php 


    $difficulty_tags = array(945, 947, 946); // prod mapping
    // $difficulty_tags = array(939, 940, 941); // local mapping
    //foreach (array(934, 935, 936, 940, 941, 942, 943) as $track_id) :
    foreach (array(1459, 1460, 1461, 1462, 1463, 1464, 1466) as $track_id) : 

                ?>


                <div id="cards_track_934" class="cards_track">
                    <div class="track_header track_color_bg_<?php echo $track_id; ?>" >
                        <?php
                        $catobj = get_category($track_id);
                        echo $catobj->name;
                        ?>
                    </div>


                    <?php
                    $sessionsloop = new WP_Query('cat=' . $track_id);

                    if (!$sessionsloop->have_posts())
                    {
                        echo '<div class="sessioncard_no_session_message">No sessions in this track yet :)</div>';
                    }

                    while ($sessionsloop->have_posts()) : $sessionsloop->the_post();
                        ?>
                        <div class="sessioncard" id="sessioncard<?php the_ID(); ?>">

                            <div class="sessioncard_user track_color_bg_<?php echo $track_id ?>">
            <?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author_meta('user_nicename') . '</a>'; ?>

                            </div>
                            <div class="sessioncard_useravatar"><?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_avatar(get_the_author_meta('ID'), 48) . '</a>'; ?><?php //echo '<img src="http://placeimg.com/48/48/any" />';     ?></div>

                            <div class="sessioncard_head">


                                <div class="sessioncard_title">
                                    <a href="<?php echo get_permalink(); ?>" class="track_color_<?php echo $track_id; ?>">
            <?php the_title(); ?>
                                    </a>

                                </div>


                                <div class="sessioncard_tagparent">

                                    <?php if ( get_the_time('U') > strtotime("-4 days")) : ?>
                                        <div class="sessioncard_newtag">new</div>     
                                    <?php endif; ?>

                                    <?php  $tags = get_the_tags(); 

                                    foreach ($tags as $tagid => $tagobj)
                                    {
                                        $tagtype = array_search($tagid, $difficulty_tags);
                                        if ( $tagtype !== FALSE)
                                        {

                                            echo '<div class="sessioncard_difficultytag'.$tagtype.'">' . $tagobj->name . '</div> ';

                                        }
                                    }

                                    ?>


                                </div>




                            </div>
                            <div class="sessioncard_footer">
                                <div class="sessioncard_user_comments">

                                    <a class="sessioncard_attendees_link" href="<?php echo get_permalink(); ?>#attendees"  title="Attendees" ><img class="sessioncard_meta_image" src="<?php bloginfo('template_url') ?>/images/users_icon.jpg" alt="Attendees" title="Attendees" />
                                        <span class="sessioncard_meta_text"><?php echo attending_users_count(get_the_ID()) ?></span></a>

                                    <a href="<?php echo get_permalink(); ?>#comments" ><img class="sessioncard_meta_image" src="<?php bloginfo('template_url') ?>/images/comments_icon.jpg" alt="Comments" title="Comments" />
                                        <span class="sessioncard_meta_text"><?php comments_number('0', '1', '%'); ?></span></a>


                                </div>

                                <div class="sessioncard_attend">

            <?php echo get_my_attending_button(get_the_ID()); ?>

                                </div>
                                <div style="clear: both"></div>
                            </div>


                        </div>

                        <?php
                    endwhile;

                    wp_reset_postdata();
                    ?>





                </div>

    <?php endforeach; ?>

        </div> <!-- cards parent-->



    
    
    
</div>




<?php get_footer(); ?>
        
