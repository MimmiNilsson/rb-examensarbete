<?php
// add_theme_support('title-tag');
// add_theme_support('post-thumbnails');
// add_theme_support('custom-logo');

// Add WooCommerce support
add_action('after_setup_theme', 'setup_woocommerce_support');
function setup_woocommerce_support()
{
	add_theme_support('woocommerce');
}

/**
 * Enqueue scripts.
 */
function amoba_enqueue_scripts()
{
	$theme = wp_get_theme();

	// wp_enqueue_script('jquery');

	wp_enqueue_style('amoba', amoba_get_mix_compiled_asset_url('css/app.css'), array(), $theme->get('Version'));
	wp_enqueue_script('amoba', amoba_get_mix_compiled_asset_url('js/app.js'), array('jquery'), $theme->get('Version'));
}

add_action('wp_enqueue_scripts', 'amoba_enqueue_scripts');

// Add Favicon
add_action('wp_head', 'ilc_favicon');
function ilc_favicon()
{
	echo "<link rel='icon' type='image/png' href='" . get_stylesheet_directory_uri() . "/images/favico.png' />" . "\n";
}

/**
 * Get mix compiled asset.
 *
 * @param string $path The path to the asset.
 *
 * @return string
 */
function amoba_get_mix_compiled_asset_url($path)
{
	$path                = '/' . $path;
	$stylesheet_dir_uri  = get_stylesheet_directory_uri();
	$stylesheet_dir_path = get_stylesheet_directory();

	if (!file_exists($stylesheet_dir_path . '/mix-manifest.json')) {
		return $stylesheet_dir_uri . $path;
	}

	$mix_file_path = file_get_contents($stylesheet_dir_path . '/mix-manifest.json');
	$manifest      = json_decode($mix_file_path, true);
	$asset_path    = !empty($manifest[$path]) ? $manifest[$path] : $path;

	return $stylesheet_dir_uri . $asset_path;
}


/**
 * Theme setup.
 */
function amoba_setup()
{
	// Let WordPress manage the document title.
	add_theme_support('title-tag');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu_left' => __('Top Menu Left', 'rb-examen'),
			'menu_right' => __('Top Menu Right', 'rb-examen'),
			'footer_menu' => __('Footer Menu', 'rb-examen')
		)
	);

	// Switch default core markup for search form, comment form, and comments
	// to output valid HTML5.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	// Adding Thumbnail basic support.
	add_theme_support('post-thumbnails');

	// Block editor.
	add_theme_support('align-wide');

	add_theme_support('wp-block-styles');

	add_theme_support('editor-styles');
	add_editor_style();
}

