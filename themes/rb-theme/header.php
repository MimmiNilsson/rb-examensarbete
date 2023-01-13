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
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet"> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action('amoba_site_before'); ?>

	<div id="page" class="">
		<?php do_action('amoba_header'); ?>

		<header id="menu" class="absolute top-0 left-0 z-50 w-full">

			<!-- Main Navigation -->
			<nav id="navbar" class="fixed w-full text-white bg-black lg:py-5 lg:h-auto "> <!-- Nav 'container' -->
				<div class="relative w-full md:max-w-[1040px] m-auto h-[100px] bg-lime">
					<div class="absolute hidden cursor-pointer left-4 top-4 lg:top-0 lg:left-0 lg:relative lg:block">
						<a href="<?php echo $site_url; ?>"><img class="w-[62px] m-auto border-2 border-black " src=<?php echo $root_uri . '/resources/images/rb-logo-clear.svg'; ?> /></a>
					</div>

				</div>

				<div class="fixed left-0 z-40 w-full h-[50%] transition-transform bg-gray top-62 lg:top-0 lg:bg-transparent lg:h-auto lg:w-auto lg:relative navbar-menu lg:block">
					<div class="items-center p-12 mt-10 ml-2 justify-evenly navbar-backdrop lg:-mt-0 lg:ml-0 lg:border-none lg:flex lg:p-0 lg:w-1/2">


						<!-- Logo reg nav -->
						<div class="absolute hidden cursor-pointer left-4 top-4 lg:top-0 lg:left-10 lg:relative lg:block">
							<a href="<?php echo $site_url; ?>"><img class="w-1/12" src=<?php echo $root_uri . '/resources/images/rb-logo-clear.svg'; ?> /></a>
						</div>

						<?php wp_nav_menu([
							'theme_location' => 'top_menu',
							'container_class' => 'header-menu'
						]); ?>

						<!-- Hamburger Nav --->
						<div class="lg:hidden">
							<div class="mt-20">
								<!-- 'Footer' items -->
							</div>
						</div>
					</div>
				</div>
			</nav>
		</header>
		<div id="content">
			<?php do_action('amoba_content_start'); ?>
			<main>