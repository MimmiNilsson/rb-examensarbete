<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();

    get_template_part('template-parts/entry');

  endwhile;
endif; ?>

<?php get_footer(); ?> 


<!-- <?php get_header(); ?>

<div class="">

	<?php if (have_posts()) : ?>

		<?php
		while (have_posts()) :
			the_post();
		?>

			<?php get_template_part('template-parts/content', 'single'); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer(); -->
