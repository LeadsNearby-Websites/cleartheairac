<?php

/*! -------------------------
DO NOT TOUCH THIS CODE
If you need to edit code within this file please contact a certified LeadsNearby Developer
------------------------- */

// Custom Footer
function output_custom_footer() {
  ob_start();?>
<div class="lnbTwoColFooter">
  <div class="lnbTwoColFooter__grid">
    <div class="lnbTwoColFooter__half lnbTwoColFooter__half--left">
      <div class="unflex">
        <a class="lnbTwoColFooter__logo" href="<?php echo site_url(); ?>">
          <img class="hyper-lazyload" data-lazy-src="<?php echo content_url('/uploads/clear-the-air-logo.svg'); ?>">
        </a>
        <span class="display-block">24/7 Call Anytime</span>
        <?php echo do_shortcode('[phone_link]'); ?>
        <span class="display-block">133 N Friendswood Dr, #344, Friendswood, TX 77546</span>
        <span class="display-block">Texas HVAC License: TACLA 32678E</span>
      </div>
    </div>
    <div class="lnbTwoColFooter__half lnbTwoColFooter__half--right">
      <div class="unflex">
        <?php echo do_shortcode('[tagline-images]'); ?>
        <span class="lnbHeading--med bold-text">Helpful Links</span>
        <ul>
          <li>
            <a href="<?php echo site_url('/about-us/'); ?>">About Us</a>
          </li>
          <li>
            <a href="<?php echo site_url('/service-area/'); ?>">Service Area</a>
          </li>
          <li>
            <a href="<?php echo site_url('/contact-us/employment/'); ?>">Careers</a>
          </li>
          <li>
            <a href="<?php echo site_url('/contact-us/'); ?>">Contact Us</a>
          </li>
        </ul>
        <div class="lnbSocialLinks">
          <?php
$social_links = hypercore_get_social_links();
  foreach ($social_links as $social_link_network => $social_link_value) {
    $social_link_icon = $social_link_network;
    if ($social_link_network === 'facebook') {
      $social_link_icon = 'facebook-f';
    }
    if ($social_link_network === 'linkedin') {
      $social_link_icon = 'linkedin-in';
    }
    echo '<a class="lnbSocialLinks__link lnbSocialLinks__link--' . $social_link_network . '" target="blank" href="' . $social_link_value . '"><fa-icon family="brands" icon="' . $social_link_icon . '"></fa-icon></a>';
  }
  ?>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="lnbCopyright">
    <div class="lnbCopyright__name">
        <?php echo do_shortcode('[site_copyright]'); ?>
    </div>
    <div class="lnbCopyright__links">
        <a href="<?php echo site_url('/terms-and-conditions/'); ?>">Terms &amp; Conditions</a> |
        <a href="<?php echo site_url('/privacy-policy/'); ?>">Privacy Policy</a> |
        <a href="<?php echo site_url('/sitemap/'); ?>">Sitemap</a> |
        Design &amp; Marketing by <a target="blank" href="https://www.leadsnearby.com/">LeadsNearby</a>
    </div>
</section>
<?php echo ob_get_clean();
}
add_action('hypercore_footer', 'output_custom_footer');