<?php
echo get_search_form();
if ( is_active_sidebar( "sidebar-1" ) ) {
	dynamic_sidebar( "sidebar-1" );
}else{
	echo "Some Text";
}
?>