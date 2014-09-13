<?php get_header(); ?>
<?php the_post(); ?>

<?php 
$latest_bcb_category = 1057;
$is_latest_bcb_session = false;
$track_category_list = get_categories(array('child_of' => 1057));
$track_category = 1057;
$post_categories = wp_get_post_categories( get_the_ID() );

foreach($post_categories as $c)
{
    

    if ($c == $latest_bcb_category)
    {
        $is_latest_bcb_session = true;
    }

    foreach ($track_category_list as $tc)
    {
        if ($tc->term_id == $c)
        {
            $track_category = $tc->term_id;
        }
    }
    

}







?>

<div id="sessionpage_wrapper" class="centered_background">
    
    <script type="text/javascript">
        $(function(){
            
            $("#sessionpage_rightmeta").on("click", ".neo_attend_button", function(){
                
                var card = $(this);
                card.html('<img src="<?php bloginfo('template_url') ?>/images/ajaxloader.gif" />');
                
                $.post("<?php echo admin_url('admin-ajax.php?' . http_build_query(array("action" => "toggle_attend"))); ?>", {post_id: <?php the_ID(); ?> }, function(data){
                    
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
                        
                        $("#sessionpage_attending_count").html(data.attendees_count + " Attending");
                        $("#sessionpage_userlist").html(data.attendees_list);
                        card.parent().html(data.button_text); 
                    }
                }, 'json'); 
            });
            
            
        });
        
    </script>
    
    
    
    <div id="sessionpage_content">

        <div id="sessionpage_header">
            <div id="sessionpage_title" class="track_color_<?php echo $track_category; ?>">
                <h1><?php the_title(); ?></h1>
            </div>
            <div id="sessionpage_user" class="track_color_bg_<?php  echo $track_category; ?>">
                <?php echo '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'">'.get_the_author_meta('user_nicename').'</a>'; ?> 
            </div>
            <div id="sessionpage_useravatar"><?php echo get_avatar( get_the_author_meta('ID'), 96 ); ?></div>
        </div>
        <div style="clear: both"></div>
        
        <div id="sessionpage_midsection">
            <div id="sessionppage_posttext">
                <div id="sessionpage_description">
                <?php the_content(); ?>
                </div>
                
                
                <div class="social_container">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-lang="en" data-hashtags="barcampblr" data-related="barcampbng" data-text="I am attending '<?php the_title(); ?>' at Barcamp Bangalore" >Tweet</a>

                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
                <div class="social_container">
                    <!-- Place this tag where you want the +1 button to render. -->
                    <div class="g-plusone" data-size="tall"></div>

                    <!-- Place this tag after the last +1 button tag. -->
                    <script type="text/javascript">
                    (function() {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();
                    </script>
                </div>
                <div class="social_container">
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=623533411000672";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                    <div class="fb-like" data-href="<?php the_permalink(); ?>"
                         data-width="450" data-layout="box_count" data-show-faces="false" data-send="false"></div>
                </div>
                
                
                
                <div id="sessionpage_commentsarea">
                    <?php comments_template(); ?>
                </div>
                
                
            </div>
            <div id="sessionpage_rightmeta">
                
                
                
                
                <?php  if($is_latest_bcb_session) : ?>
                    <div class="sessionpage_attend">

                        <?php echo get_my_attending_button(get_the_ID());  ?>

                    </div>
                <?php endif; ?>
                
                <a id="attendees"></a>
                <div id="sessionpage_users">
                    <img id="sessionpage_users_image" class="sessionpage_metaimage" src="<?php bloginfo('template_url')  ?>/images/users_icon.jpg" />
                    <span id="sessionpage_attending_count" class="sessionpage_metaheading" ><?php echo attending_users_count(get_the_ID()) ?> Attending</span>
                    <div id="sessionpage_userlist"><?php   echo get_attending_users_links(get_the_ID(), "", "&bull;");  ?></div>
                    
                </div>
                
                
                <div id="sessionpage_tagsarea">
                    <img id="sessionpage_tags_image" class="sessionpage_metaimage" src="<?php bloginfo('template_url')  ?>/images/tags_icon.jpg" />
                    <span  class="sessionpage_metaheading" >Tags</span>
                    <div id="sessionpage_taglist"><?php the_tags("", "", ""); ?></div>
                </div>
                
                <?php edit_post_link("Edit Session"); ?>
                
                
                
            </div>
            <div style="clear: both"></div>
        </div>

    </div>
</div>

<?php get_footer(); ?>