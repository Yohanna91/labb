<?php get_header(); ?>

	<div id="wrap">

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<?php require_once "partials/nav.php"; ?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-8">
							<h1><?php the_title(); ?></h1>
							<?php get_template_part("includes/section", "content"); ?>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-4">
                        <div class="thumbnail-post">
                            <img src="<?php bloginfo('template_directory'); ?>/img/photo.jpg" />
                        </div>
						</aside>
					</div>
				</div>
			</section>
		</main>
	</div>


<?php get_footer(); ?>