jQuery(function ($){
	
	var sideslider = $('[data-toggle=collapse-side]');
	var sel = sideslider.attr('data-target');
	
	sideslider.click(function(event){
		$(this).toggleClass("close-button");
		$(this).toggleClass("collapsed");
		$(sel).toggleClass('in');
	});

});
