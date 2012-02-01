<?php

/*
Plugin Name: Search (Without Pages)
Plugin URI: http://github.com/gmurphey/search-without-pages
Description: Hides pages in Wordpress search results.
Version: 1.0
Author: Garrett Murphey
Author URI: http://gmurphey.com
*/

function gmurphey_exclude_pages_in_search($query) {
	if ($query->is_search) {
		$query->query_vars['post__not_in'] = get_all_page_ids();
	}
	
	return $query;
}

add_filter('pre_get_posts', 'gmurphey_exclude_pages_in_search');

?>