<?php
get_header();
?>
	<div class="container">
		<div class="col-md-12">
			<?php
			wp_nav_menu( array(
					"theme_location"  => "primary",
					'depth'           => 2,
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'bs-example-navbar-collapse-1',
					'menu_class'      => 'nav navbar-nav',
					'walker'          => new wp_bootstrap_navwalker()
				)
			);
			?>
		</div>
		<div class="row">

			<div class="col-md-12">
				<?php _e( "Search Page. You searched for", "tm2" ); ?> : <?php echo get_search_query(); ?>
			</div>
			<div class="col-md-9">
				<h1><?php //_e("Hello World","tm2");?></h1>
				<?php
				while ( have_posts() ) {
					the_post();
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( "medium" );
					}
					?>
					<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
					<?php
					the_date();
					the_category();
					the_tags( "All the tags: " );
					echo "<hr/>";
					the_content();
//						the_posts_navigation(array(
//							"screen_reader_text"=>"navigation"
//						));

					echo paginate_links( array(
						"mid_size" => 2
					) );
				}
				?>

			</div>
			<div class="col-md-3">
				<?php
				get_sidebar();
				?>
			</div>
		</div>
	</div>
<?
get_footer();