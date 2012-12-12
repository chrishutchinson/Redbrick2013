<?php
/* sidebar.php */
/* Redbrick2013 Theme */
/* Written by Chris Hutchinson (chris_hutchinson@me.com) */
/* Started: 12th December 2012 */
?>

<div class="right-container hide-mobile hide-tablet span3">

	<?php
	if(is_single())
	{
		//if a single page, do some logic to get the category and show other recent things from it
		?>
		<div class="span12" style="border-bottom:1px solid #ababab; border-radius:5px; background-color:#222222; color:#FFFFFF;">
			<div class="span12 text">
			<h5>More in News</h5>
			<ul class="more">
				<li><span class="mini-tag new">New</span> <a href="#" style="color:#FFFFFF;">Lack of interest in RA elections</a></li>
				<li><span class="mini-tag poll">Poll</span> <a href="#" style="color:#FFFFFF;">Nursing and Physiotherapy courses to face further changes</a></li>
				<li><a href="#" style="color:#FFFFFF;">Russell Group accused of arms trade connections</a></li>
				<li><a href="#" style="color:#FFFFFF;">Guild criticised over Demo 2012</a></li>
			</ul>
			</div>
		</div>
		<?php
	}
	?>
	<div class="span12 text" style="border-bottom:1px solid #ababab;">
		<h4 class="headline"><a href="#">The Final Sunday Edition, Guild Media Special</a></h4>
		<p class="bold"><a href="#" style="color:#2d9aff;" class="no-underline">#EditionSunday</a> | Just now</p>
	</div>

	<div class="span12 text" style="border-bottom:1px solid #ababab;">
		<h5 class="headline"><a href="#">Tuesday debate poll: Who will be the bigger star, Laura Robson or Heather Watson?</a></h5>
		<p class="bold"><a href="#" class="no-underline">Felix Keith</a> | 32 minutes ago</p>
	</div>

	<div class="span12 text" style="border-bottom:1px solid #ababab;">
		<h5 class="bold headline"><img src="img/hot.png" /> <span style="color:#aa1717">Hot</span> topics right now</h5>
		<a href="#" class="tag item">president</a>
		<a href="#" class="tag item">cuts</a>
		<a href="#" class="tag item">obama</a>
		<a href="#" class="tag item">recipe</a>
		<a href="#" class="tag item">guild</a>
		<a href="#" class="tag item">golf</a>
		<a href="#" class="tag item">iPhone</a>
		<a href="#" class="tag item">demo2012</a>
	</div>

	<div class="span12" style="border-bottom:1px solid #ababab;">
			<div class="span7 span7-tablet span7-mobile text">
			<h5><a href="#">Muse - The Second Law</a></h5>
			<p class="headline">By now you've surely encountered some of the discussion surrounding Muse's upcoming album The 2nd Law...</p>
			<p class="bold"><a href="#" class="no-underline">Josh Holder</a> | 1 hour ago</p>
		</div>
		<div class="span5 span5-tablet span5-mobile text h-100"><img src="http://nbhap.com/wordpress/wp-content/uploads/2012/08/muse-the2ndlaw.jpg" style="width:100%;"></div>
	</div>

	<div class="span12 text" style="border-bottom:1px solid #ababab;">
		<h5 class="headline"><a href="#">Sports Report XpLosION Special, 13th November 2012</a></h5>
		<p class="bold"><a href="#" class="no-underline">Tom Garry</a> | 2 hours ago</p>
	</div>

</div>

<?php /* END FILE */ ?>