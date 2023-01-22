<?php

$background_image = get_field('background_image');
$background_image_id = $background_image['ID'];

$logo_1 = get_field('logo_1');
$logo_1_id = $logo_1['ID'];

$logo_2 = get_field('logo_2');
$logo_2_id = $logo_2['ID'];

$logo_3 = get_field('logo_3');
$logo_3_id = $logo_3['ID'];

$logo_4 = get_field('logo_4');
$logo_4_id = $logo_4['ID'];

$logo_5 = get_field('logo_5');
$logo_5_id = $logo_5['ID'];

$logo_6 = get_field('logo_6');
$logo_6_id = $logo_6['ID'];

$logo_7 = get_field('logo_7');
$logo_7_id = $logo_7['ID'];

$logo_8 = get_field('logo_8');
$logo_8_id = $logo_8['ID'];

$logo_9 = get_field('logo_9');
$logo_9_id = $logo_9['ID'];

$logo_10 = get_field('logo_10');
$logo_10_id = $logo_10['ID'];

$logo_11 = get_field('logo_11');
$logo_11_id = $logo_11['ID'];

$logo_12 = get_field('logo_12');
$logo_12_id = $logo_12['ID'];

$logo_13 = get_field('logo_13');
$logo_13_id = $logo_13['ID'];

$logo_14 = get_field('logo_14');
$logo_14_id = $logo_14['ID'];

$logo_15 = get_field('logo_15');
$logo_15_id = $logo_15['ID'];

$image_size = 'large';
?>


<!-- BACKGROUND IMAGE -->
<?php if (!empty($background_image)) : ?>
  <div class="m-auto w-full min-h-[50vh] relative my-9 md:my-24 flex justify-center"> <!-- lg:w-[90%] xl:w-[1220px] -->
    <div class="absolute inset-0 z-0 w-full h-full bg-center bg-no-repeat bg-cover opacity-70 md:block" style="background-image: url('<?php echo wp_get_attachment_image_url($background_image_id, $image_size); ?>');"></div>
  <?php else : ?>
    <div class="m-auto w-full min-h-[50vh] relative my-9 md:my-24 flex justify-center bg-black opacity-60"> <!-- lg:w-[90%] xl:w-[1220px] -->
    <?php endif; ?>

    <!-- COMPANY LOGOS -->
    <div class="flex flex-row flex-wrap self-center justify-center w-full p-6 m-auto md:p-2 lg:w-[90%] xl:w-[1220px]">
      <div class="grid h-full grid-cols-2 gap-4 px-10 lg:px-0 sm:grid-cols-3 md:grid-cols-5"> <!-- mx-6 -->
        <?php if (!empty($logo_1)) : ?>
          <div class="self-center">
            <img class="object-contain " src="<?php echo wp_get_attachment_image_url($logo_1_id, $image_size); ?>" />
          </div>
        <?php endif; ?>

        <?php if (!empty($logo_2)) : ?>
          <div class="self-center">
            <img class="bject-contain " src="<?php echo wp_get_attachment_image_url($logo_2_id, $image_size); ?>" />
          </div>
        <?php endif; ?>

        <?php if (!empty($logo_3)) : ?>
          <div class="self-center">
            <img class="object-contain " src="<?php echo wp_get_attachment_image_url($logo_3_id, $image_size); ?>" />
          </div>
        <?php endif; ?>

        <?php if (!empty($logo_4)) : ?>
          <div class="self-center">
            <img class="object-contain " src="<?php echo wp_get_attachment_image_url($logo_4_id, $image_size); ?>" />
          </div>
        <?php endif; ?>

        <?php if (!empty($logo_5)) : ?>
          <div class="self-center">
            <img class="object-contain " src="<?php echo wp_get_attachment_image_url($logo_5_id, $image_size); ?>" />
          </div>
        <?php endif; ?>

        <?php if (!empty($logo_6)) : ?>
          <div class="self-center">
            <img class="object-contain " src="<?php echo wp_get_attachment_image_url($logo_6_id, $image_size); ?>" />
          </div>
        <?php endif; ?>

        <?php if (!empty($logo_7)) : ?>
          <div class="self-center">
            <img class="object-contain " src="<?php echo wp_get_attachment_image_url($logo_7_id, $image_size); ?>" />
          </div>
        <?php endif; ?>

        <?php if (!empty($logo_8)) : ?>
          <div class="self-center">
            <img class="object-contain " src="<?php echo wp_get_attachment_image_url($logo_8_id, $image_size); ?>" />
          </div>
        <?php endif; ?>

        <?php if (!empty($logo_9)) : ?>
          <div class="self-center">
            <img class="object-contain " src="<?php echo wp_get_attachment_image_url($logo_9_id, $image_size); ?>" />
          </div>
        <?php endif; ?>

        <?php if (!empty($logo_10)) : ?>
          <div class="self-center">
            <img class="object-contain " src="<?php echo wp_get_attachment_image_url($logo_10_id, $image_size); ?>" />
          </div>
        <?php endif; ?>

        <?php if (!empty($logo_11)) : ?>
          <div class="self-center">
            <img class="object-contain " src="<?php echo wp_get_attachment_image_url($logo_11_id, $image_size); ?>" />
          </div>
        <?php endif; ?>

        <?php if (!empty($logo_12)) : ?>
          <div class="self-center">
            <img class="object-contain " src="<?php echo wp_get_attachment_image_url($logo_12_id, $image_size); ?>" />
          </div>
        <?php endif; ?>

        <?php if (!empty($logo_13)) : ?>
          <div class="self-center">
            <img class="object-contain " src="<?php echo wp_get_attachment_image_url($logo_13_id, $image_size); ?>" />
          </div>
        <?php endif; ?>

        <?php if (!empty($logo_14)) : ?>
          <div class="self-center">
            <img class="object-contain " src="<?php echo wp_get_attachment_image_url($logo_14_id, $image_size); ?>" />
          </div>
        <?php endif; ?>

        <?php if (!empty($logo_15)) : ?>
          <div class="self-center">
            <img class="object-contain " src="<?php echo wp_get_attachment_image_url($logo_15_id, $image_size); ?>" />
          </div>
        <?php endif; ?>
      </div>
    </div>
    </div>