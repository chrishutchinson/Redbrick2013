<?php
/* header.php */
/* Redbrick2013 Theme */
/* Written by Chris Hutchinson (chris_hutchinson@me.com) */
/* Started: 12th December 2012 */
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Redbrick</title>
	<link rel="stylesheet" href="<?php bloginfo("template_directory") ?>/css/defaults.css" />
	<link rel="stylesheet" href="<?php bloginfo("template_directory") ?>/css/custom.css" />
	<link rel="stylesheet" media="screen and (min-width: 950px)" href="<?php bloginfo("template_directory") ?>/css/main.css" />
	<link rel="stylesheet" media="screen and (max-width: 949px) and (min-width:750px)" href="<?php bloginfo("template_directory") ?>/css/tablet.css" />
	<link rel="stylesheet" media="screen and (max-width: 749px)" href="<?php bloginfo("template_directory") ?>/css/mobile.css" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo("template_directory") ?>/mobile.css"/>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>

	<?php
	if(is_home()){
		get_template_part("slider"); // If it's the homepage, show the slider
	}
	?>

	<?php get_template_part("nav"); //Include nav.php file ?>

	<?php get_template_part("sidebar") //Include sidebar.php file ?>

<?php
/* END FILE */
?>