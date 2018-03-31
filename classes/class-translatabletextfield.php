<?php

namespace PeasyAdminQTranslate;

defined( 'ABSPATH' ) or die( 'Tacita' );

class TranslatableTextField extends \PeasyAdmin\Field {

	private $languages = [];
	private $languageNames = [];
	private $currentLanguage = null;

	public function __construct( $name, $label, $options_id, $options ) {
		parent::__construct( $name, $label, $options_id, $options );
		$this->setup_qtranslate();
		add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
	}

	public function enqueue_scripts() {
		wp_enqueue_script( 'qtf-js', plugins_url( 'assets/qtf-js.js', __DIR__ ), '1.0.0' );
		wp_enqueue_style( 'qtf-css', plugins_url( 'assets/qtf-css.css', __DIR__ ), '1.0.0' );
	}

	private function setup_qtranslate() {
		global $q_config;
		$this->languages = \qtranxf_getSortedLanguages();
		$this->languageNames = $q_config['language_name'];
		$this->currentLanguage = \qtranxf_getLanguage();
	}

	private function render_fields() {
		$splitted_values = \qtranxf_split( $this->get_value(), $quicktags = true );
		foreach ( $this->languages as $code ) {
			$name = esc_attr( $this->get_name() . '[' . $code . ']' );
			$currentClass = $code === $this->currentLanguage ? ' is-current' : '';
			?>
			<input
				type="text"
				data-language="<?php echo esc_attr( $code ); ?>"
				name="<?php echo $name; ?>"
				value="<?php echo esc_attr( $splitted_values[ $code ] ); ?>"
				class="qtf-input<?php echo esc_attr( $currentClass ); ?>"
			/>
			<?php
		}
	}

	private function render_buttons() {
		foreach ( $this->languages as $code ) {
			$name = esc_attr( $this->get_name() . '[' . $code . ']' );
			$currentClass = $code === $this->currentLanguage ? ' is-current' : '';
			?>
			<button
				type="button"
				class="qtf-language-button<?php echo esc_attr( $currentClass ); ?>"
				data-language="<?php echo esc_attr( $code ); ?>">
				<?php echo esc_attr( $this->languageNames[ $code ] ); ?>
			</button>
			<?php
		}
	}

	public function display() {
		?>
		<div id="<?php echo esc_attr( 'qtf_' . $this->options_id . '_' . $this->name ); ?>" class="qtf-multi-language-field">
		<?php
		$this->render_buttons();
		$this->render_fields();
		?>
		</div>
		<?php
	}

	public function process_value( $value ) {
		return qtranxf_join_b( $value );
	}

}
