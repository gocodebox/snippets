<?php // Don't copy this line!
/**
 * llms-sl-custom-profile-tab.php
 *
 * @since 2017-10-21
 */

/**
 * Simple class to add a custom tab to a LifterLMS Social Learning profile
 * Please read the comments and replace with your own comments
 * If you need further assistance, hire an expert for some assistance: lifterlms.com/experts
 */
class My_Custom_SL_Profile_Tab {

	// this will be the URL endpoint used for the tab's permalink
	private static $my_tab_slug = 'my-tab';

	/**
	 * Add filters and actions
	 * You probably shouldn't have to edit this function
	 * @return   void
	 */
	public static function init() {
		add_filter( 'llms_sl_directory_profile_navigation', array( __CLASS__, 'register_tab' ) );
		add_action( 'llms_sl_profile_main_' . self::$my_tab_slug, array( __CLASS__, 'output_content' ) );
	}

	/**
	 * Add a tab to the LifterLMS Social Learning Profile navigation bar
	 * @param    array     $tabs  array of existing tabs & data
	 * @return   array
	 */
	public static function register_tab( $tabs ) {

		// we need this to ensure we add the correct URL for the custom tab
		$student = LLMS_SL_Directory::get_viewed_student();

		// add the tab
		$tabs[ self::$my_tab_slug ] = array(

			// name of the tab as displayed on the navigation
			'title' => __( 'My Tab', 'my-text-domain' ),

		);

		// URL to the tab (you shouldn't have to edit this unless you're super fancy)
		if ( $student ) {
			$tabs[ self::$my_tab_slug ]['url'] = LLMS_SL_Directory::get_profile_url( $student, self::$my_tab_slug );
		}

		return $tabs;

	}

	/**
	 * Output the actual content for your tab
	 * This function follows the html structure of the Social Learning cards used in the core
	 *
	 * @param    obj     $student  instance of the currently viewed LLMS_Student
	 * @return   void
	 */
	public static function output_content( $student ) {

		llms_sl_card_open_html( 'profile-' . self::$my_tab_slug, array( self::$my_tab_slug, 'profile' ) ); ?>

			<!--
				this is the header, most SL cards have headers with an icon
				We're using Font Awesome in the core, grab a custom icon from the FA browser at fontawesome.io/icons/
				You can delete the Icon or, alternatively, load in your own custom icons from elsewhere
			-->
			<header class="llms-sl-card-header">
				<h3 class="llms-sl-card-title">
					<i class="fa fa-coffee" aria-hidden="true"></i>
					<?php _e( 'My Tab', 'my-text-domain' ); ?>
				</h3>
			</header>

			<div class="llms-sl-card-main">
				This is the main body of your tab. Your content should go within this div
			</div>

			<footer class="llms-sl-card-footer">
				Footer content can go here should you require a footer, otherwise delete this footer element
			</footer>

		<?php llms_sl_card_close_html();

	}

}

// register actions & filters on WP Init
add_action( 'init', array( 'My_Custom_SL_Profile_Tab', 'init' ) );