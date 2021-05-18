<?php

/* Sidebar code with comments */

function output_sidebar() {
  ob_start();
  ?>
<section class="dlHomeAbout dlHomeAbout--sidebar dlLogoBorder hyper-lazyload-bg" data-bg-image="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/background-home-double-l-plumbing-office-exterior.jpg">
  <span class="dlLogoBorder__logo">
  </span>
  <span class="dlHomeAbout__subHeading arvo">Big & Small Plumbing Repairs</span>
  <span class="dlHomeAbout__subHeading arvo orange-text">We Are Everyone's Plumber</span>
  <div class="dlHomeAbout__grid">
      <div class="dlHomeAbout__item">
          <fa-icon icon="award" family="solid"></fa-icon>
          <div>
              <span class="display-block arvo">We Treat You Right</span>
              <span>Here at Double L Plumbing, our service is everything. Our technicians always go the extra mile so that you are happy with the service you receive.</span>
          </div>
      </div>
      <div class="dlHomeAbout__item">
          <fa-icon icon="heart-circle" family="solid"></fa-icon>
          <div>
              <span class="display-block arvo">We’re Family</span>
              <span>As a local family owned business, we pride ourselves on our quality, integrity and reputation with every job we complete.</span>
          </div>
      </div>
      <div class="dlHomeAbout__item">
          <fa-icon icon="badge-dollar" family="solid"></fa-icon>
          <div>
              <span class="display-block arvo">Ask For A Free Estimate</span>
              <span>In many cases we are able to provide you with a complimentary over-the-phone estimate. Just give us a call and let us know what you need!</span>
          </div>
      </div>
      <div class="dlHomeAbout__item">
          <fa-icon icon="wrench" family="solid"></fa-icon>
          <div>
              <span class="display-block arvo">Everyone’s Plumber</span>
              <span>From residential homes to large commercial operations, our plumbers can handle it all! From small leaks to large repipings, we’ve got you covered.</span>
          </div>
      </div>
      <div class="dlHomeAbout__item">
          <fa-icon icon="shield-check" family="solid"></fa-icon>
          <div>
              <span class="display-block arvo">Licensed & Certified</span>
              <span>Our owner is a Master Plumber and believes in the highest possible training for his team. Our company is fully licensed and insured as well.</span>
          </div>
      </div>
      <div class="dlHomeAbout__item">
          <fa-icon icon="clock" family="solid"></fa-icon>
          <div>
              <span class="display-block arvo">Open Saturdays</span>
              <span>We are open Monday - Saturdays, 8am - 5pm. Don’t let a busy week deter you from getting your plumbing concern taken care of — just call on Saturday! </span>
          </div>
      </div>
  </div>
</section>
<?php echo ob_get_clean();
}
add_shortcode('dl_sidebar', 'output_sidebar');