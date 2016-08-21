<?php 

wp_safe_redirect( get_page_link(1556) );
die();

get_header(); 




?>

<div id="page_content">
    
    
    <script type="text/javascript">
            
            
            
                $(function(){
                
                
                    $.Isotope.prototype._getMasonryGutterColumns = function() {
                        var gutter = this.options.masonry.gutterWidth || 0;
                        containerWidth = this.element.parent().width();
                        this.masonry.columnWidth = this.options && this.options.masonry.columnWidth ||
                            this.$filteredAtoms.outerWidth(true) ||
                            containerWidth;
                        this.masonry.columnWidth += gutter;
                        this.masonry.cols = Math.floor(containerWidth / this.masonry.columnWidth);
                        this.masonry.cols = Math.max(this.masonry.cols, 1);
                    };
 
                    $.Isotope.prototype._masonryReset = function() {
                        this.masonry = {};
                        this._getMasonryGutterColumns();
                        var i = this.masonry.cols;
                        this.masonry.colYs = [];
                        while (i--) {
                            this.masonry.colYs.push( 0 );
                        }
                    };
 
                    $.Isotope.prototype._masonryResizeChanged = function() {
                        var prevColCount = this.masonry.cols;
                        this._getMasonryGutterColumns();
                        return ( this.masonry.cols !== prevColCount );
                    };
 
                    $.Isotope.prototype._masonryGetContainerSize = function() {
                        var gutter = this.options.masonry.gutterWidth || 0;
                        var unusedCols = 0,
                        i = this.masonry.cols;
                        while ( --i ) {
                            if ( this.masonry.colYs[i] !== 0 ) {
                                break;
                            }
                            unusedCols++;
                        }
                        return {
                            height : Math.max.apply( Math, this.masonry.colYs ),
                            width : ((this.masonry.cols - unusedCols) * this.masonry.columnWidth) - gutter
                        };
                    };
 
 
                
                
                
                    var $container = $('#cards_parent');
                    // initialize
                    $container.isotope({
                        //columnWidth: 400,
                        itemSelector: '.cards_track',
                        masonry : {
                            columnWidth : 300,
                            gutterWidth: 20
                        
                        }
                        //gutterWidth: 10
                    });
                    
                    $container.imagesLoaded(function(){
                        
                        $container.isotope('reLayout');
                    });
                    
                    
                    
                    
                    
                    $(".neo_attend_button").live("click", function(){
                        
                        var card = $(this);
                        card.html('<img src="<?php bloginfo('template_url')  ?>/images/ajaxloader.gif" />');
                        
                        $.post("<?php echo admin_url('admin-ajax.php?' . http_build_query(array("action" => "toggle_attend"))); ?>", {post_id: $(this).data("postid") }, function(data){

                            if(data.status != 'OK')
                            {
                                var r = confirm(data.status);
                                if (r == true)
                                    {
                                        window.location.href="<?php echo wp_login_url( get_permalink() ); ?>";
                                    }
                                card.parent().html(data.button_text); 
                            }
                            else
                            {
                                
                                $("#sessioncard" + card.data("postid") + " .sessioncard_users .sessioncard_meta_text").html(data.attendees_count + " Attending");
                                card.parent().html(data.button_text); 
                            }
                        }, 'json'); 
                    });

                    
                    
                    
                    
                });
            
            </script>
            
            <div id="categorypage_catname">Sessions for <span><?php single_cat_title();  ?></span></div>

            <div id="cards_parent">
                <div id="cards_track_934" class="cards_track">aaaaaaaaa</div>
                <div id="cards_track_935" class="cards_track">bbbbbbbbb</div>
                <div id="cards_track_936" class="cards_track">ccccccccc</div>
                <div id="cards_track_937" class="cards_track">ddddddddd</div>
                

                <?php if ( have_posts() ) :
                    
                    $latest_bcb_category = 786;
                    

                    while ( have_posts() ) : the_post();
                     
                    $is_techlash_session = false;
                    $is_latest_bcb_session = false;
                    $post_categories = wp_get_post_categories( get_the_ID() );
                    

                    foreach($post_categories as $c){
                        if ($c == 787 || $c == 639)  // techlash categories
                        {
                            $is_techlash_session = true;
                        }
                        
                        if ($c == $latest_bcb_category)
                        {
                            $is_latest_bcb_session = true;
                        }
                        
                    }
//                    if ($is_techlash_session)
//                    {
//                        continue;
//                    }
                    
                    ?>
                        <div class="sessioncard" id="sessioncard<?php the_ID(); ?>">
                            <div class="sessioncard_head">
                                        
                                <div class="sessioncard_title">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </div>
                                <div class="sessioncard_user">
                                    <?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author_meta('user_nicename') . '</a>'; ?>
                                    
                                </div>
                                <div class="sessioncard_useravatar"><?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_avatar( get_the_author_meta('ID'), 48 ) . '</a>'; ?><?php  //echo '<img src="http://placeimg.com/48/48/any" />'; ?></div>
                                <?php if (isset($_COOKIE['bcb_last_visit']) && (get_the_time('U') > $_COOKIE['bcb_last_visit'])) : ?>
                                <img class="newicon_flag" src="<?php bloginfo('template_url')  ?>/images/new_icon.png" />     
                                <?php endif; ?>
                                <?php if ($is_techlash_session) : ?>
                                    <img class="techlash_flag" src="<?php bloginfo('template_url')  ?>/images/techlash_flag.png" />
                                <?php endif;  ?>
                            </div>
                            
                            
                            
                            
                            <div class="sessioncard_user_comments">
                                <div class="sessioncard_users sessioncard_meta">
                                    <img class="sessioncard_meta_image" src="<?php bloginfo('template_url')  ?>/images/users_icon.jpg" />
                                    <span class="sessioncard_meta_text"><a href="<?php echo get_permalink(); ?>#attendees"><?php echo attending_users_count(get_the_ID()) ?> Attending</a></span>
                                </div>
                                <div class="sessioncard_comments sessioncard_meta">
                                    <img class="sessioncard_meta_image" src="<?php bloginfo('template_url')  ?>/images/comments_icon.jpg" />
                                    <span class="sessioncard_meta_text"><a href="<?php echo get_permalink(); ?>#comments"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></a></span>
                                </div>
                                <div style="clear: both" ></div>
                            </div>
                            
                            
                            
                            
                            
                            <?php if($is_latest_bcb_session) : ?>
                            <div class="sessioncard_attend">
                                
                                    <?php echo get_my_attending_button(get_the_ID());  ?>
                                                    
                            </div>
                            <?php endif; ?>
                            
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>






            </div> <!-- cards parent-->
    
    
    
</div>
    
    
    

<?php get_footer(); ?>
        