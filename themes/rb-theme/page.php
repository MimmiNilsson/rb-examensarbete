<?php if (is_page('cart') || is_page('my-account') || is_page('checkout')) : ?>
	<?php get_header('black'); ?>
<?php else : ?>
	<?php get_header(); ?>
<?php endif; ?>

<?php the_content(); ?>
<?php echo 'this is page.php'; ?>

<?php
get_footer();

// about, cases, contact, home, my-account, cart all display this page
// shop and product pages do not... 