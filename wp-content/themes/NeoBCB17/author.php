<?php get_header(); ?>
<?php
$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));



$cat_buckets = array(
    "1057" => array(), 
    "931" => array(), 
    "785" => array(), 
    "636" => array(),
    "479" => array(),
    "399" => array(),
    "324" => array(),
    "220" => array(),
    "3" => array()

    );

$cat_names = array(
    0 => array("1057", "BCB Monsoon 2014"), 
    1 => array("931", "BCB Spring 2014"), 
    2 => array("785", "BCB Monsoon 2013"), 
    3 => array("636", "BCB13"),
    4 => array("479", "BCB12"),
    5 => array("399", "BCB11"),
    6 => array("324", "BCB10"),
    7 => array("220", "BCB9"),
    8 => array("3", "BCB8")
);



?>

<div id="dialog-message" title="Share your Location">
<div id="leafletmap"></div>
<i class="fa fa-map-marker"></i>
<p>Please share your location so that we can have
an awesome chart of where people converge at the venue from. 
</p>
</div>
<div id="authorpage_wrapper" class="centered_background">

    <div id="authorpage_content">
        <div id="authorpage_profilearea">
            <div id="authorpage_profileheader">
                
                <h2>User profile<br><span id="authorpage_username" ><?php echo $curauth->user_nicename; ?></span></h2>
                <?php echo get_avatar($curauth->ID, 96); ?>

            </div>
            <div id="authorpage_profiledesc">
                <?php echo $curauth->user_description; ?>
            </div>
            <?php
           if (is_user_logged_in() && $curauth->ID == $current_user->ID){
           	   
				$userLoc = get_user_meta($current_user->ID, 'userLoc', true);
				if($userLoc !== false ){
					if( $userLoc == ''){
						$latlng = array(12.9658274, 77.7118487);
					}
					else{
						$latlng = split(',',$userLoc);
					}
					echo '<div id="leafletmap2"></div>';
					echo '<i class="fa fa-map-marker"></i>';
					echo "<script type=\"text/javascript\">
    
        $(function(){";
					echo "mymap = L.map('leafletmap2');";
					echo "	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
							attribution: 'Map data &copy; <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors, <a href=\"http://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>',
							maxZoom: 15,
							minZoom:8
						}).addTo(mymap);
						";
						echo"L.marker({lat: ".$latlng[0].", lng: ".$latlng[1]."}).addTo(mymap);";	
						echo "mymap.setView([ ".$latlng[0].", ".$latlng[1]."], 15);";
						
						echo "});</script>";
						echo '<a class="loc_button" style="text-decoration: none;"><div style="background-color: #f9a70f; border-radius: 5px; 
                 box-shadow: 1px 1px 1px #888888; height: 44px; text-align: center;
                 padding: 5px; margin-top: 20px; color: #FFFFFF; font-size: 30px;">Update your Location</div></a>';
                 
                 echo "<script type=\"text/javascript\">
    
        $(function(){
				function onLocationFound(e) {
					window['marker'].setLatLng(e.latlng);
					//window['marker'] = L.marker(e.latlng,{draggable:'true'}).addTo(mymap);
					this.loc = e.latlng.lat + "," + e.latlng.lng;
					console.log(this.loc);
				}
        	window['isMapInit']  = 0;
        	window['showMap'] = 0;
        	
        	
            $(\"#authorpage_content\").on(\"click\", \".loc_button\", function(){
               
               
					$( \"#dialog-message\" ).dialog(\"open\");
					if(window['isMapInit'] == 0){
						mymap2 = L.map('leafletmap');
						window['layer'] = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
							attribution: 'Map data &copy; <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors, <a href=\"http://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>',
							maxZoom: 15,
							minZoom:8
						}).addTo(mymap2);
						
						mymap2.on('locationfound', onLocationFound);      
						window['marker'] = L.marker({lat: ".$latlng[0].", lng: ".$latlng[1]."}, {draggable: 'true'}).addTo(mymap2);	
						
						mymap2.setView([ ".$latlng[0].", ".$latlng[1]."], 15);
						window['mymap'] = mymap2;
					}
					window['isMapInit'] = 1;
					if( window['showMap'] == 0){
						window['mymap'].locate({setView: true, maxZoom: 15});
						
						
					
					}	
                
            });
            
            
        });
        
    </script>";
				}
				
           }?>
           
        
                 
       
        
       </div>

        <div id="authorpage_sessions">
            
            <div id="authorpage_sincedate">Camper since <?php  echo date("F, Y", strtotime($curauth->user_registered)); ?></div>
            <div id="authorpage_sessionsby">
                <?php if (have_posts()) : ?>
                    <h2 class="authorpage_sessiontype">Sessions presented <?php //echo $curauth->user_nicename; ?></h2>

                    <ul>
                        <?php
                        
                        
                        while (have_posts()) : the_post();

                            $cat = get_the_category();
                            
                            for ($i = 0; $i < count($cat); $i++)
                            {
                                if (array_key_exists((string)$cat[$i]->cat_ID, $cat_buckets))
                                {
                                    $cat_buckets[$cat[$i]->cat_ID][] = '<h2><a href="'. get_permalink().'" >'.get_the_title().'</a></h2>';
                                }
                                
                            }
                            
                            ?>

                        <?php endwhile;
                        
                        
                        
                        
                        for ($i = 0; $i < count($cat_buckets); $i++)
                        {
                           
                            if (count($cat_buckets[$cat_names[$i][0]]) > 0)
                            {
                                echo '<br><h2 class="authorpage_bcbheading">In ' . $cat_names[$i][1] . '</h2>';
                                
                                
                                $cat_sessions = $cat_buckets[$cat_names[$i][0]];
                            
                                for ($j = 0; $j < count($cat_sessions); $j++)
                                {
                                    echo '<li  class="session_list_item">';
                                    echo $cat_sessions[$j];
                                    echo '</li>';
                                }
                                
                                
                                
                            }
                           
                        }
                        
                        ?>
                            
                              
                    </ul>
                <?php endif; ?>
            </div>
            <div id="authorpage_sessionsattended">
                <?php
                $sql = "SELECT * FROM $wpdb->postmeta WHERE meta_value = '$curauth->user_login' AND meta_key = 'user_attending' order by meta_id desc";

                $attending_sessions = $wpdb->get_results($sql);
                
                
                $cat_buckets = array(
                    "1057" => array(), 
                    "931" => array(), 
                    "785" => array(), 
                    "636" => array(),
                    "479" => array(),
                    "399" => array(),
                    "324" => array(),
                    "220" => array(),
                    "3" => array()

                    );

                if (count($attending_sessions) > 0) :
                    ?>
                    <div id="card_author_attending">
                        <div >
                            <h2 class="authorpage_sessiontype">Sessions attended</h2>

                            <?php
                            $lastcat = "";
                            echo '<ul>';

                            
                            foreach ($attending_sessions as $session)
                            {
                                $post_row = get_post($session->post_id);
                                $cat = get_the_category($session->post_id);
                                for ($i = 0; $i < count($cat); $i++)
                                {
                                    if (array_key_exists((string)$cat[$i]->cat_ID, $cat_buckets))
                                    {
                                        $cat_buckets[$cat[$i]->cat_ID][] = '<h2><a href="'. get_permalink($session->post_id).'" >'.$post_row->post_title.'</a></h2>';
                                    }

                                }
                                
                            }
                            
                            
                            
                            
                            for ($i = 0; $i < count($cat_buckets); $i++)
                            {

                                if (count($cat_buckets[$cat_names[$i][0]]) > 0)
                                {
                                    echo '<br><h2 class="authorpage_bcbheading">In ' . $cat_names[$i][1] . '</h2>';

                                    
                                    $cat_sessions = $cat_buckets[$cat_names[$i][0]];

                                    for ($j = 0; $j < count($cat_sessions); $j++)
                                    {
                                        echo '<li  class="session_list_item">';
                                        echo $cat_sessions[$j];
                                        echo '</li>';
                                    }

                                    

                                }

                            }

                            echo "</ul></div></div>";

                        endif;
                        ?>
                    </div>
                </div>
                <div style="clear: both"></div>
            </div>


        </div>
    </div>
</div>

        <?php get_footer(); ?>
        