<?php

/*Register the main menu */

add_action('init', 'register_my_menus');

function register_my_menus() {
    register_nav_menus(array (
        'main-menu' => 'Top meny'
    ));
}

/*Activate dynamic header picture */
$args= array (
    'width' => 1920,
    'height' => 512,
    'default-image' => get_template_directory_uri().'/images/header.jpg',
    'uploads' => true
);

add_theme_support('custom-header', $args);
/* Activate featured image */
add_theme_support('post-thumbnails');

function wp_hook_javascript()

{
?>
    <script>
        window.onload = function () {
       

        let hamburger = document.querySelector('.hamburger');
        let mobileMenu = document.querySelector('.mobile-menu');
        
            hamburger.addEventListener('click', function() {
                hamburger.classList.toggle('is-active');
                mobileMenu.classList.toggle('is-active');

            });
        }
        
       
    </script>
<?php
}
/* Activate the JavaScript */

add_action('wp_head', 'wp_hook_javascript');


