<?php

/**
 * Block template file: template-parts/blocks/text.php
 *
 * amoba Text Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'amoba-text-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-amoba-text';
if (!empty($block['className'])) {
  $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $classes .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?> wrapper md:my-20 my-12">
  <div class="container max-w-2xl mx-auto wysiwyg"><?php the_field('text'); ?></div>
  <?php $button = get_field('button'); ?>
  <?php if ($button) : ?>
    <div>
      <a class="mx-auto mt-12 btn btn-clear-black" href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target']); ?>"><?php echo esc_html($button['title']); ?></a>
    </div>
  <?php endif; ?>
</div>