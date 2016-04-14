<?php get_header(); ?>

<script type="text/javascript">

    $(function(){
        
        
        $(".homepage_cards").hover(function(){
            
            $(".homepage_cards_default").hide(0, function(){
                $(".homepage_cards_hover").show(0);
            });
            
            $(this).animate({backgroundColor : "#F7921D" }, 200);
            
        }, function(){
            $(".homepage_cards_hover").hide(0, function(){
                $(".homepage_cards_default").show(0);
            });
            $(this).animate({backgroundColor : "#FFFFFF" }, 200);
        });
        
        
        
        
        
        
    });





</script>


<div id="homepage_cb1" style="background-image: url('<?php echo get_bloginfo('template_url').'/images/coffee.jpg' ?>'); background-color: #fff ">
    <div id="homepage_ct1" class="container" >
        <div id="homepage_ct1_r1" class="row">
            <div class="col-xs-12">
                <div id="homepage_big_title">Celebrating a decade</div>
                <div id="homepage_big_title">of Barcamp Bangalore</div>
            </div>
        </div>

        <div id="homepage_ct1_r2" class="row">
            <div class="col-xs-12 col-sm-12 col-md-2 col-md-offset-3 col-lg-2 col-lg-offset-3">
                <a href="<?php echo get_bloginfo('template_url') . '/barcamp-spring-2016.ics' ?>">
                    <div class="homepage_cards">
                        <span id="top" class="homepage_cards_default" > APRIL 30</span><br/>
                        <span id="bottom"  class="homepage_cards_default">TWO THOUSAND AND SIXTEEN</span>
                        <img src="<?php echo get_bloginfo('template_url') . '/images/icon-CAL.png' ?>"  class="homepage_cards_hover" />
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <a href="<?php echo get_bloginfo('template_url') . '/barcamp-spring-2016.ics' ?>">
                    <div class="homepage_cards">
                        <span id="top" class="homepage_cards_default">8am</span><br>
                        <span id="bottom" class="homepage_cards_default">in the morning</span>
                        <img src="<?php echo get_bloginfo('template_url') . '/images/icon-CAL.png' ?>" class="homepage_cards_hover" />
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <a href="https://goo.gl/sgjNTV" target="_blank">
                    <div class="homepage_cards">
                        <span id="top" class="homepage_cards_default">CMRIT</span><br>
                        <span id="bottom" class="homepage_cards_default">Whitefield, Bangalore</span>
                        <img src="<?php echo get_bloginfo('template_url') . '/images/icon-MAP.png' ?>" class="homepage_cards_hover" />
                    </div>
                </a>
            </div>
        </div>
        <div id="homepage_ct1_r3" class="row">
                <a href="#howtoregister">
                <div class="homepage_register_card">
                    | REGISTER NOW |
                </div>
                </a>
        </div>
        <div style="padding-bottom: 80px"></div>
        <div id="homepage_ct1_r4">
            <div id="homepage_social_bar">
                <div>
                    <a href="<?php echo get_bloginfo('template_url') . '/docs/Barcamp_Bangalore_Spring_2016_Sponsorship_Doc.pdf' ?>"><img src="<?php echo get_bloginfo('template_url') . '/images/icon-01.png' ?>" />  Sponsorship Pdf</a>
                </div>
                <div>
                    <a href="https://twitter.com/barcampbng"><img src="<?php echo get_bloginfo('template_url') . '/images/icon-02.png' ?>" />  Follow us on twitter</a>
                </div>
                <div>
                    <a href="https://www.facebook.com/barcampbng"><img src="<?php echo get_bloginfo('template_url') . '/images/icon-03.png' ?>" />  like us on facebook</a>
                </div>
                <div>
                    <a href="mailto:bangalore_barcamp-subscribe@yahoogroups.com"><img src="<?php echo get_bloginfo('template_url') . '/images/icon-04.png' ?>" />  join the group</a>
                </div>
                <div>
                    <a href="https://www.youtube.com/user/barcampbangalore"><img src="<?php echo get_bloginfo('template_url') . '/images/icon-05.png' ?>" />  subscribe</a>
                </div>
                <div>
                    <a href="http://slack.barcampbangalore.org/"><img src="<?php echo get_bloginfo('template_url') . '/images/icon-06.png' ?>" />  join us on slack</a>
                </div>
                <div>
                    <a href="https://github.com/barcampbangalore"><img src="<?php echo get_bloginfo('template_url') . '/images/Git-hub-icon-07.png' ?>" />  fork us</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="homepage_ct2" class="container">
    <div id="homepage_about_bcb_title">
        About BarCamp Bangalore
    </div>
    <div id="homepage_about_bcb_description">
        <p>
        Barcamp Bangalore is an open event focused around people, ideas and collaboration. There is no fixed format and agenda. If you have an interesting topic to share or want to collaborate with folks with a variety of experience, BarCamp is the place for you. BarCamp is an one-of-a-kind event. It is unique, it is different and it is not your regular conference. We like to call it an Un-conference. BarCamp thrives on peer-participation. 

        There’s no speaker list or fixed schedule until the actual event. All the content comes from the attendees. You pick the topics, share the agenda and share your interests and expertise. We believe that the sum of wisdom of the room is more than that of any presenter.  </p>

