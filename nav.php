<?php
/* nav.php */
/* Redbrick2013 Theme */
/* Written by Chris Hutchinson (chris_hutchinson@me.com) */
/* Started: 12th December 2012 */
?>

<div class="span12 nav-hide-fix"></div> <!-- This fixes the nav issue when it pins to top -->
<div class="span12 nav-hide-fix-tablet"></div> <!-- As does this bad boy -->

<div class="span12 nav">
	<div class="span9 span4-tablet span6-mobile">
		<ul class="hide-mobile hide-tablet">
			<li><a href="index.html" class="logo"><img src="<?php bloginfo("template_directory") ?>/img/logo-sml.png" /></a></li>
			<li><a href="#" class="news">News</a></li>
			<li><a href="#" class="comment">Comment</a></li>
			<li><a href="#" class="sport">Sport</a></li>
			<li><a href="#" class="music">Music</a></li>
			<li><a href="#" class="arts">Arts</a></li>
			<li><a href="#" class="tech">Sci&amp;Tech</a></li>
			<li><a href="#" class="travel">Travel</a></li>
			<li><a href="#" class="film">Film</a></li>
			<li><a href="#" class="tv">TV</a></li>
			<li><a href="#" class="life">Life&amp;Style</a></li>
			<li><a href="#" class="food">Food</a></li>
			<li><a href="#" class="logo"><img src="<?php bloginfo("template_directory") ?>/img/photography.png" /></a></li>
		</ul>

		<ul class="hide-desktop">
			<li><a href="index.html" class="logo"><img src="<?php bloginfo("template_directory") ?>/img/logo-sml.png" /></a></li>
			<li class="show-mobile hide-tablet"><a href="#" class="sections">Sections &darr;</a></li>
		<ul>
	</div>

	<div class="span3 span8-tablet span6-mobile text-right">
		<input type="image" src="<?php bloginfo("template_directory") ?>/img/menu.png" class="menu-button sidebar-activate hide-mobile" />
		<input type="image" src="<?php bloginfo("template_directory") ?>/img/search.png" class="menu-button" />
		<input type="text" style="border:0; width:100px; height:40px; margin-top:5px; font-size:14px; float:right;" placeholder="Search..." />
	</div>
</div>

<div class="span12 nav nav-tablet show-tablet">
	<ul>
		<li><a href="#" class="news">News</a></li>
		<li><a href="#" class="comment">Comment</a></li>
		<li><a href="#" class="sport">Sport</a></li>
		<li><a href="#" class="music">Music</a></li>
		<li><a href="#" class="arts">Arts</a></li>
		<li><a href="#" class="tech">Sci&amp;Tech</a></li>
		<li><a href="#" class="travel">Travel</a></li>
		<li><a href="#" class="film">Film</a></li>
		<li><a href="#" class="tv">TV</a></li>
		<li><a href="#" class="life">Life&amp;Style</a></li>
		<li><a href="#" class="food">Food</a></li>
		<li><a href="#" class="logo"><img src="<?php bloginfo("template_directory") ?>/img/photography.png" /></a></li>
	</ul>
</div>

<div class="span6-mobile show-mobile hide mobile-sections mobile-section-1">
	<ul>
		<li><a href="#" class="news">News</a></li>
		<li><a href="#" class="comment">Comment</a></li>
		<li><a href="#" class="sport">Sport</a></li>
		<li><a href="#" class="music">Music</a></li>
		<li><a href="#" class="arts">Arts</a></li>
		<li><a href="#" class="tech">Sci&amp;Tech</a></li>
	</ul>
</div>
<div class="span6-mobile show-mobile hide mobile-sections mobile-section-2">
	<ul>
		<li><a href="#" class="travel">Travel</a></li>
		<li><a href="#" class="film">Film</a></li>
		<li><a href="#" class="tv">TV</a></li>
		<li><a href="#" class="life">Life&amp;Style</a></li>
		<li><a href="#" class="food">Food</a></li>
		<li><a href="#" class="section">Photography</a></li>
	</ul>
</div>

<?php /* END FILE */ ?>