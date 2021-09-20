<?php
ob_start();?>
<aside class="lnbSidebar centered-text">
  <div class="lnbSidebar__stick">
    <img class="hyper-lazyload lnbSidebar__logo" src="<?php echo content_url('/uploads/clear-the-air-service-van-cut-out.png'); ?>">
    <span class="lnbHeading--big green-text">Since 1990</span>
    <span class="lnbHeading--big italic-text">24/7 Call Anytime</span>
    <span class="lnbHeading--big bold-text"><?php echo do_shortcode('[phone_link]'); ?></span>
    <div class="lnbSidebar__btns">
      <?php echo do_shortcode('[v8_schedule_button form-id="1" heading="Schedule Your Appointment Today" text="Book Online"]'); ?>
      <a is="hypercore-button" class="hypercore-button lnbBtn--green" target="_blank" href="https://cleartheair.myservicetitan.com/">Pay Online</a>
    </div>
    <?php echo do_shortcode('[tagline-images]'); ?>
  </div>
</aside>
<?php echo ob_get_clean();