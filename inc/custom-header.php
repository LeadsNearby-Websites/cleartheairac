<?php

/*! -------------------------
DO NOT TOUCH THIS CODE
If you need to edit code within this file please contact a certified LeadsNearby Developer
------------------------- */

function output_custom_header() {
  ob_start();?>
<div class="lnbMobileBar">
  <div class="lnbMobileBar__btn lnbMobileBar__btn--green">
    <a>
      <fa-icon icon="credit-card" family="solid"></fa-icon>
      <span class="lnbMobileBar__btn-text">Payments</span>
    </a>
  </div>
  <div class="lnbMobileBar__btn lnbMobileBar__btn--blue">
    <a class="phone-num" href="tel:<?php echo do_shortcode('[phone_number]'); ?>">
      <fa-icon icon="phone" family="solid"></fa-icon>
      <span class="lnbMobileBar__btn-text">Call 24/7</span>
    </a>
  </div>
  <div class="lnbMobileBar__btn lnbMobileBar__btn--orange">
     <?php echo do_shortcode('[v8_schedule_button form-id="1" heading="Schedule Your Appointment Today" text=""]'); ?>
     <fa-icon icon="calendar" family="solid"></fa-icon>
     <span class="lnbMobileBar__btn-text">Book Online</span>
  </div>
  <div class="lnbMobileBar__btn lnbMobileBar__btn--nav">
    <?php echo do_shortcode('[hyper-toggle]'); ?>
  </div>
</div>
<div class="lnbCustHeader">
  <div class="lnbCustHeader__grid">
    <div class="lnbCustHeader__logo">
      <a href="<?php echo site_url(); ?>">
        <img class="hyper-lazyload" data-lazy-src="<?php echo content_url('/uploads/clear-the-air-logo.svg'); ?>">
      </a>
    </div>
    <div class="lnbCustHeader__nav">
      <nav class="nav nav--main" aria-label="Main Navigation" role="navigation">
        <?php wp_nav_menu(array(
    'theme_location' => 'primary',
    'menu_class' => 'nav__menu',
    'menu_id' => false,
    'container' => false,
    'fallback_cb' => false));?>
      </nav>
    </div>
    <div class="lnbCustHeader__content">
      <span class="lnbCustHeader__content-phone">
        <span class="white-text italic-text">24/7 Call Anytime</span>
        <span class="green-text bold-text"><?php echo do_shortcode('[phone_link]'); ?></span>
      </span>
      <div class="lnbCustHeader__content-btns">
        <?php echo do_shortcode('[v8_schedule_button form-id="1" heading="Schedule Your Appointment Today" text="Book Online"]'); ?>
        <a is="hypercore-button" class="hypercore-button lnbBtn--green" target="_blank" href="https://cleartheair.myservicetitan.com/">Pay Online</a>
      </div>
    </div>
  </div>
</div>
<script>
  document.body.classList.add('hyper-lazyload-bg');
  document.body.setAttribute("data-bg-image", "<?php echo content_url('/uploads/houston-landscape-with-clouds.svg'); ?>");
</script>
  <?php echo ob_get_clean();
}
add_action('hypercore_custom_header', 'output_custom_header');

function output_after_header() {
  ob_start();
  ?>
<div class="lnbMobileLogo">
  <a href="<?php echo site_url(); ?>">
    <img class="hyper-lazyload" data-lazy-src="<?php echo content_url('/uploads/clear-the-air-logo.svg'); ?>">
  </a>
</div>
  <?php echo ob_get_clean();
}
add_action('hypercore_after_header', 'output_after_header');