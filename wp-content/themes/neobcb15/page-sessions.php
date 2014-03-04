<?php get_header(); ?>

<div id="page_content">


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
                itemSelector: '.cards_track',
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

                        $("#sessioncard" + card.data("postid") + " .sessioncard_attendees_link .sessioncard_meta_text").html(data.attendees_count );
                        card.parent().html(data.button_text);
                    }
                }, 'json');
            });





        });

    </script>

    <!-- <div id="sessionspage_heading">Sessions for BCB Spring 2014</div>-->

    <div id="cards_parent">

        <?php foreach (array(934, 935, 936, 937) as $track_id) : ?>


            <div id="cards_track_934" class="cards_track">
                <div class="track_header track_color_bg_<?php echo $track_id; ?>" >
                    <?php
                    $catobj = get_category($track_id);
                    echo $catobj->name;
                    ?>
                </div>


                <?php
                $sessionsloop = new WP_Query('cat=' . $track_id);

                if (!$sessionsloop->have_posts())
                {
                    echo '<div class="sessioncard_no_session_message">No sessions in this track yet :)</div>';
                }

                while ($sessionsloop->have_posts()) : $sessionsloop->the_post();
                    ?>
                    <div class="sessioncard" id="sessioncard<?php the_ID(); ?>">

                        <div class="sessioncard_user track_color_bg_<?php echo $track_id ?>">
        <?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author_meta('user_nicename') . '</a>'; ?>

                        </div>
                        <div class="sessioncard_useravatar"><?php echo '<a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_avatar(get_the_author_meta('ID'), 48) . '</a>'; ?><?php //echo '<img src="http://placeimg.com/48/48/any" />';     ?></div>
                        <?php if (isset($_COOKIE['bcb_last_visit']) && (get_the_time('U') > ($_COOKIE['bcb_last_visit'] > strtotime("-2 days") ? strtotime("-2 days") : $_COOKIE['bcb_last_visit'] ))) : ?>
                            <div class="sessioncard_newtag">new</div>     
                            <?php endif; ?>
                        <div class="sessioncard_head">


                            <div class="sessioncard_title">
                                <a href="<?php echo get_permalink(); ?>" class="track_color_<?php echo $track_id; ?>">
        <?php the_title(); ?>
                                </a>
                            </div>

                            
                            <?php if ($is_techlash_session) : ?>
                                <img class="techlash_flag" src="<?php bloginfo('template_url') ?>/images/techlash_flag.png" />
        <?php endif; ?>

                            
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

                    <?php
                endwhile;

                wp_reset_postdata();
                ?>





            </div>

<?php endforeach; ?>

    </div> <!-- cards parent-->



</div>




<?php get_footer(); ?>
        
