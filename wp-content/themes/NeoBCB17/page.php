<?php get_header(); ?>
           
<div id="sessionpage_wrapper" class="centered_background">
    
   
    
    
    
    <div id="sessionpage_content">

        <div id="sessionpage_header">
            <div id="sessionpage_title" class="yellowbg">
                <h1><?php the_title(); ?></h1>
            </div>
            
        </div>
        <div style="clear: both"></div>
        
        <div id="sessionpage_midsection">
            <div id="generalpage_posttext">
                <?php the_post(); ?>
                <?php the_content(); ?>
                
                
                
            </div>
            
            <div style="clear: both"></div>
        </div>

    </div>
</div>


<?php get_footer(); ?>
        