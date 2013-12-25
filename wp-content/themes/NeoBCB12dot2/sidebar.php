<ul>
    <?php dynamic_sidebar('primary_widget_area'); ?>
    <br>
    
    <li><h3>Buzz in Twitterverse</h3>
        <div id="tweets_deck_wrapper">
            <div id="tweets_deck"></div>
        </div>
    </li>
    <li>
        <?php  
//            echo http_build_query(array(
//                'text' => 'I am attending Barcamp Bangalore 13 on 2nd March.. Where will you be ? #bcb12',
//                'related' => 'barcampbng:Barcamp Bangalore Official Account'
//                
//            ));
//            
//            echo http_build_query(array(
//                'url' => 'http://barcampbangalore.org'
//                
//            ));
        // above code is to generate social buttons' queries. The query is then used statically as the content is not changing in this case.
        
        
        
        ?>
        
        <h3>Tell Friends</h3>
        <a href="https://plus.google.com/share?url=http%3A%2F%2Fbarcampbangalore.org" onclick="javascript:window.open(this.href,
            '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img id="gplus_main" class="social_icon"  width="48" height="48" src="<?php bloginfo('template_url'); ?>/images/social/64/google_dark.png" /></a>
        <a href="https://www.facebook.com/pages/Barcamp-Bangalore/172593159461976" target="_blank"><img id="fb_main" class="social_icon" width="48" height="48" src="<?php bloginfo('template_url'); ?>/images/social/64/facebook_dark.png" /></a>
        <a href="https://twitter.com/share?text=I+am+attending+Barcamp+Bangalore+13+on+2nd+March..+Where+will+you+be+%3F+%23bcb13&related=barcampbng%3ABarcamp+Bangalore+Official+Account" onclick="javascript:window.open(this.href,
            '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=450,width=550');return false;"><img id="twitter_main" class="social_icon" width="48" height="48" src="<?php bloginfo('template_url'); ?>/images/social/64/twitter02_dark.png" /></a>
    </li>
    <li>
        <h3>Our Sponsors</h3>
        <div class="sponsor_div">
            <a target="_blank" href="http://www.sap.com"><img style="padding-bottom: 10px;" width="110" src="<?php bloginfo('template_url'); ?>/images/sap_logo.png"  alt="SAP" /></a><br>
            Event Partner
        </div>
        <div class="sponsor_div">
            <a target="_blank" href="http://www.marblemobility.com/"><img style="padding-bottom: 15px;" width="80" src="<?php bloginfo('template_url'); ?>/images/cloudpact-marble-logo-small.png" alt="by CloudPact.com" /></a><br>
            Silver Sponsor
        </div>
<!--
        <div class="sponsor_div">
            <a target="_blank" href="http://www.minjar.com"><img style="padding-bottom: 0px;" width="70" src="<?php bloginfo('template_url'); ?>/images/Minjar_logo_small.png" /></a><br>
            Friend of Barcamp
        </div>
 -->       
    </li>
    <li>
        <h3>#bcb13 - one tag to rule them all</h3>
        Help us spread the word. Use the folllowing tags<br><br>
        <b><u>Twitter</u></b><br>
        <i>#bcb13</i> <br><br>
        
        <b><u>Blogging</u></b><br>
        <i>bcb13</i>, bcb, barcampbangalore, barcampbangalore13 <br><br>
        
        <b><u>Flickr</u></b> <br>
        <i>bcb13</i>, bcb, barcampbangalore, barcampbangalore13
    </li>
    
    
    
    
</ul>