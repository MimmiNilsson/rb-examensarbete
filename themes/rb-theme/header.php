<?php
$root_uri = get_template_directory_uri();
$site_url = network_site_url('/');
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="icon" type="image/png" href="<?php echo $root_uri; ?>/resources/images/favicon.png" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action('amoba_site_before'); ?>

	<div id="page" class="">
		<?php do_action('amoba_header'); ?>

		<header id="menu" class="">

		<!-- Main Navigation -->
		<nav>

		</nav>
	

		</header>

		<div id="content">
			<?php do_action('amoba_content_start'); ?>
			<main>