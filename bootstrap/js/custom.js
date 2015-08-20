var searchOpen = false;

$('#doSearch').click(function(e){
	if(!searchOpen) {
		e.preventDefault();
		$('#searchInput').addClass('sb-search-in-view');
		searchOpen = true;
	} else {
		e.submit();
	}
});