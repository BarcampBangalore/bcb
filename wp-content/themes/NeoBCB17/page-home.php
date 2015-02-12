<?php get_header(); ?>

<div id="page_content">
    <script src="libs/unslider.min.js"></script>
    <script type="text/javascript">
            
            
        function initSlider()
        {
            var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
            _CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
            _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };

            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                //$SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        }
            
            
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
 
 
            initSlider();
                
                
            var $container = $('#cards_parent');
            // initialize
            $container.isotope({
                //columnWidth: 400,
                itemSelector: '.homecard',
                masonry : {
                    columnWidth : 400,
                    gutterWidth: 20
                        
                }
                //gutterWidth: 10
            });



            $container.imagesLoaded(function(){

                $container.isotope('reLayout');
            });
            
            
            
            
        });
        
        
        
        
        
    </script>
    
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 2000px; height: 604px; overflow: hidden;">
        
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 2000px;
            height: 604px; overflow: hidden; text-align: center;">
            <div style="background-image: url('<?php bloginfo('template_url'); ?>/images/backdrop.jpg'); background-size: cover; background-position-y: 30%">
                <div style="font-size: 100px; color: #FFFFFF; text-shadow: 3px 3px 3px #000000; padding-top: 140px;">
                    Where Ideas Meet!
                </div>
                <div style="color: #FFFFFF; text-shadow: 3px 3px 3px #000000; font-size: 40px">Soon!</div>
                <a href="<?php echo get_permalink( get_page_by_path( 'add-a-session' ) ) ?>" style="text-decoration: none;"><div id="register_button" style="background-color: #f9a70f; border-radius: 10px; 
                 box-shadow: 1px 1px 1px #888888; height: 60px; width: 260px; text-align: center;
                 padding: 10px; margin-top: 40px; color: #FFFFFF; font-size: 40px; margin: 20px auto">
                    Register Now
                    </div></a>
            </div>
            <div >
                <div style="width: 70%; padding: 1%; display: inline-block; text-align: center;">
                    <!--<img style="width: 30%" src="<?php bloginfo('template_url'); ?>/images/carousel/IMG_1937.JPG" />-->
                    <img style="width: 30%; box-shadow: 1px 1px 1px #222222;" src="<?php bloginfo('template_url'); ?>/images/carousel/IMG_9701.JPG" />
                    <img style="width: 30%; box-shadow: 1px 1px 1px #222222;" src="<?php bloginfo('template_url'); ?>/images/carousel/IMG_2000.JPG" />
                    <img style="width: 30%; box-shadow: 1px 1px 1px #222222;" src="<?php bloginfo('template_url'); ?>/images/carousel/IMG_2083.JPG" />
                    <img style="width: 30%; box-shadow: 1px 1px 1px #222222;" src="<?php bloginfo('template_url'); ?>/images/carousel/IMG_1944.JPG" />
                    <img style="width: 30%; box-shadow: 1px 1px 1px #222222;" src="<?php bloginfo('template_url'); ?>/images/carousel/IMG_9779.JPG" />
                    <img style="width: 30%; box-shadow: 1px 1px 1px #222222;" src="<?php bloginfo('template_url'); ?>/images/carousel/IMG_20130302_105453_2.jpg" />
                    <!--<img style="width: 30%" src="<?php bloginfo('template_url'); ?>/images/carousel/photo.jpeg" />-->
                </div>
                
               
            </div>
            <div>
                <div style="width: 1000px; margin-left: auto; margin-right: auto; padding: 30px;">
                    <div style=" width: 400px; height: 460px; display: inline-block; padding-right: 40px;">
                        <img style="width: 360px;" src="<?php bloginfo('template_url'); ?>/images/nexus5_1up.png" />
                    </div>
                    <div style="width: 400px; height: 460px; display: inline-block; font-size: 24px; color: #000000;
                         text-align: left; vertical-align: top; padding: 40px; text-shadow: 2px 2px 2px #777777;">
                        Get the companion BCB Android App for
                        <ul>
                            <li>Live Updates on the event day!</li>
                            <li>Schedule</li>
                            <li>Sessions Information</li>
                            <li>Internal Venue Map</li>
                            <li>... and much more.</li>
                        </ul>
                        
                        <a href="https://play.google.com/store/apps/details?id=com.bangalore.barcamp">
                            <img alt="Get it on Google Play"
                                 src="https://developer.android.com/images/brand/en_app_rgb_wo_60.png" />
                        </a>
                    </div>
                    
                </div>
                
            </div>
            <div>
                <div>
                    <img src="<?php bloginfo('template_url'); ?>/images/stopwatch.png" style="height: 280px;" />
                </div>
                <div style="font-size: 40px;">
                    TechLash!<br>
                    Your 5 mins in the light<br>
                    <span style="font-size: 28px; opacity: 0.8;">High Speed talks about what new and exciting you are working on</span>
                    <br><a style="color: #412d02; font-size: 24px;" href="<?php echo get_permalink( get_page_by_path( 'techlash' ) ) ?>">More about Techlash</a>
                </div>
            </div>
            
            
            
            <!-- Example to add fixed static share buttons in slider BEGIN -->
            <!-- Remove it if no need -->
            <!-- Share Button Styles -->
            
        </div>
                
        <!-- Bullet Navigator Skin Begin -->
        <style>
            /* jssor slider bullet navigator skin 21 css */
            /*
            .jssorb21 div           (normal)
            .jssorb21 div:hover     (normal mouseover)
            .jssorb21 .av           (active)
            .jssorb21 .av:hover     (active mouseover)
            .jssorb21 .dn           (mousedown)
            */
            .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av
            {
                background: url(<?php bloginfo('template_url'); ?>/images/b21.png) no-repeat;
                overflow:hidden;
                cursor: pointer;
            }
            .jssorb21 div { background-position: -5px -5px; }
            .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
            .jssorb21 .av { background-position: -65px -5px; }
            .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="position: absolute; width: 19px; height: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
        </div>
        <!-- Bullet Navigator Skin End -->

        <!-- Arrow Navigator Skin Begin -->
        <style>
            /* jssor slider arrow navigator skin 21 css */
            /*
            .jssora21l              (normal)
            .jssora21r              (normal)
            .jssora21l:hover        (normal mouseover)
            .jssora21r:hover        (normal mouseover)
            .jssora21ldn            (mousedown)
            .jssora21rdn            (mousedown)
            */
            .jssora21l, .jssora21r, .jssora21ldn, .jssora21rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(<?php bloginfo('template_url'); ?>/images/a21.png) center center no-repeat;
                overflow: hidden;
            }
            .jssora21l { background-position: -3px -33px; }
            .jssora21r { background-position: -63px -33px; }
            .jssora21l:hover { background-position: -123px -33px; }
            .jssora21r:hover { background-position: -183px -33px; }
            .jssora21ldn { background-position: -243px -33px; }
            .jssora21rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
    </div>
    <!-- Jssor Slider End -->
    
    
    
