<?php

/*
  Plugin Name: MarcTV jQuery Colorbox
  Plugin URI: http://www.marctv.de
  Description: Loads the jquery colorbox plugin http://colorpowered.com/colorbox/ and the marctv colorbox skin
  Version: 1.5.14
  Author: Marc Tönsing
  Author URI: http://marctv.de
  License: Creative Commons Attribution-ShareAlike

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
 */


function marctv_load_colorbox_scripts()
{
    $version = '1.5.14';

    wp_enqueue_style(
        "colorbox-styles", WP_PLUGIN_URL . "/marctv-jquery-colorbox/jquery.colorbox.css", false, $version);

    wp_enqueue_script(
        "colorbox", WP_PLUGIN_URL . "/marctv-jquery-colorbox/jquery.colorbox.js", array("jquery"), $version, true);

    wp_enqueue_script(
        "colorbox_setup", WP_PLUGIN_URL . "/marctv-jquery-colorbox/jquery.colorbox_setup.js", array("jquery", "colorbox"), $version, true);
}

add_action('wp_print_styles', 'marctv_load_colorbox_scripts');

?>