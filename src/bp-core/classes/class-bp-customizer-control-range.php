<?php
/**
 * Core component class.
 *
 * @package BuddyPress
 * @subpackage Core
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * BuddyPress Customizer font size control.
 *
 * @since 2.5.0
 */
class BP_Customizer_Control_Range extends WP_Customize_Control {
	/**
	 * @var string
	 */
	public $type = 'range';

	/**
	 * Render the control.
	 *
	 * @since 2.5.0
	 */
	public function render_content() {
		$id    = 'customize-control-' . str_replace( '[', '-', str_replace( ']', '', $this->id ) );
		$class = 'customize-control customize-control-' . $this->type;

		?><li id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $class ); ?>">
			<?php if ( $this->label ) : ?>
				<label for="<?php echo esc_attr( "{$id}-range" ); ?>">
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				</label>
			<?php endif; ?>

			<div class="range-value"><?php echo esc_html( $this->value() ); ?></div>
			<input type="range" id="<?php echo esc_attr( "{$id}-range" ); ?>" <?php $this->link(); $this->input_attrs(); ?> min="1" max="100" step="1" value="<?php echo esc_attr( $this->value() ); ?>" />

			<?php if ( $this->description ) : ?>
				<p><span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span></p>
			<?php endif; ?>
		</li><?php
	}
}
