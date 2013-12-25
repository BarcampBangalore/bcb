            <div style="clear: both" >

            </div>
        </div> <!-- main area -->
        <div id="footer">

            <!--[if lte IE 8]><span style="filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2); display: inline-block;"><![endif]-->
            <span style="-webkit-transform: rotate(180deg); -moz-transform: rotate(180deg); -o-transform: rotate(180deg); -khtml-transform: rotate(180deg); -ms-transform: rotate(180deg); transform: rotate(180deg); display: inline-block;">
                    &copy;
            </span>
            <!--[if lte IE 8]></span><![endif]--> 
            Copyleft. All Wrongs Reserved <a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a> &bull; 
            Awesomely Powered by <a href="http://www.wordpress.org">WordPress</a> and 
                <?php 
                $result = count_users();
                echo $result['total_users'];

                ?> humans. &bull; <a href="http://www.hostaccord.com">Hosting on HA</a>
        </div>
    </div>

        <?php wp_footer(); ?>
    </body>
</html>
