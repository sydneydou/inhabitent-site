<?php

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<section class="front-hero-image"> </section>
		<h2> Shop Stuff</h2>

		
		
		<section class="shop-name">
			
			<?php $product_types = get_terms("product_type") ?>
			
			<?php foreach ($product_types as $value) : setup_postdata($value); ?>
			<div>
			<img src=<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $value->slug . '.svg' ?>>
                 <p><?php echo $value->description ?></p>
                 <a href=<?php echo get_term_link($value) ?>> <?php echo $value->name ?> stuff</a>
	
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

			<div>
					<?php
				if (has_post_thumbnail()) {
					the_post_thumbnail('medium_large');
				}
				?>
			<div class="post-data">

				<?php single_post_title(); ?>
					<button><a href = "<?php the_permalink(); ?>">Read entry</a></button>

					<?php the_date();
				echo comments_number();
				the_title(); ?>
			</div>
				</div>	
						<?php	
					endforeach;
					wp_reset_postdata();
					?>
						
		</div>
	
</section>	
		</main><!-- #main -->
	</div><!-- #primary -->


	

<?php get_footer(); ?>


