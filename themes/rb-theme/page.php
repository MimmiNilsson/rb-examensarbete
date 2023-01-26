<?php // if (is_page('cart') || is_page('my-account') || is_page('checkout')) : 
?>
<?php // get_header('black'); 
?>
<?php // else : 
?>
<?php // get_header(); 
?>
<?php // endif; 
?>

<?php if (is_page('content-single-product')) : ?>
	<?php get_header('black'); ?>
<?php else : ?>
	<?php get_header(); ?>
<?php endif; ?>

<?php get_header(); ?>

<?php the_content(); ?>

<?php
get_footer();

// about, cases, contact, home, my-account, cart all display this page
// shop and product pages do not... 