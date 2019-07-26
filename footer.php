<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="footer-menu">

						<div class="footer-menu-child">
							<div class="footer-menu-heading">
								<h5>Cursos Mikrotik</h5>
								<i class="fas fa-chevron-down"></i>
							</div>
							<ul>
								<?php
								$arg3 = new WP_Query( array( 'post_type' => 'curso' ) );
								if ( $arg3->have_posts() ) :
									while ( $arg3->have_posts() ) : $arg3->the_post(); ?>
												<li><?php echo get_the_title(); ?></li>
								<?php endwhile; 
								endif;?>
							</ul>
						</div>

						<div class="footer-menu-child">
							<div class="footer-menu-heading">
								<h5>Recursos</h5>
								<i class="fas fa-chevron-down"></i>
							</div>
							<ul>
								<li>Formas de Pagamento</li>
								<li>Facilidades</li>
							</ul>
						</div>

						<div class="footer-menu-child">
							<div class="footer-menu-heading">
								<h5>Contato</h5>
								<i class="fas fa-chevron-down"></i>
							</div>
							<ul>
								<li>cursos@opentech.com.br</li>
								<li>phone #</li>
								<li>instagram</li>
							</ul>
						</div>

					</div>
					<div class="footer-logo">
						<a href="<?php echo home_url();?>">
						<?php
							$svg_file = file_get_contents(get_template_directory_uri().'/images/logos/opentech-logo.svg');
								$find_string   = '<svg';
								$position = strpos($svg_file, $find_string);
								$svg_file_new = substr($svg_file, $position);
								echo "<div>" . $svg_file_new . "</div>";
						?>
						</a>
					</div>
				</div>
				<p class="site-footer-copyright">Designed by agrdesigner | Coded by Nosa</p>
			</footer>
		</div>

		<?php wp_footer(); ?>

	</body>
</html>
