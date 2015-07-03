<?php
get_header();
?>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
<!--				<h1>--><?php //_e("Hello World","tm2");?><!--</h1>-->
				<?php
				while(have_posts()){
					the_post();
					if(has_post_thumbnail()){
						the_post_thumbnail("medium");
					}
					?>
					<a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
					<?php
					the_date();
					the_category();
					the_tags("All the tags: ");
					echo "<hr/>";
					the_content();
					the_post_navigation();

					if(comments_open() || get_comments_number())
					comments_template();

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