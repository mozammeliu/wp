<?php
/**
 * The template for displaying all single posts.
 *
 * @package class05
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<h2>Custom Field Values</h2>
			<?php
//				$linkval = get_post_custom_values("link");
//				$rating = get_post_custom_values("rating");
//				echo "Link :" . $linkval[0] ."<br/>";
//				echo "Rating :" . $rating[0];

		$keys = get_post_custom_keys();
			echo "<pre>";
			print_r($keys);
			echo "</pre>";


			?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
