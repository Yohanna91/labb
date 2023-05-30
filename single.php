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
            <div class="col-xs-12">
            <h1>Blogg</h1>
            <div class="custom-card">
               <div class="thumbnail-post">
                  <?php echo get_the_post_thumbnail(); ?>
               </div>
                <h3><?php the_title(); ?></h3>
                <div style="display: flex; gap: 1rem; border-bottom: 1px solid #f1f1f1;">
                  <p>📆 Publicerat: <?= get_the_date(); ?></p>
                  <p class="text-danger">👤 Författare: <?= get_the_author(); ?></p>
                  <p class="text-danger">Kategorier: <?= get_the_category_list(", "); ?></p>
               </div>
                <?php
                    the_content();
                ?>

            </div>
         </div>
      </div>
   </section>
</main>


<?php get_footer(); ?>