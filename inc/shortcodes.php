<?php

/* Stack shortcode callbacks with comments here */

// Adds shortcode to print current site_url for easier link management
function add_site_url() {
  return site_url();
}
add_shortcode('site_url', 'add_site_url');

function output_homepage() {
  ob_start();
  ?>
<section class="dlMainstage">
  <div class="imageSlider glide">
    <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
            <li class="glide__slide">
              <div class="imageSlider__background hyper-lazyload-bg" data-bg-image="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/mainstage-double-l-plumbing-staff-by-truck.jpg"></div>
            </li>
            <li class="glide__slide">
              <div class="imageSlider__background hyper-lazyload-bg" data-bg-image="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/mainstage-double-l-plumbing-plumbers-fence-sign.jpg"></div>
            </li>
            <li class="glide__slide">
              <div class="imageSlider__background hyper-lazyload-bg" data-bg-image="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/mainstage-double-l-plumbing-office-exterior.jpg"></div>
            </li>
            <li class="glide__slide">
              <div class="imageSlider__background hyper-lazyload-bg" data-bg-image="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/mainstage-double-l-plumbing-billy-bobs-texas.jpg"></div>
            </li>
        </ul>
        <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                  <fa-icon icon="chevron-left"></fa-icon>
              </button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                  <fa-icon icon="chevron-right"></fa-icon>
              </button>
          </div>
    </div>
    <div class="dlMainstage__tagline">
      <img class="hyper-lazyload" data-lazy-src="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/service-is-everything.svg">
    </div>
  </div>
</section>
<section class="dlHeadings">
  <h1>Excellent Plumbing Services Locations in Azle & Weatherford, Texas</h1>
</section>
<section class="dlHomeHours dlLogoBorder">
  <span class="dlLogoBorder__logo hyper-lazyload-bg">
  </span>
  <div class="dlHomeHours__grid">
    <div class="dlHomeHours__content">
      <span class="arvo white-text bold">Office Hours: 8am - 5pm Monday - Saturday</span>
    </div>
    <div></div>
    <div class="dlHomeHours__content">
      <span class="arvo white-text bold">Senior & Military Discounts</span>
    </div>
  </div>
  <div class="dlHomeHours__headings">
    <h2 class="white-text">Quality Licensed Plumbers</h2>
    <h3 class="white-text">Big &amp; Small Plumbing Repairs — <span class="orange-text">We Are Everyone’s Plumber</span></h3>
    <a is="hypercore-button" class="hypercore-button dlBtn" href="<?php echo do_shortcode('[site_url]'); ?>/contact-us/">Contact Us</a>
  </div>
</section>
<section class="dlHomeTruck">
  <span class="dlHomeTruck__heading arvo"><span class="orange-text">Fully Stocked</span> Plumbing Vehicles</span>
  <div class="dlHomeTruck__wrapper">
   <div class="dlHomeTruck__truck">
      <img class="dlHomeTruck__truck-image hyper-lazyload" data-lazy-src="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/van-double-l-plumbing-services.png">
      <div class="dlHomeTruck__truck-line"></div>
      <img class="dlHomeTruck__bubble dlHomeTruck__bubble--top hyper-lazyload" data-lazy-src="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/stocked-truck-n.png">
      <img class="dlHomeTruck__bubble dlHomeTruck__bubble--left hyper-lazyload" data-lazy-src="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/stocked-truck-w.png">
      <img class="dlHomeTruck__bubble dlHomeTruck__bubble--right hyper-lazyload" data-lazy-src="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/stocked-truck-e.png">
      <img class="dlHomeTruck__bubble dlHomeTruck__bubble--bottom hyper-lazyload" data-lazy-src="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/stocked-truck-s.png">
    </div>
  </div>
  <div class="dlHomeTruck__content">
    <span class="arvo dlHomeTruck__subHeading">Ready For All Your Plumbing Needs</span>
    <p>We are located right here in Azle where you are. That means you don’t have to deal with a corporation that doesn’t care about you. Our plumbers are from the area so they take great pride in their work every day. When you have a plumbing issue, you need a company that you can count on. You need someone from your local community who can make a difference and do the job the right way. We take pride in every job that we complete because we know these are important jobs. If you have ever been the victim of shoddy work in any industry before, you know that the dangers can come many years later after the work has been performed. With our technicians, they are trained to complete their work the right way every time. This quality work stands out for itself when you look across different platforms to see what people think of our work. </p>
    <p>We would not have the reviews we have without a commitment to caring about our individual customers as well. When you have a plumbing emergency, you should think about the local company that cares about you. Whether you have a situation where your basement is flooding with water, or a drain that won’t come unclogged, you can always feel free to give us a call and we will be there for you!</p>
    <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/contact-us/">Let's Get Started <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
  </div>
</section>
<section class="twoColSec contain">
  <div class="dlServiceCard">
    <img class="dlServiceCard__img hyper-lazyload" data-lazy-src="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/main-new-construction-plumbing.jpg">
    <span class="dlServiceCard__heading arvo">Commercial Plumbers</span>
    <div class="dlServiceCard__content">
      <p>If you own a business, it’s highly likely that you have a lot of things going on. No one wants to deal with a plumbing problem when you are balancing so many things and wearing so many hats. However, life does not always go according to plan. When your plumbing problem hits, whether it is a rumbling water heater or a water pipe that has burst, we are able to take care of your problem quickly when every minute counts. On top of that, we also offer evaluations and can help give you advice on what kind of equipment may be appropriate for your business. We offer maintenance for commercial businesses so that you know your plumbing is always up to date. We are experts when it comes to all things plumbing, so if you face a tough decision for your business, please feel free to pick up the phone and give us a call!</p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/commercial/">Commercial <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
  </div>
  <div class="dlServiceCard">
    <img class="dlServiceCard__img hyper-lazyload" data-lazy-src="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/mian-flexing-double-l-plumbing-services.jpg">
    <span class="dlServiceCard__heading arvo">Residential Plumbers</span>
    <div class="dlServiceCard__content">
      <p>When you need a plumber to take care of your residential plumbing needs here in Azle, we are the first call you should make. We take exceptional care of your project from start to finish to make sure that whatever problem you were having is completely taken care of and will be sure to last you long into the future. This customer care shows why we have so many great reviews and testimonials for our business. Whenever we take a new job, our goal is to always exceed whatever expectation you have for the job. Our plumbers are courteous, kind and friendly and can help you understand whatever problem is happening in your house. We never try to sell you on any service that is unnecessary, and we expect our technicians to have the heart of a teacher as they explain to you what the problem is and why you need a certain service.</p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/plumbing-services/">Residential <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
  </div>
</section>
<div class="lnbContentSwitcher">
  <div class="lnbContentSwitcher__nav">
    <span class="lnbContentSwitcher__button lnbContentSwitcher__button--active arvo" data-switcher-button="plumbing"><fa-icon icon="chevron-right"></fa-icon> Plumbing Repairs</span>
    <span class="lnbContentSwitcher__button arvo" data-switcher-button="heaters"><fa-icon icon="chevron-right"></fa-icon> Water Heaters</span>
    <span class="lnbContentSwitcher__button arvo" data-switcher-button="construction"><fa-icon icon="chevron-right"></fa-icon> New Construction</span>
    <span class="lnbContentSwitcher__button arvo" data-switcher-button="gas"><fa-icon icon="chevron-right"></fa-icon> Gas Lines</span>
    <span class="lnbContentSwitcher__button arvo" data-switcher-button="water"><fa-icon icon="chevron-right"></fa-icon> Water Lines</span>
    <span class="lnbContentSwitcher__button arvo" data-switcher-button="sewer"><fa-icon icon="chevron-right"></fa-icon> Sewers</span>
    <span class="lnbContentSwitcher__button arvo" data-switcher-button="drains"><fa-icon icon="chevron-right"></fa-icon> Drains</span>
  </div>
  <div class="lnbContentSwitcher__contentWrapper">
    <div class="lnbContentSwitcher__content lnbContentSwitcher__content--active" data-switcher-content="plumbing">
      <p>With things like plumbing leaks and repairs, we know that timing is important. These are issues that you should have fixed right away to prevent future damages. We work with efficiency to ensure that whatever may be happening in your home gets fixed in quick fashion. Our full repair services include but are not limited to:</p>
      <ul>
        <li>Leaky Pipes</li>
        <li>Clogged Drains</li>
        <li>Sewer Lines</li>
        <li>Broken Fixtures</li>
      </ul>
      <p>Don’t delay - you can make the call today and one of our technicians will be at your property soon to take care of your plumbing emergency with pride.</p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/plumbing-repairs/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
    <div class="lnbContentSwitcher__content" data-switcher-content="heaters">
      <p>When it comes to your water heater, many times they can be easily repaired. Sometimes, however, the best way to move forward is installing a new water heater with great care to make a tight fit work for your space. Whatever comes up with your project – you can be sure that we will tackle your issue head on to give you the quality that you deserve.</p>
      <p>We offer repair and installation services on:</p>
      <ul>
        <li>Standard Tank Water Heaters</li>
        <li>Tankless Water Heaters</li>
        <li>Commercial Water Heaters</li>
      </ul>
      <p>Don’t let a broken water heater disrupt your routine — connect with Double L for fast, affordable water heater services now!</p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/water-heater-repair-replacements/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
    <div class="lnbContentSwitcher__content" data-switcher-content="construction">
      <p>If you are building a new home or business, let Double L handle your plumbing from start to finish! We stand by our quality work that will help you prevent any potential plumbing issues into the future, and you can have confidence as a business owner that the work you paid for is work that is worth every cent.</p>
      <p>Our renovation and new construction services include:</p>
      <ul>
        <li>Water Heaters</li>
        <li>Pipes</li>
        <li>Gas, Sewer & Water Main Line</li>
        <li>Appliances</li>
        <li>And More!</li>
      </ul>
      <p>Consult with our team for expert plumbing planning now! </p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/remodels-new-construction/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
    <div class="lnbContentSwitcher__content" data-switcher-content="gas">
      <p>We are proud to provide full plumbing solutions in Azle, including those having to deal with your gas lines. We are a locally owned and operated business here in the community and are completely licensed and insured so that you have confidence in us working on your gas line project.</p>
      <p>We provide:</p>
      <ul>
        <li>New Gas Line Installation</li>
        <li>Gas Line Leak Detection</li>
        <li>Gas Line Repairs</li>
      </ul>
      <p>Don’t let a gas line problem sit — call Double L right away for prompt affordable services now! </p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/gas-line-services/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
    <div class="lnbContentSwitcher__content" data-switcher-content="water">
      <p>Clean water is essential to your home or business. Double L offers water main line services to ensure your water is able to come into your building easily and effectively. On top of that, our technicians are trained to give some of the best customer service that you will see in any industry.</p>
      <p>Our water line services include:</p>
      <ul>
        <li>Repairs</li>
        <li>Full Replacements</li>
      </ul>
      <p>Clean water is important to your health. With the help of Double L Plumbing, your water line will function properly to bring you the water you need for years to come. </p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/water-line-services/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
    <div class="lnbContentSwitcher__content" data-switcher-content="sewer">
      <p>Sewer systems and lines can suffer a number of issues, including clogs and cracks from tree roots. Our services will help determine what is going on with your line and best next steps. Sometimes that will mean making a recommendation that will put you in a better situation to avoid costly repairs down the road.</p>
      <p>We provide: </p>
      <ul>
        <li>Sewer Line Cleaning</li>
        <li>Sewer Line Repairs</li>
        <li>Full Sewer Line Replacements</li>
      </ul>
      <p>We offer appointment times that will work for you, regardless of the job size or what kind of work you need done. Call us today for your sewer needs!</p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/sewer-services/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
    <div class="lnbContentSwitcher__content" data-switcher-content="drains">
      <p>Most plumbing jobs need to be taken care of right away, including those concerning your drains. A drain that is clogged for a long time could suffer cracks and breaks in the pipe, leading to larger damage and higher costs.  </p>
      <p>If you are thinking about hesitating – don’t! We can help you with an evaluation of your drains and plumbing system so that you know what may be going on behind the scenes with your pipes. We also use video camera technology if necessary to really determine what next steps need to be taken. </p>
      <p>Our customer service sets us apart from the other businesses in the area because we truly care about you and your project – your situation isn’t just another job for us, it’s a real problem that you deserve quality help with. Call us for help with your drains today! </p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/drain-cleaning/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
  </div>
</div>
<script>
class switcher {
    constructor() {
        // Get the switcher
        this.switcher = document.querySelector('.lnbContentSwitcher')
        // Get buttons
        this.buttons = document.querySelectorAll('.lnbContentSwitcher__button')
        this.setButtonEvents()
    }

    setButtonEvents() {
        // Hover event
        this.buttons.forEach(button => {
            button.addEventListener('mouseover', () => {
                this.toggleActive(button)
            })
        })
    }

    // Get currently active button
    getActive() {
        const activeButton = document.querySelector('.lnbContentSwitcher__button--active')
        return activeButton || false
    }


    toggleActive(button) {
        const active = this.getActive();
        console.log(active);
        if (active && active.dataset.switcherButton == button.dataset.switcherButton) {
            return
        }
        active.classList.remove('lnbContentSwitcher__button--active')
        const activeContent = document.querySelector(`.lnbContentSwitcher__content[data-switcher-content="${active.dataset.switcherButton}"]`)
        activeContent.classList.remove('lnbContentSwitcher__content--active')

        button.classList.add('lnbContentSwitcher__button--active')
        const content = document.querySelector(`.lnbContentSwitcher__content[data-switcher-content="${button.dataset.switcherButton}"]`)
        content.classList.add('lnbContentSwitcher__content--active')
    }


    // If is the same as button being hovered on, do nothing
    // If not, remove active class from current active button and content
    // Add active class to hovered on button and associated content
}

document.addEventListener("DOMContentLoaded", function () {
    new switcher()
});
</script>
<div class="lnbCollapsible">
    <button type="button" class="lnbCollapsible__button arvo">
        <span class="lnbCollapsible__buttonText">Plumbing Repairs</span><fa-icon icon="plus" family="regular"></fa-icon>
    </button>
    <div class="lnbCollapsible__content">
        <p>With things like plumbing leaks and repairs, we know that timing is important. These are issues that you should have fixed right away to prevent future damages. We work with efficiency to ensure that whatever may be happening in your home gets fixed in quick fashion. Our full repair services include but are not limited to:</p>
      <ul>
        <li>Leaky Pipes</li>
        <li>Clogged Drains</li>
        <li>Sewer Lines</li>
        <li>Broken Fixtures</li>
      </ul>
      <p>Don’t delay - you can make the call today and one of our technicians will be at your property soon to take care of your plumbing emergency with pride.</p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/plumbing-repairs/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
</div>
<div class="lnbCollapsible">
    <button type="button" class="lnbCollapsible__button arvo">
        <span class="lnbCollapsible__buttonText">Water Heaters</span><fa-icon icon="plus" family="regular"></fa-icon>
    </button>
    <div class="lnbCollapsible__content">
      <p>When it comes to your water heater, many times they can be easily repaired. Sometimes, however, the best way to move forward is installing a new water heater with great care to make a tight fit work for your space. Whatever comes up with your project – you can be sure that we will tackle your issue head on to give you the quality that you deserve.</p>
      <p>We offer repair and installation services on:</p>
      <ul>
        <li>Standard Tank Water Heaters</li>
        <li>Tankless Water Heaters</li>
        <li>Commercial Water Heaters</li>
      </ul>
      <p>Don’t let a broken water heater disrupt your routine — connect with Double L for fast, affordable water heater services now!</p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/water-heater-repair-replacements/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
  </div>
</div>
<div class="lnbCollapsible">
    <button type="button" class="lnbCollapsible__button arvo">
        <span class="lnbCollapsible__buttonText">New Construction</span><fa-icon icon="plus" family="regular"></fa-icon>
    </button>
    <div class="lnbCollapsible__content">
       <p>If you are building a new home or business, let Double L handle your plumbing from start to finish! We stand by our quality work that will help you prevent any potential plumbing issues into the future, and you can have confidence as a business owner that the work you paid for is work that is worth every cent.</p>
      <p>Our renovation and new construction services include:</p>
      <ul>
        <li>Water Heaters</li>
        <li>Pipes</li>
        <li>Gas, Sewer & Water Main Line</li>
        <li>Appliances</li>
        <li>And More!</li>
      </ul>
      <p>Consult with our team for expert plumbing planning now! </p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/remodels-new-construction/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
</div>
<div class="lnbCollapsible">
    <button type="button" class="lnbCollapsible__button arvo">
        <span class="lnbCollapsible__buttonText">Gas Lines</span><fa-icon icon="plus" family="regular"></fa-icon>
    </button>
    <div class="lnbCollapsible__content">
      <p>We are proud to provide full plumbing solutions in Azle, including those having to deal with your gas lines. We are a locally owned and operated business here in the community and are completely licensed and insured so that you have confidence in us working on your gas line project.</p>
      <p>We provide:</p>
      <ul>
        <li>New Gas Line Installation</li>
        <li>Gas Line Leak Detection</li>
        <li>Gas Line Repairs</li>
      </ul>
      <p>Don’t let a gas line problem sit — call Double L right away for prompt affordable services now! </p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/gas-line-services/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
</div>
<div class="lnbCollapsible">
    <button type="button" class="lnbCollapsible__button arvo">
        <span class="lnbCollapsible__buttonText">Water Lines</span><fa-icon icon="plus" family="regular"></fa-icon>
    </button>
    <div class="lnbCollapsible__content">
    <p>Clean water is essential to your home or business. Double L offers water main line services to ensure your water is able to come into your building easily and effectively. On top of that, our technicians are trained to give some of the best customer service that you will see in any industry.</p>
      <p>Our water line services include:</p>
      <ul>
        <li>Repairs</li>
        <li>Full Replacements</li>
      </ul>
      <p>Clean water is important to your health. With the help of Double L Plumbing, your water line will function properly to bring you the water you need for years to come. </p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/water-line-services/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
  </div>
</div>
<div class="lnbCollapsible">
    <button type="button" class="lnbCollapsible__button arvo">
        <span class="lnbCollapsible__buttonText">Sewers</span><fa-icon icon="plus" family="regular"></fa-icon>
    </button>
    <div class="lnbCollapsible__content">
      <p>Sewer systems and lines can suffer a number of issues, including clogs and cracks from tree roots. Our services will help determine what is going on with your line and best next steps. Sometimes that will mean making a recommendation that will put you in a better situation to avoid costly repairs down the road.</p>
      <p>We provide: </p>
      <ul>
        <li>Sewer Line Cleaning</li>
        <li>Sewer Line Repairs</li>
        <li>Full Sewer Line Replacements</li>
      </ul>
      <p>We offer appointment times that will work for you, regardless of the job size or what kind of work you need done. Call us today for your sewer needs!</p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/sewer-services/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
</div>
<div class="lnbCollapsible">
    <button type="button" class="lnbCollapsible__button arvo">
        <span class="lnbCollapsible__buttonText">Drains</span><fa-icon icon="plus" family="regular"></fa-icon>
    </button>
    <div class="lnbCollapsible__content">
       <p>Most plumbing jobs need to be taken care of right away, including those concerning your drains. A drain that is clogged for a long time could suffer cracks and breaks in the pipe, leading to larger damage and higher costs.  </p>
      <p>If you are thinking about hesitating – don’t! We can help you with an evaluation of your drains and plumbing system so that you know what may be going on behind the scenes with your pipes. We also use video camera technology if necessary to really determine what next steps need to be taken. </p>
      <p>Our customer service sets us apart from the other businesses in the area because we truly care about you and your project – your situation isn’t just another job for us, it’s a real problem that you deserve quality help with. Call us for help with your drains today! </p>
      <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/drain-cleaning/">Learn More <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
    </div>
</div>
<script>
    var acc = document.getElementsByClassName("lnbCollapsible__button");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var icon = this.getElementsByTagName('fa-icon')[0];
            // var btnText = this.getElementsByClassName('changing-text')[0];
            var panel = this.nextElementSibling;

            if (this.classList.contains("active")) {
                icon.setAttribute("icon", "minus");
                // btnText.innerHTML = "Hide";
                panel.style.maxHeight = panel.scrollHeight + "px";
            } else {
                icon.setAttribute("icon", "plus");
                // btnText.innerHTML = "View";
                panel.style.maxHeight = null;
            }
        });
    }
