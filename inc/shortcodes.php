<?php

/*! -------------------------
DO NOT TOUCH THIS CODE
If you need to edit code within this file please contact a certified LeadsNearby Developer
------------------------- */

/* Stack shortcode callbacks with comments here */

// Adds shortcode to print current site_url for easier link management
function add_site_url() {
  return site_url();
}
add_shortcode('site_url', 'add_site_url');

// Styled Phone
function output_styled_phone() {
  ob_start();?>
  <div class="lnbStyledPhone">
    <a class="phone-num" href="tel:<?php echo do_shortcode('[phone_number]') ?>">
      <fa-icon icon="phone" family="solid"></fa-icon>
      <span><?php echo do_shortcode('[phone_number]') ?></span>
    </a>
  </div>
<?php echo ob_get_clean();
}
add_shortcode('styled-phone', 'output_styled_phone');

// Cool Solutions, Warm People
function output_styled_tagline() {
  ob_start(); ?>
<div class="lnbTaglineImages">
  <img class="hyper-lazyload lnbTaglineImages__cs" data-lazy-src="<?php echo content_url('/uploads/slogan-1-cool-solutions.svg') ?>">
  <img class="hyper-lazyload lnbTaglineImages__wp" data-lazy-src="<?php echo content_url('/uploads/slogan-2-warm-people.svg') ?>">
</div>
  <?php echo ob_get_clean();
}
add_shortcode('tagline-images', 'output_styled_tagline');