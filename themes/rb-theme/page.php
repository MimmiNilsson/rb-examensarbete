<?php if (is_page('cart') || is_page('my-account') || is_page('checkout') || is_page('shop')) : ?>
	<?php get_header('black'); ?>
<?php else : ?>
	<?php get_header(); ?>
<?php endif; ?>

<?php the_content(); ?>
<?php var_dump(is_page('shop')); ?>

<?php
get_footer();
