<?php get_header(); ?>
<div id="homepage_cb1" style="background-image: url('<?php echo get_bloginfo('template_url').'/images/techlash_brew.jpg' ?>'); background-color: #fff ">
    <div id="techlash_ct1" class="container" >
        <div id="techlash_ct1_r1" class="row">
            <div class="col-xs-2 col-md-2"></div>
            <div class="col-xs-3 col-md-3" style="color: white;">

                <img src="http://localhost/bcb/wp-content/themes/NeoBCB19/images/six-min-brew.png" style="height: 200px; margin-bottom: 20px;">
                <br>
                                <p><font size="3">Represent your company in the latest edition of Barcamp Bangalore Techlash.</font></p><font size="3">
<p>
Talk about your latest tech smartness in front of 500+ techies.</p>
<p style="font-weight: bold; font-size: 20px;">6 Min per session and a total of 10 speakers.</p>
<p>To add your techlash session <a href="https://barcampbangalore.org/bcb/add-a-session"> click here.</a></p><br><br>

</font><p><font size="3">
PS: These ideas will undergo a filtering process. Remember to put in your phone number in the right field while you adding your session, we might require some clarifications from you.</font></p>

            </div>
            <div class="col-xs-4 col-md-4"></div>

            <div class="col-xs-3 col-md-3" style="padding: 20px;">

                <h2 id="techlash_sessionheading">Techlash sessions for BCB Spring 2016</h2>
                <div id"techlash_post_parent">
                  <?php
                   $args = 'cat=933';
                   query_posts($args);
                   while (have_posts()) : the_post();
                       ?>
                       <hr/>
                       <div class="techlash_postname">
                       <a href="<?php echo get_permalink(); ?>">
                       <?php the_title(); ?>
                       </a>
                   </div>
                   <div class="techlash_author">
                       <?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author_meta('user_nicename') . '</a>'; ?>
                   </div>


<?php endwhile; ?>








    </div>
</div>


        <div style="padding-bottom: 80px"></div>
        <div id="techlash_ct1_r4" class="row">
            <span>
                <a href="<?php echo get_bloginfo('template_url') . '/docs/Barcamp_Bangalore_Spring_2016_Sponsorship_Doc.pdf' ?>"><img src="<?php echo get_bloginfo('template_url') . '/images/icon-01.png' ?>" />  Sponsorship Pdf</a>
            </span>
            <span>
                <a href="https://twitter.com/barcampbng"><img src="<?php echo get_bloginfo('template_url') . '/images/icon-02.png' ?>" />  Follow us on twitter</a>
            </span>
            <span>
                <a href="https://www.facebook.com/barcampbng"><img src="<?php echo get_bloginfo('template_url') . '/images/icon-03.png' ?>" />  like us on facebook</a>
            </span>
            <span>
                <a href="mailto:bangalore_barcamp-subscribe@yahoogroups.com"><img src="<?php echo get_bloginfo('template_url') . '/images/icon-04.png' ?>" />  join the group</a>
            </span>
            <span>
                <a href="https://www.youtube.com/user/barcampbangalore"><img src="<?php echo get_bloginfo('template_url') . '/images/icon-05.png' ?>" />  subscribe</a>
            </span>
            <span>
                <a href="http://slack.barcampbangalore.org/"><img src="<?php echo get_bloginfo('template_url') . '/images/icon-06.png' ?>" />  join us on slack</a>
            </span>
            <span>
                <a href="https://github.com/barcampbangalore"><img src="<?php echo get_bloginfo('template_url') . '/images/Git-hub-icon-07.png' ?>" />  fork us</a>
            </span>
        </div>
    </div>
</div>


<?php get_footer(); ?>
