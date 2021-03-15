<?php // Don't copy this line!
/**
 * Example of adding settings pages to LifterLMS
 *
 * @since 2019-01-28
 */
/**
* Plugin Name: LifterLMS Settings Page
* Plugin URI: https://lifterlms.com/
* Description: Add LifterLMS Settings Page / Subpages
* Version: 1.0.0
* Author: LifterLMS
* Author URI: https://lifterlms.com
* Text Domain: lifterlms-settings-page
* Domain Path: /languages
* License:     GPLv3
* License URI: https://www.gnu.org/licenses/gpl-3.0.html
* Requires at least: 5.0.3
* Tested up to: 5.0.3
*/

defined( 'ABSPATH' ) || exit;

add_filter( 'lifterlms_get_settings_pages', function( $pages ) {

	class My_LLMS_Settings_Page extends LLMS_Settings_Page {

		/**
		 * ID of the page
		 *
		 * @var string
		 */
		public $id = 'my-settings-page';

		/**
		 * Human-readable name of the page
		 * Should be translateable!
		 *
		 * @var string
		 */
		public $label = '';

		/**
		 * Constructor
		 * Define public variables & add actions / filters.
		 *
		 * @return  void
		 */
		public function __construct() {

			// Make the title of the page translateable.
			$this->label = __( 'My Settings', 'lifterlms' );

			// Adds the settings page to the main settings navigation.
			add_filter( 'lifterlms_settings_tabs_array', array( $this, 'add_settings_page' ), 20 );

			// Outputs the page's subtab navigation.
			add_action( 'lifterlms_sections_' . $this->id, array( $this, 'output_sections_nav' ) );

			// Outputs the HTML of the page.
			add_action( 'lifterlms_settings_' . $this->id, array( $this, 'output' ) );

			// Save's the settings to the database on form submission.
			add_action( 'lifterlms_settings_save_' . $this->id, array( $this, 'save' ) );

		}

		/**
		 * Define the page's subtabs.
		 *
		 * @return   array
		 */
		public function get_sections() {

			$sections = array(
				'main' => __( 'My Settings', 'lifterlms' ),
				'tab1' => __( 'Tab 1', 'lifterlms' ),
				'tab2' => __( 'Tab 2', 'lifterlms' ),
				'tab3' => __( 'Tab 3', 'lifterlms' ),
			);

			return apply_filters( 'llms_' . $this->id . '_settings_sections', $sections );

		}

		/**
		 * Get settings array
		 * @return array
		 * @since   3.5.0
		 * @version 3.5.0
		 */
		public function get_settings() {

			// Determine what the current subtab is.
			$curr_section = $this->get_current_section();

			$settings = array(
				array(
					'class' => 'top',
					'id' => 'llms_' . $this->id . '_' . $curr_section . '_settings_start',
					'type' => 'sectionstart',
				),
			);

			if ( 'main' === $curr_section ) {

				$settings[] = array(
					'id' => 'llms_' . $this->id . '_' . $curr_section . '_settings_title',
					'title' => __( 'My Settings Title', 'lifterlms' ),
					'type' => 'title',
				);

				$settings[] = array(
					'id' => 'llms_' . $this->id . '_' . $curr_section . '_settings_subtitle',
					'desc' => __( 'This is a subtitle description.', 'lifterlms' ),
					'title' => __( 'My Settings Subtitle', 'lifterlms' ),
					'type' => 'subtitle',
				);

				$settings[] = array(
					'desc' => __( 'Checkbox description', 'lifterlms' ) . '<br><span class="description">' . __( 'With more information below.', 'lifterlms' ) . '</span>',
					'id' => 'llms_my_cb_setting', // This will map to the `option_name` in the database
					'title' => __( 'A Checkbox Setting', 'lifterlms' ),
					'type' => 'checkbox',
					'default' => 'no', // Checkboxes save "yes" when checked and "no" when unchecked.
				);

				$settings[] = array(
					'title' => __( 'A regular old text field', 'lifterlms' ),
					'desc' 		=> '<br>' . __( 'Another description. The "&lt;br&gt;" is required because of important reasons.', 'lifterlms' ),
					'id' 		=> 'llms_my_text_setting', // All setting field id's map to the `option_name` field in the database.
					'type' 		=> 'text', // can use text, email, number, password, & textarea the same way as this field.
					'default'	=> __( 'This is the default value of this field', 'lifterlms' ),
				);

			} elseif ( 'tab1' === $curr_section ) {

				$settings[] = array(
					'id' => 'llms_' . $this->id . '_' . $curr_section . '_settings_title',
					'title' => __( 'My Settings Title', 'lifterlms' ),
					'type' => 'title',
				);

				$settings[] = array(
					'class'     => 'llms-select2', // remove this to make it a regular (non searchable) select field.
					'title' 	=> __( 'Searchable select field', 'lifterlms' ),
					'desc'      => '<br>' . __( 'With a description.', 'lifterlms' ),
					'id' 		=> 'llms_my_select_field',
					'default'	=> 'US',
					'type' 		=> 'select', // accepts "multiselect" also
					'options'   => array(
						'key1' => __( 'Key 1', 'lifterlms' ),
						'key2' => __( 'Some other key', 'lifterlms' ),
						'key3' => __( 'Etc... you get it?', 'lifterlms' ),
					),
				);

			} elseif ( 'tab2' === $curr_section ) {

				$settings[] = array(
					'id' => 'llms_' . $this->id . '_' . $curr_section . '_settings_title',
					'title' => __( 'My Settings Title', 'lifterlms' ),
					'type' => 'title',
				);

				$settings[] = 			array(
					'class'		=> 'llms-select2-post',
					'custom_attributes' => array(
						'data-allow-clear' => true,
						'data-post-type' => 'page', // use any registered post type to search that post type.
						'data-placeholder' => __( 'Select a page', 'lifterlms' ),
					),
					'desc' => '<br/>' . __( 'Search for a page', 'lifterlms' ),
					'id' => 'llms_my_page_setting',
					'options' => llms_make_select2_post_array( get_option( 'llms_my_page_setting', '' ) ), // formats data properly.
					'title' => __( 'My Page Setting', 'lifterlms' ),
					'type' => 'select',
				);

			}

			$settings[] = array(
				'id' => 'llms_' . $this->id . '_' . $curr_section . '_settings_end',
				'type' => 'sectionend',
			);

			return $settings;

		}

	}

	$pages[] = new My_LLMS_Settings_Page();

	return $pages;

}, 999 );
