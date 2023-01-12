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

		<header id="menu" class="absolute top-0 left-0 z-50 w-full">

			<!-- Main Navigation -->
			<nav id="navbar" class="fixed w-full text-white border-2 lg:py-7 lg:bg-transparent lg:h-auto menu-bg border-red">

				<div class="relative z-50 w-full border-b border-white lg:hidden h-[62px]">
					<button class="absolute w-12 h-12 text-white top-3 right-2 lg:right-0 lg:top-0 navbar-burger">

						<span aria-hidden="true" class="absolute block w-12 h-1 transition duration-500 ease-in-out transform bg-current"></span>
						<span aria-hidden="true" class="absolute block w-12 h-1 transition duration-300 ease-in-out transform bg-current"></span>
						<span aria-hidden="true" class="absolute block w-12 h-1 transition duration-500 ease-in-out transform bg-current"></span>

					</button>

					<div class="block w-[1px] h-[62px] bg-white absolute left-[62px] top-0"></div>
					<div class="block w-[1px] h-[62px] bg-white absolute right-[62px] top-0"></div>

					<div class="absolute cursor-pointer left-4 top-4">
						<a href="<?php echo $site_url; ?>"><img class="w-1/2" src=<?php echo $root_uri . '/resources/images/erth-logo.svg'; ?> /></a>
					</div>
				</div>

				<div class="fixed top-0 left-0 z-40 w-full h-screen transition-transform bg-black lg:bg-transparent lg:h-auto lg:w-auto lg:relative navbar-menu lg:block">
					<div class="items-center justify-between p-12 mt-10 ml-2 navbar-backdrop lg:-mt-0 lg:ml-0 lg:border-none lg:flex lg:p-0">



						<div class="absolute hidden cursor-pointer left-4 top-4 lg:top-0 lg:left-0 lg:relative lg:block">
							<a href="<?php echo $site_url; ?>"><img class="w-1/2 lg:w-full" src=<?php echo $root_uri . '/resources/images/erth-logo.svg'; ?> /></a>
						</div>

						<?php wp_nav_menu([
							'theme_location' => 'top_menu',
							'container_class' => 'header-menu'
						]); ?>



						<!-- Hamburger Nav --->
						<div class="lg:hidden">

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

						</div>
					</div>
				</div>

			</nav>


		</header>

		<div id="content">
			<?php do_action('amoba_content_start'); ?>
			<main>