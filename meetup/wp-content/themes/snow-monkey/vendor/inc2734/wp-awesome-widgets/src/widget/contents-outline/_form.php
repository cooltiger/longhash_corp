<?php
/**
 * @package inc2734/wp-awesome-widgets
 * @author inc2734
 * @license GPL-2.0+
 */
?>

<div class="wpaw-contents-outline-widget">
	<p>
		<?php esc_html_e( 'Show headings', 'inc2734-wp-awesome-widgets' ); ?><br>
		<input type="hidden" name="<?php echo esc_attr( $this->get_field_name( 'headings' ) ); ?>[]" value="">
		<?php foreach ( [ 'h2', 'h3', 'h4', 'h5', 'h6' ] as $heading ) : ?>
			<label>
				<input
					type="checkbox"
					name="<?php echo esc_attr( $this->get_field_name( 'headings' ) ); ?>[]"
					id="<?php echo esc_attr( $this->get_field_id( 'headings' ) ); ?>"
					value="<?php echo esc_attr( $heading ); ?>"
					<?php checked( true, in_array( $heading, $instance['headings'] ) ); ?>
				>
				<?php echo esc_html( $heading ); ?>
			</label><br>
		<?php endforeach; ?>
	</p>

	<p>
		<input type="hidden" name="<?php echo esc_attr( $this->get_field_name( 'show-mobile' ) ); ?>" value="0">
		<input
			type="checkbox"
			name="<?php echo esc_attr( $this->get_field_name( 'show-mobile' ) ); ?>"
			id="<?php echo esc_attr( $this->get_field_id( 'show-mobile' ) ); ?>"
			value="1"
			<?php checked( $instance['show-mobile'], 1 ); ?>
		>
		<label for="<?php echo esc_attr( $this->get_field_id( 'show-mobile' ) ); ?>"><?php esc_html_e( 'Also show on mobile', 'inc2734-wp-awesome-widgets' ); ?></label>
	</p>
</div>
