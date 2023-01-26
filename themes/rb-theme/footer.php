</main>

<?php do_action('amoba_content_end'); ?>

<?php do_action('amoba_content_after'); ?>

<?php
$theme_uri = get_template_directory_uri();
$site_url = network_site_url('/');
$email = get_field('email', 'option');
$phone = get_field('phone', 'option');
$address = get_field('address', 'option');
?>

<?php if (!is_page('my-account')) : ?>
  <footer id="footer" class="grid text-center text-white bg-black justify-items-center mt-9 md:mt-24">
    <div class="w-full h-[5px] grid grid-cols-4">
      <div class="w-full h-full bg-purple"></div>
      <div class="w-full h-full bg-blue"></div>
      <div class="w-full h-full bg-orange"></div>
      <div class="w-full h-full bg-lime"></div>
    </div>

    <div class="w-[67px] mt-9 md:mt-24 mb-4">
      <a href="<?php echo $site_url; ?>"><img src=<?php echo $theme_uri . "/images/rb-logo-clear.svg" ?>> </a>
    </div>

    <div class="flex typo-subheading">
      <div class="mb-9 md:mb-24">
        <div class="mb-3">
          <?php if (!empty($email)) : ?>
            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
          <?php endif; ?>
        </div>

        <div class="mb-3">
          <?php if (!empty($phone)) : ?>
            <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
          <?php endif; ?>
        </div>

        <div class="typo-subheading-small">
          <?php if (!empty($address)) : ?>
            <?php the_field('address', 'option'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </footer>

<?php endif; ?>

<?php wp_footer(); ?>

</body>

</html>