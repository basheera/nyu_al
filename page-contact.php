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

<h1 class="purpleHeaders"> Contact Us </h1>

<div class="row spacing" id="">

<h2 style="margin-left: 1%"> Location </h2>    
<div class="col-md-6"   >
    
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:350px;width:500px;'><div id='gmap_canvas' style='height:350px;width:500px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://www.add-map.net/'>google map widget for website</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=5c05ac05d1314b6f68ce5c2bb1ddf7c2b0499b02'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(40.693364,-73.98571470000002),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.693364,-73.98571470000002)});infowindow = new google.maps.InfoWindow({content:'<strong>Ability Lab</strong><br>2 MetroTech Center <br>11201 Brooklyn<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>  

<?php rewind_posts(); ?>
                        
                        
                       <?php query_posts('category_name=contactAbout'); ?>
			
		
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div id="aboutDiv" class="" style="text-align: left" >
                                    <h1 class='purple' id="jquery"><?php the_title(); ?> </h1>
                                    <p><?php the_content(); ?> </p>
                                    
                                </div>

			<?php endwhile; ?>
</div>
                       
                      <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-6">
                <h3>Send us a Message</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
                       
                       
 </div>                       
 
                       
                        
<?php get_footer(); ?>





