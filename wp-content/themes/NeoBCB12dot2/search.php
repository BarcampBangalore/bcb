<?php get_header(); ?>
            <div id="plaza_wrapper">
                <div id="plaza">
                    <h1>Search Results for : <?php echo get_search_query(); ?></h1>
                </div>
            </div>
            <div id="content_outer_wrapper">
                <div id="content_inner_wrapper">
                    <div id="content" class="" >
                        
                        <?php if ( have_posts() ) : ?>
                        <ul>
                            <?php while ( have_posts() ) : the_post(); ?>
                            <li  class="session_list_item">
                                <h2><a href="<?php the_permalink(); ?>" ><?php  the_title(); ?></a></h2>
                                Session by <?php the_author_posts_link(); ?> <?php echo get_avatar( get_the_author_meta('ID'), 16 ); ?> <br> <?php  the_tags(); ?> 
                                <br>Categories: <?php the_category(', '); ?>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php else : ?>
                        <p>Sorry, no sessions registered yet for this barcamp!</p>
                        <?php endif; ?>
                        
                        
                    </div>
                    <div id="sidebar">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
<?php get_footer(); ?>
        