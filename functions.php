<?php

if (! function_exists('mywebsite_setup')):    //the setup function that loads on theme start.
    function mywebsite_setup(){               //the function name : thmeme name + _setup.
        register_nav_menus(array(             //register navigation menu.
            'primary' => __('primary menu', 'mywebsite'),//the name that is being used in "wp_nav_menu()" theme location argument as a value.
            'secondary ' => __('secondary menu' , 'mywebsite')
        ));


        add_theme_support('post-thumbnails');//register the featured image.use this to active this tool.


        register_sidebar(array(          //register the sidebar.use this to active this tool.use this to initialize each sidebar.
            'name' => __('left sidebar'),//name of widgtize area that appear in widget admin page. 
            'id' => 'sidebar-1',         //sidebar id that can be use in "dynamic_sidebar()".
        
        
        
            
        ));
    

    }   

    





endif;
add_action('after_setup_theme','mywebsite_setup');
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';



function mystyles(){
    
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js');
    wp_enqueue_script('bootstrapjquery', get_template_directory_uri().'/jquery-3.3.1.min.js');
    wp_enqueue_script('bootstrapjspopper', get_template_directory_uri().'/popper.min.js');
    wp_enqueue_style('style', get_template_directory_uri().'/style.css');

}

add_action('wp_enqueue_scripts','mystyles');




function add_classes_on_li($classes, $item, $args) { //add css class to <li> tags
    if( $args->menu == 'priamry' ) {
        $classes[] = 'nav-item ';
    }
    return $classes;
}

add_filter('nav_menu_css_class','add_classes_on_li',1,3);


function add_link_atts($atts) {//add css class to <a> tags
    $atts['class'] = "nav-link text-white ";
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');




?>


