<?php
/**
 * Number slider field frontend template.
 *
 * @since 1.5.7
 *
 * @var array  $atts          Additional HTML attributes.
 * @var array  $class         HTML classes.
 * @var array  $datas         Data attributes.
 * @var float  $max           Upper range limit.
 * @var float  $min           Lower range limit.
 * @var float  $step          Allowed step.
 * @var string $id            Element ID.
 * @var string $required      Is field required or not.
 * @var string $value_display Value output.
 * @var string $value_hint    Value hint output.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<input
	type="range"
	<?php wpforms_html_attributes( $id, $class, $datas, $atts, true ); ?>
	<?php echo ! empty( $required ) ? 'required' : ''; ?>
	min="<?php echo esc_attr( $min ); ?>"
	max="<?php echo esc_attr( $max ); ?>"
	step="<?php echo esc_attr( $step ); ?>">

<div class="wpforms-field-number-slider-hint"
	data-hint="<?php echo esc_attr( wp_kses_post( wpforms_html_entity_decode_deep( $value_display ) ) ); ?>">
	<?php echo wp_kses_post( wpforms_html_entity_decode_deep( $value_hint ) ); ?>
</div>
