<?php

/* Custom Footer Code */

function output_pre_footer() {
  ob_start();
  ?>
<section class="dlReviews">
    <img class="dlReviews__headingImg hyper-lazyload" data-lazy-src="<?php echo do_shortcode('[site_url]') ?>/wp-content/uploads/texab-show-their-love-heart.svg">
    <?php echo do_shortcode('[brb_collection id="195"]') ?>
    <div class="dlReviews__button">
        <img class="hyper-lazyload" data-lazy-src="<?php echo do_shortcode('[site_url]') ?>/wp-content/uploads/service-is-everything.svg">
        <a is="hypercore-button" class="hypercore-button dlBtn" href="<?php echo do_shortcode('[site_url]'); ?>/contact-us/">Contact Us</a>
    </div>
</section>
  <?php echo ob_get_clean();
}
add_action('hypercore_before_footer', 'output_pre_footer');

/* Custom Footer Code */
function output_footer() {
  ob_start();
  ?>
<section class="dlFooter dlLogoBorder hyper-lazyload-bg" data-bg-image="<?php echo content_url('/uploads/gray-white-stripe-background.svg'); ?>">
    <span class="dlLogoBorder__logo"></span>
    <span class="dlFooter__heading arvo">Double L Plumbing — <span class="orange-text">We Are Everyone’s Plumber</span></span>
    <div class="phoneLinks">
        <div class="phoneLinks__link">
            <span class="arvo phoneLinks__city dlFooter__subHeading">Azle</span>
            <span class="arvo phoneLinks__number"><?php echo do_shortcode('[phone_link]'); ?></span>
        </div>
        <div class="phoneLinks__link">
            <span class="arvo phoneLinks__city dlFooter__subHeading">Weatherford</span>
            <span class="arvo phoneLinks__number">
                <a class="phone-num-weatherford" href="tel:8175506271">817-550-6271</a>
            </span>
        </div>
    </div>
    <div class="dlFooter__grid">
        <div class="dlFooter__column">
            <span class="dlFooter__subHeading arvo">Your Go-To Plumber</span>
            <span class="dlFooter__info">
                <span class="display-block">Double L Plumbing</span>
                <span class="display-block">8am - 5pm Monday - Saturday</span>
                <span class="display-block">License #M-37950</span>
            </span>
            <span class="dlFooter__info">
                <span class="display-block">Azle <?php echo do_shortcode('[phone_link]'); ?></span>
                <span class="display-block">708 Northwest Parkway</span>
                <span class="display-block">Azle, Texas 76020</span>
            </span>
            <span class="dlFooter__info">
                <span class="display-block">Weatherford <a class="phone-num-weatherford" href="tel:8175506271">817-550-6271</a></span>
                <span class="display-block">108 Front Street</span>
                <span class="display-block">Weatherford, TX 76086</span>
            </span>
        </div>
        <div class="dlFooter__column">
            <span class="dlFooter__subHeading arvo">Service Area</span>
            <ul>
                <li class="dlFooter__info"><a href="<?php echo do_shortcode('[site_url]'); ?>/service-areas/plumber-azle-tx/">Azle</a></li>
                <li class="dlFooter__info"><a href="<?php echo do_shortcode('[site_url]'); ?>/service-areas/plumber-weatherford-tx/">Weatherford</a></li>
                <li class="dlFooter__info"><a href="<?php echo do_shortcode('[site_url]'); ?>/service-areas/plumber-fort-worth-tx/">Fort Worth</a></li>
                <li class="dlFooter__info"><a href="<?php echo do_shortcode('[site_url]'); ?>/service-areas/plumber-decatur-tx/">Decatur</a></li>
                <li class="dlFooter__info"><a href="<?php echo do_shortcode('[site_url]'); ?>/service-areas/plumber-springtown-tx/">Springtown</a></li>
                <li class="dlFooter__info"><a href="<?php echo do_shortcode('[site_url]'); ?>/service-areas/">++ See All</a></li>
            </ul>
        </div>
        <div class="dlFooter__column">
            <span class="dlFooter__subHeading arvo">Helpful Links</span>
            <ul>
                <li class="dlFooter__info"><a href="<?php echo do_shortcode('[site_url]'); ?>/about/">About Us</a></li>
                <li class="dlFooter__info"><a href="<?php echo do_shortcode('[site_url]'); ?>/meet-the-team/">Meet The Team</a></li>
                <li class="dlFooter__info"><a href="<?php echo do_shortcode('[site_url]'); ?>/service-areas/">Reviews</a></li>
                <li class="dlFooter__info"><a href="<?php echo do_shortcode('[site_url]'); ?>/plumbing-services/">Plumbing Services</a></li>
                <li class="dlFooter__info"><a href="<?php echo do_shortcode('[site_url]'); ?>/commercial/">Commercial Plumbing</a></li>
                <li class="dlFooter__info"><a href="<?php echo do_shortcode('[site_url]'); ?>/contact-us/">Contact Us</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="dlSocial">
    <div class="dlSocial__grid">
        <a class="dlSocial__link" rel="noreferrer" href="https://www.facebook.com/doublelplumbingservice/" target="_blank"><fa-icon icon="facebook-f" family="brands"></fa-icon></a>
        <a class="dlSocial__link" rel="noreferrer" href="https://www.google.com/search?rlz=1C1CHZL_enUS780US780&ei=BV5rWuCvM8PqjwOFzaz4Cw&q=double+l+plumbing+azle+tx&oq=double+l+plumbing+azle&gs_l=psy-ab.3.0.0j0i22i30k1l2.635346.637285.0.638385.9.4.2.3.4.0.130.466.0j4.4.0....0...1c.1.64.psy-ab..0.9.500...0i13k1j0i13i30k1.0.-NCc7OiyUXI" target="_blank"><fa-icon icon="google" family="brands"></fa-icon></a>
        <a class="dlSocial__link" rel="noreferrer" href="https://www.instagram.com/doublelplumbingservice/?hl=en" target="_blank"><fa-icon icon="instagram" family="brands"></fa-icon></a>
        <a class="dlSocial__link" rel="noreferrer" href="https://www.yelp.com/biz/double-l-plumbing-azle-2" target="_blank"><fa-icon icon="yelp" family="brands"></fa-icon></a>
    </div>
</section>
<section class="dlCopyright">
    <div class="dlCopyright__name">
        <?php echo do_shortcode('[site_copyright]'); ?>
    </div>
    <div class="dlCopyright__links">
        <a href="<?php echo do_shortcode('[site_url]'); ?>/terms-and-conditions/">Terms &amp; Conditions</a> |
        <a href="<?php echo do_shortcode('[site_url]'); ?>/privacy-policy/">Privacy Policy</a> |
        <a href="<?php echo do_shortcode('[site_url]'); ?>/sitemap/">Sitemap</a> |
        Design &amp; Marketing by <a target="blank" href="https://www.leadsnearby.com/">LeadsNearby</a>
    </div>
</section>
  <?php echo ob_get_clean();
}
add_action('hypercore_footer', 'output_footer');