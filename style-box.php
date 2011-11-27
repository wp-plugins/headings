<?php
/*
Plugin Name: Headings
Plugin URI: http://www.technozeast.com/style-box
Description: Make nice notes, alerts with Style Box in your post.
Version: 1.1
Author: Vedant Kumar
Author URI: http://www.hackingtools.co.in/
Original_author: Shivendu Madhava
Original_Author URI: http://www.technozeast.com/
*/

function style_box(){
    $style_box = get_option('style_box');
    if($style_box=='1'){
        if ( !defined('WP_CONTENT_URL') ) define( 'WP_CONTENT_URL', get_option('siteurl') . '/wp-content');
        $plugin_url = WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__));
        echo '<link rel="stylesheet" href="'.$plugin_url.'/style.css"'.' type="text/css" media="screen" />';
    }
}

function active_style_box(){
        add_option('style_box','1','active the plugin');
}

function deactive_style_box(){
    delete_option('style_box');
}

add_action('wp_head', 'style_box');

register_activation_hook(__FILE__,'active_style_box');
register_deactivation_hook(__FILE__,'deactive_style_box');

?>