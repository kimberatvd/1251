var myWindowSize = $(window).width();
var myWindowHeight = $(window).height();

function isiPad(){
    return (navigator.platform.indexOf("iPad") != -1);
}


if(!isiPad() && myWindowSize >= 500) { //if theyre not on mobile run the following script
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
	    	$('header h1').show();
	    } else {
	    	$('header h1').hide();
	    }
	});
}
