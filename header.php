<!doctype html>
<html lang="en">
  <head>
<!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset');?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head();    //this piece of code load all stylessheet files to theme file.?>
  </head>

<body <?php body_class();?> >
     
    
     
  
     <nav style='' class="navbar navbar-expand-md fixed-top bg-dark" >
      <a href="#" class="navbar-brand  mr-auto " style="padding-left: 45px, ">
          start bootstrap
      </a>
      <button id="navigationbutton" type="botton" class="active  navbar-toggler navbar-toggler-right " data-toggle="collapse" data-target="#navbar-collasible" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">menu
        <i class="fas fa-bars"></i></button>
        <div class=" collapse navbar-collapse" id="navbar-collasible">

          <ul class="navbar-nav ml-auto pr-5">
              <!-- <li class="nav-item">
                  <a href="#myservice" class="nav-link text-white">services</a>
              </li>
               <li class="nav-item">
                  <a href="#myportfolio" class="nav-link text-white">portfolio</a>
              </li>
               <li class="nav-item">
                  <a href="#myabout" class="nav-link text-white">about</a>
              </li>
               
               <li class="nav-item">
                  <a href="#contacti" class="nav-link text-white">contact</a>
              </li> -->
          </ul>
          

          <?php
        wp_nav_menu( array(
  'theme_location'  => 'primary',
  'menu'            => '',
	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
	'container'       => 'div',
	'container_class' => 'collapse navbar-collapse ',
	'container_id'    => 'bs-example-navbar-collapse-1',
	'menu_class'      => 'navbar-nav ml-auto pr-5',
	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	'walker'          => new WP_Bootstrap_Navwalker(),
) );
?>
        </div>

        
       
      </nav>


     <header class="intro1">
       <div class="intro2">
         <div class="intro3">
           <h>welcome everyone</h>
         </div>
         <div class="intro4">
           <h>lets have a tour</h>
         </div>
           <a  href="#" class="btn btn-warning btn-lg  mt-4 text-uppercase text-white klid">tell me more</a>
           
       </div>
       
     </header>
     
     



     <?php 
     ;
     get_sidebar();  //the argument is sidebar's slug's name. for example sidebar-primary.php is used in this code.
     ?>