</script>
<section class="dlHomeAbout dlLogoBorder hyper-lazyload-bg" data-bg-image="<?php echo do_shortcode('[site_url]'); ?>/wp-content/uploads/background-home-double-l-plumbing-office-exterior.jpg">
  <span class="dlLogoBorder__logo">
  </span>
  <span class="dlHomeAbout__heading arvo">Excellent Plumbers, Exceptional People</span>
  <span class="dlHomeAbout__subHeading arvo">Big & Small Plumbing Repairs</span>
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
  <a is="hypercore-button" class="hypercore-button dlBtn" href="<?php echo do_shortcode('[site_url]'); ?>/contact-us/">Contact Us</a>
</section>
<?php echo ob_get_clean();
}
add_shortcode('dl_home', 'output_homepage');

function output_interior_cta() {
  ob_start();
  ?>
<div class="interiorCTA">
  <img class="hyper-lazyload" data-lazy-src="<?php echo do_shortcode('[site_url]') ?>/wp-content/uploads/ask-for-a-free-estimate.svg">
  <a href="tel:8174443100" class="phone-num arvo white-text bold">817-444-3100</a>
</div>
<?php echo ob_get_clean();
}
add_shortcode('interior_cta', 'output_interior_cta');

function output_lgs() {
  ob_start();
  ?>
  <a class="arvo arrowLink" href="<?php echo do_shortcode('[site_url]'); ?>/contact-us/">Let's Get Started <fa-icon class="arrowLink__arrow" icon="arrow-right" family="solid"></fa-icon></a>
<?php echo ob_get_clean();
}
add_shortcode('lets_get_started', 'output_lgs');