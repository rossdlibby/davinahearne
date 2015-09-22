// Browser detection for when you get desparate. A measure of last resort.
// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


// remap jQuery to $
(function ($) {

	var showFollow = true;

	/* trigger when page is ready */
	$(document).ready(function (){

		// your functions go here

		// Hide comment form on page load
		// $('#commentForm').hide();

		// Display search form upon search button click
		$('#doSearch').click(function(){

			// Toggle the search box
			$('#topSearch').slideToggle();

			// If the search is not expanded, expand it
			// Also change the search icon to an 'x'
			if($(this).html().trim() != '<span><i class="fa fa-times"></i></span>') {

				// Expand the search box
				$('#mainContent').css({'margin-top': '60px'});

				// Change the icon to an 'x'
				$(this).html('<span><i class="fa fa-times"></span>');

			} else {

				// Close the search box
				$('#mainContent').css({'margin-top': '0'});

				// Change the icon back to the search glyph
				$(this).html('<span><i class="fa fa-search"></span>');

				// Reset default
				// $(this).unbind('click');
			}
		});

		// Display comment form upon user request
		$('#leaveComment').click(function(e){
			e.preventDefault();
			
			// Change the link's text depending on comment visibility
			if($('#commentForm').is(':visible')) {
				$(this).text('Leave a comment :)');
			} else {
				$(this).text('Hide comments');
			}
			$('#commentForm').slideToggle();
		});

		$('#closeFollowBar').click(function(){
			showFollow = false;
			$('#follow-bar').hide();
		});

		// Display follow-bar upon user scroll
		$(document).scroll(function(){

			// Do this only if the user has not already dismissed the
			// follow-bar during the current browser session
			if(showFollow){
				$('#follow-bar').show();
			}
		});

		// Display the homepage ad after a 5 second delay
		$('#home_ad').delay(5000).slideToggle();

		// Hide the homepage ad
		$('#hide_home_ad').click(function(e) {
			e.preventDefault();
			$('#home_ad').slideToggle();
		});

	});

}(window.jQuery || window.$));

// Hide comment form until user requests it
$(document).ready(function(){
});