    <!-- Portfolio Modal 6 -->
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




                        
                        <h1 class="purpleHeaders">Upcoming Events</h1>
                        
                        <?php rewind_posts(); ?>


                        <div class="row spacing">
                        
                        
                        <?php $args = array( 'post_type' => 'Event', 'posts_per_page' => -1, 'category_name' => 'upcoming-events' ); ?>
                        <?php $loop = new WP_Query( $args ); ?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        
                        <div class="col-md-4 img-responsive">
                        
                        <h1> <?php the_title(); ?> </h1>
                        <div> <?php the_post_thumbnail(); ?> </div>
                        <?php the_content(); ?> 
                        
                        </div>
                        
                        <?php endwhile; ?>
                        
                        
                        
                        </div>
                        
                        
                        <!-- Begin the Past Events Loop!--> 
                        
                        <h1 class="purpleHeaders">Past Events</h1>
                        
                         <?php rewind_posts(); ?>


                        <div class="row spacing">
                        
                        
                        <?php $args = array( 'post_type' => 'Event', 'posts_per_page' => -1, 'category_name' => 'past-events' ); ?>
                        <?php $loop = new WP_Query( $args ); ?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        
                        <div class="col-md-4 img-portfolio">
                        
                        
                        <h1> <?php the_title(); ?> </h1>
                        <div> <?php the_post_thumbnail(); ?> </div>
                        <?php the_content(); ?> 
                        
                        </div>
                        
                        <?php endwhile; ?>
                        
                        
                        
                        </div>
                        
<?php get_footer(); ?>