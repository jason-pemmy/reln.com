jQuery(function ($){
	console.log("***");
	
	$( ".navbar-toggle" ).click(function() {
		$(this).toggleClass("close-button");
		$(this).toggleClass("collapsed");
	});

});
