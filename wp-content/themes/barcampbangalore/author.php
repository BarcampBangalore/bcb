<?php /**/ ?><?php 
if(isset($_GET['author_name'])){$curauth = get_userdatabylogin($_GET['author_name']);
}else {
$curauth = get_userdata(intval($author));

}
get_header();
?>

<div id="content">

	<div id="contentleft">



<!---------------------- This sets the $curauth variable ------------------------
-->
<?php

dprint_r($curauth);

?>
<TABLE>
<TR>
	<TD><?php echo get_avatar( $curauth->user_email, '80' ); ?></TD>
	<TD valign="top"><h1 style="color:#000; padding:0px;margin:0px"><?php echo $curauth->user_firstname;?> <?php echo $curauth->user_lastname;?> </h1>(<a href="<?php echo $curauth->user_url;?>"><?php echo $curauth->display_name;?></a>)
	<?php echo $curauth->user_description; ?> <br>Added <strong><?php echo author__post_count($curauth->ID);?></strong> sessions so far.
	
	</TD>
</TR>
</TABLE>
<br />
<!-------------------------------author ends------------------------------------- 
-->

<?php

if($curauth->user_login != 'mixdevWWWWWWW'){ //nothing man nothing =D leave it
	$postsatt =  $wpdb->get_results("SELECT post_id FROM $wpdb->postmeta WHERE  meta_key = 'user_attending' AND meta_value = '$curauth->user_login'");

	if(isset($postsatt)){


	echo "<h1 style=\"color:#999\">$curauth->display_name is Attending ".count($postsatt)." sessions:</h1>";


		$lastCatName = "";
		rsort($postsatt);
		foreach($postsatt as $attpost)
		{
			
			$my_id = $attpost->post_id;
			$ph = get_post($my_id); 
						$post_permalink = get_permalink( $my_id );
			$cat = get_the_category($my_id);
			$catName = "";
			if(count($cat) > 0){
				$catName = $cat[0]->cat_name;				
			}
			if(strcmp($lastCatName, $catName) != 0){
				if(strcmp($lastCatName,"") != 0){
					echo "<br/><br/>";
				}
				echo "<span id=\"catlabel\" > In ".$catName."</span><br/><br/>";
				$lastCatName = $catName;
			}
			
		
			echo "<h2 class=\"postinfoh2\">",++$dumpooooooooo,")  <a href=\"$post_permalink\" rel=\"bookmark\">$ph->post_title</a></h2>";

			


		}//foreach


		echo "<div style=\"clear:both\"></div><p>";

	}

}




{

			echo "<h1 style=\"color:#999\">$curauth->display_name is Presenting the following sessions: </h1>";

		 if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php //the_content(__('Read more'));?><div style="clear:both;"></div>
		<div class="postinfo">
			Filed Under <?php the_category(', ') ?> | <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>&nbsp;<?php edit_post_link('(Edit)', '', ''); ?>
		</div>
	 	
		<!--
		<?php trackback_rdf(); ?>
		-->
		
		<?php endwhile; else: ?>
			
		<p><?php _e(''); ?></p><?php endif; ?>
		<?php posts_nav_link(' &#8212; ', __('&laquo; go back'), __('keep looking &raquo;')); ?>
		
		<!--
		<p><?php //posts_nav_link(' &#8212; ', __('&larr; Previous Page'), __('Next Page &rarr;')); ?></p>
		-->
	
	</div>


<?php
}
//else
{
?>

<?php
}	
	
?>

	
<?php include(TEMPLATEPATH."/l_author_sidebar.php");?>

<?php include(TEMPLATEPATH."/r_sidebar.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>