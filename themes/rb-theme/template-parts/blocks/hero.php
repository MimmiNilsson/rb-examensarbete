<?php
$desktop_img = get_field('desktop_img');
$desktop_img_id = $desktop_img['ID'];
$mobile_img = get_field('mobile_img');
$mobile_img_id = $mobile_img['ID'];
$img_size = 'large';

$heading = get_field('heading');
$subheading = get_field('subheading');
?>

<div class="relative w-full h-[65vh] md:h-[85vh] bg-black">
  <div class="absolute top-0 left-0 w-full h-full min-h-[490px]">
    <?php if (!empty($desktop_img)) : ?>
      <div class="absolute <?php if (!empty($mobile_img)) : ?> hidden md:block <?php endif; ?> inset-0 z-0 w-full h-full bg-center bg-no-repeat bg-cover opacity-50" style="background-image: url('<?php echo wp_get_attachment_image_url($desktop_img_id, $img_size); ?>');"></div>
    <?php endif; ?>

    <?php if (!empty($mobile_img)) : ?>
      <div class="absolute inset-0 z-0 w-full h-full bg-center bg-no-repeat bg-cover opacity-50 md:hidden" style="background-image: url('<?php echo wp_get_attachment_image_url($mobile_img_id, $img_size); ?>');"></div>
    <?php endif; ?>

    <div class="relative z-20 mt-[130px] h-[calc(100%-130px-55px)] flex align-middle items-center w-full">
      <div class="absolute top-0 left-0 hidden w-full h-full overflow-hidden md:block ">
        <div class="w-full h-[1px] bg-white absolute bottom-0"></div>
        <div class="w-full h-[1px] bg-white absolute top-0"></div>
        <!-- <div class="h-full w-[1px] bg-white absolute left-[80%]"></div>
        <div class="h-full w-[1px] bg-white absolute right-[80%]"></div> -->
      </div>

      <div class="md:w-[50%] flex justify-center items-center flex-col md:translate-x-1/2 w-full text-white">
        <div class="mx-6 text-center md:mx-0">
          <h1 class="typo-h1"><?php echo esc_html($heading); ?></h1>
          <h3 class="typo-subheading"><?php echo esc_html($subheading); ?></h3>
        </div>

        <?php
        $btn = get_field('cta');
        if ($btn) :
          $btn_url = $btn['url'];
          $btn_title = $btn['title'];
          $btn_target = $btn['target'] ? $btn['target'] : '_self';
        ?>
          <a class="btn-white" href="<?php echo esc_url($btn_url); ?>" target="<?php echo esc_attr($btn_target); ?>"> <?php echo esc_html($btn_title); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>