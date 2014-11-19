$(document).ready(function() {
	$('#main-nav').affix({
		offset: {top:25}
	}).on('affixed.bs.affix', function() {
		// $(this).find('.navbar-brand').html('OCHL');
	});
});