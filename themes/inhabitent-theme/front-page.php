<?php

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<div id="primary" class="content-area">
	<div class="logo"><img alt="Front Hero Image" src="<?php echo get_template_directory_uri() ?>/logos/inhabitent-logo-full.svg"/>
	</div>
	<section class="front-hero-image"> </section>
		<h2> Shop Stuff </h2>
	<section class="shop-name">
			
			<?php $product_types = get_terms("product_type") ?>
			<?php foreach ($product_types as $value) : setup_postdata($value); ?>

			<div class="product-chunk">

				<img alt="Product Type Icons" src=<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $value->slug . '.svg' ?>>
                 <p><?php echo $value->description ?></p>
                 <a class="button-general" href=<?php echo get_term_link($value) ?>><span class="button-text"><?php echo $value->name ?> stuff</span></a>
	
			</div>
			<?php endforeach;
		wp_reset_postdata(); ?>
				
	</section>


	<main id="main" class="site-main" role="main">
	


		<!-- //journal section -->
			<section>	
				<h2>Inhabitent Journal</h2>
	
				<div class="post-info">
					<?php
					$latest_posts = inhabitent_get_latest_posts();
					foreach ($latest_posts as $post) : setup_postdata($post);
					?>

					<div class="post-chunk">
						<?php
						if (has_post_thumbnail()) {
						the_post_thumbnail('medium_large');
						}
						?>

						<div class="post-data">
							<div class="high-line">
								<?php the_date(); ?>
								/
								<?php echo comments_number(); ?>
							</div>
							<div class="journal-title"><?php
								the_title(); ?>
							</div>
								<a class="readmore-button" href = "<?php the_permalink(); ?>">Read entry</a>
						</div>	
						
					</div>

						<?php	
						endforeach;
						wp_reset_postdata();
						?>
				</div>	
	
			</section>	

			<!-- lastest adventures section -->

		<h2>Latest Adventures</h2>

		<section class="latest-adventures">
					<div class="one"><span>Getting Back to Nature in a Canoe</span> <button>Read More</button></div>
					<div class="two"><span>A Night with Friends at the Beach </span><button>Read More</button></div>
					<div class="three"><span>Taking in the View at Big Mountain </span><button>Read More</button></div>
					<div class="four"><span>Star-Gazing at the Night Sky</span> <button>Read More</button></div>

		</section>
		<button class="adventure-but">More Adventures</button>
	</main><!-- #main -->
</div><!-- #primary -->


	

<?php get_footer(); ?>


