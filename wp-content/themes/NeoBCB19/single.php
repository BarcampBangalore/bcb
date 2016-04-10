<?php get_header(); ?>
<?php the_post(); ?>

<?php 
$latest_bcb_category = 1556;
$is_latest_bcb_session = false;
$track_category_list = get_categories(array('child_of' => 1556));
$track_category = 1556;
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
    
    
    <div id="single_page_content">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div id="single_page_avatar" class="single_page_box"><?php echo get_avatar( get_the_author_meta('ID'), 96 ); ?></div>
                    <div id="single_page_author" class="single_page_box"><?php echo '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'">'.get_the_author_meta('user_nicename').'</a>'; ?></div>
                </div>

                <div class="col-sm-10">
                    <div class="single_page_box">
                        
                        <?php  if($is_latest_bcb_session) : ?>
                        <div id="single_page_attend_area" class="sessionpage_attend">

                                <?php echo get_my_attending_button(get_the_ID());  ?>

                            </div>
                        <?php endif; ?>
                        <div id="single_page_title"><?php the_title(); ?></div>
                        <div style="clear: both"></div>
                    </div>
                    <div id="single_page_description" class="single_page_box">
                        <?php the_content(); ?>
                        <div>
                            <?php edit_post_link("Edit Session"); ?>
                        </div>
                    </div>
                    
                    <div class="single_page_box">
                        <div class="row">
                            <div class="col-sm-6">

                                <div id="single_page_attendees_header">
                                    <img id="single_page_attendees_icon" src="<?php echo get_bloginfo('template_url').'/images/icons-20.png' ?>">
                                    <?php echo attending_users_count(get_the_ID()) ?> Attending
                                </div>
                                <div id="single_page_attendees_list">
                                    <?php   echo get_attending_users_links(get_the_ID(), "", "&bull;");  ?>
                                </div>

                            </div>

                            <div class="col-sm-6">

                                <div id="single_page_tags_header">
                                    <img id="single_page_tags_icon" src="<?php echo get_bloginfo('template_url').'/images/icons-23.png' ?>">
                                    Tags
                                </div>
                                <div id="single_page_tags_list">
                                    <?php the_tags("", " | ", ""); ?>
                                </div>

                            </div>
                        </div>
                    </div>

                    
                    <div id="single_page_comments_area" class="single_page_box">
                        <div id="sessionpage_commentsarea">
                            <?php comments_template(); ?>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
    
    
    
    
       
                
    
</div>

<?php get_footer(); ?>