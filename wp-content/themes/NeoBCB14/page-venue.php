<?php get_header(); ?>
            <div id="plaza_wrapper">
                <div id="plaza">
                    <iframe class="plaza_cool_border" width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=SAP+LABS+INDIA+PVT.+LTD.,+%23138,+EPIP+Zone+Whitefield,+Bangalore+%E2%80%93+560066&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=56.724997,135.263672&amp;ie=UTF8&amp;hq=SAP+LABS+INDIA+PVT.+LTD.,+%23138,+EPIP+Zone+Whitefield,+Bangalore+%E2%80%93+560066&amp;hnear=&amp;radius=15000&amp;t=m&amp;ll=12.991009,77.716599&amp;spn=0.080289,0.109863&amp;z=13&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=SAP+LABS+INDIA+PVT.+LTD.,+%23138,+EPIP+Zone+Whitefield,+Bangalore+%E2%80%93+560066&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=56.724997,135.263672&amp;ie=UTF8&amp;hq=SAP+LABS+INDIA+PVT.+LTD.,+%23138,+EPIP+Zone+Whitefield,+Bangalore+%E2%80%93+560066&amp;hnear=&amp;radius=15000&amp;t=m&amp;ll=12.991009,77.716599&amp;spn=0.080289,0.109863&amp;z=13" style="color:#FFFFFF;text-align:left">View Larger Map</a></small>
                </div>
            </div>
            <div id="content_outer_wrapper">
                <div id="content_inner_wrapper">
                    <div id="content" class="" >
                        <?php  
                        the_post();
                        
                        the_content();
                        
                        
                        ?>
                    </div>
                    <div id="sidebar">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
<?php get_footer(); ?>
        