<p>Anyone can present a session, participate in discussions, demo a project, talk about code, or discuss at lengths about program design. Not into tech? No problem! BarCamp is not just about tech. Share your life experiences. Teach us your lifehacks. Tell us about your great outdoors experiment. Sky's the limit and this is the perfect place to share your passion. 

Anyone with something to contribute or with the desire to learn is welcome and invited to join. Move to something that interests you anytime. Every speaker is a participant, every participant is a speaker. <a href="<?php echo get_permalink(get_page_by_path('sessions')) ?>">Click here</a> to see the list of proposed sessions.</p>

<p>
Your active participation is the fuel and driving force for BarCamp and that is the only registration fee. You are invited to volunteer for various activities for putting up a successful camp.</p>
    </div>
</div>


<div id="homepage_cb3">
    <span id="howtoregister"></span>
    <div id="homapage_ct3" class="container">
        <div id="homepage_how_to_register_title">
            How to register for the event?
        </div>
        <div id="homepage_how_to_register_description">

Registration is a simple process
<ul>

<li>
Click on <a href="https://barcampbangalore.org/bcb/wp-login.php?action=register">Sign-Up</a> (or <a href="https://barcampbangalore.org/bcb/wp-login.php?redirect_to=https%3A%2F%2Fbarcampbangalore.org%2Fbcb%2F">Login</a> if you already have an existing account) to register.</li>
<li>
Head over to the <a href="https://barcampbangalore.org/bcb/sessions">Proposed Sessions</a> page 
and browse the various sessions. Once you find a session you are interested in, 
click on "I wanna attend" <span class="homepage_wanna_attend_icon"><img src="<?php echo get_bloginfo('template_url')?>/images/icons-18.png" title="I wanna attend" alt="I wanna attend" /></span>. </li>
</ul>

To propose a session:
<ul>
<li>Click on <a href="https://barcampbangalore.org/bcb/wp-login.php?action=register">Sign-Up</a> (or <a href="https://barcampbangalore.org/bcb/wp-login.php?redirect_to=https%3A%2F%2Fbarcampbangalore.org%2Fbcb%2F">Login</a> if you already have an existing account) to register.</li>
<li>Head over to the <a href="https://barcampbangalore.org/bcb/add-a-session">Add a Session</a> page and enter details about what you will be talking about.</li>
<li>If you intend to present a short demo about your cutting edge technology or revolutionizing product, <a href="https://barcampbangalore.org/bcb/techlash">Techlash</a> might be a better option. Select the category as “Techlash” in this case.</li>
<li>Only 36 slots are available on first come first serve basis. Please be at the venue by 8:00 AM to ensure that you get a slot.</li>
</ul>
To ensure that there’s minimal session overlap, do visit the sessions page daily and click on "I wanna attend" 
<span class="homepage_wanna_attend_icon"><img src="<?php echo get_bloginfo('template_url')?>/images/icons-18.png" title="I wanna attend" alt="I wanna attend" /></span>
on the session proposals which interest you.


        </div>
    </div>
