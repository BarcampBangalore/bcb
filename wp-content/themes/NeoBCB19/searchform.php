<?php echo '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
        <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search Barcamp Bangalore"/>
        <button type="submit" id="searchsubmit" ><img id="searchbuttonimage" src="'. get_bloginfo('template_url').'/images/search-icon-hi2.png"   /></button>
    </div>
</form>'  ?>
