<!-- begin l_page_sidebar -->



<div id="l_sidebar">


<?php show_attending_button($post); ?>


<p style="padding-top:1.2em;">
<ul>
<li>Session Code <strong><?php echo($post->ID);  ?></strong></li>
</ul></p>

<ul id="twitter_share_button">

<?php print "<a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-text=\"I am attending '" .$post->post_title."' at #bcb11\" data-size=\"large\">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>"?>
</ul><p style="padding-top:1.2em;">
<ul id="gplus_button">
<!-- Place this tag where you want the +1 button to render -->
<g:plusone size="medium"></g:plusone>

<!-- Place this render call where appropriate -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</ul></P>
<!-- BCB Y Pipe starts -->
<!-- Commenting BCBY Pipe for session for the time being -->
<?php //theme_bcbYPipe("BCB11-S".$post->ID); ?>
<!-- BCB Y Pipe ends -->



<ul id="l_sidebarwidgeted">

	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>



<?php endif; ?>


	</ul>

</div>



<!-- end l_page_sidebar -->