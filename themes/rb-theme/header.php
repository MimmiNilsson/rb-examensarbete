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
			<nav id="navbar" class="fixed w-full md:py-7 md:bg-gray md:h-auto menu-bg"> <!-- md:bg-transparent -->

<div class="relative z-50 w-full border-b-2 border-white md:hidden h-[62px]">
	<button class="absolute w-12 h-12 text-white top-3 right-2 md:right-0 md:top-0 navbar-burger">

		<span aria-hidden="true" class="absolute block w-12 h-1 transition duration-500 ease-in-out transform bg-orange"></span>
		<span aria-hidden="true" class="absolute block w-12 h-1 transition duration-300 ease-in-out transform bg-orange"></span>
		<span aria-hidden="true" class="absolute block w-12 h-1 transition duration-500 ease-in-out transform bg-orange"></span>

	</button>

	<div class="block w-[2px] h-[62px] bg-white absolute left-[62px] top-0"></div>
	<div class="block w-[2px] h-[62px] bg-white absolute right-[62px] top-0"></div>

	<div class="absolute cursor-pointer top-1.5 left-2">
		<a href="<?php echo $site_url; ?>"><img class="w-[52px]" src=<?php echo $root_uri . '/resources/images/rb-logo-clear.svg'; ?> /></a>
	</div>
</div>

<div class="fixed top-0 left-0 z-40 w-full transition-transform bg-gray h-1/2 md:bg-transparent md:h-auto md:w-auto md:relative navbar-menu md:block">
	<div class="items-center justify-between p-12 mt-10 ml-2 navbar-backdrop md:-mt-0 md:ml-0 md:border-none md:flex md:p-0 ">

		<?php wp_nav_menu([
			'theme_location' => 'menu_left',
			'container_class' => 'header-menu-left header-menu'
		]); ?>

		<div class="absolute hidden cursor-pointer left-4 top-4 md:top-0 md:left-0 md:relative md:block">
			<a href="<?php echo $site_url; ?>"><img class="w-[72px]" src=<?php echo $root_uri . '/resources/images/rb-logo-clear.svg'; ?> /></a>
		</div>

		<?php wp_nav_menu([

			'theme_location' => 'menu_right',
			'container_class' => 'header-menu-right header-menu'
		]); ?>

		<!-- Hamburger Nav --->
		<!-- <div class="lg:hidden">

			<div class="mt-20">

				<?php if (!empty($instagram_link)) : ?>
					<a class="flex items-start mt-6" href="<?php the_field('instagram_link', 'option'); ?>" target="_blank">
						<img src=<?php echo $root_uri . "/images/instagram-logo.svg" ?>>
						<span class="mt-1 ml-2 typo-submenu text-[12px]">Instagram</span>
					</a>
				<?php endif; ?>
				<?php if (!empty($facebook_link)) : ?>
					<a class="flex items-start pr-6 mt-2" href="<?php the_field('facebook_link', 'option'); ?>" target="_blank">
						<img src=<?php echo $root_uri . "/images/facebook-logo.svg" ?>>
						<span class="mt-1 ml-2 typo-submenu text-[12px]">Facebook</span>
					</a>
				<?php endif; ?>
			</div>
			<div class="flex flex-row justify-between mt-12 lg:hidden typo-body text-[16px] md:text-[18px]">
				<div class="w-[45%]">
					<div class="flex">
						<a href=""></a>
						<?php if (!empty($telefonnummer)) : the_field('telefonnummer', 'option');
						endif; ?>
					</div>
					<?php if (!empty($email)) : the_field('email', 'option');
					endif; ?>
				</div>
				<div class="w-[45%]">
					<?php if (!empty($adress)) : the_field('adress', 'option');
					endif; ?>
				</div>
			</div>

		</div> -->
	</div>
</div>

</nav>
		</header>
		<div id="content">
			<?php do_action('amoba_content_start'); ?>
			<main>