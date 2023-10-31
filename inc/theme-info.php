<?php
/**
 * Add Theme info Page
 */

function fishland_fse_menu() {
	add_theme_page( esc_html__( 'Fishland FSE', 'fishland-fse' ), esc_html__( 'About Fishland FSE', 'fishland-fse' ), 'edit_theme_options', 'about-fishland-fse', 'fishland_fse_theme_page_display' );
}
add_action( 'admin_menu', 'fishland_fse_menu' );

function fishland_fse_admin_theme_style() {
	wp_enqueue_style('fishland-fse-custom-admin-style', esc_url(get_template_directory_uri()) . '/assets/css/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'fishland_fse_admin_theme_style');

/**
 * Display About page
 */
function fishland_fse_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

		<div class="Grace-wrapper">
			<div class="Grcae-info-holder">
				<div class="Grcae-info-holder-content">
					<div class="Grace-Welcome">
						<h1 class="welcomeTitle"><?php esc_html_e( 'About Theme Info', 'fishland-fse' ); ?></h1>                        
						<div class="featureDesc">
							<?php echo esc_html__( 'The Fishland FSE is a versatile WordPress theme for a seafood business, fishing, fish selling, or any other fish-related business. This free Seafood company WordPress theme can take your fish-related business to new heights as it is comprised of some of the most powerful features.', 'fishland-fse' ); ?>
						</div>
						
                        <h1 class="welcomeTitle"><?php esc_html_e( 'Theme Features', 'fishland-fse' ); ?></h1>

                        <h2><?php esc_html_e( 'Block Compatibale', 'fishland-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'fishland-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Responsive Ready', 'fishland-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'fishland-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Cross Browser Compatible', 'fishland-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'fishland-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'E-commerce', 'fishland-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'fishland-fse' ); ?>
                        </div>

					</div> <!-- .Grace-Welcome -->
				</div> <!-- .Grcae-info-holder-content -->
				
				
				<div class="Grcae-info-holder-sidebar">
                        <div class="sidebarBX">
                            <h2 class="sidebarBX-title"><?php echo esc_html__( 'Get Fishland PRO', 'fishland-fse' ); ?></h2>
                            <p><?php echo esc_html__( 'More features availbale on Premium version', 'fishland-fse' ); ?></p>
                            <a href="<?php echo esc_url( 'https://gracethemes.com/themes/fish-farming-wordpress-theme/' ); ?>" target="_blank" class="button"><?php esc_html_e( 'Get the PRO Version &rarr;', 'fishland-fse' ); ?></a>
                        </div>


						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Important Links', 'fishland-fse' ); ?></h2>

							<ul class="themeinfo-links">
                                <li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/fishland/' ); ?>" target="_blank"><?php echo esc_html__( 'Demo Preview', 'fishland-fse' ); ?></a>
								</li>                               
								<li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/documentation/fishland/#homepage-lite' ); ?>" target="_blank"><?php echo esc_html__( 'Documentation', 'fishland-fse' ); ?></a>
								</li>
								
								<li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/wordpress-themes/' ); ?>" target="_blank"><?php echo esc_html__( 'View Our Premium Themes', 'fishland-fse' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Leave us a review', 'fishland-fse' ); ?></h2>
							<p><?php echo esc_html__( 'If you are satisfied with Fishland FSE, please give your feedback.', 'fishland-fse' ); ?></p>
							<a href="https://wordpress.org/support/theme/fishland-fse/reviews/" class="button" target="_blank"><?php esc_html_e( 'Submit a review', 'fishland-fse' ); ?></a>
						</div>

				</div><!-- .Grcae-info-holder-sidebar -->	

			</div> <!-- .Grcae-info-holder -->
		</div><!-- .Grace-wrapper -->
<?php } ?>