<article id="post-<?php the_ID(); ?>">

	<?php if (is_search() || is_archive()) : ?>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>

	<?php else : ?>

		<div class="entry-content">
			<?php
			/* translators: %s: Name of current post */
			the_content(
				sprintf(
					__('Continue reading %s', 'amoba'),
					the_title('<span class="screen-reader-text">"', '"</span>', false)
				)
			);
			?>
		</div>

	<?php endif; ?>

</article>