<?php get_header(); ?>
           
<div id="sessionpage_wrapper" class="centered_background">
    
   <script type="text/javascript">
            
            
            
                $(function(){
                
                
                    $.Isotope.prototype._getMasonryGutterColumns = function() {
                        var gutter = this.options.masonry.gutterWidth || 0;
                        containerWidth = this.element.parent().width();
                        this.masonry.columnWidth = this.options && this.options.masonry.columnWidth ||
                            this.$filteredAtoms.outerWidth(true) ||
                            containerWidth;
                        this.masonry.columnWidth += gutter;
                        this.masonry.cols = Math.floor(containerWidth / this.masonry.columnWidth);
                        this.masonry.cols = Math.max(this.masonry.cols, 1);
                    };
 
                    $.Isotope.prototype._masonryReset = function() {
                        this.masonry = {};
                        this._getMasonryGutterColumns();
                        var i = this.masonry.cols;
                        this.masonry.colYs = [];
                        while (i--) {
                            this.masonry.colYs.push( 0 );
                        }
                    };
 
                    $.Isotope.prototype._masonryResizeChanged = function() {
                        var prevColCount = this.masonry.cols;
                        this._getMasonryGutterColumns();
                        return ( this.masonry.cols !== prevColCount );
                    };
 
                    $.Isotope.prototype._masonryGetContainerSize = function() {
                        var gutter = this.options.masonry.gutterWidth || 0;
                        var unusedCols = 0,
                        i = this.masonry.cols;
                        while ( --i ) {
                            if ( this.masonry.colYs[i] !== 0 ) {
                                break;
                            }
                            unusedCols++;
                        }
                        return {
                            height : Math.max.apply( Math, this.masonry.colYs ),
                            width : ((this.masonry.cols - unusedCols) * this.masonry.columnWidth) - gutter
                        };
                    };
 
 
                
                
                
                    var $container = $('#cards_parent');
                    // initialize
                    $container.isotope({
                        //columnWidth: 400,
                        itemSelector: '.sessioncard',
                        masonry : {
                            columnWidth : 300,
                            gutterWidth: 20
                        
                        }
                        //gutterWidth: 10
                    });
                    
                    $container.imagesLoaded(function(){
                        
                        $container.isotope('reLayout');
                    });
                    
                    
                    
                    
                });
            
            </script>
    
    
    
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
       
    
        <div id="techlash_cardswrapper">
            <h2 id="techlash_sessionheading">Techlash sessions for BCB Monsoon 2013</h2>
            <div id="cards_parent">
        <?php 
        
        $args = 'cat=787';
        
        
        query_posts($args);
        
        while (have_posts()) : the_post();
        
        ?>
        
                        <div class="sessioncard" id="sessioncard<?php the_ID(); ?>">
                            <div class="sessioncard_head">
                                        
                                <div class="sessioncard_title">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </div>
                                <div class="sessioncard_user">
                                    <?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author_meta('user_nicename') . '</a>'; ?> 
                                </div>
                                <div class="sessioncard_useravatar"><?php echo get_avatar( get_the_author_meta('ID'), 48 );    ?><?php  //echo '<img src="http://placeimg.com/48/48/any" />'; ?></div>
                                <img class="techlash_flag" src="<?php bloginfo('template_url')  ?>/images/techlash_flag.png" />
                            </div>
                            
                            
                            
                            
                            <div class="sessioncard_user_comments">
                                <div class="sessioncard_users sessioncard_meta">
                                    <img class="sessioncard_meta_image" src="<?php bloginfo('template_url')  ?>/images/users_icon.jpg" />
                                    <span class="sessioncard_meta_text"><?php echo attending_users_count(get_the_ID()) ?> Attending</span>
                                </div>
                                <div class="sessioncard_comments sessioncard_meta">
                                    <img class="sessioncard_meta_image" src="<?php bloginfo('template_url')  ?>/images/comments_icon.jpg" />
                                    <span class="sessioncard_meta_text"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></span>
                                </div>
                                <div style="clear: both" ></div>
                            </div>
                            
                            
                            
                            
                            
                            
                        </div>
        
        
        <?php endwhile; ?>
                
                </div>
        </div>
        
</div>
    
</div>


<?php get_footer(); ?>
        