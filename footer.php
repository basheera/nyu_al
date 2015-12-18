<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NYU_AL
 */

?>
 
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php// echo esc_url( __( 'https://wordpress.org/', 'user' ) ); ?>"><?php//printf( esc_html__( 'Proudly powered by %s', 'user' ), 'WordPress' ); ?></a>
			<span class="sep">  </span>
			<?php// printf( esc_html__( 'Theme: %1$s by %2$s.', 'user' ), 'user', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet"  type="text/css">
                            <script type="text/javascript">	
                        	$(document).ready(function(){


                                $('.myThumb').on('click', function(){
                                        
                                        
                
                                        $('#myModal').modal('show');
                
                                });
                
                                
                
                
                                });// document ready
                        </script>
</body>


</html>