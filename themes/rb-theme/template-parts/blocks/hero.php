<?php
$desktop_img = get_field('desktop_img');
$desktop_img_id = $desktop_img['ID'];

$mobile_img = get_field('mobile_img');
$mobile_img_id = $mobile_img['ID'];

$img_size = 'large';

$heading = get_field('heading');
$subheading = get_field('subheading');
?>

<div class="relative w-full h-[65vh] bg-black min-h-[600px]">
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
        <div class="h-[1px] bg-white absolute right-0 top-[50%] w-[20%]"></div>
        <div class="h-[1px] bg-white absolute left-0 top-[50%] w-[20%]"></div>
        <div class="h-full w-[1px] bg-white absolute left-[80%]"></div>
        <div class="h-full w-[1px] bg-white absolute right-[80%]"></div>
        <div class="h-full w-[1px] bg-white absolute right-[5%]"></div>
        <div class="h-full w-[1px] bg-white absolute left-[5%]"></div>
      </div>

      <div class="md:w-[50%] flex justify-center items-center flex-col md:translate-x-1/2 w-full text-white">
        <h1 class="m-2 text-center typo-h2"><?php echo esc_html($heading); ?></h1>
        <h3 class="m-2 text-center typo-subheading"><?php echo esc_html($subheading); ?></h3>
      </div>

    </div>



  </div>

</div>


<!-- <div class="border-2 border-purple w-full h-[65vh] min-h-[600px] flex flex-col md:flex-row">
  <div class="flex flex-col items-center justify-center w-1/2 border-2 border-blue bg-lime">
    <h1 class=""><?php echo ($heading); ?></h1>
    <h2 class=""><?php echo $subheading; ?></h2>
  </div>
  <div class="w-1/2 bg-center bg-no-repeat bg-cover border-2 border-red-700" style="background-image: url('<?php echo wp_get_attachment_image_url($image_id, $image_size); ?>')"></div>
</div> -->