</div>

<div id="homepage_cb7">
    <div id="homepage_ct7" class="container">
        <div id="homepage_techlash_title">
        Techlash
        </div>
        <div id="homepage_techlash_description">
            <p>
                Techlash is a platform to launch your innovative startups, introduce your cutting edge technologies or discuss revolutionary ideas. Instead of giving a whole 45 minute talk about your cutting edge technology or product, which might make your audience feel stretched and walk to another session, zip your demo up in a crisp six minute rapidfire idea presentation. We give you the undivided attention of the entire BarCamp audience, so this is your chance to get the maximum attention. 
            </p>
            <p>
                To add your Techlash session <a href="https://barcampbangalore.org/bcb/add-a-session">click here</a>. These ideas will undergo a filtering process. Remember to put in your phone number in the right field while you are adding your session, we might require some clarifications from you.

You can checkout the sessions submitted for Techlash <a href="https://barcampbangalore.org/bcb/techlash">here</a>.
            </p>
        </div>
    </div>
</div>

<div id="homepage_cb4">
    <div id="homepage_ct4" class="container">
        <div id="homepage_faq_title">
            Event FAQs
        </div>
        <div id="homepage_faq_description">
        <h3>Is BarCamp about bars and alcohol?</h3>
        No, it is not. BarCamp is reference to FooBar which is used as a placeholder name in computer programming.

        <br />
        <h3>Who can attend BarCamp?</h3>
        Anyone and everyone! BarCamp is open to the community, no matter their age, interests or background.

        <br />
        <h3>Do I have to pay any registration fee?</h3>
        Zero! Zilch. There are no fees of any kind at all. Simply register for the event and come on in! 

        <br />
        <h3>Who can present sessions?</h3>

        We encourage presentations of all kinds and on any topic. You do not need to be an expert in the field of your topic. Share something you are passionate about, talk about your interests, job or hobby. Click <a href="https://barcampbangalore.org/bcb/add-a-session">here to add</a> your session.

        <br />
        <h3>Is it necessary to present a session?</h3>

        Nope! You are welcome to just attend sessions, participate in discussions, learn something new and meet interesting people. We also encourage impromptu sessions.

        <br />
        <h3>Do I need to register for a session to attend it?</h3>

        We recommend that you select the sessions you are interested in and click on "I wanna attend" 
        <span class="homepage_wanna_attend_icon"><img src="<?php echo get_bloginfo('template_url')?>/images/icons-18.png" title="I wanna attend" alt="I wanna attend" /></span>
            so we have an idea about which sessions are popular and we can minimise the scheduling clashes.

        <br />
        <h3>How are sessions chosen? I have submitted my talk - is it finalized? Can I get a slot at a specific time?</h3>

        In true BarCamp fashion, the sessions list is not finalized and time slots are not fixed till the day of the event. On the event day, the talks are finalized on first come basis. Our well designed, patent-pending(well, not really) algorithmic session scheduler will assign slots to the speakers with a focus on reducing session clashes. See our post on how the <a href="https://barcampbangalore.org/planning/session-schedules-barcamp-and-you/">session scheduling works</a> for details.

        <br />
        <h3>What are the session topics?</h3>

        You can view the list of <a href="https://barcampbangalore.org/bcb/sessions">proposed sessions here</a>.

        <br />
        <h3>How should I present a session?</h3>

        You are free to utilize the 45 minutes however you want: lead a discussion, demo a project, teach the participants a skill or even play a fun game! PowerPoint Presentations are not required. However if your presentation is accompanied by some kind of media, you are required to bring your own laptop and required adapters for VGA projectors.

        <br />
        <h3>How long are the sessions?</h3>

        Each session runs for 45 minutes. Ideally, BarCamp sessions are meant to be fully interactive, discussion oriented sessions, but if you want to do a full blown talk, we would prefer if you keep the talk for 30 minutes and leave about 15 minutes for Q&A. 

        <br />
        <h3>Can I record the event and sessions? </h3>

        By all means, yes! Take some interesting pictures, share them with the tag #barcampblr on social network of your choosing!

        <br />
        <h3>I was not able to get a slot - can I still talk at BarCamp?</h3>

        Absolutely! BarCamp thrives on impromptu (or Birds of a Feather) sessions and we actively encourage these. All you have to do is gather around some people, find an open space and just start talking! If you approach one of the planners, we will spread the word about the BoF session by broadcasting these over the app and on the session listing. 
        
        <br />
        <h3>What do I need to bring?</h3>

        You are not required to bring anything, but we suggest carrying laptop (pen and paper if you are more traditional) or mobile device to take notes, tweet about the event or post to Facebook! The event location is Wi-Fi enabled. 

        <br />
        <h3>Are food and drinks provided?</h3>

        Yes, lunch and water are provided for free. However, kindly bring your own reusable water bottles.
        
        <br />
        <h3>Where and when is BarCamp Bangalore?</h3>

        The event takes place on April 30th, Saturday from 8:00 AM onwards at <a href="https://goo.gl/maps/2DzyjM9h9nJ2">CMRIT Whitefield, Bangalore</a>.
        
        <br />
        <h3>Is there any BarCamp app?</h3>

        Yes! Our star developers have created a brand new app for this edition. We will publish the links soon. 
        
        <br />
        <h3>Who is organizing BarCamp Bangalore?</h3>

        BarCamp Bangalore is a 100% volunteer driven not for profit event. We are regular people from the community who are on a mission to bring a platform for folks from different  walks of life to come together and talk about their unconventional ideas. Learn more about the planners here.

        <br />
        <h3>I want to volunteer for the event. Can I do so?</h3>

        Any helping hand is more than welcome. Join our <a href="http://slack.barcampbangalore.org">Slack</a> group and give us a shout.

        <br />
        <h3>What does coffee have to do with BarCamp?</h3>

        Coffee roxxx!!! BarCamp roxxx!!! PERIOD.
        </div>
    </div>
