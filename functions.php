
<?php

add_action("wp_enqueue_scripts", "css");

function css(){
wp_enqueue_style("css1", get_template_directory_uri() . "/main.css");
}

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );