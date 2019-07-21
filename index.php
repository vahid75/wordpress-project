<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>


	
		


    




  <?php
     while ( have_posts() ) : the_post();
     the_time(get_option('date_format'));       //show each post date in the.  ?>

  <article class="<?php post_class(); ?>" id="post-<?php the_ID();     //the post's id. ?>">
    <a href="<?php the_permalink();   //get the post link.    ?>" >
             <?php the_title();
              ?>

    </a>
    <?php if ( !is_page() ):?>
      <section class="entry-meta">
        <p>Posted on <?php the_date();          //show each post date in the.?> by 
                    <?php the_author();?>
        </p>
      </section>
    <?php endif; ?>
    
    <section class="entry-content">
      <?php the_content();?>
       
    </section>
    <section class="entry-meta"><?php if ( count( get_the_category() ) ) : ?>
      <span class="category-links">
        Posted under: <?php echo get_the_category_list( ', ' ); ?>
      </span>
      <?php endif; ?>
    </section>
  </article>
<?php endwhile; ?> 










