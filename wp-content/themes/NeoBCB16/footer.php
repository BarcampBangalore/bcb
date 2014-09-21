
        <div id="footer">
            <div id="sponsors_div">
                <h2>Sponsors</h2>
                <div>
                    <div id="event_partner_wrapper" class="sponsor_wrapper">
                        <h3 class="sponsor_heading">Event Partner</h3>
                        <div class="sponsor_logo_wrapper" ><a href="http://www.sap.com/india/index.epx"><img class="sponsor_logo event_partner_logo" src="<?php bloginfo('template_url')  ?>/images/sap_logo.png" /></a></div>

                    </div>
                    <!--  TODO: update with new sponsors
                    <div id="event_partner_wrapper" class="sponsor_wrapper">
                        <h3 class="sponsor_heading">Silver Sponsor</h3>
                        <div class="sponsor_logo_wrapper" ><a href="http://www.intuit.com/"><img class="sponsor_logo event_partner_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/intuit_blue.gif" /></a></div>

                    </div>
                    <div class="sponsor_wrapper">
                        <h3 class="sponsor_heading">Community Partner</h3>
                        <div class="sponsor_logo_wrapper" ><a href="http://www.mozilla.org/"><img class="sponsor_logo event_partner_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/mozilla-firefox.png" /></a></div>

                    </div>
                    <div class="sponsor_wrapper">
                        <h3 class="sponsor_heading">Community Partner</h3>
                        <div class="sponsor_logo_wrapper" ><a href="http://www.olacabs.com/"><img class="sponsor_logo event_partner_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/Ola_Cabs_Logo.png" /></a></div>

                    </div>
                -->
                    <div class="sponsor_wrapper">
                        <h3 class="sponsor_heading">Supported by</h3>
                        <div class="sponsor_logo_wrapper" ><a href="http://janastu.org/main.html"><img class="sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/janastu_logo.gif" /></a></div>

                    </div>
                   
                </div>

            </div>
        
            <div id="footer_copyright">
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

                ?> humans.
            </div>
        </div>
 

        <?php wp_footer(); ?>
        <script>window.scrollback = {room:"barcamp-bangalore",form:"toast",theme:"dark",minimize:true};(function(d,s,h,e){e=d.createElement(s);e.async=1;e.src=(location.protocol === "https:" ? "https:" : "http:") + "//scrollback.io/client.min.js";d.getElementsByTagName(s)[0].parentNode.appendChild(e);}(document,"script"));</script>
    </body>
</html>
