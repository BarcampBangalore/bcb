<?php

// Register widgetized areas
function theme_widgets_init()
{
    // Area 1
//    register_sidebar(array(
//        'name' => 'Primary Widget Area',
//        'id' => 'primary_widget_area',
//        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
//        'after_widget' => "</li>",
//        'before_title' => '<h3 class="widget-title">',
//        'after_title' => '</h3>',
//    ));

    // Area 2
//    register_sidebar( array (
//    'name' => 'Secondary Widget Area',
//    'id' => 'secondary_widget_area',_
//    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
//    'after_widget' => "</li>",
//    'before_title' => '<h3 class="widget-title">',
//    'after_title' => '</h3>',
//  ) );
}




function barcamp_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/barcamp_17_logo.png);
            padding-bottom: 30px;
            width: 100%;
            background-size: 100%;
        }
        #wp-submit
        {
            background: rgb(228, 70, 11);
            border: 1px solid rgb(228, 70, 11);
            box-shadow: none;
        }
        #wp-submit:hover
        {
            background: rgb(228, 70, 11);
            border: 1px solid rgb(228, 70, 11);
            box-shadow: 0px 0px 50px rgba(0,0,0,.1) inset;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'barcamp_login_logo' );


// end theme_widgets_init

// set the login cookie
add_action('init', function(){
    
    
    setcookie("bcb_last_visit", time(), strtotime('+15 days'));
    
    
});

add_filter( 'jetpack_enable_opengraph', '__return_false', 99 );

add_action( 'wp_ajax_set_user_location', 'set_user_location' );
function set_user_location(){
	 global $current_user;
	if (is_user_logged_in()){
		 $current_user = wp_get_current_user();
		 var_dump($_REQUEST);
		if(isset($_REQUEST['location'])){
			$loc = $_REQUEST['location'];
			update_user_meta( $current_user->ID, "userLoc", $loc, false );
			 
		}
		 
    }

}

function the_login_message( $message ) {
    if ( empty($message) ){
        return "<p class='message register' style=''>To RSVP, you need to login using the form below. If you don't have a login ID, <a href='".wp_registration_url()."'>click here</a> to create one</p>";
    } else {
        return $message;
    }
}
add_filter( 'login_message', 'the_login_message' );



add_action('init', 'theme_widgets_init');

