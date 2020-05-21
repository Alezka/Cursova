// use with id!!!
$(document).ready(function(){
	$('a[href^="#"]').click(function (){
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top;
		jQuery("html,body").animate({scrollTop:destination},900);
	});
});


