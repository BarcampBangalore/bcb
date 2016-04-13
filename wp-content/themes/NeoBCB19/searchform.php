<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>" >
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10">
                <label class="screen-reader-text" for="s"><?php echo __('Search for:'); ?></label>
                <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search Barcamp Bangalore"/>
            </div>
            <div class="col-xs-4 col-xs-offset-4 col-sm-2 col-sm-offset-0">
                <button type="submit" id="searchsubmit" ><img id="searchbuttonimage" src="<?php echo get_bloginfo('template_url'); ?>/images/search-icon-hi2.png"   /></button>
            </div>
        </div>
    </div>
</form>
