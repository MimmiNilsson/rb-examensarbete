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
	<link rel="icon" type="image/png" href="<?php echo $root_uri; ?>/resources/images/rb-logo-clear.png" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action('amoba_site_before'); ?>

	<div id="page" class="">
		<?php do_action('amoba_header'); ?>

		<header id="menu" class="absolute top-0 left-0 z-50 w-full">

			<!-- Main Navigation -->
			<nav id="navbar" class="fixed w-full text-white md:py-7 md:bg-transparent md:h-auto menu-bg">
				<div class="relative z-50 w-full border-b-[1px] border-white md:hidden h-[62px] bg-transparent">
					<button class="absolute w-12 h-12 text-white top-2.5 right-3 md:right-0 md:top-0 navbar-burger">
						<span aria-hidden="true" class="absolute block w-12 h-1 transition duration-500 ease-in-out transform bg-orange"></span>
						<span aria-hidden="true" class="absolute block w-12 h-1 transition duration-300 ease-in-out transform bg-orange"></span>
						<span aria-hidden="true" class="absolute block w-12 h-1 transition duration-500 ease-in-out transform bg-orange"></span>
					</button>

					<div class="block w-[1px] h-[61px] bg-white absolute left-[62px] top-0"></div>
					<div class="block w-[1px] h-[62px] bg-white absolute right-[62px] top-0"></div>

					<div class="absolute cursor-pointer top-1.5 left-2">
						<a href="<?php echo $site_url; ?>"><img class="w-[52px]" src=<?php echo $root_uri . '/resources/images/rb-logo-clear.svg'; ?> /></a>
					</div>
					<div class="absolute cursor-pointer top-1.5 left-20">
						<!-- <a href="<?php echo $site_url; ?>"><img class="w-[52px]" src=<?php echo $root_uri . '/resources/images/rb-logo-clear.svg'; ?> /></a> -->
					</div>
				</div>

				<div class="fixed top-0 left-0 z-40 w-full h-screen transition-transform bg-black md:bg-transparent md:h-auto md:w-auto md:relative navbar-menu md:block">
					<div class="relative items-center justify-between p-12 navbar-backdrop md:flex md:p-0">

						<?php wp_nav_menu([
							'theme_location' => 'menu_left',
							'container_class' => 'header-menu-left header-menu'
						]); ?>

						<!-- MY ACCOUNT/LOGGED IN LOGO HAMBURGER -->
						<div class="absolute cursor-pointer md:hidden typo-h4">
							<?php if (is_user_logged_in()) : ?>
								<a class="relative top-[29px] -left-2" href="<?php echo site_url('/my-account/'); ?>">
									<svg xmlns="http://www.w3.org/2000/svg" height="48" width="48" fill="white">
										<path d="M24 22.75q-2.5 0-4.125-1.65t-1.625-4.15q0-2.5 1.625-4.125T24 11.2q2.5 0 4.125 1.625t1.625 4.125q0 2.5-1.625 4.15Q26.5 22.75 24 22.75Zm-14 14.5v-2.9q0-1.35.75-2.375t2-1.625q2.95-1.3 5.75-1.975T24 27.7q2.7 0 5.5.675t5.7 1.975q1.3.6 2.05 1.625Q38 33 38 34.35v2.9Zm1.55-1.55h24.9v-1.35q0-.75-.5-1.475-.5-.725-1.4-1.175-2.7-1.3-5.275-1.875T24 29.25q-2.7 0-5.3.575-2.6.575-5.25 1.875-.9.45-1.4 1.175-.5.725-.5 1.475ZM24 21.2q1.8 0 3.025-1.2 1.225-1.2 1.225-3t-1.225-3.025Q25.8 12.75 24 12.75q-1.8 0-3.025 1.225Q19.75 15.2 19.75 17q0 1.8 1.225 3T24 21.2Zm0-4.2Zm0 18.7Z" />
									</svg>
								</a>
							<?php else : ?>
								<a class="relative mt-4 top-[37px] -left-1border-2 border-orange" href="<?php echo site_url('/my-account/'); ?>">Login</a>
							<?php endif; ?>
						</div>
						<!-- CART LOGO HAMBURGER -->
						<div class="absolute cursor-pointer md:hidden">
							<?php if (is_user_logged_in()) : ?>
								<a class="relative top-[85px] -left-2" href="<?php echo site_url('/cart/'); ?>">
									<svg class="h-[32px] w-[46px] lg:h-[35px] lg:w-[48px]" viewBox="0 0 28 37" fill="white" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.67725 37.3055H22.3228C25.3562 37.3055 27.8428 34.9651 27.8428 32.0499V8.892C27.8428 8.4814 27.4753 8.15292 27.0481 8.15292H21.605V6.60907C21.605 2.78227 18.2981 -0.330078 14.2136 -0.330078C10.1292 -0.330078 6.82227 2.78227 6.82227 6.60907V8.15292H0.951905C0.524658 8.15292 0.157227 8.4814 0.157227 8.892V32.0499C0.157227 34.9651 2.65234 37.3055 5.67725 37.3055ZM8.36035 6.60907C8.36035 3.59526 10.9836 1.14808 14.2136 1.14808C17.4436 1.14808 20.0669 3.59526 20.0669 6.60907V8.15292H8.36035V6.60907ZM1.69531 9.63108H6.82227V16.948C6.82227 17.3586 7.16406 17.6871 7.59131 17.6871C8.01855 17.6871 8.36035 17.3586 8.36035 16.948V9.63108H20.0669V16.948C20.0669 17.3586 20.4087 17.6871 20.8359 17.6871C21.2632 17.6871 21.605 17.3586 21.605 16.948V9.63108H26.3047V32.0499C26.3047 34.1439 24.5017 35.8274 22.3228 35.8274H5.67725C3.49829 35.8274 1.69531 34.1521 1.69531 32.0499V9.63108Z" fill="#FDFDFD" />
									</svg>
								</a>
							<?php else : ?>
								<a class="relative top-[75px] -left-2" href="<?php echo site_url('/cart/'); ?>">
									<svg class="h-[32px] w-[46px] lg:h-[35px] lg:w-[48px]" viewBox="0 0 28 37" fill="white" xmlns="http://www.w3.org/2000/svg">
										<path d="M5.67725 37.3055H22.3228C25.3562 37.3055 27.8428 34.9651 27.8428 32.0499V8.892C27.8428 8.4814 27.4753 8.15292 27.0481 8.15292H21.605V6.60907C21.605 2.78227 18.2981 -0.330078 14.2136 -0.330078C10.1292 -0.330078 6.82227 2.78227 6.82227 6.60907V8.15292H0.951905C0.524658 8.15292 0.157227 8.4814 0.157227 8.892V32.0499C0.157227 34.9651 2.65234 37.3055 5.67725 37.3055ZM8.36035 6.60907C8.36035 3.59526 10.9836 1.14808 14.2136 1.14808C17.4436 1.14808 20.0669 3.59526 20.0669 6.60907V8.15292H8.36035V6.60907ZM1.69531 9.63108H6.82227V16.948C6.82227 17.3586 7.16406 17.6871 7.59131 17.6871C8.01855 17.6871 8.36035 17.3586 8.36035 16.948V9.63108H20.0669V16.948C20.0669 17.3586 20.4087 17.6871 20.8359 17.6871C21.2632 17.6871 21.605 17.3586 21.605 16.948V9.63108H26.3047V32.0499C26.3047 34.1439 24.5017 35.8274 22.3228 35.8274H5.67725C3.49829 35.8274 1.69531 34.1521 1.69531 32.0499V9.63108Z" fill="#FDFDFD" />
									</svg>
								</a>
							<?php endif; ?>
						</div>

						<!-- RB LOGO HAMBURGER -->
						<div class="absolute hidden cursor-pointer left-4 top-4 md:top-0 md:left-0 md:relative md:block">
							<a href="<?php echo $site_url; ?>"><img class="w-[72px]" src=<?php echo $root_uri . '/resources/images/rb-logo-clear.svg'; ?> /></a>
						</div>

						<?php wp_nav_menu([

							'theme_location' => 'menu_right',
							'container_class' => 'header-menu-right header-menu'
						]); ?>

						<!-- DIV SIZING FOR LOGIN, NOT ICON! -->
						<?php if (is_user_logged_in()) : ?>
							<div class="absolute flex flex-row w-[calc(30%-65px)] lg:w-[calc(27%-30px)] xl:w-[calc(20%-10px)] 2xl:w-[17%] top-3.5 right-12 lg:right-22 xl:right-[85px] 2xl:right-24 justify-between">
								<div class="hidden lg:-top-1.5 md:relative md:block -top-1">
									<a href="<?php echo site_url('/my-account/'); ?>">
										<svg class="h-[40px] w-[40px] lg:h-[48px] lg:w-[48px]" fill="white" xmlns="http://www.w3.org/2000/svg">
											<path d="M24 22.75q-2.5 0-4.125-1.65t-1.625-4.15q0-2.5 1.625-4.125T24 11.2q2.5 0 4.125 1.625t1.625 4.125q0 2.5-1.625 4.15Q26.5 22.75 24 22.75Zm-14 14.5v-2.9q0-1.35.75-2.375t2-1.625q2.95-1.3 5.75-1.975T24 27.7q2.7 0 5.5.675t5.7 1.975q1.3.6 2.05 1.625Q38 33 38 34.35v2.9Zm1.55-1.55h24.9v-1.35q0-.75-.5-1.475-.5-.725-1.4-1.175-2.7-1.3-5.275-1.875T24 29.25q-2.7 0-5.3.575-2.6.575-5.25 1.875-.9.45-1.4 1.175-.5.725-.5 1.475ZM24 21.2q1.8 0 3.025-1.2 1.225-1.2 1.225-3t-1.225-3.025Q25.8 12.75 24 12.75q-1.8 0-3.025 1.225Q19.75 15.2 19.75 17q0 1.8 1.225 3T24 21.2Zm0-4.2Zm0 18.7Z" />
										</svg>
									</a>
								</div>
								<div class="hidden md:relative md:block lg:top-0.5 top-1.5 -right-2">
									<a href="<?php echo site_url('/cart/'); ?>">
										<svg class="h-[32px] w-[46px] lg:h-[35px] lg:w-[48px]" viewBox="0 0 28 37" fill="white" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.67725 37.3055H22.3228C25.3562 37.3055 27.8428 34.9651 27.8428 32.0499V8.892C27.8428 8.4814 27.4753 8.15292 27.0481 8.15292H21.605V6.60907C21.605 2.78227 18.2981 -0.330078 14.2136 -0.330078C10.1292 -0.330078 6.82227 2.78227 6.82227 6.60907V8.15292H0.951905C0.524658 8.15292 0.157227 8.4814 0.157227 8.892V32.0499C0.157227 34.9651 2.65234 37.3055 5.67725 37.3055ZM8.36035 6.60907C8.36035 3.59526 10.9836 1.14808 14.2136 1.14808C17.4436 1.14808 20.0669 3.59526 20.0669 6.60907V8.15292H8.36035V6.60907ZM1.69531 9.63108H6.82227V16.948C6.82227 17.3586 7.16406 17.6871 7.59131 17.6871C8.01855 17.6871 8.36035 17.3586 8.36035 16.948V9.63108H20.0669V16.948C20.0669 17.3586 20.4087 17.6871 20.8359 17.6871C21.2632 17.6871 21.605 17.3586 21.605 16.948V9.63108H26.3047V32.0499C26.3047 34.1439 24.5017 35.8274 22.3228 35.8274H5.67725C3.49829 35.8274 1.69531 34.1521 1.69531 32.0499V9.63108Z" fill="#FDFDFD" />
										</svg>
									</a>
								</div>
							<?php else : ?>
								<div class="absolute flex flex-row w-[calc(25%-30px)] 2xl:w-[17%] top-3.5 right-12 lg:right-22 xl:right-[85px] 2xl:right-24 justify-between">
									<div class="hidden md:relative md:block lg:top-3.5 top-4">
										<a class="self-center typo-link" href="<?php echo site_url('/my-account/'); ?>">Login</a>
									</div>
									<div class="hidden md:relative md:block top-0.5 -right-2">
										<a href="<?php echo site_url('/cart/'); ?>">
											<svg class="h-[32px] w-[46px] lg:h-[35px] lg:w-[48px]" viewBox="0 0 28 37" fill="white" xmlns="http://www.w3.org/2000/svg">
												<path d="M5.67725 37.3055H22.3228C25.3562 37.3055 27.8428 34.9651 27.8428 32.0499V8.892C27.8428 8.4814 27.4753 8.15292 27.0481 8.15292H21.605V6.60907C21.605 2.78227 18.2981 -0.330078 14.2136 -0.330078C10.1292 -0.330078 6.82227 2.78227 6.82227 6.60907V8.15292H0.951905C0.524658 8.15292 0.157227 8.4814 0.157227 8.892V32.0499C0.157227 34.9651 2.65234 37.3055 5.67725 37.3055ZM8.36035 6.60907C8.36035 3.59526 10.9836 1.14808 14.2136 1.14808C17.4436 1.14808 20.0669 3.59526 20.0669 6.60907V8.15292H8.36035V6.60907ZM1.69531 9.63108H6.82227V16.948C6.82227 17.3586 7.16406 17.6871 7.59131 17.6871C8.01855 17.6871 8.36035 17.3586 8.36035 16.948V9.63108H20.0669V16.948C20.0669 17.3586 20.4087 17.6871 20.8359 17.6871C21.2632 17.6871 21.605 17.3586 21.605 16.948V9.63108H26.3047V32.0499C26.3047 34.1439 24.5017 35.8274 22.3228 35.8274H5.67725C3.49829 35.8274 1.69531 34.1521 1.69531 32.0499V9.63108Z" fill="#FDFDFD" />
											</svg>
										</a>
									<?php endif; ?>
									</div>
								</div>

								<!-- Hamburger (Footer) Nav --->
								<!-- <div class="border-white flexborder-2 typo-subheading h-[200px]">
									<div class="mb-9 md:mb-24">
										<div class="mb-3">
											<?php if (!empty($email)) : ?>
												<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
											<?php endif; ?>
										</div>

										<div class="mb-3">
											<?php if (!empty($phone)) : ?>
												<a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
											<?php endif; ?>
										</div>

										<div class="typo-subheading-small">
											<?php if (!empty($address)) : ?>
												<?php the_field('address', 'option'); ?>
											<?php endif; ?>
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