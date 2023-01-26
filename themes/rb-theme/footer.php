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
  <footer id="footer" class="text-white bg-black mt-9 md:mt-24 h-[25vh] flex justify-center items-center flex-col">
    <div class="w-[90%] xl:w-[1220px] px-6 lg:px-0">
      <div class="flex flex-col-reverse items-center justify-between sm:flex-row">
        <div class="w-[83px] content-center align-self mt-2 sm:mt-0">
          <a href="<?php echo $site_url; ?>"><img src=<?php echo $theme_uri . "/images/rb-logo-clear.svg" ?>> </a>
        </div>

        <div class="flex flex-col md:w-[80%] w-full sm:items-end items-center">
          <div class="mb-4 text-center typo-subheading">
            <?php if (!empty($email)) : ?>
              <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
            <?php endif; ?>
          </div>

          <div class="mb-6 text-center typo-subheading">
            <?php if (!empty($phone)) : ?>
              <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
            <?php endif; ?>
          </div>

          <div class="mb-8 text-center sm:mb-0 typo-subheading-medium">
            <?php if (!empty($address)) : ?>
              <?php the_field('address', 'option'); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </footer>

<?php endif; ?>

<?php wp_footer(); ?>

</body>

</html>