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
