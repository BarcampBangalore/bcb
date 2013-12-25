<?php


function insertSponsors($bcbname)
{
    switch ($bcbname)
    {
        case "bcb13":
            ?>
                            
            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo$bcbname  ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sap_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Silver Sponsor</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/mowbly_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friend of Barcamp</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/coworkable_logo.jpg" /></div>
                </div>
            </div>

            <?php
            break;
        
        
        
        case "bcb12":
            ?>
                            
            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo$bcbname  ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sap_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Gold Sponsor</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/microsoft_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friend of Barcamp</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/minjar_logo.png" /></div>
                </div>
            </div>

            <?php
            break;
        
        
        case "bcb11":
            ?>
                            
            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo$bcbname  ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sap_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Gold Sponsor</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/microsoft_logo.png" /></div>
                </div>
                
            </div>

            <?php
            break;
        
        
        case "bcb10":
            ?>
                            
            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo$bcbname  ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sap_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friend of Barcamp</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/fusioncharts_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friend of Barcamp</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/KRDS-Facecode.png" /></div>
                </div>
            </div>

            <?php
            break;
        
        
        case "bcb9":
            ?>
                            
            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo$bcbname  ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/intuit_logo.gif" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Gold Sponsor</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/orangescape_logo.png" /></div>
                </div>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Friend of Barcamp</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/fusioncharts_logo.png" /></div>
                </div>
            </div>

            <?php
            break;
        
        
        case "bcb8":
            ?>
                            
            <div class="archive_sponsors_wrapper">
                <h2>Sponsors for <?php echo$bcbname  ?></h2>
                <div class="archive_sponsor">
                    <h3 class="archive_sponsor_title">Event Partner</h3>
                    <div><img class="archive_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/yahoo_logo_in.png" /></div>
                </div>
                
            </div>

            <?php
            break;
        
        
        
        


        default:
            break;
    }
}

get_header(); ?>

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
 
 
                
                
                
            var $containers = $('.cards_parent_class');
            // initialize
            $containers.each(function(){
                $(this).isotope({
                    //columnWidth: 400,
                    itemSelector: '.sessioncard',
                    masonry : {
                        columnWidth : 300,
                        gutterWidth: 20
                        
                    }
                    //gutterWidth: 10
                });
                
                $(this).imagesLoaded(function(){
                        
                    $container.isotope('reLayout');
                });
                

            });
        
            
       
            
            
            $("#archivelinks a").click(function(){
                $("#archivelinks li").removeClass("archive_selected");
                $(".archive_parent").hide();
                var contentdiv = "#" + $(this).data("contentdiv");
                $(contentdiv).show()
                $(this).parent().addClass("archive_selected");
                $(contentdiv + " .cards_parent_class").isotope('reLayout');
                
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
                <ul id="archivelinks">
                    <li class="archive_selected"><a data-contentdiv="archive_bcb13">BCB13</a></li>
                    <li><a  data-contentdiv="archive_bcb12">BCB12</a></li>
                    <li><a  data-contentdiv="archive_bcb11">BCB11</a></li>
                    <li><a  data-contentdiv="archive_bcb10">BCB10</a></li>
                    <li><a  data-contentdiv="archive_bcb9">BCB9</a></li>
                    <li><a  data-contentdiv="archive_bcb8">BCB8</a></li>
                </ul>



            </div>

            <div style="clear: both"></div>
        </div>
        <?php
        $techlash_categories = array(787, 639);
        $archive_categories = array(636 => 'bcb13', 479 => 'bcb12', 399 => 'bcb11', 324 => 'bcb10', 220 => 'bcb9', 3 => 'bcb8' );
        foreach ($archive_categories as $archive_cat => $archive_catname):
            ?>
        <div id="archive_<?php echo $archive_catname; ?>" class="archive_parent" <?php if ($archive_catname != "bcb13")  echo 'style="display: none;"';  ?> >
            <a id="archivepage_<?php echo $archive_catname;?>" ></a>
            
            
            
            
            
            <div id="techlash_cardswrapper">
                
                <?php insertSponsors($archive_catname); ?>
                
                <h2 id="techlash_sessionheading">Sessions for <?php echo get_cat_name( $archive_cat );  ?>  </h2>
                <div id="cards_parent" class="cards_parent_class">
                    <?php
                    query_posts('cat=' . $archive_cat);

                    while (have_posts()) : the_post();
                    $is_techlash_session = false;
                    $post_categories = wp_get_post_categories( get_the_ID() );

                    foreach($post_categories as $c){
                        if (array_search($c, $techlash_categories))
                        {
                            $is_techlash_session = true;
                        }
                    }
                    
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
                                <div class="sessioncard_useravatar"><?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_avatar( get_the_author_meta('ID'), 48 ) . '</a>'; ?><?php //echo '<img src="http://placeimg.com/48/48/any" />';        ?></div>
                                <?php if ($is_techlash_session): ?>
                                <img class="techlash_flag" src="<?php bloginfo('template_url')  ?>/images/techlash_flag.png" />
                                                                
                                <?php  endif; ?>
                            </div>
                        </div>


                        <?php
                    endwhile;
                    ?>

                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </div>

</div>


<?php get_footer(); ?>
        