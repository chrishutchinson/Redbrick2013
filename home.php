<?php
/* home.php */
/* Redbrick2013 Theme */
/* Written by Chris Hutchinson (chris_hutchinson@me.com) */
/* Started: 12th December 2012 */
?>

<?php get_header(); //Gets default header file (header.php) ?>

<?php
$displayed = array();
?>

<?php
//Get all the variables to fill posts on this page
$options = get_option('plugin_options');
$post_1 = $options['lead_story_id']; //ID of lead story
$post_2 = $options['second_lead_story_id']; //ID of second lead story

$post_1_info = get_post($post_1);
$post_2_info = get_post($post_2);

$post_1_custom = get_post_custom( $post_1_info->ID );
$post_2_custom = get_post_custom( $post_2_info->ID );

$post_1_url = get_permalink($post_1_info->ID);
$post_2_url = get_permalink($post_2_info->ID);

$post_1_date = strtotime($post_1_info->post_date);
$post_1_relative = timeDiff($post_1_date, 1);
$post_2_date = strtotime($post_2_info->post_date);
$post_2_relative = timeDiff($post_2_date, 1);

$post_1_author_name = get_the_author_meta( 'display_name' , $post_1_info->post_author );
$post_1_author_url = '<a href="http://www.redbrick.me/author/' . get_the_author_meta( 'user_nicename' , $post_1_info->post_author ) . '">' . $post_1_author_name . '</a>';

$post_2_author_name = get_the_author_meta( 'display_name' , $post_2_info->post_author );
$post_2_author_url = '<a href="http://www.redbrick.me/author/' . get_the_author_meta( 'user_nicename' , $post_2_info->post_author ) . '">' . $post_2_author_name . '</a>';

array_push($displayed, $post_1_info->ID, $post_2_info->ID); //Confirm they are displayed so they don't get shown again

$post_1_updated = get_field('updated', $post_1_info->ID);
$post_1_new = get_field('new', $post_1_info->ID);
$post_1_breaking = get_field('breaking', $post_1_info->ID);
$post_1_live = get_field('live', $post_1_info->ID);
$post_1_live_id = get_field('live_id', $post_1_info->ID);
$post_1_slideshow = get_field('slideshow', $post_1_info->ID);
$post_1_poll = get_field('poll', $post_1_info->ID);
$post_1_buttons = "";

$post_1_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_1_info->ID ), 'medium' );
$post_1_image_large = wp_get_attachment_image_src( get_post_thumbnail_id( $post_1_info->ID ), 'large' );
$post_1_image_full = wp_get_attachment_image_src( get_post_thumbnail_id( $post_1_info->ID ), 'single-post-thumbnail' );
$post_1_featured = $post_1_image_large[0];

$post_2_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_2_info->ID ), 'medium' );
$post_2_image_large = wp_get_attachment_image_src( get_post_thumbnail_id( $post_2_info->ID ), 'large' );
$post_2_image_full = wp_get_attachment_image_src( get_post_thumbnail_id( $post_2_info->ID ), 'single-post-thumbnail' );
$post_2_featured = $post_2_image_large[0];

$post_2_updated = get_field('updated', $post_2_info->ID);
$post_2_new = get_field('new', $post_2_info->ID);
$post_2_breaking = get_field('breaking', $post_2_info->ID);
$post_2_live = get_field('live', $post_2_info->ID);
$post_2_live_id = get_field('live_id', $post_2_info->ID);
$post_2_slideshow = get_field('slideshow', $post_2_info->ID);
$post_2_poll = get_field('poll', $post_2_info->ID);
$post_2_buttons = "";

if($post_1_updated[0] == "1")
{
	$post_1_buttons = $post_1_buttons . '<span class="tag updated">Updated</span> ';
}
if($post_1_live[0] == "1")
{
	$post_1_buttons = $post_1_buttons . '<span class="tag live">Live</span> ';
}
if($post_1_new[0] == "1")
{
	$post_1_buttons = $post_1_buttons . '<span class="tag new">New</span> ';
}
if($post_1_breaking[0] == "1")
{
	$post_1_buttons = $post_1_buttons . '<span class="tag breaking">Breaking</span> ';
}
if($post_1_slideshow[0] == "1")
{
	$post_1_buttons = $post_1_buttons . '<span class="tag slideshow">Slideshow</span> ';
}
if($post_1_poll[0] == "1")
{
	$post_1_buttons = $post_1_buttons . '<span class="tag poll">Poll</span> ';
}


