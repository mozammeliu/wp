<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mozammel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<?php $mlh=1; ?>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
                                
                                if($mlh==1)
                                {
                                    get_template_part( 'template-parts/mlh10', get_post_format() );
                                }
                                if($mlh==2 or $mlh==3 or $mlh==4 or $mlh==5)
                                {
                                    
                                  
                                  get_template_part( 'template-parts/mlh9876', get_post_format() );
                                }
                                
                                if($mlh==6)
                                {
                                    
                                   get_template_part( 'template-parts/mlh5', get_post_format() );
                                  get_template_part( 'template-parts/mlhadvertisement', get_post_format() );
                                }
                              if($mlh==7 or $mlh==8)
                                {
                                 get_template_part( 'template-parts/mlh43', get_post_format() );
                               }
                              
                               if($mlh==9)
                                {
                                 get_template_part( 'template-parts/mlh2', get_post_format() );
                               } 
                               if($mlh==10)
                                {
                                 get_template_part( 'template-parts/mlh1', get_post_format() );
                               } 
                                
                                
                                
                                $mlh++;
                                
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					//get_template_part( 'template-parts/mlhcontent', get_post_format() );
				?>

			<?php endwhile; ?>

			<!--<?php the_posts_navigation(); ?>-->

		<?php else : ?>

			<?php //get_template_part( 'template-parts/mlhcontent', 'none' ); 
                        ?>

		<?php endif; ?>

		


<?php get_footer(); ?>
