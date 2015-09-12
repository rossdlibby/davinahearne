// Browser detection for when you get desparate. A measure of last resort.
// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


// remap jQuery to $
(function ($) {

	/* trigger when page is ready */
	$(document).ready(function (){

		// your functions go here

		// Hide comment form on page load
		$('#commentForm').hide();

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