function mytheme_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div id="comment-<?php comment_ID(); ?>" class="comment-body">
            <?php echo get_avatar($comment->comment_author_email, 48); ?>
            <div class="comment-body-inner">
                <div class="comment-author vcard">
                    

                    <cite class="fn"><a href="<?php echo get_author_posts_url(get_user_by('email', get_comment_author_email())->ID); ?>"><?php echo get_user_by('email', get_comment_author_email())->data->user_nicename;  ?></a></cite>
                </div>
                <?php if ($comment->comment_approved == '0') : ?>
                    <em><?php _e('Your comment is awaiting moderation.') ?></em>
                    <br>
                <?php endif; ?>

                <?php comment_text() ?>
                <div class="comment_footer">
                    <span class="comment-meta commentmetadata"><a href="<?php echo esc_url(get_comment_link($comment->comment_ID)) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></a><?php edit_comment_link(__('Edit'), ' &SmallCircle; ', '') ?></span>
                    &SmallCircle;
                    <span class="reply">
                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                    </span>
                </div>
            </div>
            <div style="clear: both"></div>
        </div>
        <?php
    }

    function get_plaza()
    // Note: this doesn't seem to be used anywhere. Should be removed.
    {
        ?>
        <div id="plaza" class="plaza">

            

        </div>
        <div id="plaza_slides_holder" style="display: none">
            <div class="plaza_slide">
                <div id="plaza_left">
                    <div><h1>Where Ideas Meet!</h1>A confluence of awesome people from all walks of life discussing some wonderful things</div>
                    <hr>
                    <h1>
                        25th August, 2012<br>
                        SAP Labs, Bangalore, India
                    </h1>
                </div>
                <div id="plaza_right">
                    <img id="someimage" class="plaza_cool_border" alt="Some Image" src="<?php bloginfo('template_url'); ?>/images/someimage.jpg" >
                </div>
                <div style="clear: both; " ></div>
            </div>
            <div class="plaza_slide">
                <div id="plaza_left">
                    <div><h1>Check out BCB Android App!</h1>
                        To make the flow of information and updates easier on the Barcamp Day and before we have got an awesome Android App.
                        <br><b>Coming Soon >></b>
                    </div>
                    
                </div>
                <div id="plaza_right">
                    <img id="someimage" class="plaza_cool_border" alt="Some Image" src="<?php bloginfo('template_url'); ?>/images/someimage.jpg" >
                </div>
                <div style="clear: both; " ></div>
            </div>
            <div class="plaza_slide">
                <div id="plaza_left">
                    <div><h1>Need a ride for Reaching Barcamp!</h1>
                        We are cooking up something to help you carpool to the event. 
                        Hey lets help our own 3rd rock from sun by producing a little less smoke.<br><b>Coming Soon >></b></div>
                    
                </div>
                <div id="plaza_right">
                    <img id="someimage" class="plaza_cool_border" alt="Some Image" src="<?php bloginfo('template_url'); ?>/images/someimage.jpg" >
                </div>
                <div style="clear: both; " ></div>
            </div>
        </div>

        <?php
    }
    
    
    
    
    /**************************************************************
     * 
     * Functions for the Attending System
     * 
     **************************************************************/
    
    
    add_action("wp_ajax_toggle_attend", "neo_attend_toggle_attend");
    add_action("wp_ajax_nopriv_toggle_attend", "neo_attend_toggle_attend_nologin");
    
    
    function neo_attend_toggle_attend()
    {
        
        global $current_user;
        $result = array();
//        if ( !wp_verify_nonce( $_REQUEST['nonce'], "neo_attend_nonce")) {
//        exit("No naughty business please");
//     }
        if (is_user_logged_in())
        {
            $attendingusers = attending_users($_REQUEST['post_id']);

            if (array_search($current_user->user_login, $attendingusers) !== false)
            {

                delete_post_meta($_REQUEST['post_id'], 'user_attending', $current_user->user_login);

            }
            else
            {
                add_post_meta($_REQUEST['post_id'], 'user_attending', $current_user->user_login);


            }
            $result['status'] = "OK";
            $result['button_text'] = get_my_attending_button($_REQUEST['post_id']);
            $result['attendees_list'] =  get_attending_users_links($_REQUEST['post_id'], "", "&bull;");
            $result['attendees_count'] = attending_users_count($_REQUEST['post_id']); 
            
            
        }
        else
        {
            $result['status'] = 'ERROR! User must be logged in';

        }
        echo json_encode($result);
        die();
        
    }
    
    function neo_attend_toggle_attend_nologin()
    {
        $result = array();
        $result['status'] = 'Please log in to mark your preferences';
        $result['button_text'] = get_my_attending_button($_REQUEST['post_id']);
        echo json_encode($result);
        die;
    }
    
    
    
    function attending_users($postid)
    {    
        return get_post_meta($postid, 'user_attending');
    }
    
    function attending_users_count($postid)
    {
        return count(attending_users($postid));
    }
    
    function get_attending_users_links($postid, $prev = 'Who is attending : ', $separator = ', ')
    {
        $result = "";
        
        $attendingusers = attending_users($postid);
        
        
        $first_item_flag = true;
        if (count($attendingusers) > 0)
        {
            //$result.='<h2>'.count($attendingusers).' people are attending :</h2> ';
            
            $result .= '<div class="attending_users_wrapper">';
            foreach ($attendingusers as $user)
            {
                if ($first_item_flag)
                {
                    $first_item_flag = false;
                }
                else
                {
                    $result.=$separator;
                }
                $user = get_user_by('login', $user);
                $result.='<a class="attending_user" href="'.get_author_posts_url($user->ID).'">'.get_the_author_meta( 'user_nicename', $user->ID ).'</a>';
            }
            $result .= '</div>';
        }
        else
        {
            $result.='<div class="attending_users_wrapper">(None Yet)</div>';
        }
        
        return $result;
        
        
    }
    
    function get_my_attending_button($postid)
    {
        global $current_user;
        $result = "";
        $attendingusers = attending_users($postid);
        
        if (array_search($current_user->user_login, $attendingusers) !== false)
        {
            $result.= '<div class="neo_attend_button neo_button_attending" data-postid="'.$postid.'" >I am Attending</div>';
        }
        else
        {
            $result.= '<div class="neo_attend_button neo_button_wanna_attend" data-postid="'.$postid.'" >I wanna Attend</div>';
        }
        return $result;
    }
    
    
    
    
    /**************************************************************
     * 
     * END Functions for Attending System
     * 
     **************************************************************/
    
    
    
    
    ?>