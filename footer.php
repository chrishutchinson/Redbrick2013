<?php
/* footer.php */
/* Redbrick2013 Theme */
/* Written by Chris Hutchinson (chris_hutchinson@me.com) */
/* Started: 12th December 2012 */
?>

<div class="span12 footer">

		<div class="span2 span6-mobile span6-tablet text footer-br">
			<ul style="margin-top:-17px;">
				<li><img src="<?php bloginfo("template_directory") ?>/img/logo-sml-white.png" style="width:35px; height:35px;" /></li>
				<li>About</li>
				<li>Contact the Team</li>
				<li>Letter to the Editors</li>
				<li>Latest Edition</li>
				<li>Code of Conduct</li>
				<li>Login</li>
			</ul>
		</div>

		<div class="span4 span6-mobile span6-tablet text footer-br">
			<div class="span12">
				<ul>
					<li class="bold">SECTIONS</li>
				</ul>
			</div>
			<div class="span6 span6-mobile span6-tablet">
				<ul>
					<li>Arts</li>
					<li>Comment</li>
					<li>Film</li>
					<li>Food</li>
					<li>Life&amp;Style</li>
					<li>Music</li>
				</ul>
			</div>

			<div class="span6 span6-mobile span6-tablet">
				<ul>
					<li>News</li>
					<li>Photography</li>
					<li>Sci&amp;Tech</li>
					<li>Sports</li>
					<li>Travel</li>
					<li>TV</li>
				</ul>
			</div>
		</div>

		<div class="span6 footer-br br-h">
		<div class="span8 span6-mobile span6-tablet text footer-br">
			<ul>
				<li class="bold">MOST POPULAR</li>
				<li>Redbrick Digital: Post-launch feedback</li>
				<li>Disruption continues as University power still not restored</li>
				<li>Album Review: Muse - The 2nd Law</li>
				<li>Single Review: Johnny Marr - The Messenger</li>
				<li>Major power cut strikes Birmingham</li>
			</ul>
		</div>

		<div class="span4 span6-mobile span6-tablet text">
			<ul>
				<li class="bold">CONNECT</li>
				<li>Facebook</li>
				<li>Twitter</li>
				<li>Pinterest</li>
				<li>YouTube</li>
				<li>Flickr</li>
				<li>Spotify</li>
			</ul>
		</div>
	</div>
	</div>

	</div>

</div>

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

	<?php
	if(is_home())
	{
		?>
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
		<?php
	}
	else
	{
		?>
		// Your div has reached the top
        $('.nav').addClass("nav-fixed");
        $('.nav-tablet').addClass("nav-tablet-fixed");
        $('.right-container').addClass("right-container-fixed");
        $('.mobile-sections').addClass("mobile-sections-fixed");
        $('.nav-hide-fix').show();
        $('.nav-hide-fix-tablet').show();
        <?php
	}
	?>
});

</script>
<?php wp_footer(); ?>
</body>
</html>

<?php
/* END FILE */
?>