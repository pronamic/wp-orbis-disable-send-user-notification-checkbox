<?php
/*
Plugin Name: Orbis Disable Send User Notification Checkbox
Plugin URI: https://github.com/wp-orbis
Description: The Orbis Disable Send User Notification Checkbox plugin disables the 'Send User Notification' checkbox.

Version: 1.0.0
Requires at least: 3.5

Author: Pronamic
Author URI: http://www.pronamic.eu/

License: Copyright (c) Pronamic

GitHub URI: https://github.com/wp-orbis/wp-orbis-disable-send-user-notification-checkbox
*/

/**
 * Action 'user_new_form'.
 *
 * @link https://github.com/WordPress/WordPress/blob/5.4/wp-admin/user-new.php#L575-L576
 * @link https://github.com/WordPress/WordPress/blob/5.4/wp-admin/user-new.php#L543-L549
 */
\add_action( 'user_new_form', function() {
	?>
	<script type="text/javascript">
		jQuery( '#send_user_notification' ).prop( 'checked', false ).prop( 'disabled', true );
	</script>
	<?php
} );
