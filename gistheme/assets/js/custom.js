jQuery( document ).ready(function($) {
   $( "section#sidebar .nav-sidebar .nav-link.legitRipple" ).click(function() {
		$(this).parent().toggleClass( "active-ca" );
	});
});