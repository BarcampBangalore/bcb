<?php /**/ ?><!-- begin l_page_sidebar -->

<div id="l_sidebar">

	<ul id="l_sidebarwidgeted">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) :else: endif?>


<?php if (function_exists('get_recent_comments')) { ?>
   <h2><?php _e('Recent Comments:'); ?></h2>
   <ul><?php get_recent_comments(); ?></ul>
  
<?php } ?>   

<?php if (function_exists('get_recent_trackbacks')) { ?>
   <h2><?php _e('Recent Trackbacks:'); ?></h2>
   <ul><?php get_recent_trackbacks(); ?></ul>
   
<?php } ?>

</div>

<!-- end l_page_sidebar -->