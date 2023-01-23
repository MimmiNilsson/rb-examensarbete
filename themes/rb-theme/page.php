<?php if (is_page('cart') || is_page('my-account') || is_page('checkout')) : ?>
	<?php get_header('black'); ?>
<?php else : ?>
	<?php get_header(); ?>
<?php endif; ?>

<?php the_content(); ?>

<?php
get_footer();
