<?php get_header(); ?>
<?php
$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));



$cat_buckets = array(
    "931" => array(), 
    "785" => array(), 
    "636" => array(),
    "479" => array(),
    "399" => array(),
    "324" => array(),
    "220" => array(),
    "3" => array()

    );

$cat_names = array(
    0 => array("931", "BCB Spring 2014"), 
    1 => array("785", "BCB Monsoon 2013"), 
    2 => array("636", "BCB13"),
    3 => array("479", "BCB12"),
    4 => array("399", "BCB11"),
    5 => array("324", "BCB10"),
    6 => array("220", "BCB9"),
    7 => array("3", "BCB8")
);



?>


<div id="authorpage_wrapper" class="centered_background">

    <div id="authorpage_content">
        <div id="authorpage_profilearea">
            <div id="authorpage_profileheader">
                
                <h2>User profile<br><span id="authorpage_username" ><?php echo $curauth->user_nicename; ?></span></h2>
                <?php echo get_avatar($curauth->ID, 96); ?>

            </div>
            <div id="authorpage_profiledesc">

                <?php echo $curauth->user_description; ?>
            </div>


        </div>

        <div id="authorpage_sessions">
            
            <div id="authorpage_sincedate">Camper since <?php  echo date("F, Y", strtotime($curauth->user_registered)); ?></div>
            <div id="authorpage_sessionsby">
                <?php if (have_posts()) : ?>
                    <h2 class="authorpage_sessiontype">Sessions presented <?php //echo $curauth->user_nicename; ?></h2>

                    <ul>
                        <?php
                        
                        
                        while (have_posts()) : the_post();

                            $cat = get_the_category();
                            
                            for ($i = 0; $i < count($cat); $i++)
                            {
                                if (array_key_exists((string)$cat[$i]->cat_ID, $cat_buckets))
                                {
                                    $cat_buckets[$cat[$i]->cat_ID][] = '<h2><a href="'. get_permalink().'" >'.get_the_title().'</a></h2>';
                                }
                                
                            }
                            
                            ?>

                        <?php endwhile;
                        
                        
                        
                        
                        for ($i = 0; $i < count($cat_buckets); $i++)
                        {
                           
                            if (count($cat_buckets[$cat_names[$i][0]]) > 0)
                            {
                                echo '<br><h2 class="authorpage_bcbheading">In ' . $cat_names[$i][1] . '</h2>';
                                
                                
                                $cat_sessions = $cat_buckets[$cat_names[$i][0]];
                            
                                for ($j = 0; $j < count($cat_sessions); $j++)
                                {
                                    echo '<li  class="session_list_item">';
                                    echo $cat_sessions[$j];
                                    echo '</li>';
                                }
                                
                                
                                
                            }
                           
                        }
                        
                        ?>
                            
                              
                    </ul>
                <?php endif; ?>
            </div>
            <div id="authorpage_sessionsattended">
                <?php
                $sql = "SELECT * FROM $wpdb->postmeta WHERE meta_value = '$curauth->user_login' AND meta_key = 'user_attending' order by meta_id desc";

                $attending_sessions = $wpdb->get_results($sql);
                
                
                $cat_buckets = array(
                    "931" => array(), 
                    "785" => array(), 
                    "636" => array(),
                    "479" => array(),
                    "399" => array(),
                    "324" => array(),
                    "220" => array(),
                    "3" => array()

                    );

                if (count($attending_sessions) > 0) :
                    ?>
                    <div id="card_author_attending">
                        <div >
                            <h2 class="authorpage_sessiontype">Sessions attending</h2>

                            <?php
                            $lastcat = "";
                            echo '<ul>';

                            
                            foreach ($attending_sessions as $session)
                            {
                                $post_row = get_post($session->post_id);
                                $cat = get_the_category($session->post_id);
                                for ($i = 0; $i < count($cat); $i++)
                                {
                                    if (array_key_exists((string)$cat[$i]->cat_ID, $cat_buckets))
                                    {
                                        $cat_buckets[$cat[$i]->cat_ID][] = '<h2><a href="'. get_permalink($session->post_id).'" >'.$post_row->post_title.'</a></h2>';
                                    }

                                }
                                
                            }
                            
                            
                            
                            
                            for ($i = 0; $i < count($cat_buckets); $i++)
                            {

                                if (count($cat_buckets[$cat_names[$i][0]]) > 0)
                                {
                                    echo '<br><h2 class="authorpage_bcbheading">In ' . $cat_names[$i][1] . '</h2>';

                                    
                                    $cat_sessions = $cat_buckets[$cat_names[$i][0]];

                                    for ($j = 0; $j < count($cat_sessions); $j++)
                                    {
                                        echo '<li  class="session_list_item">';
                                        echo $cat_sessions[$j];
                                        echo '</li>';
                                    }

                                    

                                }

                            }

                            echo "</ul></div></div>";

                        endif;
                        ?>
                    </div>
                </div>
                <div style="clear: both"></div>
            </div>


        </div>
    </div>
</div>

        <?php get_footer(); ?>
        