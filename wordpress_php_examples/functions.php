<!-- example of a filter function -->
<!-- A filte function is a type of "hooked" function that RETURNS a modified/changed value of whatever its being passed -->
function wpshout_filter_example( $title ) {
	return 'Hooked: ' . $title;
}
add_filter( 'X-Men', 'wpshout_filter_example' );


<!-- in the above example, the function is adding "Hooked: " to the front of "X-men" -->

<!-- example of an ACTION function -->
<!-- a function that spits out a pre-set function that doesnt require modifying data -->


function wpshout_action_example( ) {
	echo "WPShout was here.";
}
add_action( 'wp_footer', 'wpshout_action_example' );

<!-- above, this function wants us to 'echo' or print "WPSHOUT WAS HERE", and it is being told to be displayed in the "wp_footer" or footer of the php page -->

