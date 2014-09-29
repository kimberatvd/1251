var myWindowSize = $(window).width();

if (myWindowSize >= 500) { //if theyre not on mobile run the following script
	$(window).scroll(function(i){
	    var scrollVar = $(window).scrollTop();
	    $('.home').css({'top': .7*scrollVar });
	    $('.home').css({'opacity':( 100-scrollVar )/100});
	})
};

$('.hamburger').click(function(){
	$('nav').slideToggle('slow');
});

if (myWindowSize <=500) {
	$('nav ul li').click(function(){
		$('nav').hide();	
	});

	$(window).scroll(function(i){
	    var scrollVar = $(window).scrollTop();
	    if (scrollVar >= 300 ) {
	    	$('header h1').show('slow');
	    } else {
	    	$('header h1').hide('slow');
	    }
	});
}