<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NYU_AL
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
    
                        
                        
                        
                        
                        
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-responsive" src="<?php echo get_template_directory_uri()."/assets/nyuassets/special/ability-slider-white-background.jpg"; ?>" alt="">
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="<?php echo get_template_directory_uri()."/assets/nyuassets/slider2.jpg"; ?>" alt="">" alt="">
                <div class="carousel-caption">
                   
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="<?php echo get_template_directory_uri()."/assets/nyuassets/slider1.jpg"; ?>" alt="">" alt="">
                <div class="carousel-caption">
                   
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    

          
                        
                        <?php /* The About Loop */ ?>
			<?php query_posts('category_name=About'); ?>
			
		
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div id="aboutDiv" class="col-xs-12" >
                                    <h1 class='purpleHeaders'><?php the_title(); ?> </h1>
                                    <p><?php the_content(); ?> </p>
                                    
                                </div>

			<?php endwhile; ?>
                        
 

			

		<?php else :  ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer(); ?>