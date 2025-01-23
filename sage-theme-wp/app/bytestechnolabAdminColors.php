<?php

namespace App;

/**
 * bytestechnolab color scheme
 */

//load bytestechnolab color scheme & login page
add_action('admin_enqueue_scripts', function () {
    wp_enqueue_style('bytestechnolab-admin-colors', get_template_directory_uri() . '/resources/styles/bytestechnolabAdminColors.css', false, '1.0.0');
});

add_action('login_enqueue_scripts', function () {
    wp_enqueue_style('bytestechnolab-admin-colors', get_template_directory_uri() . '/resources/styles/bytestechnolabAdminColors.css', false, '1.0.0');
});
