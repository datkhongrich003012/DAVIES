<?php
/**
 * The 404 page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage ExS
 * @since 0.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header();

$heading = exs_option( '404_heading', esc_html__( '404', 'exs' ) );
$subheading = exs_option( '404_subheading', esc_html__( 'Oops, page not found!', 'exs' ) );
$text_top = exs_option( '404_text_top', esc_html__( 'You can search what interested:', 'exs' ) );
$show_searchform = exs_option( '404_show_searchform', true );
$text_bottom = exs_option( '404_text_bottom', esc_html__( 'Or', 'exs' ) );
$text_button = exs_option( '404_text_button', esc_html__( 'Go To Home', 'exs' ) );
$text_button_url = exs_option( '404_text_button_url' );
if ( empty( $text_button_url ) ) {
	$text_button_url = home_url( '/' );
}

?>
	<div id="main" class="main section-404 container-720">
		<div class="container pt-5 pb-5">
			<main>
                  <img style="background:transparent"  src="http://localhost/4SBottom/wp-content/uploads/2022/06/86875-t-rex-404-error-page.gif"> 
			</main>
		</div><!-- .container -->
	</div><!-- #main -->
<?php
get_footer();
