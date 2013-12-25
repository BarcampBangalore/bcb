<?php get_header(); ?>
<?php the_post(); ?>
            <div id="plaza_wrapper">
                <div id="plaza" class="contextual_plaza">
                    <h1  class="contextual_plaza"><?php  the_title(); ?></h1>
                </div>
            </div>
            <div id="content_outer_wrapper">
                <div id="content_inner_wrapper">
                    <div id="content" class="" >
                        
                        
                        <div class="post_user">
                            <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar(get_the_author_meta('ID'), 96) ?></a>
                            <br><?php the_author_posts_link();  ?>
                            
                            <?php edit_post_link('<br><hr>(Edit post)');  ?>
                            
                            <?php  if(is_user_logged_in()) : ?>
                            <hr>
                            <div id="neo_attend_button">
                                <?php echo get_my_attending_button(get_the_ID());  ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        
                        
                        <?php the_content(); ?>
                        <br><br><br>
                        
                        
                        <div class="social_container">
                            <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-lang="en" data-hashtags="bcb13" data-related="barcampbng" data-text="I am attending '<?php the_title(); ?>' at Barcamp Bangalore" >Tweet</a>

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
                            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>

                            <div class="fb-like" data-send="false" data-layout="box_count" data-width="300" data-show-faces="false" data-font="arial"></div>
                        </div>
                        
                        <div id="attendees_list" class="post_meta">
                            <?php echo get_attending_users_links(get_the_ID()); ?>
                        </div>
                        <div class="post_meta">
                            <?php the_tags( 'Tags : ', ' &SmallCircle; '); ?><br>
                            Categories : <?php the_category(' &SmallCircle; '); ?><br>
                            
                        </div>
                        
                        <br>
                        <?php comments_template(); ?>
                    </div>
                    <div id="sidebar">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
<?php get_footer(); ?>
        