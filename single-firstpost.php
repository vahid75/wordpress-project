<?php
wp_head();                      //this code include your styles , scripts ,...
/*
 * Template Name: a single post page
 * Template post type: post
 */


/* if (is_single()):
 get_header('single');          //this is for include a custume header file named(header-single.php).
 endif;*/                       
 
 ?>

<div>
  <?php// the_post_thumbnail('Screenshot-from-2019-07-07-01-44-51',array('class' => 'right'));?>
</div>

<?php


the_post_thumbnail('full',array(
  'class' => 'right',
)); 
                             //including a post thumbnail(featured image) in full size and a class that specified in theme's stylesheet file.

                             
if (is_page_template()):     //check if this file is a page,or post
  echo 'yes this is  a paga template';
endif;?>


    
 
<?php
// Start the loop.
while ( have_posts() ) : the_post();?>

<h2> <?php the_title();?> </h2>

<?php the_content();  ?>


       

        

  <?php
      /*
        * Include the post format-specific template for the content. If you want to
        * use this in a child theme, then include a file called called content-___.php
        * (where ___ is the post format) and that will be used instead.
        */
      get_template_part( 'content', get_post_format() );

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
          comments_template();
      endif;

      

      
      
  // End the loop.
  endwhile;
  previous_post_link();        //posts pagination 
  echo " "."<p> </p>";
  next_post_link();            //posts pagination 
  ?>

  </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?> 




	
		


    




   







