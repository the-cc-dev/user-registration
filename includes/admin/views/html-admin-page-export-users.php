<?php
/**
 * Admin View: Page - Export Users
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="ur-export-users-page">
	<div class="nav-tab-content">
	    <div class="nav-tab-inside">
	        <h3><?php _e( 'Export Users', 'user-registration' ); ?></h3>

			 	<div class="postbox">
	                <h3 class="hndle"><?php _e( 'Export Users With Extra Fields', 'user-registration' ); ?></h3>

	                <div class="inside">
	                    <p class="help">
	                        <?php _e( 'Export your users along with their extra information registered with a user registration form as a <strong>CSV</strong> file.', 'user-registration' ); ?>
	                    </p>

	                        <form action="admin-post.php?action=user_registration_export_user_entries" method="post">
	                            <p>
	                                <select name="export_users" class="forms-list">
	                           		    <?php
	                           		     	foreach( $all_forms as $form_id => $form ) {

		                            	        echo '<option value ="'. esc_attr( $form_id ) .'">'. esc_html( $form ).'</option>';
	                                		}
	                                	?>
	                                </select>
	                            </p>

	                            <?php wp_nonce_field( 'user-registration-export-users' ); ?>
	                            <input type="submit" class="button button-primary" name="user-registration_export_users" value="<?php _e( 'Export Users', 'user-registration' ) ?>">
	                        </form>
	                </div>
	            </div><!-- .postbox -->

		</div>
	</div>
</div>
