<?php
 /*
    Template Name: Test
 */
?>

<?php get_header(); ?>

<?php require_once "partials/nav.php"; ?>

<main>
   <section>
      <div class="container">
         <div class="row">
            <div>
            <h1>Blogg</h1>
            <div style="border: 1px solid #e5e5e5; margin-top: -5px;" class="mb-2"></div>
           <div class="flex">
            <div>
               <?php
                  $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => -1
                  );    
                     $query = new WP_Query( $args );

                     if ( $query->have_posts() ) :
                           while ( $query->have_posts() ) : $query->the_post(); ?>
                           <div class="custom-card">
                              <div class="thumbnail-post">
                                 <?php echo get_the_post_thumbnail(); ?>
                              </div>
                              <a href="<?= the_permalink(); ?>"><?php the_title( '<h2>', '</h2>' ); ?></a>
                              <div style="display: flex; gap: 1rem; border-bottom: 1px solid #f1f1f1;">
                                 <p>📆 Publicerat: <?= get_the_date(); ?></p>
                                 <p class="text-danger">👤 Författare: <?= get_the_author(); ?></p>
                                 <p class="text-danger">Kategorier: <?= get_the_category_list(", ") ?></p>
                              </div>
                              <?php
                                 the_content();
                              ?>
                           </div>
                          <?php endwhile; 
                           wp_reset_postdata();
                     else :
                           echo '<p>No posts found</p>';
                     endif;
                  ?>
            </div>
            <div id="sidebar">
               <h3>Kategorier</h3>
               <ul>
               <?php foreach (get_categories() as $category) : ?>
                     <li><a href="<?= esc_url(get_category_link($category->cat_ID)); ?>"><?= $category->name; ?></a></li>
               <?php endforeach; ?>
               </ul>
            </div>
           </div>
         </div>
      </div>
   </section>
</main>


<?php get_footer(); ?>