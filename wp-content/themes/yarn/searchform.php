<form role="search" method="get" id="searchform" class="uk-search-header" action="<?php echo home_url( '/' ) ?>" >
	<input type="text" placeholder="Поиск" value="<?php echo get_search_query() ?>" name="s" id="s" />
	<button type="submit" id="searchsubmit" ><i class="fa fa-search" aria-hidden="true"></i></button>
</form>