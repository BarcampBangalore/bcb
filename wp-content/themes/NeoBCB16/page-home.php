<?php get_header(); ?>

<div id="page_content">
    <script src="libs/unslider.min.js"></script>
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
            
            
            $("#plaza").unslider({
                speed: 1000,               //  The speed to animate each slide (in milliseconds)
                delay: 4000,              //  The delay between slide animations (in milliseconds)
                fluid: true              //  Support responsive design. May break non-responsive designs
            });
            
        });
            
    </script>
    
    
    
    
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
                    <a href="http://barcampbangalore.org/bcb/techlash">Know more about Techlash</a>
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
                <span class="venue_text_small">It's Happening <br>at</span> 
                <span class="venue_text_big">SAP Labs</span><br><span class="venue_text_mid">Whitefield, Bangalore</span> <br>
                <span class="venue_text_small">at</span> <span class="venue_text_big">8:00 AM</span><br>
                <span class="venue_text_small">on</span> <span class="venue_text_big">11th October, 2014</span>
            </div>
            <div id="map_div" >

                <iframe style="border-top: 1px solid #AAAAAA; border-bottom: 1px solid #AAAAAA;" width="395" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=SAP+Labs+India+Pvt+Ltd,+No.+138,+EPIP+Zone,+Whitefield,+Bangalore,+Karnataka,+India&amp;aq=0&amp;oq=sap+&amp;sll=12.953997,77.63094&amp;sspn=1.109467,2.113495&amp;ie=UTF8&amp;hq=SAP+Labs+India+Pvt+Ltd,+No.&amp;hnear=EPIP+Zone,+Brookefield,+Bangalore,+Bangalore+Urban,+Karnataka,+India&amp;t=m&amp;ll=12.979217,77.71574&amp;spn=0.025091,0.033817&amp;z=14&amp;output=embed&iwloc=near"></iframe><br /><small style="background-color: #EEEEEE; display: block; padding: 15px; text-align: center; margin-top: 10px;  border-top: 1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC;"><a target="_blank" href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=SAP+Labs+India+Pvt+Ltd,+No.+138,+EPIP+Zone,+Whitefield,+Bangalore,+Karnataka,+India&amp;aq=0&amp;oq=sap+&amp;sll=12.953997,77.63094&amp;sspn=1.109467,2.113495&amp;ie=UTF8&amp;hq=SAP+Labs+India+Pvt+Ltd,+No.&amp;hnear=EPIP+Zone,+Brookefield,+Bangalore,+Bangalore+Urban,+Karnataka,+India&amp;t=m&amp;ll=12.979217,77.71574&amp;spn=0.025091,0.033817&amp;z=14" style="color:#BD3636;  text-align:left; font-weight: bold;">View Larger Map</a></small>

            </div>
        </div>
        
        <!-- no Ola yet..
        <div id="serverbluescard" class="homecard">
            <h2>Come to BCB in style with Ola Cabs</h2>
            <p>Ola Cabs is collaborating with Barcamp Bangalore to provide you convenient rides for the event. Contact Ola support for more info.</p>
<p> P.S. - One lucky Participant will go home after the event in a luxury ride like a Merc or Jaguar! There might be a few free cabs too for drop.
    More Details at the event.
            </p>
            
        </div>
        --> 
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
                How do I register
            </div>
            <div class="homecard_content">
                
            Registrations are now closed. However, if you are eager to attend, please enter your details <a href="https://docs.google.com/forms/d/1_VidLzk-9zANk8Tf3wBOpWIrV294tc6AXU7mI0KrLQo/viewform">in the waitlist form</a> and we'll keep you informed if you can make it.
            
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
                <a title="Add a Session" href="http://barcampbangalore.org/bcb/add-a-session">register
                    your session</a> under Techlash category. </p>
                    

                <p>The slots are very limited and usually overbooked. List of currently registered
                    techlash sessions can be seen <a href="http://barcampbangalore.org/bcb/techlash">here</a>.</p>

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
</body>
</html>