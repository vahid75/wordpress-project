<?php  // a custom page themplate file. use it for a single page customizing or a page named tt.("tt" is just a arbitrary name. you can name it by your choice.)


//Template name:tt.php 
get_header();
wp_nav_menu() ;


//start point for wordpress famous loop.
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
        
				the_post();
        // get_template_part( 'template-parts/content/content' ); for loading a page themplate file named "page-content.php" .
        
        
			}

		
			

		} else {

			// If no content, include the "No posts found" template.
			// get_template_part( 'template-parts/content/content', 'none' );

		}
?>










    


<?php get_sidebar(); ?>
<?php get_footer(); ?>


	
		


    




    <?php /* while ( have_posts() ) : the_post(); ?>
  <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php if ( !is_page() ):?>
      <section class="entry-meta">
      <p>Posted on <?php the_date();?> by <?php the_author();?></p>
      </section>
    <?php endif; ?>
    <section class="entry-content">
      <?php the_content(); ?>
    </section>
    <section class="entry-meta"><?php if ( count( get_the_category() ) ) : ?>
      <span class="category-links">
        Posted under: <?php echo get_the_category_list( ', ' ); ?>
      </span>
    <?php endif; ?></section>
  </article>
<?php endwhile; ?>          //a sample loop with comment showing ability.
*/






