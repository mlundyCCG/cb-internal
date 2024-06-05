<?php

    // Call all of the files that we want to load
    function cb_internal_files() {
        wp_enqueue_style('bootstrap-css', '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
        wp_enqueue_style('bootstrap-icon-css', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
        
        wp_enqueue_style('cb-internal-main-styles', get_theme_file_uri('/css/main.css'));
        wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');

        wp_enqueue_script('bootstrap-js', get_theme_file_uri('//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'));
    }

    add_action('wp_enqueue_scripts', 'cb_internal_files');
?>