<?php
class Summit_Website {
  public static function set_summit_logo() {
    return 'products/global_summit.svg#globalsummit';
  }
  public static function set_summit_logo_image_size() {
    return '265 40';
  }
}

add_filter('cc_theme_base_set_default_size_logo', array( 'Summit_Website', 'set_summit_logo_image_size' ) );
add_filter('cc_theme_base_set_default_logo', array( 'Summit_Website', 'set_summit_logo' ));