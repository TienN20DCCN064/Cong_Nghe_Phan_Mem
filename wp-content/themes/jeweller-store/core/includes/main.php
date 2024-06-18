<?php

/**
* Get started notice
*/

add_action( 'wp_ajax_jeweller_store_dismissed_notice_handler', 'jeweller_store_ajax_notice_handler' );

/**
 * AJAX handler to store the state of dismissible notices.
 */
function jeweller_store_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function jeweller_store_deprecated_hook_admin_notice() {
        // Check if it's been dismissed...
        if ( ! get_option('dismissed-get_started', FALSE ) ) {?>

            <?php
            $current_screen = get_current_screen();
				if ($current_screen->id !== 'appearance_page_jeweller-store-guide-page') {
             $jeweller_store_comments_theme = wp_get_theme(); ?>
            <div class="jeweller-store-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
			<div class="jeweller-store-notice">
				<div class="jeweller-store-notice-img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/admin-logo.png'); ?>" alt="<?php esc_attr_e('logo', 'jeweller-store'); ?>">
				</div>
				<div class="jeweller-store-notice-content">
					<div class="jeweller-store-notice-heading"><?php esc_html_e('Thanks for installing ','jeweller-store'); ?><?php echo esc_html( $jeweller_store_comments_theme ); ?></div>
					<p><?php printf(__('To avail the benefits of the premium edition, kindly click on <a href="%s">More Options</a>.', 'jeweller-store'), esc_url(admin_url('themes.php?page=jeweller-store-guide-page'))); ?></p>
				</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'jeweller_store_deprecated_hook_admin_notice' );

function jeweller_store_admin_enqueue_scripts() {
	wp_enqueue_style( 'jeweller-store-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
	wp_enqueue_script( 'jeweller-store-admin-script', get_template_directory_uri() . '/js/jeweller-store-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'jeweller-store-admin-script', 'jeweller_store_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'jeweller_store_admin_enqueue_scripts' );

add_action( 'admin_menu', 'jeweller_store_getting_started' );
function jeweller_store_getting_started() {
	add_theme_page( esc_html__('Get Started', 'jeweller-store'), esc_html__('Get Started', 'jeweller-store'), 'edit_theme_options', 'jeweller-store-guide-page', 'jeweller_store_test_guide');
}

if ( ! defined( 'JEWELLER_STORE_DOCS_FREE' ) ) {
define('JEWELLER_STORE_DOCS_FREE',__('https://demo.misbahwp.com/docs/jeweller-store-free-docs/','jeweller-store'));
}
if ( ! defined( 'JEWELLER_STORE_DOCS_PRO' ) ) {
define('JEWELLER_STORE_DOCS_PRO',__('https://demo.misbahwp.com/docs/jeweller-store-pro-docs','jeweller-store'));
}
if ( ! defined( 'JEWELLER_STORE_BUY_NOW' ) ) {
define('JEWELLER_STORE_BUY_NOW',__('https://www.misbahwp.com/products/jeweller-store-wordpress-theme/','jeweller-store'));
}
if ( ! defined( 'JEWELLER_STORE_SUPPORT_FREE' ) ) {
define('JEWELLER_STORE_SUPPORT_FREE',__('https://wordpress.org/support/theme/jeweller-store','jeweller-store'));
}
if ( ! defined( 'JEWELLER_STORE_REVIEW_FREE' ) ) {
define('JEWELLER_STORE_REVIEW_FREE',__('https://wordpress.org/support/theme/jeweller-store/reviews/#new-post','jeweller-store'));
}
if ( ! defined( 'JEWELLER_STORE_DEMO_PRO' ) ) {
define('JEWELLER_STORE_DEMO_PRO',__('https://demo.misbahwp.com/jeweller-store/','jeweller-store'));
}
if( ! defined( 'JEWELLER_STORE_THEME_BUNDLE' ) ) {
define('JEWELLER_STORE_THEME_BUNDLE',__('https://www.misbahwp.com/products/wordpress-bundle/','jeweller-store'));
}

function jeweller_store_test_guide() { ?>
	<?php $jeweller_store_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( JEWELLER_STORE_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'jeweller-store' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'jeweller-store' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( JEWELLER_STORE_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'jeweller-store' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( JEWELLER_STORE_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'jeweller-store' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','jeweller-store'); ?><?php echo esc_html( $jeweller_store_theme ); ?>  <span><?php esc_html_e('Version: ', 'jeweller-store'); ?><?php echo esc_html($jeweller_store_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $jeweller_store_theme->get_screenshot() ); ?>" />
				<div id="description-insidee">
					<?php
						$jeweller_store_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $jeweller_store_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postboxx donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'jeweller-store' ); ?></h3>
				<div class="insidee">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','jeweller-store'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( JEWELLER_STORE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'jeweller-store' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( JEWELLER_STORE_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'jeweller-store' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( JEWELLER_STORE_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'jeweller-store' ) ?></a>
					</div>
				</div>
				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'jeweller-store' ); ?></h3>
				<div class="insidee theme-bundle">
					<p class="offer"><?php esc_html_e('Get 80+ Perfect WordPress Theme In A Single Package at just $99."','jeweller-store'); ?></p>
					<p class="coupon"><?php esc_html_e('Get Our Theme Pack of 80+ WordPress Themes At 15% Off','jeweller-store'); ?><span class="coupon-code"><?php esc_html_e('"Bundleup15"','jeweller-store'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( JEWELLER_STORE_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'jeweller-store' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','jeweller-store'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','jeweller-store'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','jeweller-store'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','jeweller-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('LearnPress Campatiblity','jeweller-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','jeweller-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','jeweller-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','jeweller-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','jeweller-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','jeweller-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','jeweller-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','jeweller-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','jeweller-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','jeweller-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','jeweller-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','jeweller-store'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>
<?php } ?>