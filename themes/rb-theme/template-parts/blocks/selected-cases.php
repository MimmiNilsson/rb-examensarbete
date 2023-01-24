<?php
$heading = get_field('heading');

$image_1 = get_field('image_1');
$image_1_id = $image_1['ID'];
$title_1 = get_field('title_1');
$customer_1 = get_field('customer_1');
$link_1 = get_field('cta_1');

$image_2 = get_field('image_2');
$image_2_id = $image_2['ID'];
$title_2 = get_field('title_2');
$customer_2 = get_field('customer_2');
$link_2 = get_field('cta_2');

$image_3 = get_field('image_3');
$image_3_id = $image_3['ID'];
$title_3 = get_field('title_3');
$customer_3 = get_field('customer_3');
$link_3 = get_field('cta_3');

$image_size = 'large';
?>

<!-- SELECTED CASES HEADING -->

<div class="flex items-center mt-9 md:mt-24">
  <?php if (!empty($heading)) : ?>
    <div aria-hidden="true" class="w-full h-[1px] bg-orange"></div>

    <h4 class="typo-h6 text-center px-3 md:px-12 md:min-w-[260px] md:px-10 lg:min-w-[350px] text-orange"><?php the_field('heading'); ?></h4>
    <div aria-hidden="true" class="w-full h-[1px] bg-orange"></div>
  <?php endif; ?>
</div>


<!-- FEATURED CASES -->
<div class="m-auto lg:w-[90%] xl:w-[1220px] relative mt-4 mb-9 md:mb-24">
  <div class="grid h-full gap-4 mx-6 text-center md:grid-cols-3 lg:mx-0">

    <!-- CASE 1 -->
    <div class="relative p-6 md:p-2 bg-gray box-shadow">
      <img class="rounded-[5px] w-full h-[220px] object-cover object-center" src="<?php echo wp_get_attachment_image_url($image_1_id, $image_size); ?>" />

      <?php if (!empty($title_1)) : ?>
        <p class="my-2 italic"><?php echo $title_1; ?></p>
      <?php endif; ?>

      <?php if (!empty($customer_1)) : ?>
        <p class="mb-6 typo-subheading-small"><?php echo $customer_1; ?></p>
      <?php endif; ?>

      <?php
      if ($link_1) :
        $link_1_url = $link_1['url'];
        $link_1_title = $link_1['title'];
        $link_1_target = $link_1['target'] ? $link_1['target'] : '_self';
      ?>
        <a class="link" href="<?php echo esc_url($link_1_url); ?>" target="<?php echo esc_attr($link_1_target); ?>"> <?php echo esc_html($link_1_title); ?></a>
      <?php endif; ?>
    </div>

    <!-- CASE 2 -->
    <div class="relative p-6 md:p-2 bg-gray box-shadow">
      <img class="rounded-[5px] w-full h-[220px] object-cover object-center" src="<?php echo wp_get_attachment_image_url($image_2_id, $image_size); ?>" />

      <?php if (!empty($title_2)) : ?>
        <p class="my-2 italic"><?php echo $title_2; ?></p>
      <?php endif; ?>

      <?php if (!empty($customer_2)) : ?>
        <p class="mb-6 typo-subheading-small"><?php echo $customer_2; ?></p>
      <?php endif; ?>

      <?php
      if ($link_2) :
        $link_2_url = $link_2['url'];
        $link_2_title = $link_2['title'];
        $link_2_target = $link_2['target'] ? $link_2['target'] : '_self';
      ?>
        <a class="link" href="<?php echo esc_url($link_2_url); ?>" target="<?php echo esc_attr($link_2_target); ?>"> <?php echo esc_html($link_2_title); ?></a>
      <?php endif; ?>
    </div>

    <!-- CASE 3 -->
    <div class="relative p-6 md:p-2 bg-gray box-shadow">
      <img class="rounded-[5px] w-full h-[220px] object-cover object-center" src="<?php echo wp_get_attachment_image_url($image_3_id, $image_size); ?>" />

      <?php if (!empty($title_3)) : ?>
        <p class="my-2 italic"><?php echo $title_3; ?></p>
      <?php endif; ?>

      <?php if (!empty($customer_3)) : ?>
        <p class="mb-6 typo-subheading-small"><?php echo $customer_3; ?></p>
      <?php endif; ?>

      <?php
      if ($link_3) :
        $link_3_url = $link_3['url'];
        $link_3_title = $link_3['title'];
        $link_3_target = $link_3['target'] ? $link_3['target'] : '_self';
      ?>
        <a class="link" href="<?php echo esc_url($link_3_url); ?>" target="<?php echo esc_attr($link_3_target); ?>"> <?php echo esc_html($link_3_title); ?></a>
      <?php endif; ?>
    </div>
  </div>
</div>