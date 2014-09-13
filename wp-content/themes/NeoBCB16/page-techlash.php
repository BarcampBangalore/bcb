<?php get_header(); ?>

<div id="sessionpage_wrapper" class="centered_background" style="position: relative">

    <script type="text/javascript">



        $(function() {


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
                    this.masonry.colYs.push(0);
                }
            };

            $.Isotope.prototype._masonryResizeChanged = function() {
                var prevColCount = this.masonry.cols;
                this._getMasonryGutterColumns();
                return (this.masonry.cols !== prevColCount);
            };

            $.Isotope.prototype._masonryGetContainerSize = function() {
                var gutter = this.options.masonry.gutterWidth || 0;
                var unusedCols = 0,
                        i = this.masonry.cols;
                while (--i) {
                    if (this.masonry.colYs[i] !== 0) {
                        break;
                    }
                    unusedCols++;
                }
                return {
                    height: Math.max.apply(Math, this.masonry.colYs),
                    width: ((this.masonry.cols - unusedCols) * this.masonry.columnWidth) - gutter
                };
            };





            var $container = $('#cards_parent');
            // initialize
            $container.isotope({
                //columnWidth: 400,
                itemSelector: '.sessioncard',
                masonry: {
                    columnWidth: 380,
                    gutterWidth: 20

                }
                //gutterWidth: 10
            });

            $container.imagesLoaded(function() {

                $container.isotope('reLayout');
            });

            $(".sessioncard_footer").on("click", ".neo_attend_button", function() {


                var card = $(this);
                card.html('<img src="<?php bloginfo('template_url') ?>/images/ajaxloader.gif" />');

                $.post("<?php echo admin_url('admin-ajax.php?' . http_build_query(array("action" => "toggle_attend"))); ?>", {post_id: $(this).data("postid")}, function(data) {

                    if (data.status != 'OK')
                    {
                        var r = confirm(data.status);
                        if (r == true)
                        {
                            window.location.href = "<?php echo wp_login_url(get_permalink()); ?>";
                        }
                        card.parent().html(data.button_text);
                    }
                    else
                    {

                        $("#sessioncard" + card.data("postid") + " .sessioncard_attendees_link .sessioncard_meta_text").html(data.attendees_count);
                        card.parent().html(data.button_text);
                    }
                }, 'json');
            });


        });

    </script>


    <div id="techlash_page_container">
        <div id="techlash_page_content">


            <div id="sessionpage_header">

                <div id="normalpage_title" class="yellowbg">
                    <h1 class="normalpage_heading"><?php the_title(); ?></h1>
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
                <h2 id="techlash_sessionheading">Techlash sessions for BCB Spring 2014</h2>
                <div id="cards_parent">
                    <?php
                    $args = 'cat=933';


                    query_posts($args);

                    while (have_posts()) : the_post();
                        ?>


                        <div class="sessioncard" id="sessioncard<?php the_ID(); ?>">

                            <div class="sessioncard_user track_color_bg_tl">
    <?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author_meta('user_nicename') . '</a>'; ?>

                            </div>
                            <div class="sessioncard_useravatar"><?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_avatar(get_the_author_meta('ID'), 48) . '</a>'; ?><?php //echo '<img src="http://placeimg.com/48/48/any" />';      ?></div>
    <?php if (isset($_COOKIE['bcb_last_visit']) && (get_the_time('U') > ($_COOKIE['bcb_last_visit'] > strtotime("-2 days") ? strtotime("-2 days") : $_COOKIE['bcb_last_visit'] ))) : ?>
                                <div class="sessioncard_newtag">new</div>     
                            <?php endif; ?>
                            <div class="sessioncard_head">


                                <div class="sessioncard_title">
                                    <a href="<?php echo get_permalink(); ?>" class="track_color_tl">
    <?php the_title(); ?>
                                    </a>
                                </div>



                                <div class="sessioncard_tagparent">


    <?php if (get_the_time('U') > strtotime("-4 days")): ?>
                                        <div class="sessioncard_newtag">new</div>     
                                    <?php endif; ?>
                                    <div class="sessioncard_techlashtag">Techlash</div>

                                </div>




                            </div>
                            <div class="sessioncard_footer">
                                <div class="sessioncard_user_comments">

                                    <a class="sessioncard_attendees_link" href="<?php echo get_permalink(); ?>#attendees"><img class="sessioncard_meta_image" src="<?php bloginfo('template_url') ?>/images/users_icon.jpg" />
                                        <span class="sessioncard_meta_text"><?php echo attending_users_count(get_the_ID()) ?></span></a>

                                    <a href="<?php echo get_permalink(); ?>#comments"><img class="sessioncard_meta_image" src="<?php bloginfo('template_url') ?>/images/comments_icon.jpg" />
                                        <span class="sessioncard_meta_text"><?php comments_number('0', '1', '%'); ?></span></a>


                                </div>

                                <div class="sessioncard_attend">

    <?php echo get_my_attending_button(get_the_ID()); ?>

                                </div>
                                <div style="clear: both"></div>
                            </div>


                        </div>





<?php endwhile; ?>

                </div>
            </div>

        </div>
        <div id="techlash_right_container" >
            <div style="font-size: 22px; text-align: center; padding-top: 10px; padding-bottom: 20px;">Your 5 mins of fame.<br></div>
            
            <iframe width="260" height="195" src="//www.youtube.com/embed/4je2tRkfIF0" frameborder="0" allowfullscreen></iframe>
            <div style="background-color: #f9a70f; border-radius: 5px; 
                 box-shadow: 1px 1px 1px #888888; height: 44px; text-align: center;
                 padding: 5px; margin-top: 20px; color: #FFFFFF; font-size: 30px;">Register</div>
        </div>
        

    </div>
</div>


<?php get_footer(); ?>
        