</div>

<div id="homepage_cb5">
    <div id="homepage_ct5" class="container">
        <div id="homepage_planners_title">
            Meet the Planners
        </div>
        <div id="homepage_planners_description row">
            <div class="homepage_planner_card col-xs-4 col-md-2">
                <img class="homepage_planner_pic" src="<?php echo get_bloginfo('template_url').'/images/team/saurabh.jpg' ?>" />
                <div class="homepage_planner_name">Saurabh Minni</div>
                <div><a href="https://twitter.com/the100rabh">@the100rabh</a></div>
            </div>
            <div class="homepage_planner_card col-xs-4 col-md-2">
                <img class="homepage_planner_pic" src="<?php echo get_bloginfo('template_url').'/images/team/sathya.jpg' ?>" />
                <div class="homepage_planner_name">Sathyajith Bhat</div>
                <div><a href="https://twitter.com/SathyaBhat">@SathyaBhat</a></div>
            </div>
            <div class="homepage_planner_card col-xs-4 col-md-2">
                <img class="homepage_planner_pic" src="<?php echo get_bloginfo('template_url').'/images/team/aman.jpg' ?>" />
                <div class="homepage_planner_name">Aman Manglik</div>
                <div><a href="https://twitter.com/amanmanglik">@amanmanglik</a></div>
            </div>
            <div class="homepage_planner_card col-xs-4 col-md-2">
                <img class="homepage_planner_pic" src="<?php echo get_bloginfo('template_url').'/images/team/daaku.jpg' ?>" />
                <div class="homepage_planner_name">Amit Khare</div>
                <div><a href="https://twitter.com/daaku">@daaku</a></div>
            </div>
            <div class="homepage_planner_card col-xs-4 col-md-2">
                <img class="homepage_planner_pic" src="<?php echo get_bloginfo('template_url').'/images/team/vivek.jpg' ?>" />
                <div class="homepage_planner_name">Vivek</div>
                <div><a href="https://twitter.com/ivivekkm">@ivivekkm</a></div>
            </div>
            <div class="homepage_planner_card col-xs-4 col-md-2">
                <img class="homepage_planner_pic" src="<?php echo get_bloginfo('template_url').'/images/team/parth.png' ?>" />
                <div class="homepage_planner_name">Parth</div>
                <div><a href="https://twitter.com/pslashb">@pslashb</a></div>
            </div>
            <div class="homepage_planner_card col-xs-4 col-md-2">
                <img class="homepage_planner_pic" src="<?php echo get_bloginfo('template_url').'/images/team/arunteja.jpg' ?>" />
                <div class="homepage_planner_name">Arun Teja</div>
                <div><a href="https://twitter.com/aruntejagod">@aruntejagod</a></div>
            </div>
            <div class="homepage_planner_card col-xs-4 col-md-2">
                <img class="homepage_planner_pic" src="<?php echo get_bloginfo('template_url').'/images/team/fossil.jpg' ?>" />
                <div class="homepage_planner_name">Varun</div>
                <div><a href="https://twitter.com/fossiloflife">@fossiloflife</a></div>
            </div>
            <div class="homepage_planner_card col-xs-4 col-md-2">
                <img class="homepage_planner_pic" src="<?php echo get_bloginfo('template_url').'/images/team/eswar.jpg' ?>" />
                <div class="homepage_planner_name">Eswar</div>
                <div><a href="https://twitter.com/eswar_001">@eswar_001</a></div>
            </div>
        </div>

    </div>
