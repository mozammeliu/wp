<?php
get_header();
?>
	<div class="container">
		<div class="row">
			<div class="col-md-9">

				<?php
					while(have_posts()){
						the_post();
						if(has_post_thumbnail()){
							the_post_thumbnail("medium");
						}
						?>
						<h2><?php the_title();?></h2>
						<?php
						the_date();
						the_category();
						the_tags("All the tags: ");
						echo "<hr/>";
						the_content();
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