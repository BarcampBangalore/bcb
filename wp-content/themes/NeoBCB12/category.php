<?php get_header(); ?>
            <div id="plaza_wrapper">
                <div id="plaza"  class="contextual_plaza">
                    <h1  class="contextual_plaza"><?php single_cat_title('Sessions registered for '); ?></h1>
                </div>
            </div>
            <div id="content_outer_wrapper">
                <div id="content_inner_wrapper">
                    <div id="content" class="" >
                        
                        <?php if ( have_posts() ) : ?>
                        <ul>
                            <?php while ( have_posts() ) : the_post(); ?>
                            <li class="session_list_item">
                                <h2><a href="<?php the_permalink(); ?>" ><?php  the_title(); ?></a></h2>
                                
                                Session by <?php echo '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'">'.get_the_author_meta('user_nicename').'</a>'; ?> <?php echo get_avatar( get_the_author_meta('ID'), 16 ); ?> <br> <?php  the_tags(); ?> <?php edit_post_link(" | Edit Post"); ?> 
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php else : ?>
                        <p>I guess ur in a hurry. Slow down buddy. Looks like registrations for Barcamp have not opened up yet. <br/><br/>Follow us on twitter <a href="http://twitter.com/barcampbng">@barcampbng</a> or join the <a href="http://tech.groups.yahoo.com/group/bangalore_barcamp/">mailing list</a> to be the first to know when registrations open up. </p>
                        <?php endif; ?>
                        
                        
                    </div>
                    <div id="sidebar">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
<?php get_footer(); ?>
        