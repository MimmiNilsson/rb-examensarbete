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




<!-- <div class="">
    <?php // if (have_posts()) : 
		?>
        <?php
				// while (have_posts()) :
				//     the_post();
				?>

            <?php // get_template_part('template-parts/content', get_post_format()); 
						?>

        <?php // endwhile; 
				?>

    <?php // endif; 
		?>

</div> -->

<?php
get_footer();
