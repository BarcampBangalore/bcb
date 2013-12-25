<?php get_header(); ?>
            <div id="plaza_wrapper" class="plaza_wrapper_general">
                <?php get_plaza(); ?>
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
        