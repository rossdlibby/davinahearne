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
			$('#commentForm').slideDown();
		});

	});

}(window.jQuery || window.$));

// Hide comment form until user requests it
$(document).ready(function(){
});