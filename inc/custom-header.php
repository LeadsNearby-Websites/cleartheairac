<?php
function output_before_header() {
  ob_start();
  ?>
<div class="mobileBar">
    <div class="mobileBar__wrapper">
        <div class="mobileBar__grid">
            <div class="mobileBar__logo">
                <a href="<?php echo do_shortcode('[site_url]'); ?>">
                    <img src="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/logo-double-l-plumbing-services.svg">
                </a>
            </div>
            <div class="mobileBar__button">
                <a is="hypercore-button" class="hypercore-button dlBtn" href="<?php echo do_shortcode('[site_url]'); ?>/contact-us/">CONTACT US</a>
            </div>
            <div class="mobileBar__nav">
                <?php echo do_shortcode('[hyper-toggle]'); ?>
            </div>
        </div>
        <div class="phoneLink">
            <div class="phoneLinks">
                <div class="phoneLinks__link">
                    <span class="arvo phoneLinks__city">Azle, Texas</span>
                    <span class="arvo phoneLinks__number"><?php echo do_shortcode('[phone_link]'); ?></span>
                </div>
                <div class="phoneLinks__link">
                    <span class="arvo phoneLinks__city">Weatherford, Texas</span>
                    <span class="arvo phoneLinks__number">
                        <a class="phone-num-weatherford" href="tel:8175506271">817-550-6271</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo ob_get_clean();
}
add_action('hypercore_before_header', 'output_before_header');

/* Custom Header Code */

function output_custom_header() {
  ob_start();
  ?>
<div class="dlHeader">
    <div class="dlHeader__background"></div>
    <div class="dlHeader__grid">
        <div class="dlHeader__logo">
            <a href="<?php echo do_shortcode('[site_url]'); ?>">
                <img src="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/logo-double-l-plumbing-services.svg">
                <img class="license-num" src="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/license-double-l-plumbing-services.svg">
            </a>
        </div>
        <div class="dlHeader__content">
            <div class="phoneLinks">
                <div class="phoneLinks__link">
                    <span class="arvo phoneLinks__city">Azle</span>
                    <span class="arvo phoneLinks__number"><?php echo do_shortcode('[phone_link]'); ?></span>
                </div>
                <div class="phoneLinks__link">
                    <span class="arvo phoneLinks__city">Weatherford</span>
                    <span class="arvo phoneLinks__number">
                        <a class="phone-num-weatherford" href="tel:8175506271">817-550-6271</a>
                    </span>
                </div>
            </div>
            <div class="dlHeader__estimate">
                <img src="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/ask-for-a-free-estimate.svg">
            </div>
            <nav class="dlHeader__menu nav nav--main" aria-label="Main Navigation" role="navigation">
<?php wp_nav_menu(array(
    'theme_location' => 'primary',
    'menu_class' => 'nav__menu',
    'menu_id' => false,
    'container' => false,
    'fallback_cb' => false));?>
</nav>
    </div>
</div>
<script>
    window.onload = function WindowLoad(event) {
        let last_known_scroll_position = 0;
        let ticking = false;
        let body = document.querySelector('body');

        function stickHeader(scroll_pos) {
            if (scroll_pos > 80 && body != null) {

                body.classList.add('hasStickyHeader');
            } else if (scroll_pos == 0 && body != null) {
                body.classList.remove('hasStickyHeader');
            }
        }

        window.addEventListener('scroll', function (e) {
            last_known_scroll_position = window.scrollY;

            if (!ticking) {
                window.requestAnimationFrame(function () {
                    stickHeader(last_known_scroll_position);
                    ticking = false;
                });

                ticking = true;
            }
        });
    }
</script>
<?php echo ob_get_clean();
}
add_action('hypercore_custom_header', 'output_custom_header');

function output_after_header() {
  ob_start();
  ?>
<div class="stickyLogo">
    <a src="<?php echo do_shortcode('[site_url]'); ?>">
        <img src="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/right-edge-double-l-plumbing.svg">
    </a>
</div>
<div class="googleReviews">
    <!-- <?php echo do_shortcode('[static-nn-badge name=false stars=#e7701b url="https://www.doublelplumbingservices.com/service-areas/"]'); ?> -->
    <?php echo do_shortcode('[brb_collection id="197"]'); ?>
</div>
    <?php echo ob_get_clean();
}
add_action('hypercore_after_header', 'output_after_header');