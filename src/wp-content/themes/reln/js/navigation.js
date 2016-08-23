jQuery(function ($){
	
	var sideslider = $('[data-toggle=collapse-side]');
	var sel = sideslider.attr('data-target');
	var sel2 = sideslider.attr('data-target-2');
	
	sideslider.click(function(event){
		$(this).toggleClass("close-button");
		$(this).toggleClass("collapsed");
		$(sel).toggleClass('in');
		$(sel2).toggleClass('out');
	});

});
