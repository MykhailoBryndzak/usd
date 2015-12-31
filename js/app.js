$('#collapse-items').click(function(){
	if($('#news-links').hasClass('collapsed')){
		$('#news-links').removeClass('collapsed');
		$('#collapse-items').html('&#8593; collapse');
	} else {
		$('#news-links').addClass('collapsed');
		$('#collapse-items').html('&#8595; expand');
	}
});