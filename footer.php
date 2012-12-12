<?php
/* footer.php */
/* Redbrick2013 Theme */
/* Written by Chris Hutchinson (chris_hutchinson@me.com) */
/* Started: 12th December 2012 */
?>

<script>
$(document).ready(function(){
	var showdesktop = "1";
	var showtablet = "0";
	$(".sidebar-activate").click(function(){
		$(".right-container").toggle();
		$(".left-container").toggleClass("span9").toggleClass("span12");
		//($(".left-container").hasClass("span9")) ? $(".holder").css({"max-width":"1000px"}) : $(".holder").css({"max-width":""});
		
		
	});

	$(".sections").click(function(){
		$(".mobile-sections").toggleClass("hide");
		return false;
	});

	var distance = $('.nav').offset().top,
	$window = $(window);

	$window.scroll(function() {
	    if ( $window.scrollTop() >= distance ) {
	        // Your div has reached the top
	        $('.nav').addClass("nav-fixed");
	        $('.nav-tablet').addClass("nav-tablet-fixed");
	        $('.right-container').addClass("right-container-fixed");
	        $('.mobile-sections').addClass("mobile-sections-fixed");
	        $('.nav-hide-fix').show();
	        $('.nav-hide-fix-tablet').show();
	    }
	    else
	    {
	        $('.nav').removeClass("nav-fixed");
	        $('.nav-tablet').removeClass("nav-tablet-fixed");
	        $('.right-container').removeClass("right-container-fixed");
	        $('.mobile-sections').removeClass("mobile-sections-fixed");
	        $('.nav-hide-fix').hide();
	        $('.nav-hide-fix-tablet').hide();
	    }
	});
});

</script>

</body>
</html>

<?php
/* END FILE */
?>