if($post_2_updated[0] == "1")
{
	$post_2_buttons = $post_2_buttons . '<span class="tag updated">Updated</span> ';
}
if($post_2_live[0] == "1")
{
	$post_2_buttons = $post_2_buttons . '<span class="tag live">Live</span> ';
}
if($post_2_new[0] == "1")
{
	$post_2_buttons = $post_2_buttons . '<span class="tag new">New</span> ';
}
if($post_2_breaking[0] == "1")
{
	$post_2_buttons = $post_2_buttons . '<span class="tag breaking">Breaking</span> ';
}
if($post_2_slideshow[0] == "1")
{
	$post_2_buttons = $post_2_buttons . '<span class="tag slideshow">Slideshow</span> ';
}
if($post_2_poll[0] == "1")
{
	$post_2_buttons = $post_2_buttons . '<span class="tag poll">Poll</span> ';
}
?>

<div class="left-container span9 span12-tablet span12-mobile">

	<div style="margin:0 auto;" class="holder">

	<div class="span12 content">

		<div class="span12 image h-300" style="background-image:url(<?php echo $post_1_featured ?>); cursor:pointer;" onclick="window.location='<?php echo $post_1_url; ?>';"></div>

		<div class="span9 span9-tablet text">
			<h3 class="headline"><a href="<?php echo $post_1_url; ?>"><?php echo $post_1_info->post_title; ?></a></h3>
			<p class="headline"><?php echo $post_1_buttons ?> <span class="bold"><?php echo $post_1_relative; ?></span></p>
			<p class="hide-mobile"><span class="bold"><?php echo $post_1_author_url ?> |</span> <?php echo $post_1_info->post_excerpt; ?></p>
			<p class="show-mobile"><span class="bold"><?php echo $post_1_author_url ?> |</span> <?php echo $post_1_info->post_excerpt; ?></p>
		</div>

		<div class="span3 span3-tablet text">
			<h5>More top stories</h5>
			<ul class="more">
				<?php
				/* MORE TOP STORIES */
				$more_category = $options['more_category'];
				if(strlen($post_1_info->post_excerpt) > 300)
				{
					$more_show = "4";
				}
				else
				{
					$more_show = "3";
				}

				$args = array(
					'cat' => $more_category,
					'posts_per_page' => $more_show,
					'post__not_in' => $displayed
				);
				?>

				<?php $the_query = new WP_Query( $args ); // Query category ID ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<?php
					$url = get_permalink();
					
					$custom = get_post_custom( $post->ID );
					
					$updated = get_field('updated', $post->ID);
					$new = get_field('new', $post->ID);
					$breaking = get_field('breaking', $post->ID);
					$live = get_field('live', $post->ID);
					$slideshow = get_field('slideshow', $post->ID);
					$poll = get_field('poll', $post->ID);
					
					$buttons = "";
					
					if($updated[0] == "1")
					{
						$buttons = $buttons . '<span class="mini-tag updated">Updated</span> ';
					}
					
					if($live[0] == "1")
					{
						$buttons = $buttons . '<span class="mini-tag live">Live</span> ';
					}
					
					if($new[0] == "1")
					{
						$buttons = $buttons . '<span class="mini-tag new">New</span> ';
					}
					
					if($breaking[0] == "1")
					{
						$buttons = $buttons . '<span class="mini-tag breaking">Breaking</span> ';
					}
					
					if($slideshow[0] == "1")
					{
						$buttons = $buttons . '<span class="mini-tag slideshow">Slideshow</span> ';
					}
					
					if($poll[0] == "1")
					{
						$buttons = $buttons . '<span class="mini-tag poll">Poll</span> ';
					}
					?>

					<li><?php echo $buttons ?> <a href="<?php echo $url ?>"><?php echo get_the_title() ?></a></li>
					
				<?php endwhile; ?>

				<?php
				// Reset Post Data
				wp_reset_postdata();
				?>
				<!--<li><span class="mini-tag new">New</span> <a href="#">Lack of interest in RA elections</a></li>
				<li><span class="mini-tag breaking">Breaking</span> <a href="#">Nursing and Physiotherapy courses to face further changes</a></li>
				<li><a href="#">Russell Group accused of arms trade connections</a></li>
				<li><a href="#">Guild criticised over Demo 2012</a></li>-->
			</ul>
		</div>
	</div>

	<!--<div class="span12 content">

		<div class="span6 span6-tablet image h-300" style="background-image:url(http://www.redbrick.me/wp-content/uploads/2012/11/DSCF7358-1000x429.jpg);"></div>

		<div class="span6 span6-tablet text">
			<h3 class="headline"><a href="#">Disruption continues as University power still not restored</a></h3>
			<p class="headline"><span class="tag new">New</span> <span class="bold">2 hours ago</span></p>
			<p><span class="bold"><a href="#">Freddie Herzog</a> |</span> A major power outage affected most of the University of Birmingham's Edgbaston campus and halls of residence on Wednesday. Further to the blackout across Selly Oak and on campus last week caused by a fire at Selly Oak's...</p>
		</div>

		<div class="span12 text">
			<h5>More top stories</h5>
			<ul class="more span6 span6-tablet">
				<li><span class="mini-tag new">New</span> <a href="#">Lack of interest in RA elections</a></li>
				<li><span class="mini-tag poll">Poll</span> <a href="#">Nursing and Physiotherapy courses to face further changes</a></li>
			</ul>
			<ul class="more span6 span6-tablet">
				<li><a href="#">Russell Group accused of arms trade connections</a></li>
				<li><a href="#">Guild criticised over Demo 2012</a></li>
			</ul>
		</div>
	</div>-->

	<div class="span12 content relative">

		<div class="span12 image show-mobile h-200" style="background-image:url(<?php echo $post_2_featured ?>); cursor:pointer;" onclick="window.location='<?php echo $post_2_url; ?>';"></div>

		<div class="span6 span6-tablet split-image hide-mobile" style="background-image:url(<?php echo $post_2_featured ?>); cursor:pointer;" onclick="window.location='<?php echo $post_2_url; ?>';"></div>

		<div class="span6 span6-tablet offset6 offset6-tablet text">
			<h4 class="headline"><a href="<?php echo $post_2_url; ?>"><?php echo $post_2_info->post_title; ?></a></h4>
			<p class="headline"><?php echo $post_2_buttons ?> <span class="bold"><?php echo $post_2_relative; ?></span></p>
			<p><span class="bold"><?php echo $post_2_author_url ?> |</span> <?php echo $post_2_info->post_excerpt; ?></p>
		</div>
	</div>

	<div class="span12 content">
		<div class="span3-tablet span3 arrow text">
			<h5 class="white-text">Spotlight &rarr;</h5>
		</div>

		<div class="span9-tablet span9 text">
			<h5><a href="#">She's a Member of Parliament, get her out of there</a></h5>
		</div>
	</div>

	<div class="span12 content">
		<div class="span10 offset1" style="margin-top:15px;"></div>
		<div class="span12 relative">
			<div class="span3 span3-tablet split-image" style="background-image:url(http://www.redbrick.me/wp-content/uploads/2012/11/Rihanna-Unapologetic-Promo-rihanna-32700463-1920-1440.jpeg); border-left:15px solid #FFFFFF;"></div>
			<div class="offset3 offset3-tablet span9 span9-tablet text">
				<h4><a href="#">Album Review: Rihanna - Unapologetic</a></h4>
				<p class="headline"><span class="mini-tag updated">Updated</span> <span class="bold">9 hours ago</span></p>
				<p><span class="bold"><a href="#" class="no-underline">Jonathon Milnes</a> |</span> Whenever I complain that I have no time, or am too busy, my dad always reminds me that 'busy people are successful people'. I'm always sceptical of the statement and doubt that it's true. But if one person embodies this proverb, it's Rihanna.</p>
			</div>
		</div>
		<div class="span10 span10-tablet offset1 offset1-tablet" style="border-top:1px solid #aaaaaa; margin-top:15px;"></div>
		<div class="span12 relative">
			<div class="span9 span9-tablet text">
				<h4><a href="#">The Great British Mag at Selfridges</a></h4>
				<p class="headline"><span class="bold">2 days ago</span></p>
				<p><span class="bold"><a href="#" class="no-underline">Sarah Welsby</a> and <a href="#" class="no-underline">Amy Wakeham</a> |</span> A glamourous crowd with an international feel arrived in style at the Moet bar in Birmingham's Selfridges last week for an evening of cocktails, canapes and fabulous fashion. The night was an intimate invitation-only VIP affair to publicise the Great British Magazine, an online portal for international students living in the UK.</p>
			</div>
			<div class="offset9 offset9-tablet span3 span3-tablet split-image" style="top:15px; background-image:url(http://www.redbrick.me/wp-content/uploads/2012/11/img_1932.jpeg); border-right:15px solid #FFFFFF;"></div>
			
		</div>
		<div class="span10 span10-tablet offset1 offset1-tablet" style="border-top:1px solid #aaaaaa; margin-top:15px;"></div>
		<div class="span12">
			<div class="span12 text">
				<h4><a href="#">Preview: The Gondoliers</a></h4>
				<p class="headline"><span class="mini-tag slideshow">Slideshow</span> <span class="bold">3 days ago</span></p>
				<p><span class="bold"><a href="#" class="no-underline">Lexie Wilson</a> |</span> The Gondoliers, set in the colourful streets of Venice, is a comic operetta by Gilbert &amp; Sullivan in 2 acts. Casilda, the young bride of the heir to the throne of Barataria, arrives in Venice with her parents, to join her husband.</p>
			</div>
		</div>
	</div>


<?php get_footer(); //Gets default footer file (footer.php) ?>

<?php /* END FILE */ ?>