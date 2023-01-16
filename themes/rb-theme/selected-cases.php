<?php 
$heading = get_field('heading', 'option');

$image_1 = get_field('image_1)', 'option');
$title_1 = get_field('title_1', 'option');
$customer_1 = get_field('customer_1', 'option');
$link_1 = get_field('link', 'option');

$image_2 = get_field('image_2)', 'option');
$title_2 = get_field('title_2', 'option');
$customer_2 = get_field('customer_2', 'option');
$link_2 = get_field('link', 'option');

$image_3 = get_field('image_3)', 'option');
$title_3 = get_field('title_3', 'option');
$customer_3 = get_field('customer_3', 'option');
$link_3 = get_field('link', 'option');

$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';
?>

<div class="flex items-center mt-9 md:mt-24">
  <div aria-hidden="true" class="w-full h-[1px] bg-black"></div>
  <h4 class="typo-large italic text-center px-3 md:px-12 md:min-w-[260px] md:px-10 lg:min-w-[350px]"><?php echo the_field('heading'); ?></h4>
  <div aria-hidden="true" class="w-full h-[1px] bg-black"></div>
</div>

<!-- NOT AN OPTIONS PAGE! NEEDS TO BE REG ACF? -->


