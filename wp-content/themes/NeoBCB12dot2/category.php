<?php 
$current_category = $wp_query->query_vars['cat'];
$current_techlash_category = '639'; // set to 639 for prod, after upload
$cat_string = $current_category.',-'.$current_techlash_category;
$current_tags_array =  array( 
    'Techlash' => array(cat => $current_techlash_category ),
    'Technology' => array( 'cat' => $cat_string , 'tag' => 'tech,technology'),
    'Design' => array(  'cat' => $cat_string, 'tag' => 'design'), 
    'Others' => array( 'cat' => $cat_string , 'tag__not_in' => array(10,148) ) // set to 10,148 always for prod, after upload
    );

?>
<?php get_header(); ?>
            <div id="plaza_wrapper">
                <div id="plaza"  class="contextual_plaza">
                    <h1  class="contextual_plaza"><?php single_cat_title('Sessions registered for '); ?></h1>
                </div>
            </div>
            <div id="content_outer_wrapper">
                <div id="content_inner_wrapper">
                    
                    <?php if(have_posts()) : ?>
                    <div id="sessions_list_wrapper">

                        <?php 

                            foreach ($current_tags_array as $title => $query_params) {

                                $current_query = new WP_Query($query_params);


                                if($current_query->have_posts()):
                                    echo '<div class="sessions-tag-group">';
                                    echo '<h1 class="sessions-tag-header">'.$title.'</h1>';

                                    while( $current_query->have_posts()) : $current_query->next_post(); 
                                    $session = $current_query->post;
                                    $short_title = truncate_string_at_word($session->post_title, 30);
                            ?>
                            <div class="session_card <?php echo in_category('techlash', $session->ID) ? 'techlash' : ''; ?>">
                                <h2><?php echo '<a href="'.get_permalink($session->ID).'">'.$short_title.'</a>';?></h2>

                                <div class="session_card_speaker">
                                    Session by 
                                    <?php
                                    echo '<a href="'
                                    .get_author_posts_url($session->post_author).'">'
                                    .get_the_author_meta('user_nicename', $session->post_author).'</a>&nbsp;&nbsp;';
                                    echo get_avatar($session->post_author, 16 ); 
                                    ?>
                                </div>

                                <div class="session_card_summary">
                                    <?php 
                                        $summary = truncate_string_at_word(strip_tags($session->post_content), 150);
                                        echo $summary;
                                    ?>
                                </div>

                                <?php
                                    $session_tags = get_the_tags($session->ID);
                                    if($session_tags) {
                                        $tags_string = array();
                                        foreach ($session_tags as $session_tag) {
                                            $tags_string[] = '<a href="'
                                            .get_tag_link($session_tag->term_id)
                                            .'">'.$session_tag->name.'</a>';
                                        }
                                        // rtrim(rtrim($tags_string), ',');
                                        echo '<div class="session-tags">Tags:&nbsp;'.implode(', ', $tags_string).'</div>';
                                    }
                                    echo '<a class="session-edit-link clear" href="'.get_edit_post_link($session->ID)
                                    .'">Edit Post</a>';
                                ?>

                            </div>
                            <?php 
                                    endwhile;
                                endif;

                                wp_reset_postdata();
                                echo '</div>';
                                echo '<div class="clear">&nbsp;</div>';
                            } // end foreach($current_tags_array as $tag)
                        ?>

                    </div>
                    <?php else : ?>
                        <p>I guess you are in a hurry. Slow down buddy. Looks like registrations for Barcamp have not opened up yet. 
                        <br/><br/>Follow us on twitter <a href="http://twitter.com/barcampbng">@barcampbng</a> or join the <a href="http://tech.groups.yahoo.com/group/bangalore_barcamp/">mailing list</a> to be the first to know when registrations open up. </p>
                    <?php endif; ?>

                </div>
            </div>
<?php get_footer(); ?>
        
