<?php get_header(); ?>
            <div id="plaza_wrapper">
                <div id="plaza">
                    <h1><?php echo single_tag_title('Sessions with tag : '); ?></h1>
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
                                Categories: <?php the_category(', '); ?> <br><?php  the_tags(); ?><br> <?php edit_post_link("Edit Post"); ?> 
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php else : ?>
                        <p>Sorry, no sessions registered by the user yet but thats ok :)</p>
                        <?php endif; ?>
                        
                        
                    </div>
                    <div id="sidebar">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
<?php get_footer(); ?>
        