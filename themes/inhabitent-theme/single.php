<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */?>
 <div class="journalpage">

 <?php
get_header();
?>

<div class="single-main">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<div>
				<?php get_template_part( 'template-parts/content', 'single' ); ?>
				<div class="socials">

					<button> <i class="fab fa-facebook-f"><span>Like </span></i></button>
					<button> <i class="fab fa-twitter"> <span>Tweet</span></i></button>
					<button><i class="fab fa-pinterest"><span> Pin</span></i></button>
				</div>
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>
			</div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
			
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div>
			</div>
<?php get_footer(); ?>
