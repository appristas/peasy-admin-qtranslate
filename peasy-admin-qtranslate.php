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

add_action( 'peasy_register', function() {
	require_once( __DIR__ . '/classes/class-translatabletextfield.php' );
	\PeasyAdmin\PluggableFields::register_field( 'translatable_text', PeasyAdminQtranslate\TranslatableTextField::class );
} );
