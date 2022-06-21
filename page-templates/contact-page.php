
<?php

/**
 * Template Name: Custom Contact Page
 */

get_header();
?>
<main class="lnbContactPage">
  <div class="lnbContactPage__grid">
    <div class="lnbContactPage__content">
      <h1>Contact Us</h1>
      <?php echo do_shortcode('[static-nn-widget type="inline"]'); ?>
      <h2>Schedule your Appointment Online</h2>
      <p>Fill out this form and a Clear the Air representative will contact you to schedule an appointment. You can also call one of our representatives at <?php echo do_shortcode('[phone_link]'); ?>.</p>
      <p>Schedule your service call today via the internet, <strong>and get a 10% discount on repairs when you book online</strong>. Please complete the form below to receive a quick response. <em>Note:</em> We service the southern half of Greater Houston (south of 610 north). </p>
      <?php echo do_shortcode('[v8_schedule_button form-id="1" heading="Schedule Your Appointment Today" text="Book Online"]'); ?>
      <section class="lnbFormBox">
        <div class="lnbFormBox__content">
          <span class="lnbFormBox__heading">Contact Us</span>
          <div class="lnbFormBox__form">
            <?php echo do_shortcode('[gravityform id="10" description="false" title="false" ajax="true"]'); ?>
          </div>
        </div>
      </section>
      <strong>NOTE: This form is for Non-Emergency Service, Quotes and Estimates. If you need emergency repairs, we are available 24/7 to come to your assistance by calling <?php echo do_shortcode('[phone_link]'); ?>.</strong> <em>*Guarantee valid during call center hours Monday thru Sunday 8AM – 5PM. If we fail to respond in 30 minutes we will waive the service call fee. After hours inquiries have a next morning response. Above discount can not be combined with other offers/coupons/discounts.</em>
    </div>
    <div class="lnbContactPage__sidebar">
      <div class="lnbContactPage__info">
        <div class="lnbContactPage__info-item">
          <h4 class="lnbContactPage__info-heading">Phone</h4>
          <p class="lnbContactPage__info-info"><?php echo do_shortcode('[phone_link]'); ?></p>
        </div>
        <div class="lnbContactPage__info-item">
          <h4 class="lnbContactPage__info-heading">Website</h4>
          <p class="lnbContactPage__info-info">
            <a href="<?php echo site_url(''); ?>">
              <?php echo site_url(''); ?>
            </a>
          </p>
        </div>
        <div class="lnbContactPage__info-item--fullWidth">
          <h4 class="lnbContactPage__info-heading">Address</h4>
          <p class="lnbContactPage__info-info"><?php echo do_shortcode('[business_address]'); ?></p>
          <p class="lnbContactPage__info-info">18036 County Rd 127Pearland, TX 77581</p>
        </div>
        <div class="lnbContactPage__info-item">
          <h4 class="lnbContactPage__info-heading">Hours</h4>
          <p class="lnbContactPage__info-info">8am – 8pm. Monday through Friday. Emergency Service available Saturday & Sunday.</p>
        </div>
        <div class="lnbContactPage__info-item">
          <h4 class="lnbContactPage__info-heading">Payment</h4>
          <p class="lnbContactPage__info-info">Cash, Personal Check, Business Check, Master Card, VIsa, Discover, AMEX, Financing Options</p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer();