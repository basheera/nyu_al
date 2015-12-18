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


                        <?php rewind_posts(); ?>
                        
                        
                       <h1 class="purpleHeaders"> Projects </h1>
                       <div class="row spacing" id="">

                        <?php
                        
                        $args = array( 'post_type' => 'Project', 'posts_per_page' => 10 );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        
                        <div class="col-md-4">
                        <h1> <?php the_title(); ?> </h1>
                        <div> <?php the_post_thumbnail(); ?> </div>
                        <p> <?php the_content(); ?> </p>
                        
                        
                        
                        </div>
                        <?php endwhile; ?>
                        
                       
                       </div>
                       
                        
                        
                        
                        
<?php get_footer(); ?>


