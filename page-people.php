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




                        
                        
<h1 class="purpleHeaders"> The Team </h1>
<div class="row spacing" id="">
                        
                        
  <?php $args = array( 'post_type' => 'People', 'posts_per_page' => -1, 'category_name' => 'people' ); ?>
  <?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            
    <div id="person" class="col-sm-4 myThumb">
        <h1 class="textCenter"> <?php the_title(); ?> </h1>
        <div class="img-responsive textCenter"> <?php the_post_thumbnail(); ?> </div>
        
        <button type="button" class="Center btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal-<?php the_ID(); ?>" style=" margin-top: 2%;">
                                    Learn More
        </button>
                            
     </div>
                            
                                                     
  
                        
  <!-- Modal -->
      <div class="modal fade" id="myModal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModal-<?php the_ID(); ?>-Label">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModal-<?php the_ID(); ?>-Label"> <?php the_title(); ?> </h4>
            </div>
            <div class="modal-body">
                                    
              <div id="description">
                  <?php the_post_thumbnail(); ?>
                  <?php the_content(); ?>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                   
            </div>
          </div>
        </div>
      </div>
                        
                        
                            
                            
                            
      <?php endwhile; ?>
                            
  </div>





  <!-- Univerity Collaborators LOOP!-->

  <h1 class="purpleHeaders"> University Collaborators</h1>
  <div class="row spacing" id="">
                        
                        
                        
                        
      <?php $args = array( 'post_type' => 'People', 'posts_per_page' => -1, 'category_name' => 'universitycollab' ); ?>
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            
      <div id="person" class="col-sm-4 myThumb">
          <h1 class="textCenter"> <?php the_title(); ?> </h1>
          <div class="img-responsive textCenter"> <?php the_post_thumbnail(); ?> </div>
          <div> <?php the_content(); ?> </div>
          <button type="button" class=" Center btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal-<?php the_ID(); ?>" style=" margin-top: 2%;">
                                    Learn More
          </button>
                            
      </div>
                            
                                                     
      <?php rewind_posts(); ?>



                        
  <!-- Modal -->
      <div class="modal fade" id="myModal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModal-<?php the_ID(); ?>-Label">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModal-<?php the_ID(); ?>-Label"> <?php the_title(); ?> </h4>
            </div>
            <div class="modal-body">
                                    
              <div id="description">
                  <?php the_post_thumbnail(); ?>
                  <?php the_content(); ?>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                   
            </div>
          </div>
        </div>
      </div>
                        
                        
                                
      <?php endwhile; ?>
                            
  </div>
                        
  <!-- Univerity Collaberators LOOP!-->

  <h1 class="purpleHeaders"> Partnering Organiztions</h1>
  <div class="row spacing" id="">
                        
                        
                        
                        
      <?php $args = array( 'post_type' => 'People', 'posts_per_page' => -1, 'category_name' => 'partneringorganizations' ); ?>
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            
      <div id="person" class="col-sm-4 myThumb">
          <h1 class="textCenter"> <?php the_title(); ?> </h1>
          <div class="img-responsive textCenter"> <?php the_post_thumbnail(); ?> </div>
          <div> <?php the_content(); ?> </div>
          <button type="button" class="Center btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal-<?php the_ID(); ?>" style=" margin-top: 2%;">
                                    Learn More
          </button>
                            
      </div>
                            
                                                     
      <?php rewind_posts(); ?>



                        
  <!-- Modal -->
      <div class="modal fade" id="myModal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModal-<?php the_ID(); ?>-Label">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModal-<?php the_ID(); ?>-Label"> <?php the_title(); ?> </h4>
            </div>
            <div class="modal-body">
                                    
              <div id="description">
                  <?php the_post_thumbnail(); ?>
                  <?php the_content(); ?>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                   
            </div>
          </div>
        </div>
      </div>
                        
                        
                                
      <?php endwhile; ?>
                            
  </div>
    
                        
                        
                        
                        
                        
                        
                        
<?php get_footer(); ?>                      