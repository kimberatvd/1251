<script>
$(window).scroll(function(i){
    var scrollVar = $(window).scrollTop();
    $('.home').css({'top': .7*scrollVar });
    $('.home').css({'opacity':( 100-scrollVar )/100});
})


// var target = $('.home');
// var targetHeight = target.outerHeight();

// $(document).scroll(function(e){
//     var scrollPercent = (targetHeight - window.scrollY)  / targetHeight;
//     if(scrollPercent >= 0){
//         target.css('opacity', scrollPercent);
//     } else if (scrollPercent > 90) {
//     	target.css('opacity', 0);
//     }
// });
</script>

</body>

</html>