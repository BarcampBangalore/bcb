<?php
/**
 * Used to be the page which displayed the registration form.
 *
 * This file is no longer used in WordPress and is
 * deprecated.
 *
 * @package WordPress
 * @deprecated Use wp_register() to create a registration link instead
 */

require('./wp-load.php');


function useridmatches($userlogin, $userkey){
	$user = get_user_by('login',$userlogin);
	$userid = "";
	if($user != null){
		$userid = $user->ID;
	}else{
		return false;
	}
	$val = get_user_meta($user->ID,"session_bcb", true);
	if($val == $userkey){
		return true;
	}
	
	return false;
	
}
global $wpdb;

$action = $_GET['action'];
if($action == 'auth'){
	if( is_user_logged_in()){
		$current_user = wp_get_current_user();
		if($current_user != null){
			$meta = get_user_meta($current_user->ID, "session_bcb", true);
			if($meta == ""){
				session_start();
				$meta = session_id();
				add_user_meta($current_user->ID, "session_bcb", "" . $meta);
			}
			//echo $current_user->ID . "," . $meta;
			$url = 'bcbapp://android?id='.$current_user->user_login . "&sid=" . $meta;
			echo <<<END
			<html>
<head>
</head>
<body>
<script type="text/javascript">
window.location = "$url"
</script>
</body>
</html>
END;
		}
	}
	else{
		echo "no user logged in ";
	}
}
else if ( $action == 'getuserdata'){
	$userid = esc_sql($_GET['userid']);
	$userkey = esc_sql($_GET['userkey']);
	if(useridmatches($userid, $userkey) == false){
		die("user not authenticated");
	}
	$num = 2616;
	$allposts = $wpdb->get_results("SELECT post_id FROM $wpdb->postmeta 
			WHERE post_id >= ".$num." AND meta_key='user_attending' AND meta_value='$userid'");
	$allPosts = "'";
	$isfirst = true;
	foreach ($allposts as $posts) {	
		if($isfirst == false){
			$allPosts = $posts->post_id."','".$allPosts;
		}
		else{
			$allPosts = $posts->post_id."'";
			$isfirst = false;
		}		
	}
// 	echo $allPosts;		
	$allPosts = "'".$allPosts;
	//echo "SELECT * FROM $wpdb->posts WHERE ID IN ($allPosts)";
	$allposts = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE ID IN ($allPosts)");
	
	if($allposts == null){
		die("useless");
	}
	print "{data: [";
	$isfirst = true;
	foreach ( $allposts as $posts){
		if($isfirst == false){
			print ",";
		}
		$posttitle = str_replace("'","\'",$posts->post_title);
		print "{ title: '$posttitle', id: '$posts->ID'}";
		$isfirst = false;
	}
	print " ]}";
	
}
else if ( $action == 'setuserdata'){
	$userid = esc_sql($_GET['userid']);
	$userkey = esc_sql($_GET['userkey']);
	$newsessionid = esc_sql($_GET['sessionid']);
	$setvalue = esc_sql($_GET['isattending']);		
	
	if(useridmatches($userid, $userkey) == false){
		die("user not authenticated");
	}

	$count = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->postmeta WHERE post_id ='$newsessionid' AND meta_key='user_attending' AND meta_value='$userid'");
	if( $count == 0 && $setvalue == 'true'){
		add_post_meta($newsessionid, 'user_attending', $userid, true);
		$wpdb->insert("wp_postmeta",
			array(
					'post_id'=> $newsessionid,
					'meta_key' => 'user_attending',
					'meta_value' => $userid
			),
			array(
					"%d","%s","%s")
		);
	}
	else if ( $setvalue == 'false' && $count >= 1){
		delete_post_meta($newsessionid, 'user_attending', $userid);
	}
	print "success";
}
else{
}
?>