add_action('after_setup_theme', 'amoba_setup');

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function amoba_nav_menu_add_li_class($classes, $item, $args, $depth)
{
	if (isset($args->li_class)) {
		$classes[] = $args->li_class;
	}

	if (isset($args->{"li_class_$depth"})) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_css_class', 'amoba_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function amoba_nav_menu_add_submenu_class($classes, $args, $depth)
{
	if (isset($args->submenu_class)) {
		$classes[] = $args->submenu_class;
	}

	if (isset($args->{"submenu_class_$depth"})) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter('nav_menu_submenu_css_class', 'amoba_nav_menu_add_submenu_class', 10, 3);


// CREATE ACF BLOCK TYPES
add_action('acf/init', 'acf_init_block_types');
function acf_init_block_types()
{

	// Check function exists.
	if (function_exists('acf_register_block_type')) {

		// Hero Block
		acf_register_block_type(array(
			'name'              => 'hero',
			'title'             => __('RB | Hero'),
			'render_template'   => 'template-parts/blocks/hero.php',
			'category'          => 'custom',
			'icon'              => 'cover-image',
			'keywords'          => array('hero'),
			'mode' => 'edit',
			'supports' => array(
				'mode' => false
			)
		));

		// Text Block (wysiwyg)
		acf_register_block_type(array(
			'name'              => 'text-block',
			'title'             => __('RB | Text'),
			'render_template'   => 'template-parts/blocks/text-wysiwyg.php',
			'category'          => 'custom',
			'icon'              => 'edit',
			'keywords'          => array('text'),
			'mode' => 'edit',
			'supports' => array(
				'mode' => false
			)
		));

		// Selected Cases Block
		acf_register_block_type(array(
			'name'              => 'cases',
			'title'             => __('RB | Cases'),
			'render_template'   => 'template-parts/blocks/selected-cases.php',
			'category'          => 'custom',
			'icon'              => 'sticky',
			'keywords'          => array('cases', 'selected', 'featured'),
			'mode' => 'edit',
			'supports' => array(
				'mode' => false
			)
		));

		// Companies Block
		acf_register_block_type(array(
			'name'              => 'companies',
			'title'             => __('RB | Companies'),
			'render_template'   => 'template-parts/blocks/companies.php',
			'category'          => 'custom',
			'icon'              => 'embed-post',
			'keywords'          => array('companies', 'partners', 'logo'),
			'mode' => 'edit',
			'supports' => array(
				'mode' => false
			)
		));

		// Secondary (Woo) Hero Block
		acf_register_block_type(array(
			'name'              => 'secondary-hero',
			'title'             => __('RB | Secondary (Woo) Hero'),
			'render_template'   => 'template-parts/blocks/secondary-hero.php',
			'category'          => 'custom',
			'icon'              => 'cover-image',
			'keywords'          => array('secondary', 'hero', 'woo'),
			'mode' => 'edit',
			'supports' => array(
				'mode' => false
			)
		));
	}
}

// OPTIONS PAGES
if (function_exists('acf_add_options_page')) {

	// // Selected Cases
	// acf_add_options_page(array(
	// 	'page_title'    => 'Customize Selected Cases',
	// 	'menu_title'    => 'Customize Cases',
	// 	'menu_slug'   => 'selected-cases',
	// ));

	// Footer
	acf_add_options_page(array(
		'page_title'    => 'Customize Footer Menu',
		'menu_title'    => 'Customize Footer',
		'menu_slug'   => 'footer-options',
	));

	// Page 404
	acf_add_options_page(array(
		'page_title'    => 'Customize Page Not Found (404)',
		'menu_title'    => 'Customize 404',
		'menu_slug'   => 'customize-404',
	));
}


// Make sure Polylang copies the content when creating a translation
function jb_editor_content($content)
{
	// Polylang sets the 'from_post' parameter
	if (isset($_GET['from_post'])) {
		$my_post = get_post($_GET['from_post']);
		if ($my_post)
			return $my_post->post_content;
	}

	return $content;
}
add_filter('default_content', 'jb_editor_content');

// Make sure Polylang copies the title when creating a translation
function jb_editor_title($title)
{
	// Polylang sets the 'from_post' parameter
	if (isset($_GET['from_post'])) {
		$my_post = get_post($_GET['from_post']);
		if ($my_post)
			return $my_post->post_title;
	}

	return $title;
}
add_filter('default_title', 'jb_editor_title');


add_filter('wpsl_admin_marker_dir', 'custom_admin_marker_dir');

add_post_type_support('page', 'excerpt');

add_filter('document_title_parts', function ($title) {
	if (is_search() && empty(get_search_query())) {
		$title['title'] = sprintf(
			esc_html__('Sök', 'amoba'),

		);
	}

	return $title;
});

// WOOCOMMERCE RELATED

// Remove "Select options" button from (variable) products on the main WooCommerce shop page.
add_filter('woocommerce_loop_add_to_cart_link', function ($product) {
	global $product;
	if (is_shop() && 'variable' === $product->product_type) {
		return '';
	} else {
		sprintf(
			'<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
			esc_url($product->add_to_cart_url()),
			esc_attr(isset($args['quantity']) ? $args['quantity'] : 1),
			esc_attr(isset($args['class']) ? $args['class'] : 'button'),
			isset($args['attributes']) ? wc_implode_html_attributes($args['attributes']) : '',
			esc_html($product->add_to_cart_text())
		);
	}
});

// add_action('woocommerce_before_single_product', 'add_breadcrumb', 20);
// function add_breadcrumb(){
//    woocommerce_breadcrumb();
// };

@ini_set('upload_max_size', '64M');
@ini_set('post_max_size', '64M');
@ini_set('max_execution_time', '300');
