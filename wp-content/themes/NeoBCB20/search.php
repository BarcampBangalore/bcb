<?php get_header(); ?>
<div id="tagpage_wrapper">

    <div id="tagpage_content">


        <div id="tagpage_tagmetaarea">
            <h1><span id="tagpage_metaheading">Search</span><br> <?php echo get_search_query(); ?></h1>
        </div>
                    <div  id="tagpage_sessionlist" >
                        
                        <?php if ( have_posts() ) : ?>
                        <ul>
                            <?php while ( have_posts() ) : the_post(); ?>
                            <li  class="session_list_item">
                                <h2><a  class="tagpage_sessiontitle"  href="<?php the_permalink(); ?>" ><?php  the_title(); ?></a></h2>
                                <div class="tagppage_sessiondetails">Category: <?php the_category(', '); ?> </div>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php else : ?>
                        <p id="tagpage_noresultmsg">Sorry, no results found for this query.</p>
                        <?php endif; ?>
                        
                        
                    </div>
                    
                <div style="clear: both"></div>

    </div>


</div>
<?php get_footer(); ?>
        