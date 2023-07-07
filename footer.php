<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stagiaire
 */

?>
<div>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			
				<div class="footer-diva">
					 <div class="site-branding">
			<?php
			the_custom_logo();?>
			<h3 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
			 
		</div><!-- .site-branding --></div>
				<div class="footer-divb">
					<div>
					<ul>Pages
						<li><a href="http://localhost/wordpress/">ACCUEIL</a></li>
						<li><a href="http://localhost/wordpress/blog/">BLOG</a></li>
						<li><a href="http://localhost/wordpress/contact/">CONTACT</a></li>
						
					</ul>
				</div> 
					<div>
					
					<?php $query = new WP_Query(['cat' => 3]); ?> 
					<?php /*echo $query->found_posts;*/?>
					<?php while($query->have_posts()): $query->the_post(); ?>
							<ul>
								<li><?php the_title() ?></li>	
							</ul>
					<?php endwhile ?>
					<?php wp_reset_postdata(); ?>
				
					</div>
					<div>
						<ul>Reseaux
							<li><a href="https://www.instagram.com"></a></li>
							<li><a href="https://www.instagram.com">instagram</a></li>
							<li><a href="https://www.instagram.com">instagram</a></li>
						</ul>
					</div>
					
		</div><!-- .site-info -->
		
	</footer><!-- #colophon -->
	
</div><!-- #page -->
<?php wp_footer(); ?>
<div class= 'tests'>
<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'stagiaire' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by Carmen', 'stagiaire' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'stagiaire' ), 'stagiaire', '<a href="http://underscores.me/">Underscores.me</a>' );
					?>

</div>


</body>
</html>
