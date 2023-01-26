<?php if (is_page('content-single-product')) : ?>
	<?php get_header('black'); ?>
<?php else : ?>
	<?php get_header(); ?>
<?php endif; ?>

<?php get_header(); ?>

<?php the_content(); ?>

<?php
get_footer();