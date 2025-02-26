<?php

use Etn\Core\Event\Event_Model;
use Etn\Utils\Helper;

?>

<?php do_action( 'etn_before_add_to_cart_widget_block', $single_event_id ); ?>

<div class="etn-widget etn-variable-ticket-widget">
	<?php
	$seat_plan = get_post_meta( $single_event_id, 'seat_plan_module_enable', true );
	$seat_plan_settings = get_post_meta( $single_event_id, 'seat_plan_settings', true );
	if( $seat_plan != 'yes' && !$seat_plan_settings ){
	$show_form_button = apply_filters( "etn_form_submit_visibility", true, $single_event_id );
	$event_model = new Event_Model( $single_event_id );

	if ( $event_left_ticket <= 0 ) {
		?>
        <h4><?php echo esc_html__( 'All Tickets Sold!!', "eventin" ); ?></h4>
		<?php
	} else if ( 'Expired' === $event_model->get_status() ) {
		?>
        <h4 class="registration-expired-message"><?php echo esc_html__( 'Registration Deadline Expired!!', "eventin" ); ?></h4>
		<?php
	} else if ( $show_form_button === false ) {
		?>
        <h4 class="registration-expired-message"><?php echo esc_html__( 'Registration Deadline Expired!!', "eventin" ); ?></h4>
		<?php
	} else {
		?>
        <h4 class="etn-widget-title etn-title etn-form-title">
			<?php
			$attendee_form_title = apply_filters( 'etn_event_purchase_form_title', esc_html__( "Purchase Ticket", "eventin" ) );
			echo esc_html( $attendee_form_title );
			?>
        </h4>
		<?php

		$settings            = Helper::get_settings();
		$attendee_reg_enable = ! empty( $settings["attendee_registration"] ) ? true : false;

		if ( file_exists( get_stylesheet_directory() . \Wpeventin::theme_templates_dir() . 'event/purchase-form/template/variable-ticket-form-template.php' ) ) {
			$purchase_form_template = get_stylesheet_directory() . \Wpeventin::theme_templates_dir() . 'event/purchase-form/template/variable-ticket-form-template.php';
		} elseif ( file_exists( get_template_directory() . \Wpeventin::theme_templates_dir() . 'event/purchase-form/template/variable-ticket-form-template.php' ) ) {
			$purchase_form_template = get_template_directory() . \Wpeventin::theme_templates_dir() . 'event/purchase-form/template/variable-ticket-form-template.php';
		} else {
			$purchase_form_template = \Wpeventin::templates_dir() . "event/purchase-form/template/variable-ticket-form-template.php";
		}

		$form_template = apply_filters( "etn/purchase_form_template", $purchase_form_template );

		if ( file_exists( $form_template ) ) {
			include $form_template;
		}

	}
}
	?>

	<?php
	// show if this is a zoom event
	if ( isset( $is_zoom_event ) && ( "on" == $is_zoom_event || "yes" == $is_zoom_event ) ) {
		?>
        <div class="etn-zoom-event-notice">
			<?php echo esc_html__( "[Note: This event will be held on zoom. Attendee will get zoom meeting URL through email]", "eventin" ); ?>
        </div>
		<?php
	}

	do_action('after_ticket_purchase_option_details');

    ?>

</div>

<?php do_action( 'etn_after_add_to_cart_widget_block', $single_event_id ); ?>

