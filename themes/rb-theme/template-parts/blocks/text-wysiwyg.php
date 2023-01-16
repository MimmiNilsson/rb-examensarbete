<?php
$heading = get_field('heading');
$preamble = get_field('preamble');
$text = get_field('text');
?>

<div class="m-auto md:max-w-3xl my-9 md:my-24">
  <div class="flex flex-col mx-6 md:mx-0">
    <?php if (!empty($heading)) : ?>
      <h2 class="mb-4 typo-h4"><?php echo $heading; ?></h2>
    <?php endif; ?>
    <?php if (!empty($preamble)) : ?>
      <h3 class="mb-6 typo-subheading"><?php echo $preamble; ?></h3>
    <?php endif; ?>
    <?php if (!empty($text)) : ?>
      <div class="typo-body"><?php echo $text; ?></div>
    <?php endif; ?>
  </div>
  <div class="flex justify-center">
    <?php
    $show_btn = get_field('show_btn');
    $link = get_field('link');
    ?>
    <?php
    if ($link) :
      $link_url = $link['url'];
      $link_title = $link['title'];
      $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <?php endif; ?>
    <?php
    if ($show_btn) : ?>
      <a class="btn-black" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
    <?php endif; ?>
  </div>
</div>