<!--    <div id="plaza">
        <ul>
            <li>
                <div id="plaza_slide_ideas" class="plaza_slide">
                    <h1>Where Ideas Meet!</h1>
                </div>
            </li>
            <li>
                <div id="plaza_slide_unconference" class="plaza_slide">
                    <h1>India's largest unconference</h1>
                    <h2>Come share and learn</h2>
                </div>
            </li>
            <li>
                <div id="plaza_slide_android" class="plaza_slide">
                    <h1>Download BCB App</h1>
                    <a href="https://play.google.com/store/apps/details?id=com.bangalore.barcamp">
                        <img alt="Get it on Google Play"
                             src="https://developer.android.com/images/brand/en_generic_rgb_wo_60.png" />
                    </a><br>
                    (App will be refreshed for BCB Spring 2014 soon)
                </div>
            </li>
            <li>
                <div id="plaza_slide_unconference" class="plaza_slide">
                    <h1>Techlash</h1>
                    <h2>Concentrated dose of ideas!</h2>
                    <a href="https://barcampbangalore.org/bcb/techlash">Know more about Techlash</a>
                </div>
            </li>
        </ul>
            
    </div>
        -->

    <div id="cards_parent">


        <div class="homecard">
            <div class="homecard_head yellowbg">
                Barcamp Bangalore
            </div>
            <div class="homecard_content">
                <p>Barcamp Bangalore is an open event focused around people, ideas and collaboration. 
                    There is no fixed format and agenda. If you have an interesting topic to share 
                    or want to collaborate with folks with a variety of experience, Barcamp 
                    is the place for you.</p>
                <p>Since its inception in Bangalore in 2006, BCB has been a place for awesome 
                    people with ideas in their heads to talk and share or just hang out with 
                    their peers and friends.You can 
                    expect sessions on variety of topics like</p>
                    
                    &nbsp; &bull; &nbsp;  Technology<br>
                    &nbsp; &bull; &nbsp;  Design<br>
                    &nbsp; &bull; &nbsp;  Startups & Entrepreneurship<br>
                    &nbsp; &bull; &nbsp;  Business & Management<br>
                    &nbsp; &bull; &nbsp;  Photography<br>
                    &nbsp; &bull; &nbsp;  User Experience<br>
                    &nbsp; &bull; &nbsp;  Your life learnings<br>
                    &nbsp; &bull; &nbsp;  and a lot more...</p>
            </div>
        </div>
        
        <div class="homecard" id="venue_card">
            <div class="homecard_head yellowbg">
                When & where?
            </div>
            <div id="venue_card_text">
                <span class="venue_text_small">It will</span> 
                <!-- <span class="venue_text_big">SAP Labs</span><br><span class="venue_text_mid">Whitefield, Bangalore</span> <br>
                <span class="venue_text_small">at</span> <span class="venue_text_big">8:00 AM</span><br>
                <span class="venue_text_small">on</span> <span class="venue_text_big">11th October, 2014</span> -->
                <span class="venue_text_small">be happening</span> <span class="venue_text_big">soon!</span>
            </div>
            <div id="map_div" >

                <iframe style="border-top: 1px solid #AAAAAA; border-bottom: 1px solid #AAAAAA;" width="395" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248849.84916296526!2d77.63093950000001!3d12.953997399999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C+Karnataka!5e0!3m2!1sen!2sin!4v1423758743154&iwloc=near"></iframe><br /><small style="background-color: #EEEEEE; display: block; padding: 15px; text-align: center; margin-top: 10px;  border-top: 1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC;"><a target="_blank" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248849.84916296526!2d77.63093950000001!3d12.953997399999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C+Karnataka!5e0!3m2!1sen!2sin!4v1423758743154" style="color:#BD3636;  text-align:left; font-weight: bold;">View Larger Map</a></small>

            </div>
        </div>
        
        <div class="homecard">
            <div class="homecard_head yellowbg">
                Who should attend Barcamp?
            </div>
            <div class="homecard_content">
                <p><span class="highlight" >Everyone!</span> Barcamp is about sharing your passions 
                    with your peers without any boundaries. Got any life hacks to show off, have 
                    anything to demo or ideas to share and brainstorm, wanna techjam, learn from
                    your peers, well you are welcome.</p>
            </div>
        </div>

        <div class="homecard">
            <div class="homecard_head yellowbg">
                But I have never been to one
            </div>
            <div class="homecard_content">

                <p><span class="highlight" >Well, there's always a first time</span> Don't worry; we don't bite. 
                    You will meet some awesome people, make some great friendships and discover great 
                    new ways of thinking</p>
            </div>
        </div>
        
        

        <div class="homecard">
            <div class="homecard_head yellowbg">
                <a id="register_card" >How do I register</a>
            </div>
            <div class="homecard_content">
              Simply
                <a href="https://barcampbangalore.org/bcb/wp-login.php?redirect_to=https%3A%2F%2Fbarcampbangalore.org%2Fbcb%2F">login</a>
                to the site using your existing Barcamp Bangalore or WordPress.com account. Once logged in, have a look at the
                <a href="https://barcampbangalore.org/bcb/sessions">proposed sessions</a>
                and click on the "I wanna attend" button on any/all of the sessions you are interested in. <br/>

                If your want to take a session, just go ahead and click on <a href="https://barcampbangalore.org/bcb/add-a-session">Add Session</a> Button on top and enter all the details there


            </div>
        </div>

        <div id="tagcard" class="homecard">
            <h2>#barcampblr</h2>
            <p>One tag to rule them all!</p>
            
        </div>
        
        <div class="homecard">
            <div class="homecard_head yellowbg">
                Who presents the sessions?
            </div>
            <div class="homecard_content">
                
                
                <p>Agenda, sessions and content are all decided by participants
                     However, to maintain the
                Barcamp spirit, sessions are selected on a first come first serve basis of the speakers
                on the morning of Barcamp Bangalore. Techies, that we are, we use silicon-made pseudo intelligent brains to 
                do the scheduling based on "I'm attending" data of first 36 registered sessions on BCB
                morning and our algorithmic minions ensure minimum clashes for the most wanted sessions.</p>
                
                <p>So, we suggest:</p>
                
                <ul>
                    <li>Propose sessions early. This gives others time to browse through your
                        idea and for you to know how many are interested in attending. </li>
                    <li>If you want to present, arrive early and register your session
                        with the Registration Desk. </li>
                    <li>If you are just attending, then dont forget to mark "I'm attending" 
                        before D-Day! It helps us in scheduling and ensuring minimum overlaps.</li>
                    <li>And don't forget, <a href="https://twitter.com/intent/tweet?text=%23barcampblr">tweet about BCB</a> with tag #barcampblr</li>
                </ul>
            </div>
        </div>

        <div class="homecard">
            <div class="homecard_head yellowbg">
                What to bring?
            </div>
            <div class="homecard_content">
                <ul>
                    
                    <li>Your enthusiasm to share and learn :) </li>
                    <li>Your friends — old and new!! </li>
                    <li>Notebook and pen or something digitally similar for tips, point and doodles</li>
                    <li>Cameras, phones, audio-recorders, video-recorder — we are an open-unconference </li>
                    <li>Random stuff to share with your friends. Business cards? Ideas? Cookies? Chocolates?</li>
                    <li>We encourage creative non-slide-deck talks but If you really insist or need then bring a laptop with slides</li>
                </ul>
            </div>
        </div>
        
        
        <div class="homecard">
            <div class="homecard_head yellowbg">
                What will be there?
            </div>
            <div class="homecard_content">
                <ul>
                    <li>Peers with similar interests, hobbies and passions.</li>
                    <li>Space - 6 parallel session rooms and loads of space outside the session rooms to have your
                        impromptu sessions with smaller audiences.</li>
                    <li>Uninterrupted Wifi, for live tweeting and updates - what will we do without it??!!?? </li>
                    <li>Projectors, for those who insist on structured formats of presentation. </li>

                    
                </ul>
            </div>
        </div>
        
        
        
        <div class="homecard">
            <div class="homecard_head yellowbg">
                Techlash
            </div>
            <div class="homecard_content">
                <p>Techlash is a tech rapidfire round at BCB. At Techlash, our speakers
                present their smart ideas or demo their creations through a series of 
                quick <strong>5 minute</strong> time slots.</p>

                <p>If you are a wanna be Techlash speaker, go ahead and 
                <a title="Add a Session" href="https://barcampbangalore.org/bcb/add-a-session">register
                    your session</a> under Techlash category. </p>
                    

                <p>The slots are very limited and usually overbooked. List of currently registered
                    techlash sessions can be seen <a href="https://barcampbangalore.org/bcb/techlash">here</a>.</p>

            </div>
        </div>
        
        <div id="contact_card" class="homecard">
            <div class="homecard_head yellowbg">
                Contact us
            </div>
            <div class="homecard_content">
                <p>We are all over the place. Just buzz us on any of these</p>
                <ul>
                    <li><a href="https://twitter.com/barcampbng"><img src="<?php bloginfo('template_url')  ?>/images/twitter.png"  /><br>Twitter</a></li>
                    <li><a href="http://groups.yahoo.com/group/bangalore_barcamp/"><img src="<?php bloginfo('template_url')  ?>/images/mailinglist.png"  /><br>Mailing list</a></li>
                    <li><a href="https://www.facebook.com/barcampbng"><img src="<?php bloginfo('template_url')  ?>/images/facebook.png"  /><br>Facebook</a></li>
                    <li><a href="https://plus.google.com/106980602201931313067/posts"><img src="<?php bloginfo('template_url')  ?>/images/google-plus.png"  /><br>Google Plus</a></li>
                </ul>
                
                
            </div>
        </div>
        
        
        <div id="teamcard" class="homecard">
            <div class="homecard_head yellowbg">
                Meet the team
            </div>
            <div class="homecard_content">
                
                <ul id="teamlist">
                    <li><img class="teammember" src="<?php bloginfo('template_url')  ?>/images/team/saurabh.jpg" alt="Saurabh Minni" title="Saurabh Minni" /></li>
                    <li><img class="teammember" src="<?php bloginfo('template_url')  ?>/images/team/aman.jpg" alt="Aman Manglik" title="Aman Manglik"  /></li>
                    <li><img class="teammember" src="<?php bloginfo('template_url')  ?>/images/team/sathya.jpg" alt="Sathyajith Bhat" title="Sathyajith Bhat"  /></li>
                    <li><img class="teammember" src="<?php bloginfo('template_url')  ?>/images/team/rahul.jpg" alt="Rahul Aurora" title="Rahul Aurora"  /></li>
                    <li><img class="teammember" src="<?php bloginfo('template_url')  ?>/images/team/arun.jpg" alt="Arun Vijayan" title="Arun Vijayan"  /></li>
                    <li><img class="teammember" src="<?php bloginfo('template_url')  ?>/images/team/daaku.jpg" alt="Amit Khare" title="Amit Khare"  /></li>
                    <li><img class="teammember" src="<?php bloginfo('template_url')  ?>/images/team/vivek.jpg" alt="Vivek K" title="Vivek K"  /></li>
                </ul>
                
                <a href="http://barcampbangalore.org/planning/meet-the-team/">
                    <div id="teamlink">
                        Meet the humble planners &nbsp;&nbsp;&nbsp; &gt; 
                    </div>
                </a>
                
                
                
            </div>
        </div>


        

        







    </div> <!-- cards parent-->

</div>
<?php get_footer(); ?>
<?php wp_footer(); ?>
<script>window.scrollback = {room:"barcamp-bangalore",form:"toast",theme:"dark",minimize:true};(function(d,s,h,e){e=d.createElement(s);e.async=1;e.src=(location.protocol === "https:" ? "https:" : "http:") + "//scrollback.io/client.min.js";d.getElementsByTagName(s)[0].parentNode.appendChild(e);}(document,"script"));</script>
</body>
</html>
