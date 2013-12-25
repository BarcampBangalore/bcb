<?php get_header(); ?>
<?php
$lastcat = "";
$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
?>
            <div id="plaza_wrapper">
                <div id="plaza">
                    <div id="plaza_author"  class="contextual_plaza">
                        
                        <a href="<?php  echo $curauth->data->user_url; ?>"><?php echo get_avatar($curauth->ID, 96) ?></a>
                        <h1 class="contextual_plaza"><?php echo $curauth->user_nicename; ?></h1>
                        <?php echo $curauth->user_description;  ?>
                        <div style="clear: both" ></div>
                    </div>
                </div>
            </div>
            <div id="content_outer_wrapper">
                <div id="content_inner_wrapper">
                    <div id="content" class="" >
                        
                        <?php if ( have_posts() ) : ?>
                        
                        <h1>Sessions presented by <?php echo $curauth->user_nicename; ?></h1>
                        
                        
                        <ul>
                            <?php while ( have_posts() ) : the_post(); 
                            
                            $cat = get_the_category();

                            $catName = "";
                            if (count($cat) > 0)
                            {
                                $catName = $cat[0]->cat_name;
                            }
                            
                            if ($lastcat != $catName)
                            {
                                $lastcat = $catName;
                                echo '<br><h2>In '.$catName.'</h2>';
                            }
                            
                            
                            ?>
                            
                            
                            
                            <li  class="session_list_item">
                                <h2><a href="<?php the_permalink(); ?>" ><?php  the_title(); ?></a></h2>
                                <?php  the_tags(); ?> <br><?php edit_post_link(" | Edit Post"); ?> 
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        
                        <?php endif; ?>
                        
                        <?php  
                        
                        $sql = "SELECT * FROM $wpdb->postmeta WHERE meta_value = '$curauth->user_login' AND meta_key = 'user_attending' order by meta_id desc";
                        
                        $attending_sessions = $wpdb->get_results($sql);
                        
                        if (count($attending_sessions)> 0)
                        {
                            echo "<br><br><br><br><h1>Sessions attended by ".$curauth->user_nicename."</h1>";
                        }
                        
                        
                        $lastcat = "";
                        echo '<ul>';
                        
                        foreach ($attending_sessions as $session)
                        {
                            
                            $post_row = get_post($session->post_id);
                            $cat = get_the_category($session->post_id);

                            $catName = "";
                            if (count($cat) > 0)
                            {
                                $catName = $cat[0]->cat_name;
                            }
                            
                            if ($lastcat != $catName)
                            {
                                $lastcat = $catName;
                                echo '<br><h2>In '.$catName.'</h2>';
                            }
                            ?>
                            <li  class="session_list_item">
                                <h2><a href="<?php echo get_permalink($session->post_id); ?>" ><?php echo $post_row->post_title; ?></a></h2>
                                
                                    <?php
                                    

                                    $posttags = get_the_tags($session->post_id);
                                    if ($posttags)
                                    {
                                        echo 'Tags : ';
                                        $tag_link_str = "";
                                        foreach ($posttags as $tag)
                                        {
                                            $tag_link_str.= '<a href="'.get_term_link($tag).'">'.$tag->name . '</a>, ';
                                        }
                                        echo rtrim($tag_link_str, ", ");
                                        
                                        
                                    }
                                    ?> 
                            </li>
                        
                        
                            <?php
                            
                           
                        }
                        
                        echo "</ul>";
                        
                        
                        
                        ?>
                        
                        
                    </div>
                    <div id="sidebar">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
<?php get_footer(); ?>
        