
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NYU_AL
 */

get_header(); ?>


                        <?php /* The About Loop */ ?>
			<?php query_posts('category_name=About'); ?>
			
		
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div id="aboutDiv" class=" " >
                                    <h1><?php the_title(); ?> </h1>
                                    <p><?php the_content(); ?> </p>
                                    
                                </div>

			<?php endwhile; ?>

<?php get_footer(); ?>