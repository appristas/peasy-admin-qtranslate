<?php
/**
 * Plugin Name: Peasy Admin: qTranslate
 * Plugin URI: https://github.com/appristas/peasy-admin-qtranslate
 * Description: Peasy Admin qTranslate Translateable texts
 * Version: 1.0.0
 * Author: Appristas LLC
 * Author URI: www.appristas.io
 */

defined( 'ABSPATH' ) or die( 'Tacita' );

add_action( 'admin_init', function() {
	if ( ! function_exists( 'qtranxf_init_language' ) ) {
		add_action( 'admin_notices', function() {
		?>
		<div class="notice notice-warning is-dismissible">
	        <p><?php esc_html_e( 'Warning: qTranslate plugin is not active. This Peasy Admin Qtranslate will not work propely without qTranslate.', 'peasy-admin-qtranslate' ); ?></p>
	    </div>
		<?php
		} );
	}
} );

add_action( 'peasy_register', function() {
	if ( ! function_exists( 'qtranxf_init_language' ) ) {
		return;
	}
	require_once( __DIR__ . '/classes/class-translatabletextfield.php' );
	\PeasyAdmin\PluggableFields::register_field( 'translatable_text', PeasyAdminQtranslate\TranslatableTextField::class );
} );