</div>


<div id="homepage_cb6">
    <div id="homepage_ct6" class="container">
        <div id="homepage_sponsors_title">
            Sponsors
        </div>
        <div id="homepage_sponsors_description row">
            <div class="homepage_sponsor_card col-xs-6 col-md-4">
                <div class="homepage_sponsor_heading">Venue Sponsor</div>
                <div class="homepage_sponsor_logo_wrapper" ><a href="http://www.cmrit.ac.in/"><img alt="CMR Institute of Technology" title="CMR Institute of Technology" class="homepage_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/cmrit_logo.jpg" /></a></div>
            </div>
            <?php /*
            <!-- <div class="homepage_sponsor_card col-xs-6 col-md-4">
                <div class="homepage_sponsor_heading">Gold Sponsor</div>
                <div class="homepage_sponsor_logo_wrapper" ><a href="https://barcampbangalore.org/bcb/about-intuit"><img alt="Intuit" title="Intuit" class="homepage_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/intuit_logo.png" /></a></div>
            </div>
            <div class="homepage_sponsor_card col-xs-6 col-md-4">
                <div class="homepage_sponsor_heading">Silver Sponsor</div>
                <div class="homepage_sponsor_logo_wrapper" ><a href="https://barcampbangalore.org/bcb/about-mediaiq"><img alt="Media iQ" title="Media iQ" class="homepage_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/mediaiq_logo.png" /></a></div>
            </div>
            <div class="homepage_sponsor_card col-xs-6 col-md-4">
                <div class="homepage_sponsor_heading">Friends of Barcamp</div>
                <div class="homepage_sponsor_logo_wrapper" ><a href="https://barcampbangalore.org/bcb/about-venturesity"><img alt="Venturesity" title="Venturesity" class="homepage_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/venturesity-logo.png" /></a></div>
            </div> -->
             
             */
            
            ?>
            <div class="homepage_sponsor_card col-xs-6 col-md-4">
                <div class="homepage_sponsor_heading">Supported by</div>
                <div class="homepage_sponsor_logo_wrapper" ><a href="http://janastu.org/main.html"><img alt="Janastu" title="Janastu" class="homepage_sponsor_logo" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/janastu_logo.gif" /></a></div>
            </div>
            
            <div class="homepage_sponsor_card col-xs-6 col-md-4">
                <div class="homepage_sponsor_heading">Friend of Barcamp</div>
                <div class="homepage_sponsor_logo_wrapper" ><a href="http://styletag.com"><img alt="Styletag" title="Styletag" class="homepage_sponsor_logo_styletag" src="<?php bloginfo('template_url')  ?>/images/sponz_logos/styletag-logo.png" /></a></div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
