<?php get_header(); ?>
           
<div id="page_wrapper" class="centered_background">
    
   
    
    
    
    <div id="page_content">
        
        <div class="container">
            <div class="row">
                <div id="page_title" class="single_page_box col-xs-12">
                    <?php the_title(); ?>
                </div>
            </div>
            
            <div class="row">
                <div class="single_page_box col-xs-12">
                    <?php the_post(); ?>
                <?php the_content(); ?>
                </div>
            </div>
            
        </div>

    </div>
</div>


<?php get_footer(); ?>
        