<?php

/**
 * Class VcGridsCommon
 */
abstract class VcGridsCommon {

	protected static $basicGrid;
	protected static $masonryGrid;
	protected static $masonryMediaGrid;
	protected static $mediaGrid;
	protected static $btn3Params;
	protected static $gridColsList;
	protected static function initData() {
	}
	/**
	 * Basic Grid Common Settings
	 */
	public static function getBasicAtts() {
	}
	/**
	 * Media grid common settings
	 */
	public static function getMediaCommonAtts() {
	}
	public static function getMasonryCommonAtts() {
	}
	public static function getMasonryMediaCommonAtts() {
	}
	/**
	 * Function to search array
	 */
	public static function arraySearch( $array, $column, $value ) {
	}
}
/**
 * Automated shortcode mapping
 *
 * Automapper adds settings tab for VC settings tabs with ability to map custom shortcodes to VC editors,
 * if shortcode is not mapped by default or developers haven't done this yet.
 * No more shortcode copy/paste. Add any third party shortcode to the list of VC menu elements for reuse.
 * Edit params, values and description.
 *
 * @since 4.1
 */
class Vc_Automapper {

	/**
	 * @var bool
	 */
	protected static $disabled = \false;
	protected $title;
	/**
	 *
	 */
	public function __construct() {
	}
	/**
	 *
	 */
	public function addAjaxActions() {
	}
	/**
	 * Builds html for Automapper CRUD like administration block
	 *
	 * @return bool
	 */
	public function renderHtml() {
	}
	/**
	 * @param $shortcode
	 */
	public function renderListItem( $shortcode ) {
	}
	/**
	 *
	 */
	public function renderMapFormTpl() {
	}
	/**
	 *
	 */
	public function renderTemplates() {
	}
	public function create() {
	}
	public function update() {
	}
	public function delete() {
	}
	public function read() {
	}
	/**
	 * Ajax result output
	 *
	 * @param $data
	 */
	public function result( $data ) {
	}
	/**
	 * Setter/Getter for Disabling Automapper
	 *
	 * @static
	 *
	 * @param bool $disable
	 */
	public static function setDisabled( $disable = \true ) {
	}
	/**
	 * @return bool
	 */
	public static function disabled() {
	}
	/**
	 * Setter/Getter for Automapper title
	 *
	 * @static
	 *
	 * @param string $title
	 */
	public function setTitle( $title ) {
	}
	/**
	 * @return string|void
	 */
	public function title() {
	}
	/**
	 *
	 */
	public static function map() {
	}
}
/**
 * Shortcode as model for automapper. Provides crud functionality for storing data for shortcodes that mapped by ATM
 *
 * @see Vc_Automapper
 * @since 4.1
 */
class Vc_Automap_Model {

	/**
	 * @var string
	 */
	protected static $option_name = 'vc_automapped_shortcodes';
	/**
	 * @var
	 */
	protected static $option_data;
	/**
	 * @var array|bool
	 */
	public $id = \false;
	public $tag;
	/**
	 * @var mixed
	 */
	protected $data;
	/**
	 * @var array
	 */
	protected $vars = array( 'tag', 'name', 'category', 'description', 'params' );
	public $name;
	/**
	 * @param $data
	 */
	public function __construct( $data ) {
	}
	/**
	 * @return array
	 */
	public static function findAll() {
	}
	/**
	 * @return array|mixed
	 */
	final protected static function loadOptionData() {
	}
	/**
	 * @param $key
	 *
	 * @return null
	 */
	public function get( $key ) {
	}
	/**
	 * @param $attr
	 * @param null $value
	 */
	public function set( $attr, $value = \null ) {
	}
	/**
	 * @return bool
	 */
	public function save() {
	}
	/**
	 * @return bool
	 */
	public function delete() {
	}
	/**
	 * @return bool
	 */
	public function isValid() {
	}
	/**
	 * @return bool
	 */
	protected function saveOption() {
	}
	/**
	 * @return bool
	 */
	protected function deleteOption() {
	}
}
/**
 * Settings page for VC. list of tabs for function composer
 *
 * Settings page for VC creates menu item in admin menu as subpage of Settings section.
 * Settings are build with WP settings API and organized as tabs.
 *
 * List of tabs
 * 1. General Settings - set access rules and allowed content types for editors.
 * 2. Design Options - custom color and spacing editor for VC shortcodes elements.
 * 3. Custom CSS - add custom css to your WP pages.
 * 4. Product License - license key activation for automatic VC updates.
 * 5. My Shortcodes - automated mapping tool for shortcodes.
 *
 * @link http://codex.wordpress.org/Settings_API WordPress settings API
 * @since 3.4
 */
class Vc_Settings {

	public $tabs;
	public $deactivate;
	public $locale;
	/**
	 * @var string
	 */
	protected $option_group = 'wpb_js_composer_settings';
	/**
	 * @var string
	 */
	protected $page = 'vc_settings';
	/**
	 * @var string
	 */
	protected static $field_prefix = 'wpb_js_';
	/**
	 * @var string
	 */
	protected static $notification_name = 'wpb_js_notify_user_about_element_class_names';
	/**
	 * @var
	 */
	protected static $color_settings;
	/**
	 * @var
	 */
	protected static $defaults;
	/**
	 * @var
	 */
	protected $composer;
	/**
	 * @var array
	 */
	protected $google_fonts_subsets_default = array( 'latin' );
	/**
	 * @var array
	 */
	protected $google_fonts_subsets = array( 'latin', 'vietnamese', 'cyrillic', 'latin-ext', 'greek', 'cyrillic-ext', 'greek-ext' );
	/**
	 * @var array
	 */
	public $google_fonts_subsets_excluded = array();
	/**
	 * @param string $field_prefix
	 */
	public static function setFieldPrefix( $field_prefix ) {
	}
	/**
	 * @return string
	 */
	public function page() {
	}
	/**
	 * @return bool
	 */
	public function isEditorEnabled() {
	}
	/**
	 *
	 */
	public function setTabs() {
	}
	/**
	 * @return mixed|void
	 */
	public function getTabs() {
	}
	/**
	 * @return bool
	 */
	public function showConfigurationTabs() {
	}
	/**
	 * Render
	 *
	 * @param $tab
	 * @throws \Exception
	 */
	public function renderTab( $tab ) {
	}
	/**
	 * Init settings page && menu item
	 * vc_filter: vc_settings_tabs - hook to override settings tabs
	 */
	public function initAdmin() {
	}
	/**
	 * Creates new section.
	 *
	 * @param $tab - tab key name as tab section
	 * @param $title - Human title
	 * @param $callback - function to build section header.
	 */
	public function addSection( $tab, $title = \null, $callback = \null ) {
	}
	/**
	 * Create field in section.
	 *
	 * @param $tab
	 * @param $title
	 * @param $field_name
	 * @param $sanitize_callback
	 * @param $field_callback
	 * @param array             $args
	 *
	 * @return $this
	 */
	public function addField( $tab, $title, $field_name, $sanitize_callback, $field_callback, $args = array() ) {
	}
	/**
	 *
	 */
	public function restoreColor() {
	}
	/**
	 * @param $option_name
	 *
	 * @param bool        $defaultValue
	 *
	 * @return mixed
	 */
	public static function get( $option_name, $defaultValue = \false ) {
	}
	/**
	 * @param $option_name
	 * @param $value
	 *
	 * @return bool
	 */
	public static function set( $option_name, $value ) {
	}
	/**
	 * Set up the enqueue for the CSS & JavaScript files.
	 */
	public function adminLoad() {
	}
	/**
	 *
	 */
	public function custom_css_field_callback() {
	}
	/**
	 * Not responsive checkbox callback function
	 */
	public function not_responsive_css_field_callback() {
	}
	/**
	 * Google fonts subsets callback
	 */
	public function google_fonts_subsets_callback() {
	}
	public function local_google_fonts_callback() {
	}
	/**
	 * Get subsets for google fonts.
	 *
	 * @return array
	 * @since  4.3
	 * @access public
	 */
	public function googleFontsSubsets() {
	}
	/**
	 * @return array
	 */
	public function googleFontsSubsetsDefault() {
	}
	/**
	 * @return array
	 */
	public function getGoogleFontsSubsets() {
	}
	/**
	 * @param $subsets
	 *
	 * @return bool
	 */
	public function setGoogleFontsSubsets( $subsets ) {
	}
	/**
	 * @return array
	 */
	public function getGoogleFontsSubsetsExcluded() {
	}
	/**
	 * @param $excluded
	 *
	 * @return bool
	 */
	public function setGoogleFontsSubsetsExcluded( $excluded ) {
	}
	/**
	 * Not responsive checkbox callback function
	 */
	public function use_custom_callback() {
	}
	/**
	 * @param $args
	 */
	public function color_callback( $args ) {
	}
	/**
	 *
	 */
	public function margin_callback() {
	}
	/**
	 *
	 */
	public function gutter_callback() {
	}
	/**
	 *
	 */
	public function responsive_max_callback() {
	}
	public function responsive_md_callback() {
	}
	public function responsive_lg_callback() {
	}
	/**
	 *
	 */
	public function compiled_js_composer_less_callback() {
	}
	/**
	 * @param $key
	 *
	 * @return string
	 */
	public function getDefault( $key ) {
	}
	/**
	 * Callback function for settings section
	 *
	 * @param $tab
	 */
	public function setting_section_callback_function( $tab ) {
	}
	/**
	 * @param $rules
	 *
	 * @return mixed
	 */
	public function sanitize_not_responsive_css_callback( $rules ) {
	}
	/**
	 * @param $checkbox
	 *
	 * @return mixed
	 */
	public function sanitize_local_google_fonts_callback( $checkbox ) {
	}
	/**
	 * @param $subsets
	 *
	 * @return array
	 */
	public function sanitize_google_fonts_subsets_callback( $subsets ) {
	}
	/**
	 * @param $rules
	 *
	 * @return mixed
	 */
	public function sanitize_use_custom_callback( $rules ) {
	}
	/**
	 * @param $css
	 *
	 * @return mixed
	 */
	public function sanitize_custom_css_callback( $css ) {
	}
	/**
	 * @param $css
	 *
	 * @return mixed
	 */
	public function sanitize_compiled_js_composer_less_callback( $css ) {
	}
	/**
	 * @param $color
	 *
	 * @return mixed
	 */
	public function sanitize_color_callback( $color ) {
	}
	/**
	 * @param $margin
	 *
	 * @return mixed
	 */
	public function sanitize_margin_callback( $margin ) {
	}
	/**
	 * @param $gutter
	 *
	 * @return mixed
	 */
	public function sanitize_gutter_callback( $gutter ) {
	}
	/**
	 * @param $responsive_max
	 *
	 * @return mixed
	 */
	public function sanitize_responsive_max_callback( $responsive_max ) {
	}
	/**
	 * @param $responsive_md
	 *
	 * @return mixed
	 */
	public function sanitize_responsive_md_callback( $responsive_md ) {
	}
	/**
	 * @param $responsive_lg
	 *
	 * @return mixed
	 */
	public function sanitize_responsive_lg_callback( $responsive_lg ) {
	}
	/**
	 * @param $number
	 *
	 * @return int
	 */
	public static function _isNumberValid( $number ) {
	}
	/**
	 * @param $gutter
	 *
	 * @return int
	 */
	public static function _isGutterValid( $gutter ) {
	}
	/**
	 * @return mixed|void
	 */
	public function useCustomCss() {
	}
	/**
	 * @return mixed|void
	 */
	public function getCustomCssVersion() {
	}
	/**
	 *
	 */
	public function rebuild() {
	}
	/**
	 *
	 */
	public static function buildCustomColorCss() {
	}
	/**
	 * Builds custom css file using css options from vc settings.
	 *
	 * @return bool
	 */
	public static function buildCustomCss() {
	}
	/**
	 * @param \WP_Filesystem_Direct $wp_filesystem
	 * @param $option
	 * @param $filename
	 *
	 * @return bool|string
	 */
	public static function checkCreateUploadDir( $wp_filesystem, $option, $filename ) {
	}
	/**
	 * @return string
	 */
	public static function uploadDir() {
	}
	/**
	 * @return string
	 */
	public static function uploadURL() {
	}
	/**
	 * @return string
	 */
	public static function getFieldPrefix() {
	}
	/**
	 * @param string $url
	 * @return \WP_Filesystem_Direct|bool
	 */
	protected static function getFileSystem( $url = '' ) {
	}
	/**
	 * @return string
	 */
	public function getOptionGroup() {
	}
}
/**
 * WPBakery WPBakery Page Builder Plugin
 *
 * @package WPBakeryPageBuilder
 */
/**
 * Manage license
 *
 * Activation/deactivation is done via support portal and does not use Envato username and
 * api_key anymore
 */
class Vc_License {

	/**
	 * Option name where license key is stored
	 *
	 * @var string
	 */
	protected static $license_key_option = 'js_composer_purchase_code';
	/**
	 * Option name where license key token is stored
	 *
	 * @var string
	 */
	protected static $license_key_token_option = 'license_key_token';
	/**
	 * @var string
	 */
	protected static $support_host = 'https://support.wpbakery.com';
	/**
	 * @var string
	 */
	public $error = \null;
	public function init() {
	}
	/**
	 * Output notice
	 *
	 * @param string $message
	 * @param bool   $success
	 */
	public function outputNotice( $message, $success = \true ) {
	}
	/**
	 * Show error
	 *
	 * @param string $error
	 */
	public function showError( $error ) {
	}
	/**
	 * Output last error
	 */
	public function outputLastError() {
	}
	/**
	 * Output successful activation message
	 */
	public function outputActivatedSuccess() {
	}
	/**
	 * Output successful deactivation message
	 */
	public function outputDeactivatedSuccess() {
	}
	/**
	 * Finish pending activation/deactivation
	 *
	 * 1) Make API call to support portal
	 * 2) Receive success status and license key
	 * 3) Set new license key
	 *
	 * @param bool   $activation
	 * @param string $user_token
	 *
	 * @return bool
	 */
	public function finishActivationDeactivation( $activation, $user_token ) {
	}
	/**
	 * @return boolean
	 */
	public function isActivated() {
	}
	/**
	 * Check license key from remote
	 *
	 * Function is used by support portal to check if VC w/ specific license is still installed
	 */
	public function checkLicenseKeyFromRemote() {
	}
	public function checkLicenseKey() {
	}
	/**
	 * Generate action URL
	 *
	 * @return string
	 */
	public function generateActivationUrl() {
	}
	/**
	 * Generate action URL
	 *
	 * @return string
	 */
	public function generateDeactivationUrl() {
	}
	/**
	 * Start activation process and output redirect URL as JSON
	 */
	public function startActivationResponse() {
	}
	/**
	 * Start deactivation process and output redirect URL as JSON
	 */
	public function startDeactivationResponse() {
	}
	/**
	 * Set license key
	 *
	 * @param string $license_key
	 */
	public function setLicenseKey( $license_key ) {
	}
	/**
	 * Get license key
	 *
	 * @return string
	 */
	public function getLicenseKey() {
	}
	/**
	 * Check if specified license key is valid
	 *
	 * @param string $license_key
	 *
	 * @return bool
	 */
	public function isValid( $license_key ) {
	}
	/**
	 * Set up license activation notice if needed
	 *
	 * Don't show notice on dev environment
	 */
	public function setupReminder() {
	}
	/**
	 * Check if current enviroment is dev
	 *
	 * Environment is considered dev if host is:
	 * - ip address
	 * - tld is local, dev, wp, test, example, localhost or invalid
	 * - no tld (localhost, custom hosts)
	 *
	 * @param string $host Hostname to check. If null, use HTTP_HOST
	 *
	 * @return boolean
	 */
	public static function isDevEnvironment( $host = \null ) {
	}
	public function adminNoticeLicenseActivation() {
	}
	/**
	 * Get license key token
	 *
	 * @return string
	 */
	public function getLicenseKeyToken() {
	}
	/**
	 * Set license key token
	 *
	 * @param string $token
	 *
	 * @return string
	 */
	public function setLicenseKeyToken( $token ) {
	}
	/**
	 * Return new license key token
	 *
	 * Token is used to change license key from remote location
	 *
	 * Format is: timestamp|20-random-characters
	 *
	 * @return string
	 */
	public function generateLicenseKeyToken() {
	}
	/**
	 * Generate and set new license key token
	 *
	 * @return string
	 */
	public function newLicenseKeyToken() {
	}
	/**
	 * Check if specified license key token is valid
	 *
	 * @param string $token_to_check SHA1 hashed token
	 * @param int    $ttl_in_seconds Time to live in seconds. Default = 20min
	 *
	 * @return boolean
	 */
	public function isValidToken( $token_to_check, $ttl_in_seconds = 1200 ) {
	}
	/**
	 * Check if license key format is valid
	 *
	 * license key is version 4 UUID, that have form xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx
	 * where x is any hexadecimal digit and y is one of 8, 9, A, or B.
	 *
	 * @param string $license_key
	 *
	 * @return boolean
	 */
	public function isValidFormat( $license_key ) {
	}
	/**
	 * @return string|void
	 */
	/**
	 * @return string|void
	 */
	public static function getSiteUrl() {
	}
}
/**
 * Manage role.
 *
 * @since 4.8
 *
 * Class Vc_Roles
 */
class Vc_Roles {

	protected $post_types             = \false;
	protected $vc_excluded_post_types = \false;
	protected $parts                  = array( 'post_types', 'backend_editor', 'frontend_editor', 'unfiltered_html', 'post_settings', 'settings', 'templates', 'shortcodes', 'grid_builder', 'presets', 'dragndrop' );
	protected static $parts_cache     = \null;
	/**
	 * Get list of parts
	 *
	 * @return mixed
	 */
	public function getParts() {
	}
	/**
	 * Check required capability for this role to have user access.
	 *
	 * @param $part
	 *
	 * @return array|string
	 */
	public function getPartCapability( $part ) {
	}
	/**
	 * @param $role
	 * @param $caps
	 * @return bool
	 */
	public function hasRoleCapability( $role, $caps ) {
	}
	/**
	 * @return \WP_Roles
	 */
	public function getWpRoles() {
	}
	/**
	 * @param array $params
	 * @return array
	 * @throws \Exception
	 */
	public function save( $params = array() ) {
	}
	/**
	 * @return array|bool
	 */
	public function getPostTypes() {
	}
	/**
	 * @return bool|mixed|void
	 */
	public function getExcludePostTypes() {
	}
}
/**
 * JWPLayer loader.
 *
 * @since 4.3
 */
class Vc_Vendor_Jwplayer {

	/**
	 * Dublicate jwplayer logic for editor, when used in frontend editor mode.
	 *
	 * @since 4.3
	 */
	public function load() {
	}
	/**
	 * @param $output
	 *
	 * @return mixed|string
	 * @since 4.3
	 */
	public function renderShortcodes( $output ) {
	}
	/**
	 * @param $content
	 * @return mixed
	 */
	public function wrapPlaceholder( $content ) {
	}
	/**
	 * @return string
	 */
	public function renderPlaceholder() {
	}
	/**
	 * @param $output
	 *
	 * @return string
	 * @since 4.3, due to #1065
	 */
	public function renderShortcodesPreview( $output ) {
	}
	/**
	 * @since 4.3
	 * @todo check it for preview mode (check is it needed)
	 */
	public function vc_load_iframe_jscss() {
	}
}
/**
 * LayerSlider loader.
 * Adds layerSlider shortcode to WPBakery Page Builder and fixes issue in frontend editor
 *
 * @since 4.3
 */
class Vc_Vendor_Layerslider {

	/**
	 * @var int - used to detect id for layerslider in frontend
	 * @deprecated
	 */
	protected static $instanceIndex = 1;
	/**
	 * Add layerslayer shortcode to WPBakery Page Builder, and add fix for ID in frontend editor
	 *
	 * @since 4.3
	 */
	public function load() {
	}
	/**
	 * Add shortcode and filters for layerslider id
	 *
	 * @since 4.3
	 */
	public function buildShortcode() {
	}
	/**
	 * @param $output
	 *
	 * @return string
	 * @since 4.3
	 */
	public function setId( $output ) {
	}
	/**
	 * @param $markup
	 * @param $slider
	 * @param $id
	 * @return string
	 * @deprecated 5.2
	 * @since 4.3
	 */
	public function setMarkupId( $markup, $slider, $id ) {
	}
	/**
	 * Mapping settings for lean method.
	 *
	 * @param $tag
	 *
	 * @return array
	 * @since 4.9
	 */
	public function addShortcodeSettings( $tag ) {
	}
}
/**
 * Class WPBakeryShortCode
 */
abstract class WPBakeryShortCode {

	/**
	 * @var
	 */
	public static $config;
	/**
	 * @var string
	 */
	protected $controls_css_settings = 'cc';
	/**
	 * @var array
	 */
	protected $controls_list = array( 'edit', 'clone', 'delete' );
	/**
	 * @var string
	 */
	protected $shortcode_content = '';
	/**
	 * @var string - shortcode tag
	 */
	protected $shortcode;
	/**
	 * @var
	 */
	protected $html_template;
	/**
	 * @var
	 */
	protected $atts;
	/**
	 * @var
	 */
	protected $settings;
	/**
	 * @var array
	 */
	protected static $js_scripts = array();
	/**
	 * @var array
	 */
	protected static $css_scripts = array();
	/**
	 * default scripts like scripts
	 *
	 * @var bool
	 * @since 4.4.3
	 */
	protected static $default_scripts_enqueued = \false;
	/**
	 * @var string
	 */
	protected $shortcode_string = '';
	/**
	 * @var string
	 */
	protected $controls_template_file = 'editors/partials/backend_controls.tpl.php';
	public $nonDraggableClass         = 'vc-non-draggable';
	/** @noinspection PhpMissingParentConstructorInspection */
	/**
	 * @param $settings
	 */
	public function __construct( $settings ) {
	}
	/**
	 * @param $settings
	 * @deprecated not used
	 */
	public function init( $settings ) {
	}
	/**
	 * @param $action
	 * @param $method
	 * @param int    $priority
	 * @return true|void
	 * @deprecated 6.0 use native WordPress actions
	 */
	public function addAction( $action, $method, $priority = 10 ) {
	}
	/**
	 * @param $action
	 * @param $method
	 * @param int    $priority
	 *
	 * @return bool
	 * @deprecated 6.0 use native WordPress actions
	 */
	public function removeAction( $action, $method, $priority = 10 ) {
	}
	/**
	 * @param $filter
	 * @param $method
	 * @param int    $priority
	 *
	 * @return bool|void
	 * @deprecated 6.0 use native WordPress actions
	 */
	public function addFilter( $filter, $method, $priority = 10 ) {
	}
	/**
	 * @param $filter
	 * @param $method
	 * @param int    $priority
	 * @return bool
	 * @deprecated 6.0 use native WordPress
	 */
	public function removeFilter( $filter, $method, $priority = 10 ) {
	}
	/**
	 * @param $tag
	 * @param $func
	 * @deprecated 6.0 not used
	 */
	public function addShortCode( $tag, $func ) {
	}
	/**
	 * @param $content
	 * @deprecated 6.0 not used
	 */
	public function doShortCode( $content ) {
	}
	/**
	 * @param $tag
	 * @deprecated 6.0 not used
	 */
	public function removeShortCode( $tag ) {
	}
	/**
	 * @param $param
	 *
	 * @return null
	 * @deprecated 6.0 not used, use vc_post_param
	 */
	public function post( $param ) {
	}
	/**
	 * @param $param
	 *
	 * @return null
	 * @deprecated 6.0 not used, use vc_get_param
	 */
	public function get( $param ) {
	}
	/**
	 * @param $asset
	 *
	 * @return string
	 * @deprecated 4.5 use vc_asset_url
	 */
	public function assetURL( $asset ) {
	}
	/**
	 * @param $asset
	 *
	 * @return string
	 * @deprecated 6.0 not used
	 */
	public function assetPath( $asset ) {
	}
	/**
	 * @param $name
	 *
	 * @return null
	 * @deprecated 6.0 not used
	 */
	public static function config( $name ) {
	}
	/**
	 * @param $content
	 *
	 * @return string
	 */
	public function addInlineAnchors( $content ) {
	}
	/**
	 *
	 */
	public function enqueueAssets() {
	}
	/**
	 * Prints out the styles needed to render the element icon for the back end interface.
	 * Only performed if the 'icon' setting is a valid URL.
	 *
	 * @return void
	 * @since  4.2
	 * @modified 4.4
	 * @author Benjamin Intal
	 */
	public function printIconStyles() {
	}
	/**
	 * @param $param
	 */
	protected function registerJs( $param ) {
	}
	/**
	 * @param $param
	 */
	protected function registerCss( $param ) {
	}
	/**
	 *
	 */
	public static function enqueueCss() {
	}
	/**
	 *
	 */
	public static function enqueueJs() {
	}
	/**
	 * @param $shortcode
	 */
	public function shortcode( $shortcode ) {
	}
	/**
	 * @param $template
	 *
	 * @return string
	 */
	protected function setTemplate( $template ) {
	}
	/**
	 * @return bool
	 */
	protected function getTemplate() {
	}
	/**
	 * @return mixed
	 */
	protected function getFileName() {
	}
	/**
	 * Find html template for shortcode output.
	 */
	protected function findShortcodeTemplate() {
	}
	/**
	 * @param $atts
	 * @param null $content
	 *
	 * @return mixed
	 * @throws \Exception
	 */
	protected function content( $atts, $content = \null ) {
	}
	/**
	 * @param $atts
	 * @param null $content
	 *
	 * vc_filter: vc_shortcode_content_filter - hook to edit template content
	 * vc_filter: vc_shortcode_content_filter_after - hook after template is loaded to override output
	 *
	 * @return mixed
	 * @throws \Exception
	 */
	protected function loadTemplate( $atts, $content = \null ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function contentAdmin( $atts, $content = \null ) {
	}
	/**
	 * @return bool
	 */
	public function isAdmin() {
	}
	/**
	 * @return bool
	 */
	public function isInline() {
	}
	/**
	 * @return bool
	 */
	public function isEditor() {
	}
	/**
	 * @param $atts
	 * @param null   $content
	 * @param string $base
	 *
	 * vc_filter: vc_shortcode_output - hook to override output of shortcode
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function output( $atts, $content = \null, $base = '' ) {
	}
	public function enqueueDefaultScripts() {
	}
	/**
	 * Return shortcode attributes, see \WPBakeryShortCode::output
	 *
	 * @return array
	 * @since 4.4
	 */
	public function getAtts() {
	}
	/**
	 * Creates html before shortcode html.
	 *
	 * @param $atts - shortcode attributes list
	 * @param $content - shortcode content
	 *
	 * @return string - html which will be displayed before shortcode html.
	 */
	public function beforeShortcode( $atts, $content ) {
	}
	/**
	 * Creates html before shortcode html.
	 *
	 * @param $atts - shortcode attributes list
	 * @param $content - shortcode content
	 *
	 * @return string - html which will be displayed after shortcode html.
	 */
	public function afterShortcode( $atts, $content ) {
	}
	/**
	 * @param $el_class
	 *
	 * @return string
	 */
	public function getExtraClass( $el_class ) {
	}
	/**
	 * @param $css_animation
	 *
	 * @return string
	 */
	public function getCSSAnimation( $css_animation ) {
	}
	/**
	 * Create HTML comment for blocks only if wpb_debug=true
	 *
	 * @param $string
	 *
	 * @return string
	 * @deprecated 4.7 For debug type html comments use more generic debugComment function.
	 */
	public function endBlockComment( $string ) {
	}
	/**
	 * if wpb_debug=true return HTML comment
	 *
	 * @param string $comment
	 *
	 * @return string
	 * @since 4.7
	 * @deprecated 5.5 no need for extra info in output, use xdebug
	 */
	public function debugComment( $comment ) {
	}
	/**
	 * @param $name
	 *
	 * @return null
	 */
	public function settings( $name ) {
	}
	/**
	 * @param $name
	 * @param $value
	 */
	public function setSettings( $name, $value ) {
	}
	/**
	 * @return mixed
	 * @since 5.5
	 */
	public function getSettings() {
	}
	/**
	 * @param $width
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function getElementHolder( $width ) {
	}
	// Return block controls
	/**
	 * @param $controls
	 * @param string   $extended_css
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function getColumnControls( $controls, $extended_css = '' ) {
	}
	/**
	 * Return list of controls
	 *
	 * @return array
	 * @throws \Exception
	 */
	public function getControlsList() {
	}
	/**
	 * Build new modern controls for shortcode.
	 *
	 * @param string $extended_css
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function getColumnControlsModular( $extended_css = '' ) {
	}
	/**
	 * @return string
	 * @throws \Exception
	 */
	public function getBackendEditorControlsElementCssClass() {
	}
	/**
	 * This will fire callbacks if they are defined in map.php
	 *
	 * @param $id
	 *
	 * @return string
	 */
	public function getCallbacks( $id ) {
	}
	/**
	 * @param $param
	 * @param $value
	 *
	 * vc_filter: vc_wpbakeryshortcode_single_param_html_holder_value - hook to override param value (param type and etc is available in args)
	 *
	 * @return string
	 */
	public function singleParamHtmlHolder( $param, $value ) {
	}
	/**
	 * @param $params
	 *
	 * @return string
	 */
	protected function getIcon( $params ) {
	}
	/**
	 * @param $title
	 *
	 * @return string
	 */
	protected function outputTitle( $title ) {
	}
	/**
	 * @param string $content
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function template( $content = '' ) {
	}
	/**
	 * This functions prepares attributes to use in template
	 * Converts back escaped characters
	 *
	 * @param $atts
	 *
	 * @return array
	 */
	protected function prepareAtts( $atts ) {
	}
	/**
	 * @return string
	 */
	public function getShortcode() {
	}
	/**
	 * Since 4.5
	 * Possible placeholders:
	 *      {{ content }}
	 *      {{ title }}
	 *      {{ container-class }}
	 *
	 * Possible keys:
	 *  {{
	 *  <%
	 *  %
	 *
	 * @param $markup
	 * @param string $content
	 *
	 * @return string
	 * @throws \Exception
	 * @since 4.5
	 */
	protected function customMarkup( $markup, $content = '' ) {
	}
	/**
	 * @param $atts
	 *
	 * @return string
	 */
	protected function paramsHtmlHolders( $atts ) {
	}
	/**
	 * Check is allowed to add another element inside current element.
	 *
	 * @return bool
	 * @since 4.8
	 */
	public function getAddAllowed() {
	}
}
/**
 * Class Vc_Gitem_Woocommerce_Shortcode
 */
class Vc_Gitem_Woocommerce_Shortcode extends \WPBakeryShortCode {

	/**
	 * @param $atts
	 * @param null $content
	 *
	 * @return mixed
	 */
	protected function content( $atts, $content = \null ) {
	}
}
/**
 * Class Vc_Vendor_QtranslateX
 *
 * @since 4.12
 */
class Vc_Vendor_QtranslateX {

	public function load() {
	}
	public function enqueueJsBackend() {
	}
	/**
	 * @param $link
	 * @return string
	 */
	public function appendLangToUrl( $link ) {
	}
	public function enqueueJsFrontend() {
	}
	/**
	 * @return string
	 */
	public function generateSelectFrontend() {
	}
	/**
	 * @param $list
	 *
	 * @return array
	 */
	public function vcNavControlsFrontend( $list ) {
	}
	/**
	 * @param $link
	 *
	 * @return string
	 */
	public function vcRenderEditButtonLink( $link ) {
	}
}
/**
 * Class Vc_Vendor_WPML
 *
 * @since 4.9
 */
class Vc_Vendor_WPML {

	public function load() {
	}
	/**
	 * @param $link
	 * @return string
	 */
	public function appendLangToUrlGrid( $link ) {
	}
	/**
	 * @param $id
	 * @return mixed|void
	 */
	public function filterMediaId( $id ) {
	}
}
/**
 * RevSlider loader.
 *
 * @since 4.3
 */
class Vc_Vendor_Revslider {

	/**
	 * @since 4.3
	 * @var int - index of revslider
	 */
	protected static $instanceIndex = 1;
	/**
	 * Add shortcode to WPBakery Page Builder also add fix for frontend to regenerate id of revslider.
	 *
	 * @since 4.3
	 */
	public function load() {
	}
	/**
	 * @since 4.3
	 */
	public function buildShortcode() {
	}
	/**
	 * @param array $revsliders
	 *
	 * @since 4.4
	 *
	 * @deprecated 4.9
	 */
	public function mapShortcode( $revsliders = array() ) {
	}
	/**
	 * Replaces id of revslider for frontend editor.
	 *
	 * @param $output
	 *
	 * @return string
	 * @since 4.3
	 */
	public function setId( $output ) {
	}
	/**
	 * Mapping settings for lean method.
	 *
	 * @param $tag
	 *
	 * @return array
	 * @since 4.9
	 */
	public function addShortcodeSettings( $tag ) {
	}
}
/**
 * Class Vc_Gitem_Acf_Shortcode
 */
class Vc_Gitem_Acf_Shortcode extends \WPBakeryShortCode {

	/**
	 * @param $atts
	 * @param null $content
	 *
	 * @return mixed
	 */
	protected function content( $atts, $content = \null ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Acf
 */
class WPBakeryShortCode_Vc_Acf extends \WPBakeryShortCode {

	/**
	 * @param $atts
	 * @param null $content
	 *
	 * @return mixed
	 * @throws \Exception
	 */
	protected function content( $atts, $content = \null ) {
	}
}
/**
 * Contact form7 vendor
 * =======
 * Plugin Contact form 7 vendor
 * To fix issues when shortcode doesn't exists in frontend editor. #1053, #1054 etc.
 *
 * @since 4.3
 */
class Vc_Vendor_ContactForm7 {

	/**
	 * Add action when contact form 7 is initialized to add shortcode.
	 *
	 * @since 4.3
	 */
	public function load() {
	}
	/**
	 * Mapping settings for lean method.
	 *
	 * @param $tag
	 *
	 * @return array
	 * @since 4.9
	 */
	public function addShortcodeSettings( $tag ) {
	}
}
/**
 * Class Vc_Vendor_Qtranslate
 *
 * @since 4.3
 */
class Vc_Vendor_Qtranslate {

	/**
	 * @since 4.3
	 * @var array
	 */
	protected $languages = array();
	/**
	 * @since 4.3
	 */
	public function setLanguages() {
	}
	/**
	 * @return bool
	 */
	public function isValidPostType() {
	}
	/**
	 * @since 4.3
	 */
	public function load() {
	}
	/**
	 * @since 4.3
	 */
	public function qtransPostInit() {
	}
	/**
	 * @since 4.3
	 */
	public function qtransSwitch() {
	}
	/**
	 * @since 4.3
	 */
	public function enqueueJsBackend() {
	}
	/**
	 * @since 4.3
	 */
	public function enqueueJsFrontend() {
	}
	/**
	 * @return string
	 * @since 4.3
	 */
	public function generateSelect() {
	}
	/**
	 * @return string
	 * @since 4.3
	 */
	public function generateSelectFrontend() {
	}
	/**
	 * @param $list
	 *
	 * @return array
	 * @since 4.3
	 */
	public function vcNavControls( $list ) {
	}
	/**
	 * @param $list
	 *
	 * @return array
	 * @since 4.3
	 */
	public function vcNavControlsFrontend( $list ) {
	}
	/**
	 * @return string
	 * @since 4.3
	 */
	public function getControlSelectDropdown() {
	}
	/**
	 * @return string
	 */
	public function getControlSelectDropdownFrontend() {
	}
	/**
	 * @param $link
	 *
	 * @return string
	 * @since 4.3
	 */
	public function vcRenderEditButtonLink( $link ) {
	}
	/**
	 * @since 4.3
	 */
	public function vcFrontendEditorRender() {
	}
	/**
	 * @param $content
	 *
	 * @return string
	 * @since 4.3
	 */
	public function filterPostContent( $content ) {
	}
}
/**
 * Class Vc_Vendor_Mqtranslate extends class Vc_Vendor_Qtranslate::__construct
 *
 * @since 4.3
 */
class Vc_Vendor_Mqtranslate extends \Vc_Vendor_Qtranslate {

	/**
	 * @since 4.3
	 */
	public function setLanguages() {
	}
	/**
	 * @since 4.3
	 */
	public function qtransSwitch() {
	}
}
/**
 * Ninja Forms vendor
 *
 * @since 4.4
 */
class Vc_Vendor_NinjaForms {

	private static $ninjaCount;
	/**
	 * Implement interface, map ninja forms shortcode
	 *
	 * @since 4.4
	 */
	public function load() {
	}
	/**
	 * Mapping settings for lean method.
	 *
	 * @param $tag
	 *
	 * @return array
	 * @since 4.9
	 */
	public function addShortcodeSettings( $tag ) {
	}
	/**
	 * @return array
	 */
	private function get_forms() {
	}
	/**
	 * @return bool
	 */
	private function is_ninja_forms_three() {
	}
	/**
	 * @param $output
	 * @return mixed
	 */
	public function replaceIds( $output ) {
	}
}
/**
 * Class Vc_Vendor_YoastSeo
 *
 * @since 4.4
 */
class Vc_Vendor_YoastSeo {

	/**
	 * Created to improve yoast multiply calling wpseo_pre_analysis_post_content filter.
	 *
	 * @since 4.5.3
	 * @var string - parsed post content
	 */
	protected $parsedContent;
	function __construct() {
	}
	/**
	 * Add filter for yoast.
	 *
	 * @since 4.4
	 */
	public function load() {
	}
	/**
	 * Properly parse content to detect images/text keywords.
	 *
	 * @param $content
	 *
	 * @return string
	 * @since 4.4
	 */
	public function filterResults( $content ) {
	}
	/**
	 * @since 4.4
	 */
	public function enqueueJs() {
	}
	public function frontendEditorBuild() {
	}
	/**
	 * @param $images
	 * @param $id
	 * @return array
	 */
	public function filterSitemapUrlImages( $images, $id ) {
	}
}
/**
 * Vendor class for plugin advanced custom fields,
 * Needed to apply extra js when backend/frontend editor rendered.
 * Class Vc_Vendor_AdvancedCustomFields
 *
 * @since 4.3.3
 */
class Vc_Vendor_AdvancedCustomFields {

	/**
	 * Initializing actions when backend/frontend editor renders to enqueue fix-js file
	 *
	 * @since 4.3.3
	 */
	public function load() {
	}
	public function acfAjaxShortcodeCapability( $cap ) {
	}
	/**
	 * Small fix for editor when try to change field
	 *
	 * @since 4.3.3
	 */
	public function enqueueJs() {
	}
	/**
	 * @param array $shortcodes
	 * @return array|mixed
	 */
	public function mapGridItemShortcodes( array $shortcodes ) {
	}
	public function mapEditorsShortcodes() {
	}
}
/**
 * WPBakery WPBakery Page Builder Main manager.
 *
 * @package WPBakeryPageBuilder
 * @since   4.2
 */
/**
 * Vc mapper new class. On maintenance
 * Allows to bind hooks for shortcodes.
 *
 * @since 4.2
 */
class Vc_Mapper {

	/**
	 * @since 4.2
	 * Stores mapping activities list which where called before initialization
	 * @var array
	 */
	protected $init_activity = array();
	/**
	 *
	 *
	 * @since 4.9
	 *
	 * @var array
	 */
	protected $element_activities = array();
	protected $hasAccess          = array();
	protected $checkForAccess     = \true;
	/**
	 * @since 4.2
	 */
	public function __construct() {
	}
	/**
	 * Include params list objects and calls all stored activity methods.
	 *
	 * @since  4.2
	 * @access public
	 */
	public function init() {
	}
	/**
	 * This method is called by VC objects methods if it is called before VC initialization.
	 *
	 * @param $object - mame of class object
	 * @param $method - method name
	 * @param array                         $params - list of attributes for object method
	 * @since  4.2
	 * @access public
	 *
	 * @see WPBMAP
	 */
	public function addActivity( $object, $method, $params = array() ) {
	}
	/**
	 * This method is called by VC objects methods if it is called before VC initialization.
	 *
	 * @param $tag - shortcode tag of element
	 * @param $method - method name
	 * @param array                          $params - list of attributes for object method
	 * @since  4.9
	 * @access public
	 *
	 * @see WPBMAP
	 */
	public function addElementActivity( $tag, $method, $params = array() ) {
	}
	/**
	 * Call all stored activities.
	 *
	 * Called by init method. List of activities stored by $init_activity are created by other objects called after
	 * initialization.
	 *
	 * @since  4.2
	 * @access public
	 */
	protected function callActivities() {
	}
	/**
	 * Does user has access to modify/clone/delete/add shortcode
	 *
	 * @param $shortcode
	 *
	 * @return bool
	 * @since 4.5
	 * @todo fix_roles and maybe remove/@deprecate this
	 */
	public function userHasAccess( $shortcode ) {
	}
	/**
	 * @return bool
	 * @since 4.5
	 * @todo fix_roles and maybe remove/@deprecate this
	 */
	public function isCheckForAccess() {
	}
	/**
	 * @param bool $checkForAccess
	 * @since 4.5
	 *
	 * @todo fix_roles and maybe remove/@deprecate this
	 */
	public function setCheckForAccess( $checkForAccess ) {
	}
	/**
	 * @param $tag
	 * @throws \Exception
	 */
	public function callElementActivities( $tag ) {
	}
}
/**
 * WPBakery Page Builder basic class.
 *
 * @since 4.2
 */
class Vc_Base {

	/**
	 * Shortcode's edit form.
	 *
	 * @since  4.2
	 * @access protected
	 * @var bool|Vc_Shortcode_Edit_Form
	 */
	protected $shortcode_edit_form = \false;
	/**
	 * Templates management panel editor.
	 *
	 * @since  4.4
	 * @access protected
	 * @var bool|Vc_Templates_Panel_Editor
	 */
	protected $templates_panel_editor = \false;
	/**
	 * Presets management panel editor.
	 *
	 * @since  5.2
	 * @access protected
	 * @var bool|Vc_Preset_Panel_Editor
	 */
	protected $preset_panel_editor = \false;
	/**
	 * Post object for VC in Admin.
	 *
	 * @since  4.4
	 * @access protected
	 * @var bool|Vc_Post_Admin
	 */
	protected $post_admin = \false;
	/**
	 * Post object for VC.
	 *
	 * @since  4.4.3
	 * @access protected
	 * @var bool|Vc_Post_Admin
	 */
	protected $post = \false;
	/**
	 * List of shortcodes map to VC.
	 *
	 * @since  4.2
	 * @access public
	 * @var array WPBakeryShortCodeFishBones
	 */
	protected $shortcodes = array();
	/** @var  Vc_Shared_Templates */
	public $shared_templates;
	/**
	 * Load default object like shortcode parsing.
	 *
	 * @since  4.2
	 * @access public
	 */
	public function init() {
	}
	/**
	 * Post object for interacting with Current post data.
	 *
	 * @return Vc_Post_Admin
	 * @since 4.4
	 */
	public function postAdmin() {
	}
	/**
	 * Build VC for frontend pages.
	 *
	 * @since  4.2
	 * @access public
	 */
	public function initPage() {
	}
	/**
	 * Load admin required modules and elements
	 *
	 * @since  4.2
	 * @access public
	 */
	public function initAdmin() {
	}
	/**
	 * Setter for edit form.
	 *
	 * @param Vc_Shortcode_Edit_Form $form
	 * @since 4.2
	 */
	public function setEditForm( \Vc_Shortcode_Edit_Form $form ) {
	}
	/**
	 * Get Shortcodes Edit form object.
	 *
	 * @return Vc_Shortcode_Edit_Form
	 * @since  4.2
	 * @access public
	 * @see    Vc_Shortcode_Edit_Form::__construct
	 */
	public function editForm() {
	}
	/**
	 * Setter for Templates editor.
	 *
	 * @param Vc_Templates_Panel_Editor $editor
	 * @since 4.4
	 */
	public function setTemplatesPanelEditor( \Vc_Templates_Panel_Editor $editor ) {
	}
	/**
	 * Setter for Preset editor.
	 *
	 * @param Vc_Preset_Panel_Editor $editor
	 * @since 5.2
	 */
	public function setPresetPanelEditor( \Vc_Preset_Panel_Editor $editor ) {
	}
	/**
	 * Get templates manager.
	 *
	 * @return bool|Vc_Templates_Panel_Editor
	 * @since  4.4
	 * @access public
	 * @see    Vc_Templates_Panel_Editor::__construct
	 */
	public function templatesPanelEditor() {
	}
	/**
	 * Get preset manager.
	 *
	 * @return bool|Vc_Preset_Panel_Editor
	 * @since  5.2
	 * @access public
	 * @see    Vc_Preset_Panel_Editor::__construct
	 */
	public function presetPanelEditor() {
	}
	/**
	 * Get shortcode class instance.
	 *
	 * @param string $tag
	 *
	 * @return Vc_Shortcodes_Manager|null
	 * @see    WPBakeryShortCodeFishBones
	 * @since  4.2
	 * @access public
	 */
	public function getShortCode( $tag ) {
	}
	/**
	 * Remove shortcode from shortcodes list of VC.
	 *
	 * @param $tag - shortcode tag
	 * @since  4.2
	 * @access public
	 */
	public function removeShortCode( $tag ) {
	}
	/**
	 * Set or modify new settings for shortcode.
	 *
	 * This function widely used by WPBMap class methods to modify shortcodes mapping
	 *
	 * @param $tag
	 * @param $name
	 * @param $value
	 * @throws \Exception
	 * @since 4.3
	 */
	public function updateShortcodeSetting( $tag, $name, $value ) {
	}
	/**
	 * Build custom css styles for page from shortcodes attributes created by VC editors.
	 *
	 * Called by save method, which is hooked by edit_post action.
	 * Function creates meta data for post with the key '_wpb_shortcodes_custom_css'
	 * and value as css string, which will be added to the footer of the page.
	 *
	 * @param $id
	 * @throws \Exception
	 * @since  4.2
	 * @access public
	 */
	public function buildShortcodesCustomCss( $id ) {
	}
	/**
	 * Parse shortcodes custom css string.
	 *
	 * This function is used by self::buildShortcodesCustomCss and creates css string from shortcodes attributes
	 * like 'css_editor'.
	 *
	 * @param $content
	 *
	 * @return string
	 * @throws \Exception
	 * @see    WPBakeryCssEditor
	 * @since  4.2
	 * @access public
	 */
	public function parseShortcodesCustomCss( $content ) {
	}
	/**
	 * Hooked class method by wp_head WP action to output post custom css.
	 *
	 * Method gets post meta value for page by key '_wpb_post_custom_css' and if it is not empty
	 * outputs css string wrapped into style tag.
	 *
	 * @param int $id
	 * @since  4.2
	 * @access public
	 */
	public function addPageCustomCss( $id = \null ) {
	}
	/**
	 * Hooked class method by wp_footer WP action to output shortcodes css editor settings from page meta data.
	 *
	 * Method gets post meta value for page by key '_wpb_shortcodes_custom_css' and if it is not empty
	 * outputs css string wrapped into style tag.
	 *
	 * @param int $id
	 *
	 * @since  4.2
	 * @access public
	 */
	public function addShortcodesCustomCss( $id = \null ) {
	}
	/**
	 * Add css styles for current page and elements design options added w\ editor.
	 */
	public function addFrontCss( $id = \null ) {
	}
	public function addNoScript() {
	}
	/**
	 * Register front css styles.
	 *
	 * Calls wp_register_style for required css libraries files.
	 *
	 * @since  3.1
	 * @access public
	 */
	public function frontCss() {
	}
	/**
	 * Enqueue base css class for VC elements and enqueue custom css if exists.
	 */
	public function enqueueStyle() {
	}
	/**
	 * Register front javascript libs.
	 *
	 * Calls wp_register_script for required css libraries files.
	 *
	 * @since  3.1
	 * @access public
	 */
	public function frontJsRegister() {
	}
	/**
	 * Register admin javascript libs.
	 *
	 * Calls wp_register_script for required css libraries files for Admin dashboard.
	 *
	 * @since  3.1
	 * vc_filter: vc_i18n_locale_composer_js_view, since 4.4 - override localization for js
	 * @access public
	 */
	public function registerAdminJavascript() {
	}
	/**
	 * Register admin css styles.
	 *
	 * Calls wp_register_style for required css libraries files for admin dashboard.
	 *
	 * @since  3.1
	 * @access public
	 */
	public function registerAdminCss() {
	}
	/**
	 * Add Settings link in plugin's page
	 *
	 * @param $links
	 * @param $file
	 *
	 * @return array
	 * @throws \Exception
	 * @since 4.2
	 */
	public function pluginActionLinks( $links, $file ) {
	}
	/**
	 * Get settings page link
	 *
	 * @return string url to settings page
	 * @throws \Exception
	 * @since 4.2
	 */
	public function getSettingsPageLink() {
	}
	/**
	 * Hooked class method by wp_head WP action.
	 *
	 * @since  4.2
	 * @access public
	 */
	public function addMetaData() {
	}
	/**
	 * Method adds css class to body tag.
	 *
	 * Hooked class method by body_class WP filter. Method adds custom css class to body tag of the page to help
	 * identify and build design specially for VC shortcodes.
	 *
	 * @param $classes
	 *
	 * @return array
	 * @since  4.2
	 * @access public
	 */
	public function bodyClass( $classes ) {
	}
	/**
	 * Builds excerpt for post from content.
	 *
	 * Hooked class method by the_excerpt WP filter. When user creates content with VC all content is always wrapped by
	 * shortcodes. This methods calls do_shortcode for post's content and then creates a new excerpt.
	 *
	 * @param $output
	 *
	 * @return string
	 * @since  4.2
	 * @access public
	 */
	public function excerptFilter( $output ) {
	}
	/**
	 * Remove unwanted wraping with p for content.
	 *
	 * Hooked by 'the_content' filter.
	 *
	 * @param null $content
	 *
	 * @return string|null
	 * @since 4.2
	 */
	public function fixPContent( $content = \null ) {
	}
	/**
	 * Get array of string for locale.
	 *
	 * @return array
	 * @since 4.7
	 */
	public function getEditorsLocale() {
	}
}
/**
 * Sort array values by key, default key is 'weight'
 * Used in uasort() function.
 * For fix equal weight problem used $this->data array_search
 *
 * @since 4.4
 */
/**
 * Class Vc_Sort
 *
 * @since 4.4
 */
class Vc_Sort {

	/**
	 * @since 4.4
	 * @var array $data - sorting data
	 */
	protected $data = array();
	/**
	 * @since 4.4
	 * @var string $key - key for search
	 */
	protected $key = 'weight';
	/**
	 * @param $data - array to sort
	 * @since 4.4
	 */
	public function __construct( $data ) {
	}
	/**
	 * Used to change/set data to sort
	 *
	 * @param $data
	 * @since 4.5
	 */
	public function setData( $data ) {
	}
	/**
	 * Sort $this->data by user key, used in class-vc-mapper.
	 * If keys are equals it SAVES a position in array (index).
	 *
	 * @param string $key
	 *
	 * @return array - sorted array
	 * @since 4.4
	 */
	public function sortByKey( $key = 'weight' ) {
	}
	/**
	 * Sorting by key callable for usort function
	 *
	 * @param $a - compare value
	 * @param $b - compare value
	 *
	 * @return int
	 * @since 4.4
	 */
	private function key( $a, $b ) {
	}
	/**
	 * @return array - sorting data
	 * @since 4.4
	 */
	public function getData() {
	}
}
class Vc_Modifications {

	public static $modified = \false;
	public function __construct() {
	}
	public function renderScript() {
	}
}
/**
 * Class Vc_Access
 *
 * @package WPBakeryPageBuilder
 * @since 4.8
 */
abstract class Vc_Access {

	/**
	 * @var bool
	 */
	protected $validAccess = \true;
	/**
	 * @return bool
	 */
	public function getValidAccess() {
	}
	/**
	 * @param mixed $validAccess
	 *
	 * @return $this
	 */
	public function setValidAccess( $validAccess ) {
	}
	/**
	 * Check multi access settings by method inside class object.
	 *
	 * @param $method
	 * @param $valid
	 * @param $argsList
	 *
	 * @return $this
	 */
	public function checkMulti( $method, $valid, $argsList ) {
	}
	/**
	 * Get current validation state and reset it to true. ( should be never called twice )
	 *
	 * @return bool
	 */
	public function get() {
	}
	/**
	 * Call die() function with message if access is invalid.
	 *
	 * @param string $message
	 * @return $this
	 * @throws \Exception
	 */
	public function validateDie( $message = '' ) {
	}
	/**
	 * @param $func
	 *
	 * @return $this
	 */
	public function check( $func ) {
	}
	/**
	 * Any of provided rules should be valid.
	 * Usage: checkAny(
	 *      'vc_verify_admin_nonce',
	 *      array( 'current_user_can', 'edit_post', 12 ),
	 *      array( 'current_user_can', 'edit_posts' ),
	 * )
	 *
	 * @return $this
	 */
	public function checkAny() {
	}
	/**
	 * All provided rules should be valid.
	 * Usage: checkAll(
	 *      'vc_verify_admin_nonce',
	 *      array( 'current_user_can', 'edit_post', 12 ),
	 *      array( 'current_user_can', 'edit_posts' ),
	 * )
	 *
	 * @return $this
	 */
	public function checkAll() {
	}
	/**
	 * @param string $nonce
	 *
	 * @return Vc_Access
	 */
	public function checkAdminNonce( $nonce = '' ) {
	}
	/**
	 * @param string $nonce
	 *
	 * @return Vc_Access
	 */
	public function checkPublicNonce( $nonce = '' ) {
	}
}
/**
 * Class Vc_Role_Access
 */
class Vc_Role_Access extends \Vc_Access {

	/**
	 * @var bool
	 */
	protected $roleName = \false;
	/**
	 * @var array
	 */
	protected $parts = array();
	/**
	 *
	 */
	public function __construct() {
	}
	/**
	 * @param $part
	 * @return \Vc_Role_Access_Controller
	 * @throws \Exception
	 */
	public function part( $part ) {
	}
	/**
	 * Set role to get access to data.
	 *
	 * @param $roleName
	 * @return $this
	 * @internal param $role
	 */
	public function who( $roleName ) {
	}
	/**
	 * @return null|string
	 */
	public function getRoleName() {
	}
}
/**
 * Class Vc_Role_Access_Controller
 *
 * @since 4.8
 */
class Vc_Role_Access_Controller extends \Vc_Access {

	protected static $part_name_prefix = 'vc_access_rules_';
	protected $part                    = \false;
	protected $roleName                = \false;
	protected $role                    = \false;
	protected $validAccess             = \true;
	protected $mergedCaps              = array(
		'vc_row_inner_all'     => 'vc_row_all',
		'vc_column_all'        => 'vc_row_all',
		'vc_column_inner_all'  => 'vc_row_all',
		'vc_row_inner_edit'    => 'vc_row_edit',
		'vc_column_edit'       => 'vc_row_edit',
		'vc_column_inner_edit' => 'vc_row_edit',
	);
	/**
	 * Vc_Role_Access_Controller constructor.
	 *
	 * @param $part
	 */
	public function __construct( $part ) {
	}
	/**
	 * Set role name.
	 *
	 * @param $role_name
	 */
	public function setRoleName( $role_name ) {
	}
	/**
	 * Get part for role.
	 *
	 * @return bool
	 */
	public function getPart() {
	}
	/**
	 * Get state of the Vc access rules part.
	 *
	 * @return mixed;
	 * @throws \Exception
	 */
	public function getState() {
	}
	/**
	 * Set state for full part.
	 *
	 * State can have 3 values:
	 * true - all allowed under this part;
	 * false - all disabled under this part;
	 * string|'custom' - custom settings. It means that need to check exact capability.
	 *
	 * @param bool $value
	 *
	 * @return $this
	 * @throws \Exception
	 */
	public function setState( $value = \true ) {
	}
	/**
	 * Can user do what he doo.
	 * Any rule has three types of state: true, false, string.
	 *
	 * @param string    $rule
	 * @param bool|true $check_state
	 *
	 * @return $this
	 * @throws \Exception
	 */
	public function can( $rule = '', $check_state = \true ) {
	}
	public function getValidAccess() {
	}
	/**
	 * Can user do what he doo.
	 * Any rule has three types of state: true,false, string.
	 */
	public function canAny() {
	}
	/**
	 * Can user do what he doo.
	 * Any rule has three types of state: true,false, string.
	 */
	public function canAll() {
	}
	/**
	 * Get capability for role
	 *
	 * @param $rule
	 *
	 * @return bool
	 * @throws \Exception
	 */
	public function getCapRule( $rule ) {
	}
	/**
	 * Add capability to role.
	 *
	 * @param $rule
	 * @param bool $value
	 * @throws \Exception
	 */
	public function setCapRule( $rule, $value = \true ) {
	}
	/**
	 * Get all capability for this part.
	 *
	 * @throws \Exception
	 */
	public function getAllCaps() {
	}
	/**
	 * @return null|\WP_Role
	 * @throws Exception
	 */
	public function getRole() {
	}
	/**
	 * @return null|string
	 */
	public function getRoleName() {
	}
	/**
	 * @return string
	 */
	public function getStateKey() {
	}
	/**
	 * @param $data
	 * @return $this
	 * @throws \Exception
	 */
	public function checkState( $data ) {
	}
	/**
	 * @return $this
	 */
	public function checkStateAny() {
	}
	/**
	 * Return access value.
	 *
	 * @return string
	 */
	public function __toString() {
	}
	/**
	 * @param $rule
	 * @return mixed
	 */
	public function updateMergedCaps( $rule ) {
	}
	/**
	 * @return array
	 */
	public function getMergedCaps() {
	}
}
/**
 * Class Vc_Page
 */
class Vc_Page {

	protected $slug;
	protected $title;
	protected $templatePath;
	/**
	 * @return string
	 */
	public function getSlug() {
	}
	/**
	 * @param mixed $slug
	 *
	 * @return $this;
	 */
	public function setSlug( $slug ) {
	}
	/**
	 * @return mixed
	 */
	public function getTitle() {
	}
	/**
	 * @param string $title
	 *
	 * @return $this
	 */
	public function setTitle( $title ) {
	}
	/**
	 * @return mixed
	 */
	public function getTemplatePath() {
	}
	/**
	 * @param mixed $templatePath
	 *
	 * @return $this
	 */
	public function setTemplatePath( $templatePath ) {
	}
	public function render() {
	}
}
/*** WPBakery Page Builder Content elements refresh ***/
class VcSharedLibrary {

	// Here we will store plugin wise (shared) settings. Colors, Locations, Sizes, etc...
	/**
	 * @var array
	 */
	private static $colors = array(
		'Blue'        => 'blue',
		'Turquoise'   => 'turquoise',
		'Pink'        => 'pink',
		'Violet'      => 'violet',
		'Peacoc'      => 'peacoc',
		'Chino'       => 'chino',
		'Mulled Wine' => 'mulled_wine',
		'Vista Blue'  => 'vista_blue',
		'Black'       => 'black',
		'Grey'        => 'grey',
		'Orange'      => 'orange',
		'Sky'         => 'sky',
		'Green'       => 'green',
		'Juicy pink'  => 'juicy_pink',
		'Sandy brown' => 'sandy_brown',
		'Purple'      => 'purple',
		'White'       => 'white',
	);
	/**
	 * @var array
	 */
	public static $icons = array(
		'Glass'  => 'glass',
		'Music'  => 'music',
		'Search' => 'search',
	);
	/**
	 * @var array
	 */
	public static $sizes = array(
		'Mini'   => 'xs',
		'Small'  => 'sm',
		'Normal' => 'md',
		'Large'  => 'lg',
	);
	/**
	 * @var array
	 */
	public static $button_styles = array(
		'Rounded'         => 'rounded',
		'Square'          => 'square',
		'Round'           => 'round',
		'Outlined'        => 'outlined',
		'3D'              => '3d',
		'Square Outlined' => 'square_outlined',
	);
	/**
	 * @var array
	 */
	public static $message_box_styles = array(
		'Standard'   => 'standard',
		'Solid'      => 'solid',
		'Solid icon' => 'solid-icon',
		'Outline'    => 'outline',
		'3D'         => '3d',
	);
	/**
	 * Toggle styles
	 *
	 * @var array
	 */
	public static $toggle_styles = array(
		'Default'         => 'default',
		'Simple'          => 'simple',
		'Round'           => 'round',
		'Round Outline'   => 'round_outline',
		'Rounded'         => 'rounded',
		'Rounded Outline' => 'rounded_outline',
		'Square'          => 'square',
		'Square Outline'  => 'square_outline',
		'Arrow'           => 'arrow',
		'Text Only'       => 'text_only',
	);
	/**
	 * Animation styles
	 *
	 * @var array
	 */
	public static $animation_styles = array(
		'Bounce'  => 'easeOutBounce',
		'Elastic' => 'easeOutElastic',
		'Back'    => 'easeOutBack',
		'Cubic'   => 'easeInOutCubic',
		'Quint'   => 'easeInOutQuint',
		'Quart'   => 'easeOutQuart',
		'Quad'    => 'easeInQuad',
		'Sine'    => 'easeOutSine',
	);
	/**
	 * @var array
	 */
	public static $cta_styles = array(
		'Rounded'         => 'rounded',
		'Square'          => 'square',
		'Round'           => 'round',
		'Outlined'        => 'outlined',
		'Square Outlined' => 'square_outlined',
	);
	/**
	 * @var array
	 */
	public static $txt_align = array(
		'Left'    => 'left',
		'Right'   => 'right',
		'Center'  => 'center',
		'Justify' => 'justify',
	);
	/**
	 * @var array
	 */
	public static $el_widths = array(
		'100%' => '',
		'90%'  => '90',
		'80%'  => '80',
		'70%'  => '70',
		'60%'  => '60',
		'50%'  => '50',
		'40%'  => '40',
		'30%'  => '30',
		'20%'  => '20',
		'10%'  => '10',
	);
	/**
	 * @var array
	 */
	public static $sep_widths = array(
		'1px'  => '',
		'2px'  => '2',
		'3px'  => '3',
		'4px'  => '4',
		'5px'  => '5',
		'6px'  => '6',
		'7px'  => '7',
		'8px'  => '8',
		'9px'  => '9',
		'10px' => '10',
	);
	/**
	 * @var array
	 */
	public static $sep_styles = array(
		'Border' => '',
		'Dashed' => 'dashed',
		'Dotted' => 'dotted',
		'Double' => 'double',
		'Shadow' => 'shadow',
	);
	/**
	 * @var array
	 */
	public static $box_styles = array(
		'Default'         => '',
		'Rounded'         => 'vc_box_rounded',
		'Border'          => 'vc_box_border',
		'Outline'         => 'vc_box_outline',
		'Shadow'          => 'vc_box_shadow',
		'Bordered shadow' => 'vc_box_shadow_border',
		'3D Shadow'       => 'vc_box_shadow_3d',
	);
	/**
	 * Round box styles
	 *
	 * @var array
	 */
	public static $round_box_styles = array(
		'Round'               => 'vc_box_circle',
		'Round Border'        => 'vc_box_border_circle',
		'Round Outline'       => 'vc_box_outline_circle',
		'Round Shadow'        => 'vc_box_shadow_circle',
		'Round Border Shadow' => 'vc_box_shadow_border_circle',
	);
	/**
	 * Circle box styles
	 *
	 * @var array
	 */
	public static $circle_box_styles = array(
		'Circle'               => 'vc_box_circle_2',
		'Circle Border'        => 'vc_box_border_circle_2',
		'Circle Outline'       => 'vc_box_outline_circle_2',
		'Circle Shadow'        => 'vc_box_shadow_circle_2',
		'Circle Border Shadow' => 'vc_box_shadow_border_circle_2',
	);
	/**
	 * @return array
	 */
	public static function getColors() {
	}
	/**
	 * @return array
	 */
	public static function getIcons() {
	}
	/**
	 * @return array
	 */
	public static function getSizes() {
	}
	/**
	 * @return array
	 */
	public static function getButtonStyles() {
	}
	/**
	 * @return array
	 */
	public static function getMessageBoxStyles() {
	}
	/**
	 * @return array
	 */
	public static function getToggleStyles() {
	}
	/**
	 * @return array
	 */
	public static function getAnimationStyles() {
	}
	/**
	 * @return array
	 */
	public static function getCtaStyles() {
	}
	/**
	 * @return array
	 */
	public static function getTextAlign() {
	}
	/**
	 * @return array
	 */
	public static function getBorderWidths() {
	}
	/**
	 * @return array
	 */
	public static function getElementWidths() {
	}
	/**
	 * @return array
	 */
	public static function getSeparatorStyles() {
	}
	/**
	 * Get list of box styles
	 *
	 * Possible $groups values:
	 * - default
	 * - round
	 * - circle
	 *
	 * @param array $groups Array of groups to include. If not specified, return all
	 *
	 * @return array
	 */
	public static function getBoxStyles( $groups = array() ) {
	}
	/**
	 * @return array
	 */
	public static function getColorsDashed() {
	}
}
/**
 * WXR Parser that uses regular expressions. Fallback for installs without an XML parser.
 */
class Vc_WXR_Parser_Regex {

	/**
	 * @var array
	 */
	public $authors = array();
	/**
	 * @var array
	 */
	public $posts = array();
	/**
	 * @var array
	 */
	public $categories = array();
	/**
	 * @var array
	 */
	public $tags = array();
	/**
	 * @var array
	 */
	public $terms = array();
	/**
	 * @var string
	 */
	public $base_url = '';
	/**
	 * Vc_WXR_Parser_Regex constructor.
	 */
	public function __construct() {
	}
	/**
	 * @param $file
	 * @return array|\WP_Error
	 */
	public function parse( $file ) {
	}
	/**
	 * @param $string
	 * @param $tag
	 * @return mixed|string|string[]|null
	 */
	public function get_tag( $string, $tag ) {
	}
	/**
	 * @param $c
	 * @return array
	 */
	public function process_category( $c ) {
	}
	/**
	 * @param $t
	 * @return array
	 */
	public function process_tag( $t ) {
	}
	/**
	 * @param $t
	 * @return array
	 */
	public function process_term( $t ) {
	}
	/**
	 * @param $a
	 * @return array
	 */
	public function process_author( $a ) {
	}
	/**
	 * @param $post
	 * @return array
	 */
	public function process_post( $post ) {
	}
	/**
	 * @param $matches
	 * @return string
	 */
	public function normalize_tag( $matches ) {
	}
	/**
	 * @param $filename
	 * @param string   $mode
	 * @return bool|resource
	 */
	public function fopen( $filename, $mode = 'r' ) {
	}
	/**
	 * @param $fp
	 * @return bool|int
	 */
	public function feof( $fp ) {
	}
	/**
	 * @param $fp
	 * @param int $len
	 * @return bool|string
	 */
	public function fgets( $fp, $len = 8192 ) {
	}
	/**
	 * @param $fp
	 * @return bool
	 */
	public function fclose( $fp ) {
	}
}
/**
 * WordPress eXtended RSS file parser implementations
 *
 * @package WordPress
 * @subpackage Importer
 */
/**
 * WordPress Importer class for managing parsing of WXR files.
 */
class Vc_WXR_Parser {

	/**
	 * @param $file
	 * @return array|\WP_Error
	 */
	public function parse( $file ) {
	}
}
/**
 * WXR Parser that makes use of the SimpleXML PHP extension.
 */
class Vc_WXR_Parser_SimpleXML {

	/**
	 * @param $file
	 * @return array|\WP_Error
	 */
	public function parse( $file ) {
	}
}
/**
 * WXR Parser that makes use of the XML Parser PHP extension.
 */
class Vc_WXR_Parser_XML {

	/**
	 * @var array
	 */
	public $wp_tags = array( 'wp:post_id', 'wp:post_date', 'wp:post_date_gmt', 'wp:comment_status', 'wp:ping_status', 'wp:attachment_url', 'wp:status', 'wp:post_name', 'wp:post_parent', 'wp:menu_order', 'wp:post_type', 'wp:post_password', 'wp:is_sticky', 'wp:term_id', 'wp:category_nicename', 'wp:category_parent', 'wp:cat_name', 'wp:category_description', 'wp:tag_slug', 'wp:tag_name', 'wp:tag_description', 'wp:term_taxonomy', 'wp:term_parent', 'wp:term_name', 'wp:term_description', 'wp:author_id', 'wp:author_login', 'wp:author_email', 'wp:author_display_name', 'wp:author_first_name', 'wp:author_last_name' );
	/**
	 * @var array
	 */
	public $wp_sub_tags = array( 'wp:comment_id', 'wp:comment_author', 'wp:comment_author_email', 'wp:comment_author_url', 'wp:comment_author_IP', 'wp:comment_date', 'wp:comment_date_gmt', 'wp:comment_content', 'wp:comment_approved', 'wp:comment_type', 'wp:comment_parent', 'wp:comment_user_id' );
	/**
	 * @param $file
	 * @return array|\WP_Error
	 */
	public function parse( $file ) {
	}
	/**
	 * @param $parse
	 * @param $tag
	 * @param $attr
	 */
	public function tag_open( $parse, $tag, $attr ) {
	}
	/**
	 * @param $parser
	 * @param $cdata
	 */
	public function cdata( $parser, $cdata ) {
	}
	/**
	 * @param $parser
	 * @param $tag
	 */
	public function tag_close( $parser, $tag ) {
	}
}
/**
 * Class Vc_WP_Import
 */
class Vc_WP_Import extends \WP_Importer {

	/**
	 * @var float
	 */
	public $max_wxr_version = 1.2;
	// max. supported WXR version
	/**
	 * @var
	 */
	public $id;
	/**
	 * @var information to import from WXR file
	 */
	public $version;
	/**
	 * @var array
	 */
	public $posts = array();
	/**
	 * @var string
	 */
	public $base_url = '';
	// mappings from old information to new
	/**
	 * @var array
	 */
	public $processed_posts = array();
	/**
	 * @var array
	 */
	public $processed_attachments = array();
	/**
	 * @var array
	 */
	public $post_orphans = array();
	/**
	 * @var bool
	 */
	public $fetch_attachments = \true;
	/**
	 * @var array
	 */
	public $url_remap = array();
	/**
	 * @var array
	 */
	public $featured_images = array();
	/**
	 * The main controller for the actual import stage.
	 *
	 * @param string $file Path to the WXR file for importing
	 */
	public function import( $file ) {
	}
	/**
	 * Parses the WXR file and prepares us for the task of processing parsed data
	 *
	 * @param string $file Path to the WXR file for importing
	 */
	public function import_start( $file ) {
	}
	/**
	 * Performs post-import cleanup of files and the cache
	 */
	public function import_end() {
	}
	/**
	 * Handles the WXR upload and initial parsing of the file to prepare for
	 * displaying author import options
	 *
	 * @return bool False if error uploading or invalid file, true otherwise
	 */
	public function handle_upload() {
	}
	/**
	 * Create new posts based on import information
	 *
	 * Posts marked as having a parent which doesn't exist will become top level items.
	 * Doesn't create a new post if: the post type doesn't exist, the given post ID
	 * is already noted as imported or a post with the same title and date already exists.
	 * Note that new/updated terms, comments and meta are imported for the last of the above.
	 */
	public function process_posts() {
	}
	/**
	 * If fetching attachments is enabled then attempt to create a new attachment
	 *
	 * @param array            $post Attachment post details from WXR
	 * @param string           $url URL to fetch attachment from
	 * @param $original_post_ID
	 * @return int|\WP_Error Post ID on success, WP_Error otherwise
	 */
	public function process_attachment( $post, $url, $original_post_ID ) {
	}
	/**
	 * @param $url
	 * @param bool $file_path
	 * @return array|bool|\Requests_Utility_CaseInsensitiveDictionary
	 */
	private function wp_get_http( $url, $file_path = \false ) {
	}
	/**
	 * Attempt to download a remote file attachment
	 *
	 * @param string $url URL of item to fetch
	 * @param array  $post Attachment details
	 * @return array|WP_Error Local file location details on success, WP_Error otherwise
	 */
	public function fetch_remote_file( $url, $post ) {
	}
	/**
	 * Attempt to associate posts and menu items with previously missing parents
	 *
	 * An imported post's parent may not have been imported when it was first created
	 * so try again. Similarly for child menu items and menu items which were missing
	 * the object (e.g. post) they represent in the menu
	 */
	public function backfill_parents() {
	}
	/**
	 * Use stored mapping information to update old attachment URLs
	 */
	public function backfill_attachment_urls() {
	}
	/**
	 * Update _thumbnail_id meta to new, imported attachment IDs
	 */
	public function remap_featured_images() {
	}
	/**
	 * Parse a WXR file
	 *
	 * @param string $file Path to WXR file for parsing
	 * @return array Information gathered from the WXR file
	 */
	public function parse( $file ) {
	}
	/**
	 * Decide if the given meta key maps to information we will want to import
	 *
	 * @param string $key The meta key to check
	 * @return string|bool The key if we do want to import, false if not
	 */
	public function is_valid_meta_key( $key ) {
	}
	/**
	 * Decide whether or not the importer is allowed to create users.
	 * Default is true, can be filtered via import_allow_create_users
	 *
	 * @return bool True if creating users is allowed
	 */
	public function allow_create_users() {
	}
	/**
	 * Decide whether or not the importer should attempt to download attachment files.
	 * Default is true, can be filtered via import_allow_fetch_attachments. The choice
	 * made at the import options screen must also be true, false here hides that checkbox.
	 *
	 * @return bool True if downloading attachments is allowed
	 */
	public function allow_fetch_attachments() {
	}
	/**
	 * Decide what the maximum file size for downloaded attachments is.
	 * Default is 0 (unlimited), can be filtered via import_attachment_size_limit
	 *
	 * @return int Maximum attachment file size to import
	 */
	public function max_attachment_size() {
	}
	/**
	 * return the difference in length between two strings
	 *
	 * @param string $a
	 * @param string $b
	 * @return int
	 */
	public function cmpr_strlen( $a, $b ) {
	}
}
/**
 * Class Vc_Shared_Templates
 */
class Vc_Shared_Templates {

	/**
	 * @var bool
	 */
	protected $initialized = \false;
	/**
	 * @var string
	 */
	protected $download_link_url = 'https://support.wpbakery.com/templates/download-link';
	/**
	 *
	 */
	public function init() {
	}
	/**
	 * @param $templateId
	 * @param $templateType
	 * @return string
	 */
	public function renderBackendTemplate( $templateId, $templateType ) {
	}
	/**
	 * @param $templateId
	 * @param $templateType
	 * @return mixed
	 */
	public function renderFrontendTemplate( $templateId, $templateType ) {
	}
	/**
	 * @param $templateId
	 * @param $templateType
	 * @return mixed
	 */
	public function delete( $templateId, $templateType ) {
	}
	/**
	 * Post type from templates registration in WordPress
	 */
	private function registerPostType() {
	}
	/**
	 * Ajax request processing from templates panel
	 */
	public function ajaxDownloadTemplate() {
	}
	/**
	 * @param $requestUrl
	 *
	 * @return bool|string
	 */
	private function downloadTemplate( $requestUrl ) {
	}
	/**
	 * @param $request
	 *
	 * @return bool|string|array
	 */
	private function parseRequest( $request ) {
	}
	/**
	 * @param $data
	 *
	 * @return array
	 */
	public function addTemplatesTab( $data ) {
	}
	/**
	 * @param $category
	 *
	 * @return mixed
	 */
	public function renderTemplateBlock( $category ) {
	}
	/**
	 * @return string
	 */
	private function getTemplateBlockTemplate() {
	}
	/**
	 * @return array
	 */
	public function getTemplates() {
	}
	/**
	 * Create url for request to download
	 * It requires a license key, product and version
	 *
	 * @param $id
	 *
	 * @return string
	 */
	private function getTemplateDownloadLink( $id ) {
	}
}
/**
 * Class Vs_Pages_Group Show the groups of the pages likes pages with tabs.
 *
 * @since 4.5
 */
class Vc_Pages_Group extends \Vc_Page {

	protected $activePage;
	protected $pages;
	protected $templatePath;
	/**
	 * @return mixed
	 */
	public function getActivePage() {
	}
	/**
	 * @param Vc_Page $activePage
	 *
	 * @return $this
	 */
	public function setActivePage( \Vc_Page $activePage ) {
	}
	/**
	 * @return mixed
	 */
	public function getPages() {
	}
	/**
	 * @param mixed $pages
	 *
	 * @return $this
	 */
	public function setPages( $pages ) {
	}
	/**
	 * @return mixed
	 */
	public function getTemplatePath() {
	}
	/**
	 * @param mixed $templatePath
	 *
	 * @return $this
	 */
	public function setTemplatePath( $templatePath ) {
	}
	/**
	 * Render html output for current page.
	 */
	public function render() {
	}
}
/**
 * Vc starts here. Manager sets mode, adds required wp hooks and loads required object of structure
 *
 * Manager controls and access to all modules and classes of VC.
 *
 * @package WPBakery
 * @since   4.2
 */
class Vc_Manager {

	/**
	 * Set status/mode for VC.
	 *
	 * It depends on what functionality is required from vc to work with current page/part of WP.
	 *
	 * Possible values:
	 *  none - current status is unknown, default mode;
	 *  page - simple wp page;
	 *  admin_page - wp dashboard;
	 *  admin_frontend_editor - WPBakery Page Builder front end editor version;
	 *  admin_settings_page - settings page
	 *  page_editable - inline version for iframe in front end editor;
	 *
	 * @since 4.2
	 * @var string
	 */
	private $mode = 'none';
	/**
	 * Enables WPBakery Page Builder to act as the theme plugin.
	 *
	 * @since 4.2
	 * @var bool
	 */
	private $is_as_theme = \false;
	/**
	 * Vc is network plugin or not.
	 *
	 * @since 4.2
	 * @var bool
	 */
	private $is_network_plugin = \null;
	/**
	 * List of paths.
	 *
	 * @since 4.2
	 * @var array
	 */
	private $paths = array();
	/**
	 * Default post types where to activate WPBakery Page Builder meta box settings
	 *
	 * @since 4.2
	 * @var array
	 */
	private $editor_default_post_types = array( 'page' );
	// TODO: move to Vc settings
	/**
	 * Directory name in theme folder where composer should search for alternative templates of the shortcode.
	 *
	 * @since 4.2
	 * @var string
	 */
	private $custom_user_templates_dir = \false;
	/**
	 * Set updater mode
	 *
	 * @since 4.2
	 * @var bool
	 */
	private $disable_updater = \false;
	/**
	 * Modules and objects instances list
	 *
	 * @since 4.2
	 * @var array
	 */
	private $factory = array();
	/**
	 * File name for components manifest file.
	 *
	 * @since 4.4
	 * @var string
	 */
	private $components_manifest = 'components.json';
	/**
	 * @var string
	 */
	private $plugin_name = 'js_composer/js_composer.php';
	/**
	 * Core singleton class
	 *
	 * @var self - pattern realization
	 */
	private static $instance;
	/**
	 * @var Vc_Current_User_Access|false
	 * @since 4.8
	 */
	private $current_user_access = \false;
	/**
	 * @var Vc_Role_Access|false
	 * @since 4.8
	 */
	private $role_access = \false;
	public $editor_post_types;
	/**
	 * Constructor loads API functions, defines paths and adds required wp actions
	 *
	 * @since  4.2
	 */
	private function __construct() {
	}
	/**
	 * Get the instane of VC_Manager
	 *
	 * @return self
	 */
	public static function getInstance() {
	}
	/**
	 * Callback function WP plugin_loaded action hook. Loads locale
	 *
	 * @since  4.2
	 * @access public
	 */
	public function pluginsLoaded() {
	}
	/**
	 * Callback function for WP init action hook. Sets Vc mode and loads required objects.
	 *
	 * @return void
	 * @throws \Exception
	 * @since  4.2
	 * @access public
	 */
	public function init() {
	}
	/**
	 * @return Vc_Current_User_Access
	 * @since 4.8
	 */
	public function getCurrentUserAccess() {
	}
	/**
	 * @param false|Vc_Current_User_Access $current_user_access
	 */
	public function setCurrentUserAccess( $current_user_access ) {
	}
	/**
	 * @return Vc_Role_Access
	 * @since 4.8
	 */
	public function getRoleAccess() {
	}
	/**
	 * @param false|Vc_Role_Access $role_access
	 */
	public function setRoleAccess( $role_access ) {
	}
	/**
	 * Enables to add hooks in activation process.
	 *
	 * @param $networkWide
	 * @since 4.5
	 */
	public function activationHook( $networkWide = \false ) {
	}
	/**
	 * Load required components to enable useful functionality.
	 *
	 * @access public
	 * @since 4.4
	 */
	public function loadComponents() {
	}
	/**
	 * Load required logic for operating in Wp Admin dashboard.
	 *
	 * @return void
	 * @since  4.2
	 * @access protected
	 */
	protected function asAdmin() {
	}
	/**
	 * Set VC mode.
	 *
	 * Mode depends on which page is requested by client from server and request parameters like vc_action.
	 *
	 * @return void
	 * @throws \Exception
	 * @since  4.2
	 * @access protected
	 */
	protected function setMode() {
	}
	/**
	 * Sets version of the VC in DB as option `vc_version`
	 *
	 * @return void
	 * @since 4.3.2
	 * @access protected
	 */
	protected function setVersion() {
	}
	/**
	 * Get current mode for VC.
	 *
	 * @return string
	 * @since  4.2
	 * @access public
	 */
	public function mode() {
	}
	/**
	 * Setter for paths
	 *
	 * @param $paths
	 * @since  4.2
	 * @access protected
	 */
	protected function setPaths( $paths ) {
	}
	/**
	 * Gets absolute path for file/directory in filesystem.
	 *
	 * @param $name - name of path dir
	 * @param string                  $file - file name or directory inside path
	 *
	 * @return string
	 * @since  4.2
	 * @access public
	 */
	public function path( $name, $file = '' ) {
	}
	/**
	 * Set default post types. Vc editors are enabled for such kind of posts.
	 *
	 * @param array $type - list of default post types.
	 */
	public function setEditorDefaultPostTypes( array $type ) {
	}
	/**
	 * Returns list of default post types where user can use WPBakery Page Builder editors.
	 *
	 * @return array
	 * @since  4.2
	 * @access public
	 */
	public function editorDefaultPostTypes() {
	}
	/**
	 * Get post types where VC editors are enabled.
	 *
	 * @return array
	 * @throws \Exception
	 * @since  4.2
	 * @access public
	 */
	public function editorPostTypes() {
	}
	/**
	 * Set post types where VC editors are enabled.
	 *
	 * @param array $post_types
	 * @throws \Exception
	 * @since  4.4
	 * @access public
	 */
	public function setEditorPostTypes( array $post_types ) {
	}
	/**
	 * Setter for as-theme-plugin status for VC.
	 *
	 * @param bool $value
	 * @since  4.2
	 * @access public
	 */
	public function setIsAsTheme( $value = \true ) {
	}
	/**
	 * Get as-theme-plugin status
	 *
	 * As theme plugin status used by theme developers. It disables settings
	 *
	 * @return bool
	 * @since  4.2
	 * @access public
	 */
	public function isAsTheme() {
	}
	/**
	 * Setter for as network plugin for MultiWP.
	 *
	 * @param bool $value
	 * @since  4.2
	 * @access public
	 */
	public function setAsNetworkPlugin( $value = \true ) {
	}
	/**
	 * Gets VC is activated as network plugin.
	 *
	 * @return bool
	 * @since  4.2
	 * @access public
	 */
	public function isNetworkPlugin() {
	}
	/**
	 * Setter for disable updater variable.
	 *
	 * @param bool $value
	 *
	 * @since 4.2
	 */
	public function disableUpdater( $value = \true ) {
	}
	/**
	 * Get is vc updater is disabled;
	 *
	 * @return bool
	 * @see to where updater will be
	 *
	 * @since 4.2
	 */
	public function isUpdaterDisabled() {
	}
	/**
	 * Set user directory name.
	 *
	 * Directory name is the directory name vc should scan for custom shortcodes template.
	 *
	 * @param $dir - path to shortcodes templates inside developers theme
	 * @since    4.2
	 * @access   public
	 */
	public function setCustomUserShortcodesTemplateDir( $dir ) {
	}
	/**
	 * Get default directory where shortcodes templates area placed.
	 *
	 * @return string - path to default shortcodes
	 * @since  4.2
	 * @access public
	 */
	public function getDefaultShortcodesTemplatesDir() {
	}
	/**
	 *
	 * Get shortcodes template dir.
	 *
	 * @param $template
	 *
	 * @return string
	 * @since  4.2
	 * @access public
	 */
	public function getShortcodesTemplateDir( $template ) {
	}
	/**
	 * Directory name where template files will be stored.
	 *
	 * @return string
	 * @since  4.2
	 * @access public
	 */
	public function uploadDir() {
	}
	/**
	 * Getter for VC_Mapper instance
	 *
	 * @return Vc_Mapper
	 * @since  4.2
	 * @access public
	 */
	public function mapper() {
	}
	/**
	 * WPBakery Page Builder.
	 *
	 * @return Vc_Base
	 * @since  4.2
	 * @access public
	 */
	public function vc() {
	}
	/**
	 * Vc options.
	 *
	 * @return Vc_Settings
	 * @since  4.2
	 * @access public
	 */
	public function settings() {
	}
	/**
	 * Vc license settings.
	 *
	 * @return Vc_License
	 * @since  4.2
	 * @access public
	 */
	public function license() {
	}
	/**
	 * Get frontend VC editor.
	 *
	 * @return Vc_Frontend_Editor
	 * @since  4.2
	 * @access public
	 */
	public function frontendEditor() {
	}
	/**
	 * Get backend VC editor. Edit page version.
	 *
	 * @return Vc_Backend_Editor
	 * @since 4.2
	 */
	public function backendEditor() {
	}
	/**
	 * Gets automapper instance.
	 *
	 * @return Vc_Automapper
	 * @since  4.2
	 * @access public
	 */
	public function automapper() {
	}
	/**
	 * Gets updater instance.
	 *
	 * @return Vc_Updater
	 * @since 4.2
	 */
	public function updater() {
	}
	/**
	 * Getter for plugin name variable.
	 *
	 * @return string
	 * @since 4.2
	 */
	public function pluginName() {
	}
	/**
	 * @param $name
	 * @since 4.8.1
	 */
	public function setPluginName( $name ) {
	}
	/**
	 * Get absolute url for VC asset file.
	 *
	 * Assets are css, javascript, less files and images.
	 *
	 * @param $file
	 *
	 * @return string
	 * @since 4.2
	 */
	public function assetUrl( $file ) {
	}
}
/**
 * Ability to interact with post data.
 *
 * @since 4.4
 */
class Vc_Post_Admin {

	/**
	 * Add hooks required to save, update and manipulate post
	 */
	public function init() {
	}
	/**
	 * @throws \Exception
	 */
	public function saveAjaxFe() {
	}
	/** @noinspection PhpDocMissingThrowsInspection */
	/**
	 * Save generated shortcodes, html and WPBakery Page Builder status in posts meta.
	 *
	 * @access public
	 * @param $post_id - current post id
	 *
	 * @return void
	 * @since 4.4
	 */
	public function save( $post_id ) {
	}
	/**
	 * Saves VC Backend editor meta box visibility status.
	 *
	 * If post param 'wpb_vc_js_status' set to true, then methods adds/updated post
	 * meta option with tag '_wpb_vc_js_status'.
	 *
	 * @param $post_id
	 * @since 4.4
	 */
	public function setJsStatus( $post_id ) {
	}
	/**
	 * Saves VC interface version which is used for building post content.
	 *
	 * @param $post_id
	 * @since 4.4
	 * @todo check is it used everywhere and is it needed?!
	 * @deprecated not needed anywhere
	 */
	public function setInterfaceVersion( $post_id ) {
	}
	/**
	 * Set Post Settings for VC.
	 *
	 * It is possible to add any data to post settings by adding filter with tag 'vc_hooks_vc_post_settings'.
	 *
	 * @param $post_id
	 * @since 4.4
	 * vc_filter: vc_hooks_vc_post_settings - hook to override post meta settings for WPBakery Page Builder (used in grid for
	 *     example)
	 */
	public function setSettings( $post_id ) {
	}
	/**
	 * @param $id
	 * @throws \Exception
	 */
	protected function setPostMeta( $id ) {
	}
}
/**
 * Class Vc_Navbar_Undoredo
 */
class Vc_Navbar_Undoredo {

	public function __construct() {
	}
	/**
	 * @param $controls
	 * @return array
	 */
	public function addControls( $controls ) {
	}
}
/**
 * Renders navigation bar for Editors.
 */
class Vc_Navbar {

	/**
	 * @var array
	 */
	protected $controls = array( 'add_element', 'templates', 'save_backend', 'preview', 'frontend', 'custom_css', 'fullscreen', 'windowed' );
	/**
	 * @var string
	 */
	protected $brand_url = 'https://wpbakery.com/?utm_campaign=VCplugin&utm_source=vc_user&utm_medium=backend_editor';
	/**
	 * @var string
	 */
	protected $css_class = 'vc_navbar';
	/**
	 * @var string
	 */
	protected $controls_filter_name = 'vc_nav_controls';
	/**
	 * @var bool|WP_Post
	 */
	protected $post = \false;
	/**
	 * @param WP_Post $post
	 */
	public function __construct( \WP_Post $post ) {
	}
	/**
	 * Generate array of controls by iterating property $controls list.
	 * vc_filter: vc_nav_controls - hook to override list of controls
	 *
	 * @return array - list of arrays witch contains key name and html output for button.
	 */
	public function getControls() {
	}
	/**
	 * Get current post.
	 *
	 * @return null|WP_Post
	 */
	public function post() {
	}
	/**
	 * Render template.
	 */
	public function render() {
	}
	/**
	 * vc_filter: vc_nav_front_logo - hook to override WPBakery Page Builder logo
	 *
	 * @return string
	 */
	public function getLogo() {
	}
	/**
	 * @return string
	 * @throws \Exception
	 */
	public function getControlCustomCss() {
	}
	/**
	 * @return string
	 */
	public function getControlFullscreen() {
	}
	/**
	 * @return string
	 */
	public function getControlWindowed() {
	}
	/**
	 * @return string
	 * @throws \Exception
	 */
	public function getControlAddElement() {
	}
	/**
	 * @return string
	 * @throws \Exception
	 */
	public function getControlTemplates() {
	}
	/**
	 * @return string
	 * @throws \Exception
	 */
	public function getControlFrontend() {
	}
	/**
	 * @return string
	 */
	public function getControlPreview() {
	}
	/**
	 * @return string
	 */
	public function getControlSaveBackend() {
	}
}
/**
 *
 */
class Vc_Navbar_Frontend extends \Vc_Navbar {

	/**
	 * @var array
	 */
	protected $controls = array( 'add_element', 'templates', 'view_post', 'save_update', 'screen_size', 'custom_css' );
	/**
	 * @var string
	 */
	protected $controls_filter_name = 'vc_nav_front_controls';
	/**
	 * @var string
	 */
	protected $brand_url = 'https://wpbakery.com/?utm_campaign=VCplugin&utm_source=vc_user&utm_medium=frontend_editor';
	/**
	 * @var string
	 */
	protected $css_class = 'vc_navbar vc_navbar-frontend';
	/**
	 * @return string
	 */
	public function getControlScreenSize() {
	}
	/**
	 * @return string
	 * @throws \Exception
	 */
	public function getControlSaveUpdate() {
	}
	/**
	 * @return string
	 */
	public function getControlViewPost() {
	}
}
/**
 * WPBakery WPBakery Page Builder shortcode attributes fields
 *
 * @package WPBakeryPageBuilder
 */
/**
 * Edit form fields builder for shortcode attributes.
 *
 * @since 4.4
 */
class Vc_Edit_Form_Fields {

	/**
	 * @since 4.4
	 * @var bool
	 */
	protected $tag = \false;
	/**
	 * @since 4.4
	 * @var array
	 */
	protected $atts = array();
	/**
	 * @since 4.4
	 * @var array
	 */
	protected $settings = array();
	/**
	 * @since 4.4
	 * @var bool
	 */
	protected $post_id = \false;
	/**
	 * Construct Form fields.
	 *
	 * @param $tag - shortcode tag
	 * @param $atts - list of attribute assign to the shortcode.
	 * @throws \Exception
	 * @since 4.4
	 */
	public function __construct( $tag, $atts ) {
	}
	/**
	 * Get settings
	 *
	 * @param $key
	 *
	 * @return null
	 * @since 4.4
	 */
	public function setting( $key ) {
	}
	/**
	 * Set settings data
	 *
	 * @param array $settings
	 * @since 4.4
	 */
	public function setSettings( array $settings ) {
	}
	/**
	 * Shortcode Post ID getter.
	 * If post id isn't set try to get from get_the_ID function.
	 *
	 * @return int|bool;
	 * @since 4.4
	 */
	public function postId() {
	}
	/**
	 * Shortcode Post ID setter.
	 *
	 * @param $post_id - integer value in post_id
	 * @since 4.4
	 */
	public function setPostId( $post_id ) {
	}
	/**
	 * Get shortcode attribute value.
	 *
	 * This function checks if value isn't set then it uses std or value fields in param settings.
	 *
	 * @param $param_settings
	 * @param $value
	 *
	 * @return null
	 * @since 4.4
	 */
	protected function parseShortcodeAttributeValue( $param_settings, $value ) {
	}
	/**
	 * Enqueue js scripts for attributes types.
	 *
	 * @return string
	 * @since 4.4
	 */
	public function enqueueScripts() {
	}
	/**
	 * Render grouped fields.
	 *
	 * @param $groups
	 * @param $groups_content
	 *
	 * @return string
	 * @since 4.4
	 */
	protected function renderGroupedFields( $groups, $groups_content ) {
	}
	/**
	 * Render fields html and output it.
	 *
	 * @since 4.4
	 * vc_filter: vc_edit_form_class - filter to override editor_css_classes array
	 */
	public function render() {
	}
	/**
	 * Generate html for shortcode attribute.
	 *
	 * Method
	 *
	 * @param $param
	 * @param $value
	 *
	 * vc_filter: vc_single_param_edit - hook to edit any shortode param
	 * vc_filter: vc_form_fields_render_field_{shortcode_name}_{param_name}_param_value - hook to edit shortcode param
	 *     value vc_filter: vc_form_fields_render_field_{shortcode_name}_{param_name}_param - hook to edit shortcode
	 *     param attributes vc_filter: vc_single_param_edit_holder_output - hook to edit output of this method
	 *
	 * @return mixed
	 * @since 4.4
	 */
	public function renderField( $param, $value ) {
	}
	/**
	 * Create default shortcode params
	 *
	 * List of params stored in global variable $vc_params_list.
	 * Please check include/params/load.php for default params list.
	 *
	 * @return bool
	 * @since 4.4
	 */
	public function loadDefaultParams() {
	}
}
/**
 * WPBakery Page Builder front end editor
 *
 * @package WPBakeryPageBuilder
 */
/**
 * Vc front end editor.
 *
 * Introduce principles ‘What You See Is What You Get’ into your page building process with our amazing frontend editor.
 * See how your content will look on the frontend instantly with no additional clicks or switches.
 *
 * @since 4.0
 */
class Vc_Frontend_Editor {

	/**
	 * @var
	 */
	protected $dir;
	/**
	 * @var int
	 */
	protected $tag_index = 1;
	/**
	 * @var array
	 */
	public $post_shortcodes = array();
	/**
	 * @var string
	 */
	protected $template_content = '';
	/**
	 * @var bool
	 */
	protected static $enabled_inline = \true;
	/**
	 * @var
	 */
	public $current_user;
	/**
	 * @var
	 */
	public $post;
	/**
	 * @var
	 */
	public $post_id;
	/**
	 * @var
	 */
	public $post_url;
	/**
	 * @var
	 */
	public $url;
	/**
	 * @var
	 */
	public $post_type;
	/**
	 * @var array
	 */
	protected $settings = array(
		'assets_dir'         => 'assets',
		'templates_dir'      => 'templates',
		'template_extension' => 'tpl.php',
		'plugin_path'        => 'js_composer/inline',
	);
	/**
	 * @var string
	 */
	protected static $content_editor_id = 'content';
	/**
	 * @var array
	 */
	protected static $content_editor_settings = array(
		'dfw'               => \true,
		'tabfocus_elements' => 'insert-media-button',
		'editor_height'     => 360,
	);
	/**
	 * @var string
	 */
	protected static $brand_url = 'https://wpbakery.com/?utm_campaign=VCplugin&utm_source=vc_user&utm_medium=frontend_editor';
	public $post_custom_css;
	/**
	 * @var string
	 */
	protected $vc_post_content = '';
	/**
	 *
	 */
	public function init() {
	}
	/**
	 *
	 */
	public function addHooks() {
	}
	/**
	 *
	 */
	public function hookLoadEdit() {
	}
	public function disableBlockEditor() {
	}
	/**
	 *
	 */
	public function adminInit() {
	}
	/**
	 *
	 */
	public function buildEditablePage() {
	}
	/**
	 *
	 */
	public function buildPage() {
	}
	/**
	 * @return bool
	 */
	public static function inlineEnabled() {
	}
	/**
	 * @return bool
	 * @throws \Exception
	 */
	public static function frontendEditorEnabled() {
	}
	/**
	 * @param bool $disable
	 */
	public static function disableInline( $disable = \true ) {
	}
	/**
	 * Main purpose of this function is to
	 *  1) Parse post content to get ALL shortcodes in to array
	 *  2) Wrap all shortcodes into editable-wrapper
	 *  3) Return "iframe" editable content in extra-script wrapper
	 *
	 * @param Wp_Post $post
	 * @throws \Exception
	 */
	public function parseEditableContent( $post ) {
	}
	/**
	 * @since 4.4
	 * Used to print rendered post content, wrapped with frontend editors "div" and etc.
	 */
	public function printPostShortcodes() {
	}
	/**
	 * @param $content
	 *
	 * @return string
	 */
	public function editableContent( $content ) {
	}
	/**
	 * @param string $url
	 * @param string $id
	 *
	 * vc_filter: vc_get_inline_url - filter to edit frontend editor url (can be used for example in vendors like
	 *     qtranslate do)
	 *
	 * @return mixed
	 */
	public static function getInlineUrl( $url = '', $id = '' ) {
	}
	/**
	 * @return string
	 */
	public function wrapperStart() {
	}
	/**
	 * @return string
	 */
	public function wrapperEnd() {
	}
	/**
	 * @param $url
	 */
	public static function setBrandUrl( $url ) {
	}
	/**
	 * @return string
	 */
	public static function getBrandUrl() {
	}
	/**
	 * @return string
	 */
	public static function shortcodesRegexp() {
	}
	/**
	 *
	 */
	public function setPost() {
	}
	/**
	 * @return mixed
	 */
	public function post() {
	}
	/**
	 * Used for wp filter 'wp_insert_post_empty_content' to allow empty post insertion.
	 *
	 * @param $allow_empty
	 *
	 * @return bool
	 */
	public function allowInsertEmptyPost( $allow_empty ) {
	}
	/**
	 * vc_filter: vc_frontend_editor_iframe_url - hook to edit iframe url, can be used in vendors like qtranslate do.
	 */
	public function renderEditor() {
	}
	/**
	 * @return string
	 */
	public function setEditorTitle() {
	}
	/**
	 * @param $title
	 *
	 * @return string
	 */
	public function setEmptyTitlePlaceholder( $title ) {
	}
	/**
	 * @param $template
	 */
	public function render( $template ) {
	}
	/**
	 * @param $link
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function renderEditButton( $link ) {
	}
	/**
	 * @param $actions
	 *
	 * @return mixed
	 * @throws \Exception
	 */
	public function renderRowAction( $actions ) {
	}
	/**
	 * @param null $post_id
	 *
	 * @return bool
	 * @throws \Exception
	 */
	public function showButton( $post_id = \null ) {
	}
	/**
	 * @param WP_Admin_Bar $wp_admin_bar
	 * @throws \Exception
	 */
	public function adminBarEditLink( $wp_admin_bar ) {
	}
	/**
	 * @param $content
	 */
	public function setTemplateContent( $content ) {
	}
	/**
	 * vc_filter: vc_inline_template_content - filter to override template content
	 *
	 * @return mixed
	 */
	public function getTemplateContent() {
	}
	/**
	 *
	 */
	public function renderTemplates() {
	}
	/**
	 *
	 */
	public function loadTinyMceSettings() {
	}
	/**
	 *
	 */
	public function loadIFrameJsCss() {
	}
	/**
	 *
	 * @throws \Exception
	 */
	public function loadShortcodes() {
	}
	/**
	 * @param $s
	 *
	 * @return string
	 */
	public function fullUrl( $s ) {
	}
	/**
	 * @return string
	 */
	public static function cleanStyle() {
	}
	/**
	 *
	 */
	public function enqueueRequired() {
	}
	/**
	 * @param array $shortcodes
	 *
	 * vc_filter: vc_front_render_shortcodes - hook to override shortcode rendered output
	 * @return mixed|void
	 * @throws \Exception
	 */
	public function renderShortcodes( array $shortcodes ) {
	}
	/**
	 * @param $string
	 *
	 * @return string
	 */
	public function filterAdminBodyClass( $string ) {
	}
	/**
	 * @param $path
	 *
	 * @return string
	 */
	public function adminFile( $path ) {
	}
	public function registerJs() {
	}
	/**
	 *
	 */
	public function enqueueJs() {
	}
	public function registerCss() {
	}
	public function enqueueCss() {
	}
	/**
	 *
	 */
	public function enqueueAdmin() {
	}
	/**
	 * Enqueue js/css files from mapped shortcodes.
	 *
	 * To add js/css files to this enqueue please add front_enqueue_js/front_enqueue_css setting in vc_map array.
	 *
	 * @since 4.3
	 */
	public function enqueueMappedShortcode() {
	}
	/**
	 * @param $value
	 */
	/**
	 * @param $value
	 */
	/**
	 * @param $value
	 */
	/**
	 * @param $value
	 */
	public function enqueueMappedShortcodeJs( $value ) {
	}
	/**
	 * @param $value
	 */
	/**
	 * @param $value
	 */
	/**
	 * @param $value
	 */
	public function enqueueMappedShortcodeCss( $value ) {
	}
	/**
	 * @param $content
	 *
	 * @return string|void
	 * @throws \Exception
	 * @since 4.4
	 */
	public function getPageShortcodesByContent( $content ) {
	}
	/**
	 * @param $content
	 * @param bool    $is_container
	 * @param bool    $parent_id
	 *
	 * @return string
	 * @throws \Exception
	 * @since 4.2
	 */
	public function parseShortcodesString( $content, $is_container = \false, $parent_id = \false ) {
	}
	/**
	 * @param $shortcode
	 * @param $content
	 *
	 * @return string
	 * @throws \Exception
	 * @since 4.2
	 */
	public function toString( $shortcode, $content ) {
	}
}
/**
 * WPBakery WPBakery Page Builder admin editor
 *
 * @package WPBakeryPageBuilder
 */
/**
 * VC backend editor.
 *
 * This editor is available on default Wp post/page admin edit page. ON admin_init callback adds meta box to
 * edit page.
 *
 * @since 4.2
 */
class Vc_Backend_Editor {

	/**
	 * @var
	 */
	protected $layout;
	/**
	 * @var
	 */
	public $post_custom_css;
	/**
	 * @var bool|string $post - stores data about post.
	 */
	public $post = \false;
	/**
	 * This method is called by Vc_Manager to register required action hooks for VC backend editor.
	 *
	 * @since  4.2
	 * @access public
	 */
	public function addHooksSettings() {
	}
	public function registerScripts() {
	}
	/**
	 * @param $post_type
	 * @throws \Exception
	 * @since  4.2
	 * @access public
	 */
	public function render( $post_type ) {
	}
	/**
	 * Output html for backend editor meta box.
	 *
	 * @param null|Wp_Post $post
	 *
	 * @return bool
	 */
	public function renderEditor( $post = \null ) {
	}
	/**
	 * Output required html and js content for VC editor.
	 *
	 * Here comes panels, modals and js objects with data for mapped shortcodes.
	 */
	public function renderEditorFooter() {
	}
	/**
	 * Check is post type is valid for rendering VC backend editor.
	 *
	 * @param string $type
	 *
	 * @return bool
	 * @throws \Exception
	 */
	public function isValidPostType( $type = '' ) {
	}
	/**
	 * Enqueue required javascript libraries and css files.
	 *
	 * This method also setups reminder about license activation.
	 *
	 * @since  4.2
	 * @access public
	 */
	public function printScriptsMessages() {
	}
	/**
	 * Enqueue required javascript libraries and css files.
	 *
	 * @since  4.8
	 * @access public
	 */
	public function enqueueEditorScripts() {
	}
	public function registerBackendJavascript() {
	}
	public function registerBackendCss() {
	}
	public function enqueueJs() {
	}
	public function enqueueCss() {
	}
	/**
	 * @return bool
	 * @throws \Exception
	 */
	public function editorEnabled() {
	}
}
/**
 * Edit row layout
 *
 * @since   4.3
 */
class Vc_Edit_Layout {

	public function renderUITemplate() {
	}
}
/**
 * WPBakery WPBakery Page Builder main class.
 *
 * @package WPBakeryPageBuilder
 * @since   4.2
 */
/**
 * Edit form for shortcodes with ability to manage shortcode attributes in more convenient way.
 *
 * @since   4.2
 */
class Vc_Shortcode_Edit_Form {

	protected $initialized;
	/**
	 *
	 */
	public function init() {
	}
	/**
	 *
	 */
	public function render() {
	}
	/**
	 * Build edit form fields.
	 *
	 * @since 4.4
	 */
	public function renderFields() {
	}
	/**
	 * @param $param
	 *
	 * @return mixed
	 */
	public function changeEditFormFieldParams( $param ) {
	}
	/**
	 * @param $css_classes
	 *
	 * @return mixed
	 */
	public function changeEditFormParams( $css_classes ) {
	}
}
/**
 * Add element for VC editors with a list of mapped shortcodes.
 *
 * @since 4.3
 */
class Vc_Add_Element_Box {

	/**
	 * Enable show empty message
	 *
	 * @since 4.8
	 * @var bool
	 */
	protected $show_empty_message = \false;
	/**
	 * @param $params
	 *
	 * @return string
	 */
	protected function getIcon( $params ) {
	}
	/**
	 * Single button html template
	 *
	 * @param $params
	 *
	 * @return string
	 */
	public function renderButton( $params ) {
	}
	/**
	 * Get mapped shortcodes list.
	 *
	 * @return array
	 * @throws \Exception
	 * @since 4.4
	 */
	public function shortcodes() {
	}
	/**
	 * Render list of buttons for each mapped and allowed VC shortcodes.
	 * vc_filter: vc_add_element_box_buttons - hook to override output of getControls method
	 *
	 * @return mixed
	 * @throws \Exception
	 * @see WPBMap::getSortedUserShortCodes
	 */
	public function getControls() {
	}
	/**
	 * Get categories list from mapping data.
	 *
	 * @return array
	 * @throws \Exception
	 * @since 4.5
	 */
	public function getCategories() {
	}
	/**
	 *
	 */
	public function render() {
	}
	/**
	 * Render icon for shortcode
	 *
	 * @param $params
	 *
	 * @return string
	 * @since 4.8
	 */
	public function renderIcon( $params ) {
	}
	/**
	 * @return boolean
	 */
	public function isShowEmptyMessage() {
	}
	/**
	 * @return mixed
	 * @throws \Exception
	 */
	public function getPartState() {
	}
}
/**
 * Post settings like custom css for page are displayed here.
 *
 * @since 4.3
 */
class Vc_Post_Settings {

	protected $editor;
	/**
	 * @param $editor
	 */
	public function __construct( $editor ) {
	}
	public function editor() {
	}
	public function renderUITemplate() {
	}
}
/**
 * Class Vc_Templates_Panel_Editor
 *
 * @since 4.4
 */
class Vc_Templates_Panel_Editor {

	/**
	 * @since 4.4
	 * @var string
	 */
	protected $option_name = 'wpb_js_templates';
	/**
	 * @since 4.4
	 * @var bool
	 */
	protected $default_templates = \false;
	/**
	 * @since 4.4
	 * @var bool
	 */
	protected $initialized = \false;
	/**
	 * @since 4.4
	 * Add ajax hooks, filters.
	 */
	public function init() {
	}
	/**
	 * @return string
	 */
	public function addBodyClassTemplatePreview() {
	}
	/**
	 * @param $category
	 * @return mixed
	 */
	public function renderTemplateBlock( $category ) {
	}
	/** Output rendered template in new panel dialog
	 *
	 * @param $template_name
	 * @param $template_data
	 *
	 * @return string
	 * @since 4.4
	 */
	public function renderTemplateWindow( $template_name, $template_data ) {
	}
	/**
	 * @param $template_name
	 * @param $template_data
	 *
	 * @return string
	 * @since 4.4
	 */
	public function renderTemplateWindowMyTemplates( $template_name, $template_data ) {
	}
	/**
	 * @param $template_name
	 * @param $template_data
	 *
	 * @return string
	 * @since 4.4
	 */
	public function renderTemplateWindowDefaultTemplates( $template_name, $template_data ) {
	}
	/**
	 * @since 4.4
	 * vc_filter: vc_templates_render_frontend_template - called when unknown template received to render in frontend.
	 */
	public function renderFrontendTemplate() {
	}
	/**
	 * Load frontend default template content by index
	 *
	 * @since 4.4
	 */
	public function renderFrontendDefaultTemplate() {
	}
	/**
	 * @since 4.7
	 */
	public function renderUITemplate() {
	}
	/**
	 * @since 4.4
	 */
	public function save() {
	}
	/**
	 * Loading Any templates Shortcodes for backend by string $template_id from AJAX
	 *
	 * @since 4.4
	 * vc_filter: vc_templates_render_backend_template - called when unknown template requested to render in backend
	 */
	public function renderBackendTemplate() {
	}
	/**
	 * Render new template view as backened editor content.
	 *
	 * @since 4.8
	 */
	public function renderTemplatePreview() {
	}
	public function registerPreviewScripts() {
	}
	/**
	 * Enqueue required scripts for template preview
	 *
	 * @since 4.8
	 */
	public function enqueuePreviewScripts() {
	}
	/**
	 * @since 4.4
	 */
	public function delete() {
	}
	/**
	 * @param $templates
	 *
	 * vc_filter: vc_load_default_templates_limit_total - total items to show
	 *
	 * @return array
	 * @since 4.4
	 */
	public function loadDefaultTemplatesLimit( $templates ) {
	}
	/**
	 * Get user templates
	 *
	 * @return mixed
	 * @since 4.12
	 */
	public function getUserTemplates() {
	}
	/**
	 * Function to get all templates for display
	 *  - with image (optional preview image)
	 *  - with unique_id (required for do something for rendering.. )
	 *  - with name (required for display? )
	 *  - with type (required for requesting data in server)
	 *  - with category key (optional/required for filtering), if no category provided it will be displayed only in
	 * "All" category type vc_filter: vc_get_user_templates - hook to override "user My Templates" vc_filter:
	 * vc_get_all_templates - hook for override return array(all templates), hook to add/modify/remove more templates,
	 *  - this depends only to displaying in panel window (more layouts)
	 *
	 * @return array - all templates with name/unique_id/category_key(optional)/image
	 * @since 4.4
	 */
	public function getAllTemplates() {
	}
	/**
	 * Load default templates list and initialize variable
	 * To modify you should use add_filter('vc_load_default_templates','your_custom_function');
	 * Argument is array of templates data like:
	 *      array(
	 *          array(
	 *              'name'=>esc_html__('My custom template','my_plugin'),
	 *              'image_path'=> preg_replace( '/\s/', '%20', plugins_url( 'images/my_image.png', __FILE__ ) ), //
	 * always use preg replace to be sure that "space" will not break logic
	 *              'custom_class'=>'my_custom_class', // if needed
	 *              'content'=>'[my_shortcode]yeah[/my_shortcode]', // Use HEREDoc better to escape all single-quotes
	 * and double quotes
	 *          ),
	 *          ...
	 *      );
	 * Also see filters 'vc_load_default_templates_panels' and 'vc_load_default_templates_welcome_block' to modify
	 * templates in panels tab and/or in welcome block. vc_filter: vc_load_default_templates - filter to override
	 * default templates array
	 *
	 * @return array
	 * @since 4.4
	 */
	public function loadDefaultTemplates() {
	}
	/**
	 * Alias for loadDefaultTemplates
	 *
	 * @return array - list of default templates
	 * @since 4.4
	 */
	public function getDefaultTemplates() {
	}
	/**
	 * Get default template data by template index in array.
	 *
	 * @param number $template_index
	 *
	 * @return array|bool
	 * @since 4.4
	 */
	public function getDefaultTemplate( $template_index ) {
	}
	/**
	 * Add custom template to default templates list ( at end of list )
	 * $data = array( 'name'=>'', 'image'=>'', 'content'=>'' )
	 *
	 * @param $data
	 *
	 * @return bool true if added, false if failed
	 * @since 4.4
	 */
	public function addDefaultTemplates( $data ) {
	}
	/**
	 * Load default template content by index from ajax
	 *
	 * @param bool $return | should function return data or not
	 *
	 * @return string
	 * @since 4.4
	 */
	public function getBackendDefaultTemplate( $return = \false ) {
	}
	/**
	 * @param array $data
	 *
	 * @return array
	 * @since 4.4
	 */
	public function sortTemplatesByCategories( array $data ) {
	}
	/**
	 * @param array $data
	 *
	 * @return array
	 * @since 4.4
	 */
	public function sortTemplatesByNameWeight( array $data ) {
	}
	/**
	 * Function should return array of templates categories
	 *
	 * @param array $categories
	 *
	 * @return array - associative array of category key => and visible Name
	 * @since 4.4
	 */
	public function getAllCategoriesNames( array $categories ) {
	}
	/**
	 * @return array
	 * @since 4.4
	 */
	public function getAllTemplatesSorted() {
	}
	/**
	 * Used to compare two templates by category, category_weight
	 * If category weight is less template will appear in first positions
	 *
	 * @param array $a - template one
	 * @param array $b - second template to compare
	 *
	 * @return int
	 * @since 4.4
	 */
	protected function cmpCategory( $a, $b ) {
	}
	/**
	 * @param $a
	 * @param $b
	 *
	 * @return int
	 * @since 4.4
	 */
	protected function cmpNameWeight( $a, $b ) {
	}
	/**
	 * Calls do_shortcode for templates.
	 *
	 * @param $content
	 *
	 * @return string
	 */
	public function frontendDoTemplatesShortcodes( $content ) {
	}
	/**
	 * Add custom css from shortcodes from template for template editor.
	 *
	 * Used by action 'wp_print_scripts'.
	 *
	 * @todo move to autoload or else some where.
	 * @since 4.4.3
	 */
	public function addFrontendTemplatesShortcodesCustomCss() {
	}
	public function addScriptsToTemplatePreview() {
	}
	/**
	 * @param $template
	 * @return string
	 */
	public function renderTemplateListItem( $template ) {
	}
	/**
	 * @return string
	 */
	/**
	 * @return string
	 */
	public function getOptionName() {
	}
}
/**
 * Class Vc_Preset_Panel_Editor
 *
 * @since 5.2
 */
class Vc_Preset_Panel_Editor {

	/**
	 * @since 5.2
	 * @var bool
	 */
	protected $initialized = \false;
	/**
	 * @since 5.2
	 * Add ajax hooks, filters.
	 */
	public function init() {
	}
	/**
	 * @since 5.2
	 */
	public function renderUIPreset() {
	}
	/**
	 * Get list of all presets for specific shortcode
	 *
	 * @return array E.g. array(id1 => title1, id2 => title2, ...)
	 * @since 5.2
	 */
	public function listPresets() {
	}
	/**
	 * Single preset html
	 *
	 * @return string
	 * @since 5.2
	 */
	public function getPresets() {
	}
	/**
	 * Get preset parent shortcode name from post mime type
	 *
	 * @param $presetMimeType
	 *
	 * @return string
	 * @since 5.2
	 */
	public static function constructPresetParent( $presetMimeType ) {
	}
}
/**
 * WPBakery WPBakery Page Builder row
 *
 * @package WPBakeryPageBuilder
 */
class WPBakeryShortCode_Vc_Row extends \WPBakeryShortCode {

	protected $predefined_atts = array( 'el_class' => '' );
	public $nonDraggableClass  = 'vc-non-draggable-row';
	/**
	 * @param $settings
	 */
	public function __construct( $settings ) {
	}
	protected function shortcodeScripts() {
	}
	/**
	 * @param $atts
	 * @param null $content
	 * @return mixed|string
	 */
	protected function content( $atts, $content = \null ) {
	}
	/**
	 * This returs block controls
	 */
	public function getLayoutsControl() {
	}
	/**
	 * @param $controls
	 * @param string   $extended_css
	 * @return string
	 * @throws \Exception
	 */
	public function getColumnControls( $controls, $extended_css = '' ) {
	}
	/**
	 * @param $atts
	 * @param null $content
	 * @return string
	 * @throws \Exception
	 */
	public function contentAdmin( $atts, $content = \null ) {
	}
	/**
	 * @return string
	 * @throws \Exception
	 */
	public function cssAdminClass() {
	}
	/**
	 * @return string
	 * @deprecated 4.5 - due to it is not used anywhere? 4.5
	 * @typo Bock - Block
	 */
	public function customAdminBockParams() {
	}
	/**
	 * @param string $bg_image
	 * @param string $bg_color
	 * @param string $bg_image_repeat
	 * @param string $font_color
	 * @param string $padding
	 * @param string $margin_bottom
	 *
	 * @return string
	 * @deprecated 4.5
	 */
	public function buildStyle( $bg_image = '', $bg_color = '', $bg_image_repeat = '', $font_color = '', $padding = '', $margin_bottom = '' ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Row_Inner
 */
class WPBakeryShortCode_Vc_Row_Inner extends \WPBakeryShortCode_Vc_Row {

	/**
	 * @param string $content
	 * @return string
	 * @throws \Exception
	 */
	public function template( $content = '' ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_gallery
 */
class WPBakeryShortCode_Vc_Gallery extends \WPBakeryShortCode {

	/**
	 * WPBakeryShortCode_Vc_gallery constructor.
	 *
	 * @param $settings
	 */
	public function __construct( $settings ) {
	}
	public function shortcodeScripts() {
	}
	/**
	 * @param $param
	 * @param $value
	 * @return string
	 */
	public function singleParamHtmlHolder( $param, $value ) {
	}
}
/**
 * Class WPBakeryShortCodesContainer
 */
abstract class WPBakeryShortCodesContainer extends \WPBakeryShortCode {

	/**
	 * @var array
	 */
	protected $predefined_atts                  = array();
	protected $backened_editor_prepend_controls = \true;
	/**
	 * @return string
	 */
	public function customAdminBlockParams() {
	}
	/**
	 * @param $width
	 * @param $i
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function mainHtmlBlockParams( $width, $i ) {
	}
	/**
	 * @param $width
	 * @param $i
	 *
	 * @return string
	 */
	public function containerHtmlBlockParams( $width, $i ) {
	}
	/**
	 *
	 * @return string
	 */
	public function containerContentClass() {
	}
	/** @noinspection PhpMissingParentCallCommonInspection */
	/**
	 * @param string $controls
	 * @param string $extended_css
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function getColumnControls( $controls = 'full', $extended_css = '' ) {
	}
	/**
	 * @param $atts
	 * @param null $content
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function contentAdmin( $atts, $content = \null ) {
	}
	/**
	 * @param $title
	 *
	 * @return string
	 */
	protected function outputTitle( $title ) {
	}
	/**
	 * @return string
	 */
	/**
	 * @return string
	 */
	public function getBackendEditorChildControlsElementCssClass() {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Tta_Accordion
 */
class WPBakeryShortCode_Vc_Tta_Accordion extends \WPBakeryShortCodesContainer {

	protected $controls_css_settings = 'out-tc vc_controls-content-widget';
	protected $controls_list         = array( 'add', 'edit', 'clone', 'delete' );
	protected $template_vars         = array();
	public $layout                   = 'accordion';
	protected $content;
	public $activeClass = 'vc_active';
	/**
	 * @var WPBakeryShortCode_Vc_Tta_Section
	 */
	protected $sectionClass;
	public $nonDraggableClass = 'vc-non-draggable-container';
	/**
	 * @return mixed|string
	 */
	public function getFileName() {
	}
	/**
	 * @return string
	 */
	public function containerContentClass() {
	}
	/**
	 * @param $atts
	 * @param $content
	 */
	public function resetVariables( $atts, $content ) {
	}
	/**
	 * @return bool
	 * @throws \Exception
	 */
	public function setGlobalTtaInfo() {
	}
	/**
	 * Override default getColumnControls to make it "simple"(blue), as single element has
	 *
	 * @param string $controls
	 * @param string $extended_css
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function getColumnControls( $controls = 'full', $extended_css = '' ) {
	}
	/**
	 * @return string
	 */
	public function getTtaContainerClasses() {
	}
	/**
	 * @return string
	 */
	public function getTtaGeneralClasses() {
	}
	/**
	 * @return string
	 */
	public function getTtaPaginationClasses() {
	}
	/**
	 * @return string
	 */
	public function getWrapperAttributes() {
	}
	/**
	 * @param $string
	 * @return mixed|string
	 */
	public function getTemplateVariable( $string ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamColor( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamStyle( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamTitle( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamContent( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamShape( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string
	 */
	public function getParamSpacing( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamGap( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamNoFill( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamCAlign( $atts, $content ) {
	}
	/**
	 * Accordion doesn't have pagination
	 *
	 * @param $atts
	 * @param $content
	 *
	 * @return null
	 */
	public function getParamPaginationTop( $atts, $content ) {
	}
	/**
	 * Accordion doesn't have pagination
	 *
	 * @param $atts
	 * @param $content
	 *
	 * @return null
	 */
	public function getParamPaginationBottom( $atts, $content ) {
	}
	/**
	 * Get currently active section (from $atts)
	 *
	 * @param $atts
	 * @param bool $strict_bounds If true, check for min/max bounds
	 *
	 * @return int nth position (one-based) of active section
	 */
	public function getActiveSection( $atts, $strict_bounds = \false ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string
	 */
	public function getParamPaginationList( $atts, $content ) {
	}
	public function enqueueTtaStyles() {
	}
	public function enqueueTtaScript() {
	}
	/**
	 * Override default outputTitle (also Icon). To remove anything, also Icon.
	 *
	 * @param $title - just for strict standards
	 *
	 * @return string
	 */
	protected function outputTitle( $title ) {
	}
	/**
	 * Check is allowed to add another element inside current element.
	 *
	 * @return bool
	 * @throws \Exception
	 * @since 4.8
	 */
	public function getAddAllowed() {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Tta_Tabs
 */
class WPBakeryShortCode_Vc_Tta_Tabs extends \WPBakeryShortCode_Vc_Tta_Accordion {

	public $layout = 'tabs';
	public function enqueueTtaScript() {
	}
	/**
	 * @return string
	 */
	public function getWrapperAttributes() {
	}
	/**
	 * @return string
	 */
	public function getTtaGeneralClasses() {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamTabPosition( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamTabsListTop( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamTabsListBottom( $atts, $content ) {
	}
	/**
	 * Pagination is on top only if tabs are at bottom
	 *
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamPaginationTop( $atts, $content ) {
	}
	/**
	 * Pagination is at bottom only if tabs are on top
	 *
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamPaginationBottom( $atts, $content ) {
	}
	/**
	 * @param $atts
	 *
	 * @return string
	 */
	public function constructIcon( $atts ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string
	 */
	public function getParamTabsList( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamAlignment( $atts, $content ) {
	}
}
/**
 * WPBakery WPBakery Page Builder shortcodes
 *
 * @package WPBakeryPageBuilder
 */
class WPBakeryShortCode_VC_Column extends \WPBakeryShortCode {

	/**
	 * @var string
	 */
	public $nonDraggableClass = 'vc-non-draggable-column';
	/**
	 * @param $settings
	 */
	public function __construct( $settings ) {
	}
	/**
	 *
	 */
	protected function shortcodeScripts() {
	}
	/**
	 * @param $controls
	 * @param string   $extended_css
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function getColumnControls( $controls, $extended_css = '' ) {
	}
	/**
	 * @param $param
	 * @param $value
	 *
	 * @return string
	 */
	public function singleParamHtmlHolder( $param, $value ) {
	}
	/**
	 * @param $atts
	 * @param null $content
	 *
	 * @return string
	 */
	public function contentAdmin( $atts, $content = \null ) {
	}
	/**
	 * @return string
	 */
	public function customAdminBlockParams() {
	}
	/**
	 * @param $width
	 * @param $i
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function mainHtmlBlockParams( $width, $i ) {
	}
	/**
	 * @param $width
	 * @param $i
	 *
	 * @return string
	 */
	public function containerHtmlBlockParams( $width, $i ) {
	}
	/**
	 * @param string $content
	 *
	 * @return string
	 */
	public function template( $content = '' ) {
	}
	/**
	 * @return string
	 */
	protected function templateWidth() {
	}
	/**
	 * @param string $font_color
	 *
	 * @return string
	 */
	public function buildStyle( $font_color = '' ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Gitem_Post_Data
 */
class WPBakeryShortCode_Vc_Gitem_Post_Data extends \WPBakeryShortCode_Vc_Custom_heading {

	/**
	 * Get data_source attribute value
	 *
	 * @param array $atts - list of shortcode attributes
	 *
	 * @return string
	 */
	public function getDataSource( array $atts ) {
	}
	/**
	 * @param $atts
	 * @return array
	 * @throws \Exception
	 */
	public function getAttributes( $atts ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Gitem_Image
 */
class WPBakeryShortCode_Vc_Gitem_Image extends \WPBakeryShortCode_Vc_Gitem_Post_Data {

	/**
	 * Get data_source attribute value
	 *
	 * @param array $atts - list of shortcode attributes
	 *
	 * @return string
	 */
	public function getDataSource( array $atts ) {
	}
}
/**
 * WPBakery WPBakery Page Builder shortcodes
 *
 * @package WPBakeryPageBuilder
 */
class WPBakeryShortCode_Vc_Custom_Field extends \WPBakeryShortCode {

}
/**
 * Class WPBakeryShortCode_Vc_Tta_Pageable
 */
class WPBakeryShortCode_Vc_Tta_Pageable extends \WPBakeryShortCode_Vc_Tta_Tabs {

	public $layout = 'tabs';
	/**
	 * @return string
	 */
	public function getTtaContainerClasses() {
	}
	/**
	 * @return mixed|string
	 */
	public function getTtaGeneralClasses() {
	}
	/**
	 * Disable all tabs
	 *
	 * @param $atts
	 * @param $content
	 *
	 * @return string
	 */
	public function getParamTabsList( $atts, $content ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Raw_Js
 */
class WPBakeryShortCode_Vc_Raw_Js extends \WPBakeryShortCode_Vc_Raw_html {

	/**
	 * @return mixed|string
	 */
	protected function getFileName() {
	}
	/**
	 * @param $atts
	 * @param null $content
	 * @return string
	 */
	protected function contentInline( $atts, $content = \null ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_images_carousel
 */
class WPBakeryShortCode_Vc_Images_Carousel extends \WPBakeryShortCode_Vc_Gallery {

	protected static $carousel_index = 1;
	/**
	 * WPBakeryShortCode_Vc_images_carousel constructor.
	 *
	 * @param $settings
	 */
	public function __construct( $settings ) {
	}
	public function jsCssScripts() {
	}
	/**
	 * @return string
	 */
	public static function getCarouselIndex() {
	}
	/**
	 * @param $size
	 * @return string
	 */
	protected function getSliderWidth( $size ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Toggle
 */
class WPBakeryShortCode_Vc_Toggle extends \WPBakeryShortCode {

	/**
	 * @param $title
	 * @return string
	 */
	public function outputTitle( $title ) {
	}
	/**
	 * @param $atts
	 * @return string
	 * @throws \Exception
	 */
	public function getHeading( $atts ) {
	}
}
/**
 * WPBakery WPBakery Page Builder shortcodes
 *
 * @package WPBakeryPageBuilder
 */
class WPBakeryShortCode_Vc_Button extends \WPBakeryShortCode {

	/**
	 * @param $title
	 * @return string
	 */
	protected function outputTitle( $title ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Tta_Tour
 */
class WPBakeryShortCode_Vc_Tta_Tour extends \WPBakeryShortCode_Vc_Tta_Tabs {

	public $layout = 'tabs';
	/**
	 * @return string
	 */
	public function getTtaGeneralClasses() {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamControlsSize( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamTabsListLeft( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamTabsListRight( $atts, $content ) {
	}
	/**
	 * Never on top
	 *
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamPaginationTop( $atts, $content ) {
	}
	/**
	 * Always on bottom
	 *
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamPaginationBottom( $atts, $content ) {
	}
}
/**
 * Class Vc_Pageable
 */
class WPBakeryShortCode_Vc_Pageable extends \WPBakeryShortCode {

	/**
	 * @param $settings
	 */
	public function __construct( $settings ) {
	}
	/**
	 * Register scripts and styles for pager
	 */
	public function shortcodeScripts() {
	}
	/**
	 * @param $grid_style
	 * @param $settings
	 * @param $content
	 *
	 * @return string
	 */
	protected function contentAll( $grid_style, $settings, $content ) {
	}
	/**
	 * @param $grid_style
	 * @param $settings
	 * @param $content
	 *
	 * @return string
	 */
	protected function contentLoadMore( $grid_style, $settings, $content ) {
	}
	/**
	 * @param $grid_style
	 * @param $settings
	 * @param $content
	 *
	 * @return string
	 */
	protected function contentLazy( $grid_style, $settings, $content ) {
	}
	/**
	 * @param $grid_style
	 * @param $settings
	 * @param string     $content
	 *
	 * @param string     $css_class
	 *
	 * @return string
	 */
	public function renderPagination( $grid_style, $settings, $content = '', $css_class = '' ) {
	}
	public function enqueueScripts() {
	}
	/**
	 * Check is pageable
	 *
	 * @return bool
	 * @since 4.7.4
	 */
	public function isObjectPageable() {
	}
	/**
	 * Check can user manage post.
	 *
	 * @param int $page_id
	 *
	 * @return bool
	 */
	public function currentUserCanManage( $page_id ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Basic_Grid
 */
class WPBakeryShortCode_Vc_Basic_Grid extends \WPBakeryShortCode_Vc_Pageable {

	public $pagable_type                = 'grid';
	public $items                       = array();
	public static $excluded_ids         = array();
	protected $element_template         = '';
	protected static $default_max_items = 1000;
	public $post_id                     = \false;
	/** @var \Vc_Grid_Item $grid_item */
	public $grid_item = \false;
	protected $filter_terms;
	public $attributes_defaults    = array(
		'initial_loading_animation'           => 'zoomIn',
		'full_width'                          => '',
		'layout'                              => '',
		'element_width'                       => '4',
		'items_per_page'                      => '5',
		'gap'                                 => '',
		'style'                               => 'all',
		'show_filter'                         => '',
		'filter_default_title'                => 'all',
		'exclude_filter'                      => '',
		'filter_style'                        => '',
		'filter_size'                         => 'md',
		'filter_align'                        => '',
		'filter_color'                        => '',
		'arrows_design'                       => '',
		'arrows_position'                     => '',
		'arrows_color'                        => '',
		'paging_design'                       => '',
		'paging_color'                        => '',
		'paging_animation_in'                 => '',
		'paging_animation_out'                => '',
		'loop'                                => '',
		'autoplay'                            => '',
		'post_type'                           => 'post',
		'filter_source'                       => 'category',
		'orderby'                             => '',
		'order'                               => 'DESC',
        // @codingStandardsIgnoreLine
        'meta_key' => '',
		'max_items'                           => '10',
		'offset'                              => '0',
		'taxonomies'                          => '',
		'custom_query'                        => '',
		'data_type'                           => 'query',
		'include'                             => '',
		'exclude'                             => '',
		'item'                                => 'none',
		'grid_id'                             => '',
		// disabled, needed for-BC:
		'button_style'                        => '',
		'button_color'                        => '',
		'button_size'                         => '',
		// New button3:
		'btn_title'                           => '',
		'btn_style'                           => 'modern',
		'btn_el_id'                           => '',
		'btn_custom_background'               => '#ededed',
		'btn_custom_text'                     => '#666',
		'btn_outline_custom_color'            => '#666',
		'btn_outline_custom_hover_background' => '#666',
		'btn_outline_custom_hover_text'       => '#fff',
		'btn_shape'                           => 'rounded',
		'btn_color'                           => 'blue',
		'btn_size'                            => 'md',
		'btn_align'                           => 'inline',
		'btn_button_block'                    => '',
		'btn_add_icon'                        => '',
		'btn_i_align'                         => 'left',
		'btn_i_type'                          => 'fontawesome',
		'btn_i_icon_fontawesome'              => 'fa fa-adjust',
		'btn_i_icon_openiconic'               => 'vc-oi vc-oi-dial',
		'btn_i_icon_typicons'                 => 'typcn typcn-adjust-brightness',
		'btn_i_icon_entypo'                   => 'entypo-icon entypo-icon-note',
		'btn_i_icon_linecons'                 => 'vc_li vc_li-heart',
		'btn_i_icon_pixelicons'               => 'vc_pixel_icon vc_pixel_icon-alert',
		'btn_custom_onclick'                  => '',
		'btn_custom_onclick_code'             => '',
		// fix template
		'page_id'                             => '',
	);
	protected $grid_settings       = array();
	protected $grid_id_unique_name = 'vc_gid';
	// if you change this also change in hook-vc-grid.php
	/**
	 * @var \WP_Query
	 */
	protected $query;
	/**
	 * WPBakeryShortCode_Vc_Basic_Grid constructor.
	 *
	 * @param $settings
	 */
	public function __construct( $settings ) {
	}
	public function shortcodeScripts() {
	}
	public function enqueueScripts() {
	}
	/**
	 * @param $id
	 */
	public static function addExcludedId( $id ) {
	}
	/**
	 * @return array
	 */
	public static function excludedIds() {
	}
	/**
	 * @param $atts
	 * @param $content
	 * @return false|mixed|string|void
	 */
	public function getId( $atts, $content ) {
	}
	/**
	 * @param $page_id
	 * @param $grid_id
	 * @return array|mixed|object|void
	 */
	public function findPostShortcodeById( $page_id, $grid_id ) {
	}
	/**
	 * @return string
	 * @throws \Exception
	 */
	public function renderItems() {
	}
	public function setContentLimits() {
	}
	/**
	 * @param $max_items
	 */
	protected function setPagingAll( $max_items ) {
	}
	/**
	 * @param $vc_request_param
	 * @return false|mixed|string|void
	 * @throws \Exception
	 */
	public function renderAjax( $vc_request_param ) {
	}
	/**
	 * @return bool|false|int
	 */
	public function postID() {
	}
	/**
	 * @param $atts
	 * @param $content
	 * @throws \Exception
	 */
	public function buildAtts( $atts, $content ) {
	}
	/**
	 * Getter attribute.
	 *
	 * @param $key
	 *
	 * @return mixed|null
	 */
	public function attr( $key ) {
	}
	public function buildGridSettings() {
	}
	// TODO: setter & getter to attributes
	/**
	 * @param $atts
	 * @return array
	 */
	public function buildQuery( $atts ) {
	}
	public function buildItems() {
	}
	/**
	 * @param $args
	 * @return array
	 */
	public function filterQuerySettings( $args ) {
	}
	/**
	 * @param $atts
	 * @return mixed
	 */
	public static function convertButton2ToButton3( $atts ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Media_Grid
 */
class WPBakeryShortCode_Vc_Media_Grid extends \WPBakeryShortCode_Vc_Basic_Grid {

	/**
	 * WPBakeryShortCode_Vc_Media_Grid constructor.
	 *
	 * @param $settings
	 */
	public function __construct( $settings ) {
	}
	/**
	 * @return mixed|string
	 */
	protected function getFileName() {
	}
	/**
	 * @param $max_items
	 */
	protected function setPagingAll( $max_items ) {
	}
	/**
	 * @param $atts
	 * @return array
	 */
	public function buildQuery( $atts ) {
	}
	/**
	 * @param $items
	 * @return string
	 */
	public function setItemsIfEmpty( $items ) {
	}
	/**
	 * @param $param
	 * @param $value
	 * @return string
	 */
	public function singleParamHtmlHolder( $param, $value ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Masonry_Media_Grid
 */
class WPBakeryShortCode_Vc_Masonry_Media_Grid extends \WPBakeryShortCode_Vc_Media_Grid {

	public function shortcodeScripts() {
	}
	public function enqueueScripts() {
	}
	public function buildGridSettings() {
	}
	/**
	 * @param $grid_style
	 * @param $settings
	 * @param $content
	 * @return string
	 */
	protected function contentAllMasonry( $grid_style, $settings, $content ) {
	}
	/**
	 * @param $grid_style
	 * @param $settings
	 * @param $content
	 * @return string
	 */
	protected function contentLazyMasonry( $grid_style, $settings, $content ) {
	}
	/**
	 * @param $grid_style
	 * @param $settings
	 * @param $content
	 * @return string
	 */
	protected function contentLoadMoreMasonry( $grid_style, $settings, $content ) {
	}
}
/**
 * WPBakery WPBakery Page Builder shortcodes
 *
 * @package WPBakeryPageBuilder
 */
/**
 * Class WPBakeryShortCode_Vc_Btn
 *
 * @since 4.5
 */
class WPBakeryShortCode_Vc_Btn extends \WPBakeryShortCode {

	/**
	 * @param $atts
	 * @return mixed
	 */
	public static function convertAttributesToButton3( $atts ) {
	}
	/**
	 * @param $title
	 *
	 * @return string
	 * @since 4.5
	 */
	protected function outputTitle( $title ) {
	}
}
/* abstract deprecated class to create structural object of any type */
abstract class WPBakeryVisualComposerAbstract {

	/**
	 * @var
	 */
	public static $config;
	/**
	 * @var string
	 */
	protected $controls_css_settings = 'cc';
	/**
	 * @var array
	 */
	protected $controls_list = array( 'edit', 'clone', 'delete' );
	/**
	 * @var string
	 */
	protected $shortcode_content = '';
	/**
	 *
	 */
	public function __construct() {
	}
	/**
	 * @param $settings
	 * @deprecated not used
	 */
	public function init( $settings ) {
	}
	/**
	 * @param $action
	 * @param $method
	 * @param int    $priority
	 * @return true|void
	 * @deprecated 6.0 use native WordPress actions
	 */
	public function addAction( $action, $method, $priority = 10 ) {
	}
	/**
	 * @param $action
	 * @param $method
	 * @param int    $priority
	 *
	 * @return bool
	 * @deprecated 6.0 use native WordPress actions
	 */
	public function removeAction( $action, $method, $priority = 10 ) {
	}
	/**
	 * @param $filter
	 * @param $method
	 * @param int    $priority
	 *
	 * @return bool|void
	 * @deprecated 6.0 use native WordPress actions
	 */
	public function addFilter( $filter, $method, $priority = 10 ) {
	}
	/**
	 * @param $filter
	 * @param $method
	 * @param int    $priority
	 * @return bool
	 * @deprecated 6.0 use native WordPress
	 */
	public function removeFilter( $filter, $method, $priority = 10 ) {
	}
	/**
	 * @param $tag
	 * @param $func
	 * @deprecated 6.0 not used
	 */
	public function addShortCode( $tag, $func ) {
	}
	/**
	 * @param $content
	 * @deprecated 6.0 not used
	 */
	public function doShortCode( $content ) {
	}
	/**
	 * @param $tag
	 * @deprecated 6.0 not used
	 */
	public function removeShortCode( $tag ) {
	}
	/**
	 * @param $param
	 *
	 * @return null
	 * @deprecated 6.0 not used, use vc_post_param
	 */
	public function post( $param ) {
	}
	/**
	 * @param $param
	 *
	 * @return null
	 * @deprecated 6.0 not used, use vc_get_param
	 */
	public function get( $param ) {
	}
	/**
	 * @param $asset
	 *
	 * @return string
	 * @deprecated 4.5 use vc_asset_url
	 */
	public function assetURL( $asset ) {
	}
	/**
	 * @param $asset
	 *
	 * @return string
	 * @deprecated 6.0 not used
	 */
	public function assetPath( $asset ) {
	}
	/**
	 * @param $name
	 *
	 * @return null
	 * @deprecated 6.0 not used
	 */
	public static function config( $name ) {
	}
}
/**
 * @since 4.9
 *
 * Class Vc_Shortcodes_Manager
 */
class Vc_Shortcodes_Manager {

	private $shortcode_classes = array( 'default' => array() );
	private $tag;
	/**
	 * Core singleton class
	 *
	 * @var self - pattern realization
	 */
	private static $instance;
	/**
	 * Get the instance of Vc_Shortcodes_Manager
	 *
	 * @return self
	 */
	public static function getInstance() {
	}
	public function getTag() {
	}
	/**
	 * @param $tag
	 * @return $this
	 */
	/**
	 * @param $tag
	 * @return $this
	 */
	public function setTag( $tag ) {
	}
	/**
	 * @param $tag
	 * @return \WPBakeryShortCodeFishBones
	 * @throws \Exception
	 */
	/**
	 * @param $tag
	 * @return \WPBakeryShortCodeFishBones
	 * @throws \Exception
	 */
	public function getElementClass( $tag ) {
	}
	/**
	 * @return \WPBakeryShortCodeFishBones
	 * @throws \Exception
	 */
	/**
	 * @return \WPBakeryShortCodeFishBones
	 * @throws \Exception
	 */
	public function shortcodeClass() {
	}
	/**
	 * @param string $content
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function template( $content = '' ) {
	}
	/**
	 * @param $name
	 *
	 * @return null
	 * @throws \Exception
	 */
	public function settings( $name ) {
	}
	/**
	 * @param $atts
	 * @param null $content
	 * @param null $tag
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function render( $atts, $content = \null, $tag = \null ) {
	}
	public function buildShortcodesAssets() {
	}
	public function buildShortcodesAssetsForEditable() {
	}
	/**
	 * @param $tag
	 * @return bool
	 */
	/**
	 * @param $tag
	 * @return bool
	 */
	public function isShortcodeClassInitialized( $tag ) {
	}
	/**
	 * @param $tag
	 * @return bool
	 */
	/**
	 * @param $tag
	 * @return bool
	 */
	public function unsetElementClass( $tag ) {
	}
}
/**
 * Class WPBakeryShortCodeFishBones
 */
class WPBakeryShortCodeFishBones extends \WPBakeryShortCode {

	/**
	 * @var bool
	 */
	protected $shortcode_class = \false;
	/**
	 * @param $settings
	 * @throws \Exception
	 */
	public function __construct( $settings ) {
	}
	public function hookAdmin() {
	}
	/**
	 * @return WPBakeryShortCodeFishBones
	 * @throws \Exception
	 */
	public function shortcodeClass() {
	}
	/**
	 *
	 *
	 * @param $tag
	 *
	 * @return \WPBakeryShortCodeFishBones
	 * @throws \Exception
	 * @since 4.9
	 */
	public static function getElementClass( $tag ) {
	}
	/**
	 * @param $atts
	 * @param null $content
	 * @param null $tag
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function render( $atts, $content = \null, $tag = \null ) {
	}
	/**
	 * @param string $content
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function template( $content = '' ) {
	}
}
/**
 * Class WPBakeryShortCode_VC_Accordion_tab
 */
class WPBakeryShortCode_VC_Accordion_Tab extends \WPBakeryShortCode_VC_Tab {

	/**
	 * @var string
	 */
	protected $controls_css_settings = 'tc vc_control-container';
	/**
	 * @var array
	 */
	protected $controls_list = array( 'add', 'edit', 'clone', 'delete' );
	/**
	 * @var string
	 */
	public $nonDraggableClass = 'vc-non-draggable-container';
	/**
	 * @param $atts
	 * @param null $content
	 * @return string
	 * @throws \Exception
	 */
	public function contentAdmin( $atts, $content = \null ) {
	}
	/**
	 * @param $width
	 * @param $i
	 * @return string
	 */
	public function mainHtmlBlockParams( $width, $i ) {
	}
	/**
	 * @param $width
	 * @param $i
	 * @return string
	 */
	public function containerHtmlBlockParams( $width, $i ) {
	}
	/**
	 * @param $title
	 * @return string
	 */
	protected function outputTitle( $title ) {
	}
	/**
	 * @return string
	 */
	public function customAdminBlockParams() {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Hoverbox
 */
class WPBakeryShortCode_Vc_Hoverbox extends \WPBakeryShortCode {

	/**
	 * @param $tag
	 * @param $atts
	 * @param $align
	 * @return string
	 * @throws \Exception
	 */
	public function getHeading( $tag, $atts, $align ) {
	}
	/**
	 * @param $atts
	 * @return string
	 * @throws \Exception
	 */
	public function renderButton( $atts ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Gitem_Post_Author
 */
class WPBakeryShortCode_Vc_Gitem_Post_Author extends \WPBakeryShortCode_Vc_Gitem_Post_Data {

	/**
	 * @return mixed|string
	 */
	protected function getFileName() {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Posts_slider
 */
class WPBakeryShortCode_Vc_Posts_Slider extends \WPBakeryShortCode {

}
/**
 * Class WPBakeryShortCode_Vc_Custom_heading
 *
 * @since 4.3
 */
class WPBakeryShortCode_Vc_Custom_Heading extends \WPBakeryShortCode {

	/**
	 * Defines fields names for google_fonts, font_container and etc
	 *
	 * @since 4.4
	 * @var array
	 */
	protected $fields = array(
		'google_fonts'   => 'google_fonts',
		'font_container' => 'font_container',
		'el_class'       => 'el_class',
		'css'            => 'css',
		'text'           => 'text',
	);
	/**
	 * Used to get field name in vc_map function for google_fonts, font_container and etc..
	 *
	 * @param $key
	 *
	 * @return bool
	 * @since 4.4
	 */
	protected function getField( $key ) {
	}
	/**
	 * Get param value by providing key
	 *
	 * @param $key
	 *
	 * @return array|bool
	 * @throws \Exception
	 * @since 4.4
	 */
	protected function getParamData( $key ) {
	}
	/**
	 * Parses shortcode attributes and set defaults based on vc_map function relative to shortcode and fields names
	 *
	 * @param $atts
	 *
	 * @return array
	 * @throws \Exception
	 * @since 4.3
	 */
	public function getAttributes( $atts ) {
	}
	/**
	 * Parses google_fonts_data and font_container_data to get needed css styles to markup
	 *
	 * @param $el_class
	 * @param $css
	 * @param $google_fonts_data
	 * @param $font_container_data
	 * @param $atts
	 *
	 * @return array
	 * @since 4.3
	 */
	public function getStyles( $el_class, $css, $google_fonts_data, $font_container_data, $atts ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Gitem_Post_Meta
 */
class WPBakeryShortCode_Vc_Gitem_Post_Meta extends \WPBakeryShortCode {

}
/**
 * Class WPBakeryShortCode_Vc_Progress_Bar
 */
class WPBakeryShortCode_Vc_Progress_Bar extends \WPBakeryShortCode {

	/**
	 * @param $atts
	 * @return mixed
	 */
	public static function convertAttributesToNewProgressBar( $atts ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Text_separator
 */
class WPBakeryShortCode_Vc_Text_Separator extends \WPBakeryShortCode {

	/**
	 * @param $title
	 * @return string
	 */
	public function outputTitle( $title ) {
	}
	/**
	 * @param $atts
	 * @return string
	 * @throws \Exception
	 */
	public function getVcIcon( $atts ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Column_Text
 */
class WPBakeryShortCode_Vc_Column_Text extends \WPBakeryShortCode {

	/**
	 * @param $title
	 * @return string
	 */
	protected function outputTitle( $title ) {
	}
}
/**
 * WPBakery WPBakery Page Builder section
 *
 * @package WPBakeryPageBuilder
 */
class WPBakeryShortCode_Vc_Section extends \WPBakeryShortCodesContainer {

	/**
	 * @param $width
	 * @param $i
	 * @return string
	 */
	public function containerHtmlBlockParams( $width, $i ) {
	}
	/**
	 * @param $settings
	 */
	public function __construct( $settings ) {
	}
	protected function shortcodeScripts() {
	}
	/**
	 * @return string
	 * @throws \Exception
	 */
	public function cssAdminClass() {
	}
	/**
	 * @param string $controls
	 * @param string $extended_css
	 * @return string
	 * @throws \Exception
	 */
	public function getColumnControls( $controls = 'full', $extended_css = '' ) {
	}
	/**
	 * @param $atts
	 * @param null $content
	 * @return string
	 * @throws \Exception
	 */
	public function contentAdmin( $atts, $content = \null ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Gitem_Zone
 */
class WPBakeryShortCode_Vc_Gitem_Zone extends \WPBakeryShortCodesContainer {

	public $zone_name = '';
}
/**
 * Class WPBakeryShortCode_Vc_Empty_space
 */
class WPBakeryShortCode_Vc_Empty_Space extends \WPBakeryShortCode {

}
/**
 * Class WPBakeryShortCode_Layerslider_Vc
 */
class WPBakeryShortCode_Layerslider_Vc extends \WPBakeryShortCode {

}
/**
 * Class WPBakeryShortCode_Vc_Zigzag
 */
class WPBakeryShortCode_Vc_Zigzag extends \WPBakeryShortCode {

}
/**
 * Class WPBakeryShortCode_Vc_flickr
 */
class WPBakeryShortCode_Vc_Flickr extends \WPBakeryShortCode {

}
/**
 * Class WPBakeryShortCode_Vc_Round_Chart
 */
class WPBakeryShortCode_Vc_Round_Chart extends \WPBakeryShortCode {

	/**
	 * WPBakeryShortCode_Vc_Round_Chart constructor.
	 *
	 * @param $settings
	 */
	public function __construct( $settings ) {
	}
	public function jsScripts() {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Gitem
 */
class WPBakeryShortCode_Vc_Gitem extends \WPBakeryShortCodesContainer {

	/**
	 * @param $atts
	 * @param null $content
	 * @return string
	 * @throws \Exception
	 */
	public function contentAdmin( $atts, $content = \null ) {
	}
	/**
	 * @param $width
	 * @param $i
	 * @return string
	 * @throws \Exception
	 */
	public function mainHtmlBlockParams( $width, $i ) {
	}
	/**
	 * @return string
	 */
	public function itemGrid() {
	}
	/**
	 * @param $width
	 * @param $i
	 * @return string
	 */
	public function containerHtmlBlockParams( $width, $i ) {
	}
	/**
	 * Get rendered controls
	 *
	 * @param array $controls
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function getControls( $controls ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Gitem_Animated_Block
 */
class WPBakeryShortCode_Vc_Gitem_Animated_Block extends \WPBakeryShortCode_Vc_Gitem {

	protected static $animations = array();
	/**
	 * @return string
	 */
	public function itemGrid() {
	}
	/**
	 * @param $width
	 * @param $i
	 * @return string
	 */
	public function containerHtmlBlockParams( $width, $i ) {
	}
	/**
	 * @return array
	 */
	public static function animations() {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Masonry_Grid
 */
class WPBakeryShortCode_Vc_Masonry_Grid extends \WPBakeryShortCode_Vc_Basic_Grid {

	/**
	 * @return mixed|string
	 */
	protected function getFileName() {
	}
	public function shortcodeScripts() {
	}
	public function enqueueScripts() {
	}
	public function buildGridSettings() {
	}
	/**
	 * @param $grid_style
	 * @param $settings
	 * @param $content
	 * @return string
	 */
	protected function contentAllMasonry( $grid_style, $settings, $content ) {
	}
	/**
	 * @param $grid_style
	 * @param $settings
	 * @param $content
	 * @return string
	 */
	protected function contentLazyMasonry( $grid_style, $settings, $content ) {
	}
	/**
	 * @param $grid_style
	 * @param $settings
	 * @param $content
	 * @return string
	 */
	protected function contentLoadMoreMasonry( $grid_style, $settings, $content ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Tab
 */
class WPBakeryShortCode_Vc_Tab extends \WPBakeryShortCode_Vc_Column {

	protected $controls_css_settings  = 'tc vc_control-container';
	protected $controls_list          = array( 'add', 'edit', 'clone', 'delete' );
	protected $controls_template_file = 'editors/partials/backend_controls_tab.tpl.php';
	/**
	 * @return string
	 */
	public function customAdminBlockParams() {
	}
	/**
	 * @param $width
	 * @param $i
	 * @return string
	 * @throws \Exception
	 */
	public function mainHtmlBlockParams( $width, $i ) {
	}
	/**
	 * @param $width
	 * @param $i
	 * @return string
	 */
	public function containerHtmlBlockParams( $width, $i ) {
	}
	/**
	 * @param $controls
	 * @param string   $extended_css
	 * @return string
	 * @throws \Exception
	 */
	public function getColumnControls( $controls, $extended_css = '' ) {
	}
}
/**
 * WPBakery WPBakery Page Builder shortcodes
 *
 * @package WPBakeryPageBuilder
 */
class WPBakeryShortCode_Vc_Accordion extends \WPBakeryShortCode {

	protected $controls_css_settings = 'out-tc vc_controls-content-widget';
	/**
	 * @param $atts
	 * @param null $content
	 * @return mixed|string
	 * @throws \Exception
	 */
	public function contentAdmin( $atts, $content = \null ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Gutenberg
 */
class WPBakeryShortCode_Vc_Gutenberg extends \WPBakeryShortCode {

	/**
	 * @param $title
	 * @return string
	 */
	protected function outputTitle( $title ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Wp_Text
 */
class WPBakeryShortCode_Vc_Wp_Text extends \WPBakeryShortCode {

	/**
	 * This actually fixes #1537 by converting 'text' to 'content'
	 *
	 * @param $atts
	 *
	 * @return mixed
	 * @since 4.4
	 */
	public static function convertTextAttributeToContent( $atts ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Twitter
 */
class WPBakeryShortCode_Vc_Twitter extends \WPBakeryShortCode {

}
/**
 * Class WPBakeryShortCode_Vc_Widget_sidebar
 */
class WPBakeryShortCode_Vc_Widget_Sidebar extends \WPBakeryShortCode {

}
/**
 * Class WPBakeryShortCode_Vc_Tta_Section
 */
class WPBakeryShortCode_Vc_Tta_Section extends \WPBakeryShortCode_Vc_Tta_Accordion {

	protected $controls_css_settings            = 'tc vc_control-container';
	protected $controls_list                    = array( 'add', 'edit', 'clone', 'delete' );
	protected $backened_editor_prepend_controls = \false;
	/**
	 * @var WPBakeryShortCode_Vc_Tta_Accordion
	 */
	public static $tta_base_shortcode;
	public static $self_count   = 0;
	public static $section_info = array();
	/**
	 * @return mixed|string
	 */
	public function getFileName() {
	}
	/**
	 * @return string
	 */
	public function containerContentClass() {
	}
	/**
	 * @return string
	 */
	public function getElementClasses() {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string
	 */
	public function getParamContent( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamTabId( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamTitle( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamIcon( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamIconLeft( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 *
	 * @return string|null
	 */
	public function getParamIconRight( $atts, $content ) {
	}
	/**
	 * Section param active
	 *
	 * @param $atts
	 * @param $content
	 * @return bool|null
	 */
	public function getParamSectionIsActive( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 * @return string|null
	 */
	public function getParamControlIconPosition( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 * @return string|null
	 */
	public function getParamControlIcon( $atts, $content ) {
	}
	/**
	 * @param $atts
	 * @param $content
	 * @return string
	 */
	public function getParamHeading( $atts, $content ) {
	}
	/**
	 * Get basic heading
	 *
	 * These are used in Pageable element inside content and are hidden from view
	 *
	 * @param $atts
	 * @param $content
	 *
	 * @return string
	 */
	public function getParamBasicHeading( $atts, $content ) {
	}
	/**
	 * Check is allowed to add another element inside current element.
	 *
	 * @return bool
	 * @since 4.8
	 */
	public function getAddAllowed() {
	}
}
/**
 * WPBakery WPBakery Page Builder shortcodes
 *
 * @package WPBakeryPageBuilder
 * @since 4.5
 */
/**
 * @since 4.5
 * Class WPBakeryShortCode_Vc_Cta
 */
class WPBakeryShortCode_Vc_Cta extends \WPBakeryShortCode {

	protected $template_vars = array();
	/**
	 * @param $atts
	 * @param $content
	 * @throws \Exception
	 */
	public function buildTemplate( $atts, $content ) {
	}
	/**
	 * @param $tag
	 * @param $atts
	 * @return string
	 * @throws \Exception
	 */
	public function getHeading( $tag, $atts ) {
	}
	/**
	 * @param $atts
	 * @return string
	 * @throws \Exception
	 */
	public function getButton( $atts ) {
	}
	/**
	 * @param $atts
	 * @return string
	 * @throws \Exception
	 */
	public function getVcIcon( $atts ) {
	}
	/**
	 * @param $string
	 * @return mixed|string
	 */
	public function getTemplateVariable( $string ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Tabs
 */
class WPBakeryShortCode_Vc_Tabs extends \WPBakeryShortCode {

	public static $filter_added      = \false;
	protected $controls_css_settings = 'out-tc vc_controls-content-widget';
	protected $controls_list         = array( 'edit', 'clone', 'delete' );
	/**
	 * WPBakeryShortCode_Vc_Tabs constructor.
	 *
	 * @param $settings
	 */
	public function __construct( $settings ) {
	}
	/**
	 * @param $atts
	 * @param null $content
	 * @return mixed|string
	 * @throws \Exception
	 */
	public function contentAdmin( $atts, $content = \null ) {
	}
	/**
	 * @return string
	 */
	public function getTabTemplate() {
	}
	/**
	 * @param $content
	 * @return string|string[]|null
	 */
	public function setCustomTabId( $content ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Tour
 */
class WPBakeryShortCode_Vc_Tour extends \WPBakeryShortCode_Vc_Tabs {

	/**
	 * @return mixed|string
	 */
	protected function getFileName() {
	}
	/**
	 * @return string
	 */
	public function getTabTemplate() {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Gitem_Zone_C
 */
class WPBakeryShortCode_Vc_Gitem_Zone_C extends \WPBakeryShortCode_Vc_Gitem_Zone {

	public $zone_name = 'c';
}
/**
 * Class WPBakeryShortCode_Vc_Gitem_Post_title
 */
class WPBakeryShortCode_Vc_Gitem_Post_Title extends \WPBakeryShortCode_Vc_Gitem_Post_Data {

	/**
	 * @return mixed|string
	 */
	protected function getFileName() {
	}
	/**
	 * Get data_source attribute value
	 *
	 * @param array $atts - list of shortcode attributes
	 *
	 * @return string
	 */
	public function getDataSource( array $atts ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Gitem_Zone_B
 */
class WPBakeryShortCode_Vc_Gitem_Zone_B extends \WPBakeryShortCode_Vc_Gitem_Zone {

	public $zone_name = 'b';
	/**
	 * @return mixed|string
	 */
	protected function getFileName() {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Icon
 *
 * @since 4.4
 */
class WPBakeryShortCode_Vc_Icon extends \WPBakeryShortCode {

}
/**
 * WPBakery WPBakery Page Builder shortcodes
 *
 * @package WPBakeryPageBuilder
 */
class WPBakeryShortCode_Vc_Button2 extends \WPBakeryShortCode {

	/**
	 * @param $title
	 * @return string
	 */
	protected function outputTitle( $title ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Gitem_Post_Date
 */
class WPBakeryShortCode_Vc_Gitem_Post_Date extends \WPBakeryShortCode_Vc_Gitem_Post_Data {

	/**
	 * @return mixed|string
	 */
	protected function getFileName() {
	}
	/**
	 * Get data_source attribute value
	 *
	 * @param array $atts - list of shortcode attributes
	 *
	 * @return string
	 */
	public function getDataSource( array $atts ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Single_image
 */
class WPBakeryShortCode_Vc_Single_Image extends \WPBakeryShortCode {

	/**
	 * WPBakeryShortCode_Vc_Single_image constructor.
	 *
	 * @param $settings
	 */
	public function __construct( $settings ) {
	}
	public function jsScripts() {
	}
	/**
	 * @param $param
	 * @param $value
	 * @return string
	 */
	public function singleParamHtmlHolder( $param, $value ) {
	}
	/**
	 * @param $img_id
	 * @param $img_size
	 * @return string
	 */
	public function getImageSquareSize( $img_id, $img_size ) {
	}
	/**
	 * @param $title
	 * @return string
	 */
	protected function outputTitle( $title ) {
	}
	/**
	 * @param $title
	 * @return string
	 */
	protected function outputTitleTrue( $title ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_GooglePlus
 */
class WPBakeryShortCode_Vc_GooglePlus extends \WPBakeryShortCode {

	/**
	 * @param $atts
	 * @param null $content
	 * @return string
	 * @throws \Exception
	 */
	protected function contentInline( $atts, $content = \null ) {
	}
}
/**
 * WPBakery WPBakery Page Builder shortcodes
 *
 * @package WPBakeryPageBuilder
 */
class WPBakeryShortCode_Vc_Cta_Button2 extends \WPBakeryShortCode {

}
/**
 * Class WPBakeryShortCode_Vc_Gitem_Zone_A
 */
class WPBakeryShortCode_Vc_Gitem_Zone_A extends \WPBakeryShortCode_Vc_Gitem_Zone {

	public $zone_name = 'a';
	/**
	 * @return mixed|string
	 */
	protected function getFileName() {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Message
 */
class WPBakeryShortCode_Vc_Message extends \WPBakeryShortCode {

	/**
	 * @param $atts
	 * @return mixed
	 */
	public static function convertAttributesToMessageBox2( $atts ) {
	}
	/**
	 * @param $title
	 * @return string
	 */
	public function outputTitle( $title ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Facebook
 */
class WPBakeryShortCode_Vc_Facebook extends \WPBakeryShortCode {

	/**
	 * @param $atts
	 * @param null $content
	 * @return string
	 * @throws \Exception
	 */
	protected function contentInline( $atts, $content = \null ) {
	}
}
/**
 * Class WPBakeryShortCode_Rev_Slider_Vc
 */
class WPBakeryShortCode_Rev_Slider_Vc extends \WPBakeryShortCode {

}
/**
 * Class WPBakeryShortCode_Vc_Separator
 */
class WPBakeryShortCode_Vc_Separator extends \WPBakeryShortCode {

	/**
	 * @param $title
	 * @return string
	 */
	public function outputTitle( $title ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Gitem_Row
 */
class WPBakeryShortCode_Vc_Gitem_Row extends \WPBakeryShortCode_Vc_Row {

	/**
	 * @return string
	 */
	public function getLayoutsControl() {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Gitem_Post_Excerpt
 */
class WPBakeryShortCode_Vc_Gitem_Post_Excerpt extends \WPBakeryShortCode_Vc_Gitem_Post_Data {

	/**
	 * @return mixed|string
	 */
	protected function getFileName() {
	}
	/**
	 * Get data_source attribute value
	 *
	 * @param array $atts - list of shortcode attributes
	 *
	 * @return string
	 */
	public function getDataSource( array $atts ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Pinterest
 */
class WPBakeryShortCode_Vc_Pinterest extends \WPBakeryShortCode {

	/**
	 * @param $atts
	 * @param null $content
	 * @return string
	 * @throws \Exception
	 */
	protected function contentInline( $atts, $content = \null ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Video
 */
class WPBakeryShortCode_Vc_Video extends \WPBakeryShortCode {

}
/**
 */
class WPBakeryShortCode_Vc_Raw_Html extends \WPBakeryShortCode {

	/**
	 * @param $param
	 * @param $value
	 * @return string
	 */
	public function singleParamHtmlHolder( $param, $value ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Pie
 */
class WPBakeryShortCode_Vc_Pie extends \WPBakeryShortCode {

	/**
	 * WPBakeryShortCode_Vc_Pie constructor.
	 *
	 * @param $settings
	 */
	public function __construct( $settings ) {
	}
	public function jsScripts() {
	}
	/**
	 * Convert old color names to new ones for BC
	 *
	 * @param array $atts
	 *
	 * @return array
	 */
	public static function convertOldColorsToNew( $atts ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Gitem_Post_Categories
 */
class WPBakeryShortCode_Vc_Gitem_Post_Categories extends \WPBakeryShortCode_Vc_Gitem_Post_Data {

	/**
	 * @return mixed|string
	 */
	protected function getFileName() {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Line_Chart
 */
class WPBakeryShortCode_Vc_Line_Chart extends \WPBakeryShortCode {

	/**
	 * WPBakeryShortCode_Vc_Line_Chart constructor.
	 *
	 * @param $settings
	 */
	public function __construct( $settings ) {
	}
	public function jsScripts() {
	}
}
/**
 * WPBakery WPBakery Page Builder shortcodes
 *
 * @package WPBakeryPageBuilder
 */
class WPBakeryShortCode_Vc_Cta_Button extends \WPBakeryShortCode {

}
/**
 * Class WPBakeryShortCode_Vc_TweetMeMe
 */
class WPBakeryShortCode_Vc_TweetMeMe extends \WPBakeryShortCode {

	/**
	 * @param $atts
	 * @param null $content
	 * @return string
	 * @throws \Exception
	 */
	protected function contentInline( $atts, $content = \null ) {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Gitem_Col
 */
class WPBakeryShortCode_Vc_Gitem_Col extends \WPBakeryShortCode_Vc_Column {

	public $nonDraggableClass = 'vc-non-draggable-column';
	/**
	 * @param $width
	 * @param $i
	 * @return string
	 * @throws \Exception
	 */
	public function mainHtmlBlockParams( $width, $i ) {
	}
	/**
	 * @return string
	 */
	public function outputEditorControlAlign() {
	}
}
/**
 * Class WPBakeryShortCode_Vc_Column_Inner
 */
class WPBakeryShortCode_Vc_Column_Inner extends \WPBakeryShortCode_Vc_Column {

}
/**
 * Class WPBakeryShortCode_Vc_Gmaps
 */
class WPBakeryShortCode_Vc_Gmaps extends \WPBakeryShortCode {

}
/**
 * Manage update messages and Plugins info for VC in default WordPress plugins list.
 */
class Vc_Updating_Manager {

	/**
	 * The plugin current version
	 *
	 * @var string
	 */
	public $current_version;
	/**
	 * The plugin remote update path
	 *
	 * @var string
	 */
	public $update_path;
	/**
	 * Plugin Slug (plugin_directory/plugin_file.php)
	 *
	 * @var string
	 */
	public $plugin_slug;
	/**
	 * Plugin name (plugin_file)
	 *
	 * @var string
	 */
	public $slug;
	/**
	 * Link to download VC.
	 *
	 * @var string
	 */
	protected $url = 'https://go.wpbakery.com/wpb-buy';
	/**
	 * Initialize a new instance of the WordPress Auto-Update class
	 *
	 * @param string $current_version
	 * @param string $update_path
	 * @param string $plugin_slug
	 */
	public function __construct( $current_version, $update_path, $plugin_slug ) {
	}
	/**
	 * Add our self-hosted autoupdate plugin to the filter transient
	 *
	 * @param $transient
	 *
	 * @return object $ transient
	 */
	public function check_update( $transient ) {
	}
	/**
	 * Add our self-hosted description to the filter
	 *
	 * @param bool   $false
	 * @param array  $action
	 * @param object $arg
	 *
	 * @return bool|object
	 */
	public function check_info( $false, $action, $arg ) {
	}
	/**
	 * Return the remote version
	 *
	 * @return string $remote_version
	 */
	public function getRemote_version() {
	}
	/**
	 * Get information about the remote version
	 *
	 * @return bool|object
	 */
	public function getRemote_information() {
	}
	/**
	 * Shows message on Wp plugins page with a link for updating from envato.
	 */
	public function addUpgradeMessageLink() {
	}
}
/**
 * WPBakery WPBakery Page Builder updater
 *
 * @package WPBakeryPageBuilder
 */
/**
 * Vc updating manager.
 */
class Vc_Updater {

	/**
	 * @var string
	 */
	protected $version_url = 'https://updates.wpbakery.com/';
	/**
	 * Proxy URL that returns real download link
	 *
	 * @var string
	 */
	protected $download_link_url = 'https://support.wpbakery.com/updates/download-link';
	/**
	 * @var bool
	 */
	protected $auto_updater;
	public function init() {
	}
	/**
	 * Setter for manager updater.
	 *
	 * @param Vc_Updating_Manager $updater
	 */
	public function setUpdateManager( \Vc_Updating_Manager $updater ) {
	}
	/**
	 * Getter for manager updater.
	 *
	 * @return Vc_Updating_Manager|bool
	 */
	public function updateManager() {
	}
	/**
	 * Get url for version validation
	 *
	 * @return string
	 */
	public function versionUrl() {
	}
	/**
	 * Get unique, short-lived download link
	 *
	 * @return array|boolean JSON response or false if request failed
	 */
	public function getDownloadUrl() {
	}
	/**
	 * @return string
	 */
	protected function getUrl() {
	}
	/**
	 * @return string|void
	 */
	public static function getUpdaterUrl() {
	}
	/**
	 * Get link to newest VC
	 *
	 * @param $reply
	 * @param $package
	 * @param WP_Upgrader $updater
	 *
	 * @return mixed|string|WP_Error
	 */
	public function preUpgradeFilter( $reply, $package, $updater ) {
	}
}
/**
 * @since 4.3
 * @deprecated since 5.8
 * Interface for editors
 */
interface Vc_Editor_Interface {

	/**
	 * @return mixed
	 * @deprecated 5.8
	 * @since 4.3
	 */
	public function renderEditor();
}
/**
 * @since 4.3
 * @deprecated 5.8
 * Default render interface
 */
interface Vc_Render {

	/**
	 * @return mixed
	 * @deprecated 5.8
	 * @since 4.3
	 */
	public function render();
}
/**
 * @since 4.3
 * @deprecated 5.8
 * Interface for third-party plugins classes loader.
 */
interface Vc_Vendor_Interface {

	/**
	 * @return mixed
	 * @deprecated 5.8
	 * @since 4.3
	 */
	public function load();
}
/**
 * Class Vc_Grid_Element
 */
class Vc_Grid_Element {

	protected $template               = '';
	protected $html_template          = \false;
	protected $post                   = \false;
	protected $attributes             = array();
	protected $grid_atts              = array();
	protected $is_end                 = \false;
	protected static $templates_added = \false;
	protected $shortcodes             = array( 'vc_gitem_row', 'vc_gitem_col', 'vc_gitem_post_title', 'vc_gitem_icon' );
	/**
	 * @return array
	 */
	public function shortcodes() {
	}
	/**
	 * @param $template
	 */
	public function setTemplate( $template ) {
	}
	/**
	 * @return string
	 */
	public function template() {
	}
	/**
	 * @param $template
	 */
	public function parseTemplate( $template ) {
	}
	/**
	 * @param \WP_Post $post
	 * @return string
	 */
	public function renderItem( \WP_Post $post ) {
	}
	/**
	 * @return string
	 */
	public function renderParam() {
	}
	/**
	 * @param $grid_atts
	 */
	public function setGridAttributes( $grid_atts ) {
	}
	/**
	 * @param $name
	 * @param string $default
	 * @return mixed|string
	 */
	public function gridAttribute( $name, $default = '' ) {
	}
	/**
	 * @param $name
	 */
	public function setAttribute( $name ) {
	}
	/**
	 * @return array
	 */
	public function attributes() {
	}
	/**
	 * @param $name
	 * @param $post
	 * @return string
	 */
	public function attribute( $name, $post ) {
	}
	/**
	 * @param bool $is_end
	 */
	public function setIsEnd( $is_end = \true ) {
	}
	/**
	 * @return bool
	 */
	public function isEnd() {
	}
	/**
	 * Set elements templates.
	 */
	protected function setShortcodes() {
	}
	/**
	 * @param $atts
	 * @param string $content
	 * @return string
	 */
	public function vcGitemRowShortcode( $atts, $content = '' ) {
	}
	/**
	 * @return string
	 */
	public function vcGitemRowTemplate() {
	}
	/**
	 * @param $atts
	 * @param string $content
	 * @return string
	 */
	public function vcGitemColShortcode( $atts, $content = '' ) {
	}
	/**
	 * @return string
	 */
	public function vcGitemColTemplate() {
	}
	/**
	 * @param $atts
	 * @param string $content
	 * @return string
	 */
	public function vcGitemPostTitleShortcode( $atts, $content = '' ) {
	}
	/**
	 * @param $tag
	 * @return string
	 */
	public function vcDefaultTemplate( $tag ) {
	}
	/**
	 * @param $title
	 * @param null  $theme
	 * @return string
	 */
	protected function elementControls( $title, $theme = \null ) {
	}
}
/**
 * WPBakery WPBakery Page Builder shortcodes attributes class.
 *
 * This class and functions represents ability which will allow you to create attributes settings fields to
 * control new attributes.
 * New attributes can be added to shortcode settings by using param array in wp_map function
 *
 * @package WPBakeryPageBuilder
 */
/**
 * Shortcode params class allows to create new params types.
 * class WpbakeryShortcodeParams
 *
 * @since 4.2
 */
class WpbakeryShortcodeParams {

	/**
	 * @since 4.2
	 * @var array - store shortcode attributes types
	 */
	protected static $params = array();
	/**
	 * @since 4.2
	 * @var array - store shortcode javascript files urls
	 */
	protected static $scripts = array();
	/**
	 * @since 4.7
	 * @var array - store params not required to init
	 */
	protected static $optional_init_params = array();
	/**
	 * Get list of params that need to be initialized
	 *
	 * @return string[]
	 */
	public static function getRequiredInitParams() {
	}
	/**
	 * Create new attribute type
	 *
	 * @static
	 * @param $name - attribute name
	 * @param $form_field_callback - hook, will be called when settings form is shown and attribute added to shortcode
	 *     param list
	 * @param $script_url - javascript file url which will be attached at the end of settings form.
	 *
	 * @return bool - return true if attribute type created
	 * @since 4.2
	 */
	public static function addField( $name, $form_field_callback, $script_url = \null ) {
	}
	/**
	 * Calls hook for attribute type
	 *
	 * @param $name - attribute name
	 * @param $param_settings - attribute settings from shortcode
	 * @param $param_value - attribute value
	 * @param $tag - attribute tag
	 *
	 * @return mixed|string - returns html which will be render in hook
	 * @since 4.2
	 * @static
	 */
	public static function renderSettingsField( $name, $param_settings, $param_value, $tag ) {
	}
	/**
	 * List of javascript files urls for shortcode attributes.
	 *
	 * @return array - list of js scripts
	 * @since 4.2
	 * @static
	 */
	public static function getScripts() {
	}
}
/**
 * Class Vc_AutoComplete
 * Param type 'autocomplete'
 * Used to create input field with predefined or ajax values suggestions.
 * See usage example in bottom of this file.
 *
 * @since 4.4
 */
class Vc_AutoComplete {

	/**
	 * @since 4.4
	 * @var array $settings - param settings
	 */
	protected $settings;
	/**
	 * @since 4.4
	 * @var string $value - current param value (if multiple it is splitted by ',' comma to make array)
	 */
	protected $value;
	/**
	 * @since 4.4
	 * @var string $tag - shortcode name(base)
	 */
	protected $tag;
	/**
	 * @param array  $settings - param settings (from vc_map)
	 * @param string $value - current param value
	 * @param string $tag - shortcode name(base)
	 *
	 * @since 4.4
	 */
	public function __construct( $settings, $value, $tag ) {
	}
	/**
	 * @return string
	 * @since 4.4
	 * vc_filter: vc_autocomplete_{shortcode_tag}_{param_name}_render - hook to define output for autocomplete item
	 */
	public function render() {
	}
}
/**
 * Class Vc_ParamGroup_Edit_Form_Fields
 *
 * @since 4.4
 */
class Vc_ParamGroup_Edit_Form_Fields extends \Vc_Edit_Form_Fields {

	/** @noinspection PhpMissingParentConstructorInspection */
	/**
	 * @param $settings
	 * @since 4.4
	 */
	public function __construct( $settings ) {
	}
	/**
	 * Get shortcode attribute value wrapper for params group.
	 *
	 * This function checks if value isn't set then it uses std or value fields in param settings.
	 *
	 * @param $params_settings
	 * @param null            $value
	 *
	 * @return mixed;
	 * @since 5.2.1
	 */
	public function getParamGroupAttributeValue( $params_settings, $value = \null ) {
	}
}
/**
 * Class Vc_ParamGroup
 *
 * @since 4.4
 */
class Vc_ParamGroup {

	/**
	 * @since 4.4
	 * @var
	 */
	protected $settings;
	/**
	 * @since 4.4
	 * @var array|mixed
	 */
	protected $value;
	/**
	 * @since 4.4
	 * @var
	 */
	protected $map;
	/**
	 * @since 4.4
	 * @var
	 */
	protected $atts;
	public $unparsed_value;
	/**
	 * @param $settings
	 * @param $value
	 * @param $tag
	 *
	 * @since 4.4
	 */
	public function __construct( $settings, $value, $tag ) {
	}
	/**
	 * @param $param_name
	 * @param $arr
	 *
	 * @return array
	 * @since 4.4
	 */
	public function params_to_arr( $param_name, $arr ) {
	}
	/**
	 * @return mixed|string
	 * @since 4.4
	 */
	public function render() {
	}
}
/**
 * Class Vc_ParamAnimation
 *
 * For working with animations
 * array(
 *        'type' => 'animation_style',
 *        'heading' => esc_html__( 'Animation', 'js_composer' ),
 *        'param_name' => 'animation',
 * ),
 * Preview in https://daneden.github.io/animate.css/
 *
 * @since 4.4
 */
class Vc_ParamAnimation {

	/**
	 * @since 4.4
	 * @var array $settings parameter settings from vc_map
	 */
	protected $settings;
	/**
	 * @since 4.4
	 * @var string $value parameter value
	 */
	protected $value;
	/**
	 * Define available animation effects
	 *
	 * @return array
	 * @since 4.4
	 * vc_filter: vc_param_animation_style_list - to override animation styles
	 *     array
	 */
	protected function animationStyles() {
	}
	/**
	 * @param array        $styles - array of styles to group
	 * @param string|array $type - what type to return
	 *
	 * @return array
	 * @since 4.4
	 */
	public function groupStyleByType( $styles, $type ) {
	}
	/**
	 * Set variables and register animate-css asset
	 *
	 * @param $settings
	 * @param $value
	 * @since 4.4
	 */
	public function __construct( $settings, $value ) {
	}
	/**
	 * Render edit form output
	 *
	 * @return string
	 * @since 4.4
	 */
	public function render() {
	}
}
/**
 * Class Vc_Gutenberg_Param
 */
class Vc_Gutenberg_Param {

	protected $postTypeSlug = 'wpb_gutenberg_param';
	public function __construct() {
	}
	public function initialize() {
	}
	public function removeAdminUi() {
	}
	protected function registerGutenbergAttributeType() {
	}
}
/**
 *
 * Class Vc_IconPicker
 *
 * @since 4.4
 * See example usage in shortcode 'vc_icon'
 *
 *      `` example
 *        array(
 *            'type' => 'iconpicker',
 *            'heading' => esc_html__( 'Icon', 'js_composer' ),
 *            'param_name' => 'icon_fontawesome',
 *            'settings' => array(
 *                'emptyIcon' => false, // default true, display an "EMPTY"
 *     icon? - if false it will display first icon from set as default.
 *                'iconsPerPage' => 200, // default 100, how many icons
 *     per/page to display
 *            ),
 *            'dependency' => array(
 *                'element' => 'type',
 *                'value' => 'fontawesome',
 *            ),
 *        ),
 * vc_filter: vc_iconpicker-type-{your_icon_font_name} - filter to add new icon
 *     font type. see example for vc_iconpicker-type-fontawesome in bottom of
 *     this file Also // SEE HOOKS FOLDER FOR FONTS REGISTERING/ENQUEUE IN BASE
 * @path "/include/autoload/hook-vc-iconpicker-param.php"
 */
class Vc_IconPicker {

	/**
	 * @since 4.4
	 * @var array - save current param data array from vc_map
	 */
	protected $settings;
	/**
	 * @since 4.4
	 * @var string - save a current field value
	 */
	protected $value;
	/**
	 * @since 4.4
	 * @var array - optional, can be used as self source from self array., you
	 *     can pass it also with filter see Vc_IconPicker::setDefaults
	 */
	protected $source = array();
	/**
	 * @param $settings - param field data array
	 * @param $value - param field value
	 * @since 4.4
	 */
	public function __construct( $settings, $value ) {
	}
	/**
	 * Set default function will extend current settings with defaults
	 * It can be used in Vc_IconPicker::render, but also it is passed to input
	 * field and was hooked in composer-atts.js file See vc.atts.iconpicker in
	 * wp-content/plugins/js_composer/assets/js/params/composer-atts.js init
	 * method
	 *  - it initializes javascript logic, you can provide ANY default param to
	 * it with 'settings' key
	 *
	 * @since 4.4
	 */
	protected function setDefaults() {
	}
	/**
	 * Render edit form field type 'iconpicker' with selected settings and
	 * provided value. It uses javascript file vc-icon-picker
	 * (vc_iconpicker_base_register_js, vc_iconpicker_editor_jscss), see
	 * wp-content/plugins/js_composer/include/autoload/hook-vc-iconpicker-param.php
	 * folder
	 *
	 * @return string - rendered param field for editor panel
	 * @since 4.4
	 */
	public function render() {
	}
}
/**
 * @property mixed data
 */
class Vc_Column_Offset {

	/**
	 * @var array
	 */
	protected $settings = array();
	/**
	 * @var string
	 */
	protected $value = '';
	/**
	 * @var array
	 */
	protected $size_types = array(
		'lg' => 'Large',
		'md' => 'Medium',
		'sm' => 'Small',
		'xs' => 'Extra small',
	);
	/**
	 * @var array
	 */
	protected $column_width_list = array();
	/**
	 * @param $settings
	 * @param $value
	 */
	public function __construct( $settings, $value ) {
	}
	/**
	 * @return string
	 */
	public function render() {
	}
	/**
	 * @return array|mixed
	 */
	public function valueData() {
	}
	/**
	 * @param $size
	 *
	 * @return string
	 */
	public function sizeControl( $size ) {
	}
	/**
	 * @param $size
	 *
	 * @return string
	 */
	public function offsetControl( $size ) {
	}
}
/**
 * Class WpbMap_Grid_Item
 */
class WpbMap_Grid_Item extends \WPBMap {

	protected static $gitem_user_sc         = \false;
	protected static $gitem_user_categories = \false;
	protected static $gitem_user_sorted_sc  = \false;
	/**
	 * Generates list of shortcodes only for Grid element.
	 *
	 * This method parses the list of mapped shortcodes and creates categories list for users.
	 * Also it checks is 'is_grid_item_element' attribute true.
	 *
	 * @static
	 *
	 * @param bool $force - force data generation even data already generated.
	 * @throws \Exception
	 */
	protected static function generateGitemUserData( $force = \false ) {
	}
	/**
	 * Get sorted list of mapped shortcode settings grid element
	 *
	 * Sorting depends on the weight attribute and mapping order.
	 *
	 * @static
	 * @return bool
	 * @throws \Exception
	 */
	public static function getSortedGitemUserShortCodes() {
	}
	/**
	 * Get list of mapped shortcode settings for current user.
	 *
	 * @static
	 * @return bool - associated array of shortcodes settings with tag as the key.
	 * @throws \Exception
	 */
	public static function getGitemUserShortCodes() {
	}
	/**
	 * Get all categories for current user.
	 *
	 * Category is added to the list when at least one shortcode of this category is allowed for current user
	 * by Vc access rules.
	 *
	 * @static
	 * @return bool
	 * @throws \Exception
	 */
	public static function getGitemUserCategories() {
	}
}
/**
 * Class Vc_Grid_Item to build grid item.
 */
class Vc_Grid_Item {

	protected $template                    = '';
	protected $html_template               = \false;
	protected $post                        = \false;
	protected $grid_atts                   = array();
	protected $is_end                      = \false;
	protected $shortcodes                  = \false;
	protected $found_variables             = \false;
	protected static $predefined_templates = \false;
	protected $template_id                 = \false;
	/**
	 * Get shortcodes to build vc grid item templates.
	 *
	 * @return bool|mixed
	 */
	public function shortcodes() {
	}
	/**
	 * Used by filter vc_shortcode_set_template_vc_icon to set custom template for vc_icon shortcode.
	 *
	 * @param $template
	 *
	 * @return string
	 */
	public function addVcIconShortcodesTemplates( $template ) {
	}
	/**
	 * Used by filter vc_shortcode_set_template_vc_button2 to set custom template for vc_button2 shortcode.
	 *
	 * @param $template
	 *
	 * @return string
	 */
	public function addVcButton2ShortcodesTemplates( $template ) {
	}
	/**
	 * Used by filter vc_shortcode_set_template_vc_single_image to set custom template for vc_single_image shortcode.
	 *
	 * @param $template
	 *
	 * @return string
	 */
	public function addVcSingleImageShortcodesTemplates( $template ) {
	}
	/**
	 * Used by filter vc_shortcode_set_template_vc_custom_heading to set custom template for vc_custom_heading
	 * shortcode.
	 *
	 * @param $template
	 *
	 * @return string
	 */
	public function addVcCustomHeadingShortcodesTemplates( $template ) {
	}
	/**
	 * Used by filter vc_shortcode_set_template_vc_button2 to set custom template for vc_button2 shortcode.
	 *
	 * @param $template
	 *
	 * @return string
	 */
	public function addVcBtnShortcodesTemplates( $template ) {
	}
	/**
	 * Map shortcodes for vc_grid_item param type.
	 *
	 * @throws \Exception
	 */
	public function mapShortcodes() {
	}
	/**
	 * Get list of predefined templates.
	 *
	 * @return bool|mixed
	 */
	public static function predefinedTemplates() {
	}
	/**
	 * @param $id - Predefined templates id
	 *
	 * @return array|bool
	 */
	public static function predefinedTemplate( $id ) {
	}
	/**
	 * Set template which should grid used when vc_grid_item param value is rendered.
	 *
	 * @param $id
	 *
	 * @return bool
	 * @throws \Exception
	 */
	public function setTemplateById( $id ) {
	}
	/**
	 * Setter for template attribute.
	 *
	 * @param $template
	 * @param $template_id
	 * @throws \Exception
	 */
	public function setTemplate( $template, $template_id ) {
	}
	/**
	 * Getter for template attribute.
	 *
	 * @return string
	 */
	public function template() {
	}
	/**
	 * Add custom css from shortcodes that were mapped for vc grid item.
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function addShortcodesCustomCss() {
	}
	/**
	 * Generates html with template's variables for rendering new project.
	 *
	 * @param $template
	 * @throws \Exception
	 */
	public function parseTemplate( $template ) {
	}
	/**
	 * Regexp for variables.
	 *
	 * @return string
	 */
	public function templateVariablesRegex() {
	}
	/**
	 * Get default variables.
	 *
	 * @return array|bool
	 */
	public function getTemplateVariables() {
	}
	/**
	 * Render item by replacing template variables for exact post.
	 *
	 * @param WP_Post $post
	 *
	 * @return mixed
	 */
	public function renderItem( \WP_Post $post ) {
	}
	/**
	 * Adds filters to build templates variables values.
	 */
	public function addAttributesFilters() {
	}
	/**
	 * Getter for Grid shortcode attributes.
	 *
	 * @param $grid_atts
	 */
	public function setGridAttributes( $grid_atts ) {
	}
	/**
	 * Setter for Grid shortcode attributes.
	 *
	 * @param $name
	 * @param string $default
	 *
	 * @return string
	 */
	public function gridAttribute( $name, $default = '' ) {
	}
	/**
	 * Get attribute value for WP_post object.
	 *
	 * @param $name
	 * @param $post
	 * @param string $data
	 *
	 * @return mixed
	 */
	public function attribute( $name, $post, $data = '' ) {
	}
	/**
	 * Set that this is last items in the grid. Used for load more button and lazy loading.
	 *
	 * @param bool $is_end
	 */
	public function setIsEnd( $is_end = \true ) {
	}
	/**
	 * Checks is the end.
	 *
	 * @return bool
	 */
	public function isEnd() {
	}
}
/**
 * Renders navigation bar for Editors.
 */
class Vc_Navbar_Grid_Item extends \Vc_Navbar {

	protected $controls = array( 'templates', 'save_backend', 'preview_template', 'animation_list', 'preview_item_width', 'edit' );
	/**
	 * @return string
	 */
	public function getControlTemplates() {
	}
	/**
	 * @return string
	 */
	public function getControlPreviewTemplate() {
	}
	/**
	 * @return string
	 */
	public function getControlEdit() {
	}
	/**
	 * @return string
	 */
	public function getControlSaveBackend() {
	}
	/**
	 * @return string
	 */
	public function getControlPreviewItemWidth() {
	}
	/**
	 * @return string
	 */
	public function getControlAnimationList() {
	}
}
/**
 * Class Vc_Grid_Item_Editor
 */
class Vc_Grid_Item_Editor extends \Vc_Backend_Editor {

	protected static $post_type = 'vc_grid_item';
	protected $templates_editor = \false;
	/**
	 * This method is called to add hooks.
	 *
	 * @since  4.8
	 * @access public
	 */
	public function addHooksSettings() {
	}
	public function addScripts() {
	}
	/**
	 * @param $post_type
	 * @throws \Exception
	 */
	public function render( $post_type ) {
	}
	/**
	 * @return bool
	 * @throws \Exception
	 */
	public function editorEnabled() {
	}
	public function replaceTemplatesPanelEditorJsAction() {
	}
	/**
	 * Create post type and new item in the admin menu.
	 *
	 * @return void
	 */
	public static function createPostType() {
	}
	/**
	 * @return array
	 */
	public static function getPostTypesLabels() {
	}
	/**
	 * Rewrites validation for correct post_type of th post.
	 *
	 * @param string $type
	 *
	 * @return bool
	 * @throws \Exception
	 */
	public function isValidPostType( $type = '' ) {
	}
	/**
	 * Get post type for Vc grid element editor.
	 *
	 * @static
	 * @return string
	 */
	public static function postType() {
	}
	/**
	 * Calls add_meta_box to create Editor block.
	 *
	 * @access public
	 */
	public function addMetaBox() {
	}
	/**
	 * Change order of the controls for shortcodes admin block.
	 *
	 * @return array
	 */
	public function shortcodesControls() {
	}
	/**
	 * Output html for backend editor meta box.
	 *
	 * @param null|int $post
	 *
	 * @throws \Exception
	 */
	public function renderEditor( $post = \null ) {
	}
	/**
	 * @param $null
	 * @param $shortcode
	 * @return bool
	 * @throws \Exception
	 */
	public function accessCheckShortcodeEdit( $null, $shortcode ) {
	}
	/**
	 * @param $null
	 * @param $shortcode
	 * @return bool
	 * @throws \Exception
	 */
	public function accessCheckShortcodeAll( $null, $shortcode ) {
	}
	/**
	 * Output required html and js content for VC editor.
	 *
	 * Here comes panels, modals and js objects with data for mapped shortcodes.
	 */
	public function renderEditorFooter() {
	}
	public function registerBackendJavascript() {
	}
	public function enqueueJs() {
	}
	/**
	 * @return bool|\Vc_Templates_Editor_Grid_Item
	 */
	public function templatesEditor() {
	}
	/**
	 * @param $template_id
	 * @param $template_type
	 * @return false|string
	 */
	public function loadPredefinedTemplate( $template_id, $template_type ) {
	}
	/**
	 * @param $template_id
	 * @param $template_type
	 * @return false|string
	 */
	public function loadTemplate( $template_id, $template_type ) {
	}
	/**
	 * @param $path
	 * @return string
	 */
	public function templatePreviewPath( $path ) {
	}
	public function renderTemplatePreview() {
	}
}
/**
 * Class Vc_Templates_Editor_Grid_Item
 */
class Vc_Templates_Editor_Grid_Item extends \Vc_Templates_Panel_Editor {

	protected $default_templates = array();
	// this prevents for loading default templates
	public function __construct() {
	}
	/**
	 * @param $category
	 * @return mixed
	 */
	public function renderTemplateBlock( $category ) {
	}
	/** Output rendered template in modal dialog
	 *
	 * @param $template_name
	 * @param $template_data
	 *
	 * @return string
	 * @since 4.4
	 */
	public function renderTemplateWindowGrid( $template_name, $template_data ) {
	}
	/**
	 * @param $template_name
	 * @param $template_data
	 *
	 * @return string
	 * @since 4.4
	 */
	protected function renderTemplateWindowGridTemplate( $template_name, $template_data ) {
	}
	/**
	 * @param bool $template_id
	 */
	public function load( $template_id = \false ) {
	}
	/**
	 * @param bool $template_id
	 * @return string
	 */
	public function loadCustomTemplate( $template_id = \false ) {
	}
	/**
	 * @return array|mixed|void
	 */
	public function getAllTemplates() {
	}
	/**
	 * @return array
	 */
	protected function getCustomTemplateList() {
	}
	/**
	 * @return bool|mixed
	 */
	public function getGridTemplates() {
	}
}
/**
 * Add element for VC editors with a list of mapped shortcodes for gri item constructor.
 *
 * @since 4.4
 */
class Vc_Add_Element_Box_Grid_Item extends \Vc_Add_Element_Box {

	/**
	 * Get shortcodes from param type vc_grid_item
	 *
	 * @return array|bool
	 * @throws \Exception
	 */
	public function shortcodes() {
	}
	/**
	 * Get categories list from mapping data.
	 *
	 * @return bool
	 * @throws \Exception
	 * @since 4.5
	 */
	public function getCategories() {
	}
	/**
	 * @return mixed
	 * @throws \Exception
	 */
	public function getPartState() {
	}
}
/**
 * Class Vc_Grid_Item_Preview
 */
class Vc_Grid_Item_Preview {

	protected $shortcodes_string = '';
	protected $post_id           = \false;
	public function render() {
	}
	/**
	 * @param $css
	 * @return string
	 */
	public function addCssBackgroundImage( $css ) {
	}
	/**
	 * @param $url
	 * @return string
	 */
	public function addImageUrl( $url ) {
	}
	/**
	 * @param $img
	 * @return string
	 */
	public function addImage( $img ) {
	}
	/**
	 *
	 * @param $link
	 *
	 * @param $atts
	 * @param $css_class
	 * @return string
	 * @since 4.5
	 */
	public function disableContentLink( $link, $atts, $css_class ) {
	}
	/**
	 *
	 * @param $link
	 *
	 * @param $atts
	 * @param $post
	 * @param $css_class
	 * @return string
	 * @since 4.5
	 */
	public function disableRealContentLink( $link, $atts, $post, $css_class ) {
	}
	/**
	 * Used for filter: vc_gitem_zone_image_block_link
	 *
	 * @param $link
	 *
	 * @return string
	 * @since 4.5
	 */
	public function disableGitemZoneLink( $link ) {
	}
	public function enqueue() {
	}
	/**
	 * @return array|\WP_Post|null
	 */
	public function mockingPost() {
	}
	/**
	 * @param $categories
	 * @param $post_id
	 * @return array
	 */
	public function getTheCategories( $categories, $post_id ) {
	}
	/**
	 * @param $img
	 * @return array
	 */
	public function addPlaceholderImage( $img ) {
	}
}
/**
 * Class WPBakeryCssEditor
 */
class WPBakeryCssEditor {

	/**
	 * @var array
	 */
	protected $settings = array();
	/**
	 * @var string
	 */
	protected $value = '';
	/**
	 * @var array
	 */
	protected $positions = array( 'top', 'right', 'bottom', 'left' );
	public $params       = array();
	/**
	 * Setters/Getters {{
	 *
	 * @param null $settings
	 *
	 * @return array
	 */
	public function settings( $settings = \null ) {
	}
	/**
	 * @param $key
	 *
	 * @return string
	 */
	public function setting( $key ) {
	}
	/**
	 * @param null $value
	 *
	 * @return string
	 */
	public function value( $value = \null ) {
	}
	/**
	 * @param null $values
	 *
	 * @return array
	 */
	public function params( $values = \null ) {
	}
	// }}
	/**
	 * vc_filter: vc_css_editor - hook to override output of this method
	 *
	 * @return mixed
	 */
	public function render() {
	}
	/**
	 * @return string
	 */
	public function getBackgroundImageControl() {
	}
	/**
	 * @return string
	 */
	public function getBorderRadiusOptions() {
	}
	/**
	 * @return string
	 */
	public function getBorderStyleOptions() {
	}
	/**
	 * @return string
	 */
	public function getBackgroundStyleOptions() {
	}
	/**
	 * @return string
	 */
	public function onionLayout() {
	}
	/**
	 * @param $name
	 * @param string $prefix
	 *
	 * @return string
	 */
	protected function layerControls( $name, $prefix = '' ) {
	}
}
/**
 * Class Vc_Font_Container
 *
 * @since 4.3
 * vc_map examples:
 *  array(
 *        'type' => 'font_container',
 *        'param_name' => 'font_container',
 *        'value'=>'',
 *        'settings'=>array(
 *            'fields'=>array(
 *                'tag'=>'h2',
 *                'text_align',
 *                'font_size',
 *                'line_height',
 *                'color',
 *
 *                'tag_description' => esc_html__('Select element tag.','js_composer'),
 *                'text_align_description' => esc_html__('Select text alignment.','js_composer'),
 *                'font_size_description' => esc_html__('Enter font size.','js_composer'),
 *                'line_height_description' => esc_html__('Enter line height.','js_composer'),
 *                'color_description' => esc_html__('Select color for your element.','js_composer'),
 *            ),
 *        ),
 *    ),
 *  Ordering of fields, font_family, tag, text_align and etc. will be Same as ordering in array!
 *  To provide default value to field use 'key' => 'value'
 */
class Vc_Font_Container {

	/**
	 * @param $settings
	 * @param $value
	 *
	 * @return string
	 */
	public function render( $settings, $value ) {
	}
	/**
	 * If field 'font_family' is used this is list of fonts available
	 * To modify this list, you should use add_filter('vc_font_container_get_fonts_filter','your_custom_function');
	 * vc_filter: vc_font_container_get_fonts_filter - to modify list of fonts
	 *
	 * @return array list of fonts
	 */
	public function _vc_font_container_get_web_safe_fonts() {
	}
	/**
	 * If 'tag' field used this is list of allowed tags
	 * To modify this list, you should use add_filter('vc_font_container_get_allowed_tags','your_custom_function');
	 * vc_filter: vc_font_container_get_allowed_tags - to modify list of allowed tags by default
	 *
	 * @return array list of allowed tags
	 */
	public function _vc_font_container_get_allowed_tags() {
	}
	/**
	 * @param $attr
	 * @param $value
	 *
	 * @return array
	 */
	public function _vc_font_container_parse_attributes( $attr, $value ) {
	}
}
/**
 * Parses loop settings and creates WP_Query according to manual
 *
 * @since 4.2
 * @link http://codex.wordpress.org/Class_Reference/WP_Query
 */
class VcLoopQueryBuilder {

	/**
	 * @since 4.2
	 * @var array
	 */
	protected $args = array( 'post_status' => 'publish' );
	/**
	 * @param $data
	 * @since 4.2
	 */
	public function __construct( $data ) {
	}
	/**
	 * Pages count
	 *
	 * @param $value
	 * @since 4.2
	 */
	protected function parse_size( $value ) {
	}
	/**
	 * Sorting field
	 *
	 * @param $value
	 * @since 4.2
	 */
	protected function parse_order_by( $value ) {
	}
	/**
	 * Sorting order
	 *
	 * @param $value
	 * @since 4.2
	 */
	protected function parse_order( $value ) {
	}
	/**
	 * By post types
	 *
	 * @param $value
	 * @since 4.2
	 */
	protected function parse_post_type( $value ) {
	}
	/**
	 * By author
	 *
	 * @param $value
	 * @since 4.2
	 */
	protected function parse_authors( $value ) {
	}
	/**
	 * By categories
	 *
	 * @param $value
	 * @since 4.2
	 */
	protected function parse_categories( $value ) {
	}
	/**
	 * By taxonomies
	 *
	 * @param $value
	 * @since 4.2
	 */
	protected function parse_tax_query( $value ) {
	}
	/**
	 * By tags ids
	 *
	 * @param $value
	 * @since 4.2
	 */
	protected function parse_tags( $value ) {
	}
	protected function parse_ignore_sticky_posts( $value ) {
	}
	/**
	 * By posts ids
	 *
	 * @param $value
	 * @since 4.2
	 */
	protected function parse_by_id( $value ) {
	}
	/**
	 * @param $id
	 * @since 4.2
	 */
	public function excludeId( $id ) {
	}
	/**
	 * Converts string to array. Filters empty arrays values
	 *
	 * @param $value
	 *
	 * @return array
	 * @since 4.2
	 */
	protected function stringToArray( $value ) {
	}
	/**
	 * @return array
	 */
	public function build() {
	}
}
/**
 * Class VcLoopSettings
 *
 * @since 4.2
 */
class VcLoopSettings {

	// Available parts of loop for WP_Query object.
	/**
	 * @since 4.2
	 * @var array
	 */
	protected $content = array();
	/**
	 * @since 4.2
	 * @var array
	 */
	protected $parts;
	/**
	 * @since 4.2
	 * @var array
	 */
	protected $query_parts = array( 'size', 'order_by', 'order', 'post_type', 'ignore_sticky_posts', 'authors', 'categories', 'tags', 'tax_query', 'by_id' );
	public $settings       = array();
	/**
	 * @param $value
	 * @param array $settings
	 * @since 4.2
	 */
	public function __construct( $value, $settings = array() ) {
	}
	/**
	 * @param $part
	 *
	 * @return bool
	 * @since 4.2
	 */
	protected function replaceLockedValue( $part ) {
	}
	/**
	 * @param $key
	 *
	 * @return mixed
	 * @since 4.2
	 */
	public function getLabel( $key ) {
	}
	/**
	 * @param $part
	 * @param $name
	 *
	 * @return null
	 * @since 4.2
	 */
	public function getSettings( $part, $name ) {
	}
	/**
	 * @param $value
	 *
	 * @return array
	 * @since 4.2
	 */
	public function parseString( $value ) {
	}
	/**
	 * @param $value
	 * @param array $options
	 *
	 * @return array
	 * @since 4.2
	 */
	protected function parseDropDown( $value, $options = array() ) {
	}
	/**
	 * @param $value
	 * @param array $options
	 *
	 * @return array
	 * @since 4.2
	 */
	protected function parseMultiSelect( $value, $options = array() ) {
	}
	/**
	 * @param $value
	 *
	 * @return array
	 * @since 4.2
	 */
	public function parse_order_by( $value ) {
	}
	/**
	 * @param $value
	 *
	 * @return array
	 * @since 4.2
	 */
	public function parse_order( $value ) {
	}
	/**
	 * @param $value
	 *
	 * @return array
	 * @since 4.2
	 */
	public function parse_post_type( $value ) {
	}
	/**
	 * @param $value
	 *
	 * @return array
	 */
	public function parse_ignore_sticky_posts( $value ) {
	}
	/**
	 * @param $value
	 *
	 * @return array
	 * @since 4.2
	 */
	public function parse_authors( $value ) {
	}
	/**
	 * @param $value
	 *
	 * @return array
	 * @since 4.2
	 */
	public function parse_categories( $value ) {
	}
	/**
	 * @param $value
	 *
	 * @return array
	 * @since 4.2
	 */
	public function parse_tags( $value ) {
	}
	/**
	 * @param $value
	 *
	 * @return array
	 * @since 4.2
	 */
	public function parse_tax_query( $value ) {
	}
	/**
	 * @param $value
	 *
	 * @return array
	 * @since 4.2
	 */
	public function parse_by_id( $value ) {
	}
	/**
	 * @since 4.2
	 */
	public function render() {
	}
	/**
	 * @return array
	 * @since 4.2
	 */
	public function getContent() {
	}
	/**
	 * get list of taxonomies which has no tags and categories items.
	 *
	 * @return array
	 * @since 4.2
	 * @static
	 */
	public static function getTaxonomies() {
	}
	/**
	 * @param $settings
	 *
	 * @return string
	 * @since 4.2
	 */
	public static function buildDefault( $settings ) {
	}
	/**
	 * @param $query
	 * @param bool  $exclude_id
	 *
	 * @return array
	 * @since 4.2
	 */
	public static function buildWpQuery( $query, $exclude_id = \false ) {
	}
	/**
	 * @param $value
	 *
	 * @return array
	 * @since 4.2
	 */
	public static function parseData( $value ) {
	}
}
/**
 * Suggestion list for wp_query field
 * Class VcLoopSuggestions
 *
 * @since 4.2
 */
class VcLoopSuggestions {

	/**
	 * @since 4.2
	 * @var array
	 */
	protected $content = array();
	/**
	 * @since 4.2
	 * @var array
	 */
	protected $exclude = array();
	/**
	 * @since 4.2
	 * @var
	 */
	protected $field;
	/**
	 * @param $field
	 * @param $query
	 * @param $exclude
	 *
	 * @since 4.2
	 */
	public function __construct( $field, $query, $exclude ) {
	}
	/**
	 * @param $query
	 *
	 * @since 4.2
	 */
	public function get_authors( $query ) {
	}
	/**
	 * @param $query
	 *
	 * @since 4.2
	 */
	public function get_categories( $query ) {
	}
	/**
	 * @param $query
	 *
	 * @since 4.2
	 */
	public function get_tags( $query ) {
	}
	/**
	 * @param $query
	 *
	 * @since 4.2
	 */
	public function get_tax_query( $query ) {
	}
	/**
	 * @param $query
	 *
	 * @since 4.2
	 */
	public function get_by_id( $query ) {
	}
	/**
	 * @since 4.2
	 */
	public function render() {
	}
}
/**
 * Class Vc_Google_Fonts
 *
 * @since 4.3
 * vc_map examples:
 *      'params' => array(
 *          array(
 *                'type' => 'google_fonts',
 *                'param_name' => 'google_fonts',
 *                'value' => '',// Not recommended, this will override 'settings'. Example:
 *     'font_family:'.rawurlencode('Exo:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic').'|font_style:'.rawurlencode('900
 *     bold italic:900:italic'),
 *                'settings' => array(
 *                    'fields'=>array(
 *                        'font_family'=>'Abril Fatface:regular',//
 *     'Exo:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic',
 *     Default font family and all available styles to fetch
 *                        'font_style'=>'400 regular:400:normal', // Default font style. Name:weight:style, example:
 *     "800 bold regular:800:normal"
 *                        'font_family_description' => esc_html__('Select font family.','js_composer'),
 *                        'font_style_description' => esc_html__('Select font styling.','js_composer')
 *                  )
 *                ),
 *                'description' => esc_html__( 'Description for this group', 'js_composer' ), // Description for field group
 *            ),
 *      )
 */
class Vc_Google_Fonts {

	public $fonts_list = '[{"font_family":"Abril Fatface","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"ABeeZee","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Abel","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Aclonica","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Acme","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Actor","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Adamina","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Advent Pro","font_styles":"100,200,300,regular,500,600,700","font_types":"100 light regular:100:normal,200 light regular:200:normal,300 light regular:300:normal,400 regular:400:normal,500 bold regular:500:normal,600 bold regular:600:normal,700 bold regular:700:normal"},{"font_family":"Aguafina Script","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Akronim","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Aladin","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Aldrich","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Alef","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Alegreya","font_styles":"regular,italic,700,700italic,900,900italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Alegreya SC","font_styles":"regular,italic,700,700italic,900,900italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Alegreya Sans","font_styles":"100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,800,800italic,900,900italic","font_types":"100 light regular:100:normal,100 light italic:100:italic,300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,500 bold regular:500:normal,500 bold italic:500:italic,700 bold regular:700:normal,700 bold italic:700:italic,800 bold regular:800:normal,800 bold italic:800:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Alegreya Sans SC","font_styles":"100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,800,800italic,900,900italic","font_types":"100 light regular:100:normal,100 light italic:100:italic,300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,500 bold regular:500:normal,500 bold italic:500:italic,700 bold regular:700:normal,700 bold italic:700:italic,800 bold regular:800:normal,800 bold italic:800:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Alex Brush","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Alfa Slab One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Alice","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Alike","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Alike Angular","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Allan","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Allerta","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Allerta Stencil","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Allura","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Almendra","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Almendra Display","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Almendra SC","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Amarante","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Amaranth","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Amatic SC","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Amethysta","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Anaheim","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Andada","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Andika","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Angkor","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Annie Use Your Telescope","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Anonymous Pro","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Antic","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Antic Didone","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Antic Slab","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Anton","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Arapey","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Arbutus","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Arbutus Slab","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Architects Daughter","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Archivo Black","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Archivo Narrow","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Arimo","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Arizonia","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Armata","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Artifika","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Arvo","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Asap","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Asset","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Astloch","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Asul","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Atomic Age","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Aubrey","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Audiowide","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Autour One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Average","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Average Sans","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Averia Gruesa Libre","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Averia Libre","font_styles":"300,300italic,regular,italic,700,700italic","font_types":"300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Averia Sans Libre","font_styles":"300,300italic,regular,italic,700,700italic","font_types":"300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Averia Serif Libre","font_styles":"300,300italic,regular,italic,700,700italic","font_types":"300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Bad Script","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Balthazar","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bangers","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Basic","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Battambang","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Baumans","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bayon","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Belgrano","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Belleza","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"BenchNine","font_styles":"300,regular,700","font_types":"300 light regular:300:normal,400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Bentham","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Berkshire Swash","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bevan","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bigelow Rules","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bigshot One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bilbo","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bilbo Swash Caps","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bitter","font_styles":"regular,italic,700","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal"},{"font_family":"Black Ops One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bokor","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bonbon","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Boogaloo","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bowlby One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bowlby One SC","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Brawler","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bree Serif","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bubblegum Sans","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bubbler One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Buda","font_styles":"300","font_types":"300 light regular:300:normal"},{"font_family":"Buenard","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Butcherman","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Butterfly Kids","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cabin","font_styles":"regular,italic,500,500italic,600,600italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,500 bold regular:500:normal,500 bold italic:500:italic,600 bold regular:600:normal,600 bold italic:600:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Cabin Condensed","font_styles":"regular,500,600,700","font_types":"400 regular:400:normal,500 bold regular:500:normal,600 bold regular:600:normal,700 bold regular:700:normal"},{"font_family":"Cabin Sketch","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Caesar Dressing","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cagliostro","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Calligraffitti","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cambo","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Candal","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cantarell","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Cantata One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cantora One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Capriola","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cardo","font_styles":"regular,italic,700","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal"},{"font_family":"Carme","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Carrois Gothic","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Carrois Gothic SC","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Carter One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Caudex","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Cedarville Cursive","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Ceviche One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Changa One","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Chango","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Chau Philomene One","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Chela One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Chelsea Market","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Chenla","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cherry Cream Soda","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cherry Swash","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Chewy","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Chicle","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Chivo","font_styles":"regular,italic,900,900italic","font_types":"400 regular:400:normal,400 italic:400:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Cinzel","font_styles":"regular,700,900","font_types":"400 regular:400:normal,700 bold regular:700:normal,900 bold regular:900:normal"},{"font_family":"Cinzel Decorative","font_styles":"regular,700,900","font_types":"400 regular:400:normal,700 bold regular:700:normal,900 bold regular:900:normal"},{"font_family":"Clicker Script","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Coda","font_styles":"regular,800","font_types":"400 regular:400:normal,800 bold regular:800:normal"},{"font_family":"Coda Caption","font_styles":"800","font_types":"800 bold regular:800:normal"},{"font_family":"Codystar","font_styles":"300,regular","font_types":"300 light regular:300:normal,400 regular:400:normal"},{"font_family":"Combo","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Comfortaa","font_styles":"300,regular,700","font_types":"300 light regular:300:normal,400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Coming Soon","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Concert One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Condiment","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Content","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Contrail One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Convergence","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cookie","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Copse","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Corben","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Courgette","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cousine","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Coustard","font_styles":"regular,900","font_types":"400 regular:400:normal,900 bold regular:900:normal"},{"font_family":"Covered By Your Grace","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Crafty Girls","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Creepster","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Crete Round","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Crimson Text","font_styles":"regular,italic,600,600italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,600 bold regular:600:normal,600 bold italic:600:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Croissant One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Crushed","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cuprum","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Cutive","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cutive Mono","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Damion","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Dancing Script","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Dangrek","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Dawning of a New Day","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Days One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Delius","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Delius Swash Caps","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Delius Unicase","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Della Respira","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Denk One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Devonshire","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Didact Gothic","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Diplomata","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Diplomata SC","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Domine","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Donegal One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Doppio One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Dorsa","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Dosis","font_styles":"200,300,regular,500,600,700,800","font_types":"200 light regular:200:normal,300 light regular:300:normal,400 regular:400:normal,500 bold regular:500:normal,600 bold regular:600:normal,700 bold regular:700:normal,800 bold regular:800:normal"},{"font_family":"Dr Sugiyama","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Droid Sans","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Droid Sans Mono","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Droid Serif","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Duru Sans","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Dynalight","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"EB Garamond","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Eagle Lake","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Eater","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Economica","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Electrolize","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Elsie","font_styles":"regular,900","font_types":"400 regular:400:normal,900 bold regular:900:normal"},{"font_family":"Elsie Swash Caps","font_styles":"regular,900","font_types":"400 regular:400:normal,900 bold regular:900:normal"},{"font_family":"Emblema One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Emilys Candy","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Engagement","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Englebert","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Enriqueta","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Erica One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Esteban","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Euphoria Script","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Ewert","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Exo","font_styles":"100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","font_types":"100 light regular:100:normal,100 light italic:100:italic,200 light regular:200:normal,200 light italic:200:italic,300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,500 bold regular:500:normal,500 bold italic:500:italic,600 bold regular:600:normal,600 bold italic:600:italic,700 bold regular:700:normal,700 bold italic:700:italic,800 bold regular:800:normal,800 bold italic:800:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Exo 2","font_styles":"100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","font_types":"100 light regular:100:normal,100 light italic:100:italic,200 light regular:200:normal,200 light italic:200:italic,300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,500 bold regular:500:normal,500 bold italic:500:italic,600 bold regular:600:normal,600 bold italic:600:italic,700 bold regular:700:normal,700 bold italic:700:italic,800 bold regular:800:normal,800 bold italic:800:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Expletus Sans","font_styles":"regular,italic,500,500italic,600,600italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,500 bold regular:500:normal,500 bold italic:500:italic,600 bold regular:600:normal,600 bold italic:600:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Fanwood Text","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Fascinate","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Fascinate Inline","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Faster One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Fasthand","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Fauna One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Federant","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Federo","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Felipa","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Fenix","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Finger Paint","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Fira Mono","font_styles":"400,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Fira Sans","font_styles":"300,300italic,400,400italic,500,500italic,700,700italic","font_types":"300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,500 bold regular:500:normal,500 bold italic:500:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Fjalla One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Fjord One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Flamenco","font_styles":"300,regular","font_types":"300 light regular:300:normal,400 regular:400:normal"},{"font_family":"Flavors","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Fondamento","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Fontdiner Swanky","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Forum","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Francois One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Freckle Face","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Fredericka the Great","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Fredoka One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Freehand","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Fresca","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Frijole","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Fruktur","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Fugaz One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"GFS Didot","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"GFS Neohellenic","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Gabriela","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Gafata","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Galdeano","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Galindo","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Gentium Basic","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Gentium Book Basic","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Geo","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Geostar","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Geostar Fill","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Germania One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Gilda Display","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Give You Glory","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Glass Antiqua","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Glegoo","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Gloria Hallelujah","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Goblin One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Gochi Hand","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Gorditas","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Goudy Bookletter 1911","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Graduate","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Grand Hotel","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Gravitas One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Great Vibes","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Griffy","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Gruppo","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Gudea","font_styles":"regular,italic,700","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal"},{"font_family":"Habibi","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Hammersmith One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Hanalei","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Hanalei Fill","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Handlee","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Hanuman","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Happy Monkey","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Headland One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Henny Penny","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Herr Von Muellerhoff","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Hind","font_styles":"300,regular,500,600,700","font_types":"300 light regular:300:normal,400 regular:400:normal,500 bold regular:500:normal,600 bold regular:600:normal,700 bold regular:700:normal"},{"font_family":"Holtwood One SC","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Homemade Apple","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Homenaje","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"IM Fell DW Pica","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"IM Fell DW Pica SC","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"IM Fell Double Pica","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"IM Fell Double Pica SC","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"IM Fell English","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"IM Fell English SC","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"IM Fell French Canon","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"IM Fell French Canon SC","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"IM Fell Great Primer","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"IM Fell Great Primer SC","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Iceberg","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Iceland","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Imprima","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Inconsolata","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Inder","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Indie Flower","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Inika","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Irish Grover","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Istok Web","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Italiana","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Italianno","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Jacques Francois","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Jacques Francois Shadow","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Jim Nightshade","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Jockey One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Jolly Lodger","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Josefin Sans","font_styles":"100,100italic,300,300italic,regular,italic,600,600italic,700,700italic","font_types":"100 light regular:100:normal,100 light italic:100:italic,300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,600 bold regular:600:normal,600 bold italic:600:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Josefin Slab","font_styles":"100,100italic,300,300italic,regular,italic,600,600italic,700,700italic","font_types":"100 light regular:100:normal,100 light italic:100:italic,300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,600 bold regular:600:normal,600 bold italic:600:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Joti One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Judson","font_styles":"regular,italic,700","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal"},{"font_family":"Julee","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Julius Sans One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Junge","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Jura","font_styles":"300,regular,500,600","font_types":"300 light regular:300:normal,400 regular:400:normal,500 bold regular:500:normal,600 bold regular:600:normal"},{"font_family":"Just Another Hand","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Just Me Again Down Here","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Kameron","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Kantumruy","font_styles":"300,regular,700","font_types":"300 light regular:300:normal,400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Karla","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Kaushan Script","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Kavoon","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Kdam Thmor","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Keania One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Kelly Slab","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Kenia","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Khmer","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Kite One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Knewave","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Kotta One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Koulen","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Kranky","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Kreon","font_styles":"300,regular,700","font_types":"300 light regular:300:normal,400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Kristi","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Krona One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"La Belle Aurore","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Lancelot","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Lato","font_styles":"100,100italic,300,300italic,regular,italic,700,700italic,900,900italic","font_types":"100 light regular:100:normal,100 light italic:100:italic,300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"League Script","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Leckerli One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Ledger","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Lekton","font_styles":"regular,italic,700","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal"},{"font_family":"Lemon","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Libre Baskerville","font_styles":"regular,italic,700","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal"},{"font_family":"Life Savers","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Lilita One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Lily Script One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Limelight","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Linden Hill","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Lobster","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Lobster Two","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Londrina Outline","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Londrina Shadow","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Londrina Sketch","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Londrina Solid","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Lora","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Love Ya Like A Sister","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Loved by the King","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Lovers Quarrel","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Luckiest Guy","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Lusitana","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Lustria","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Macondo","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Macondo Swash Caps","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Magra","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Maiden Orange","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Mako","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Marcellus","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Marcellus SC","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Marck Script","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Margarine","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Marko One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Marmelad","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Marvel","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Mate","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Mate SC","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Maven Pro","font_styles":"regular,500,700,900","font_types":"400 regular:400:normal,500 bold regular:500:normal,700 bold regular:700:normal,900 bold regular:900:normal"},{"font_family":"McLaren","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Meddon","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"MedievalSharp","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Medula One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Megrim","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Meie Script","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Merienda","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Merienda One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Merriweather","font_styles":"300,300italic,regular,italic,700,700italic,900,900italic","font_types":"300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Merriweather Sans","font_styles":"300,300italic,regular,italic,700,700italic,800,800italic","font_types":"300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic,800 bold regular:800:normal,800 bold italic:800:italic"},{"font_family":"Metal","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Metal Mania","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Metamorphous","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Metrophobic","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Michroma","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Milonga","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Miltonian","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Miltonian Tattoo","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Miniver","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Miss Fajardose","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Modern Antiqua","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Molengo","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Molle","font_styles":"italic","font_types":"400 italic:400:italic"},{"font_family":"Monda","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Monofett","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Monoton","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Monsieur La Doulaise","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Montaga","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Montez","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Montserrat","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Montserrat Alternates","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Montserrat Subrayada","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Moul","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Moulpali","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Mountains of Christmas","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Mouse Memoirs","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Mr Bedfort","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Mr Dafoe","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Mr De Haviland","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Mrs Saint Delafield","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Mrs Sheppards","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Muli","font_styles":"300,300italic,regular,italic","font_types":"300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic"},{"font_family":"Mystery Quest","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Neucha","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Neuton","font_styles":"200,300,regular,italic,700,800","font_types":"200 light regular:200:normal,300 light regular:300:normal,400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,800 bold regular:800:normal"},{"font_family":"New Rocker","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"News Cycle","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Niconne","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Nixie One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Nobile","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Nokora","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Norican","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Nosifer","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Nothing You Could Do","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Noticia Text","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Noto Sans","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Noto Serif","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Nova Cut","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Nova Flat","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Nova Mono","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Nova Oval","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Nova Round","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Nova Script","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Nova Slim","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Nova Square","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Numans","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Nunito","font_styles":"300,regular,700","font_types":"300 light regular:300:normal,400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Odor Mean Chey","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Offside","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Old Standard TT","font_styles":"regular,italic,700","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal"},{"font_family":"Oldenburg","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Oleo Script","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Oleo Script Swash Caps","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Open Sans","font_styles":"300,300italic,regular,italic,600,600italic,700,700italic,800,800italic","font_types":"300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,600 bold regular:600:normal,600 bold italic:600:italic,700 bold regular:700:normal,700 bold italic:700:italic,800 bold regular:800:normal,800 bold italic:800:italic"},{"font_family":"Open Sans Condensed","font_styles":"300,300italic,700","font_types":"300 light regular:300:normal,300 light italic:300:italic,700 bold regular:700:normal"},{"font_family":"Oranienbaum","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Orbitron","font_styles":"regular,500,700,900","font_types":"400 regular:400:normal,500 bold regular:500:normal,700 bold regular:700:normal,900 bold regular:900:normal"},{"font_family":"Oregano","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Orienta","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Original Surfer","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Oswald","font_styles":"300,regular,700","font_types":"300 light regular:300:normal,400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Over the Rainbow","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Overlock","font_styles":"regular,italic,700,700italic,900,900italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Overlock SC","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Ovo","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Oxygen","font_styles":"300,regular,700","font_types":"300 light regular:300:normal,400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Oxygen Mono","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"PT Mono","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"PT Sans","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"PT Sans Caption","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"PT Sans Narrow","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"PT Serif","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"PT Serif Caption","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Pacifico","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Paprika","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Parisienne","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Passero One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Passion One","font_styles":"regular,700,900","font_types":"400 regular:400:normal,700 bold regular:700:normal,900 bold regular:900:normal"},{"font_family":"Pathway Gothic One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Patrick Hand","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Patrick Hand SC","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Patua One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Paytone One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Peralta","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Permanent Marker","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Petit Formal Script","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Petrona","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Philosopher","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Piedra","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Pinyon Script","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Pirata One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Plaster","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Play","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Playball","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Playfair Display","font_styles":"regular,italic,700,700italic,900,900italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Playfair Display SC","font_styles":"regular,italic,700,700italic,900,900italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Podkova","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Poiret One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Poller One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Poly","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Pompiere","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Pontano Sans","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Port Lligat Sans","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Port Lligat Slab","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Prata","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Preahvihear","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Press Start 2P","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Princess Sofia","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Prociono","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Prosto One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Puritan","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Purple Purse","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Quando","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Quantico","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Quattrocento","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Quattrocento Sans","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Questrial","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Quicksand","font_styles":"300,regular,700","font_types":"300 light regular:300:normal,400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Quintessential","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Qwigley","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Racing Sans One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Radley","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Raleway","font_styles":"100,200,300,regular,500,600,700,800,900","font_types":"100 light regular:100:normal,200 light regular:200:normal,300 light regular:300:normal,400 regular:400:normal,500 bold regular:500:normal,600 bold regular:600:normal,700 bold regular:700:normal,800 bold regular:800:normal,900 bold regular:900:normal"},{"font_family":"Raleway Dots","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Rambla","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Rammetto One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Ranchers","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Rancho","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Rationale","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Redressed","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Reenie Beanie","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Revalia","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Ribeye","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Ribeye Marrow","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Righteous","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Risque","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Roboto","font_styles":"100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic","font_types":"100 light regular:100:normal,100 light italic:100:italic,300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,500 bold regular:500:normal,500 bold italic:500:italic,700 bold regular:700:normal,700 bold italic:700:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Roboto Condensed","font_styles":"300,300italic,regular,italic,700,700italic","font_types":"300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Roboto Slab","font_styles":"100,300,regular,700","font_types":"100 light regular:100:normal,300 light regular:300:normal,400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Rochester","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Rock Salt","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Rokkitt","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Romanesco","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Ropa Sans","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Rosario","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Rosarivo","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Rouge Script","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Rubik Mono One","font_styles":"400","font_types":"400 regular:400:normal"},{"font_family":"Rubik One","font_styles":"400","font_types":"400 regular:400:normal"},{"font_family":"Ruda","font_styles":"regular,700,900","font_types":"400 regular:400:normal,700 bold regular:700:normal,900 bold regular:900:normal"},{"font_family":"Rufina","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Ruge Boogie","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Ruluko","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Rum Raisin","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Ruslan Display","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Russo One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Ruthie","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Rye","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Sacramento","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Sail","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Salsa","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Sanchez","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Sancreek","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Sansita One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Sarina","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Satisfy","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Scada","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Schoolbell","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Seaweed Script","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Sevillana","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Seymour One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Shadows Into Light","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Shadows Into Light Two","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Shanti","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Share","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Share Tech","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Share Tech Mono","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Shojumaru","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Short Stack","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Siemreap","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Sigmar One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Signika","font_styles":"300,regular,600,700","font_types":"300 light regular:300:normal,400 regular:400:normal,600 bold regular:600:normal,700 bold regular:700:normal"},{"font_family":"Signika Negative","font_styles":"300,regular,600,700","font_types":"300 light regular:300:normal,400 regular:400:normal,600 bold regular:600:normal,700 bold regular:700:normal"},{"font_family":"Simonetta","font_styles":"regular,italic,900,900italic","font_types":"400 regular:400:normal,400 italic:400:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Sintony","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Sirin Stencil","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Six Caps","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Skranji","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Slackey","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Smokum","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Smythe","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Sniglet","font_styles":"regular,800","font_types":"400 regular:400:normal,800 bold regular:800:normal"},{"font_family":"Snippet","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Snowburst One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Sofadi One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Sofia","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Sonsie One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Sorts Mill Goudy","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Source Code Pro","font_styles":"200,300,regular,500,600,700,900","font_types":"200 light regular:200:normal,300 light regular:300:normal,400 regular:400:normal,500 bold regular:500:normal,600 bold regular:600:normal,700 bold regular:700:normal,900 bold regular:900:normal"},{"font_family":"Source Sans Pro","font_styles":"200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900,900italic","font_types":"200 light regular:200:normal,200 light italic:200:italic,300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,600 bold regular:600:normal,600 bold italic:600:italic,700 bold regular:700:normal,700 bold italic:700:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Source Serif Pro","font_styles":"400,600,700","font_types":"400 regular:400:normal,600 bold regular:600:normal,700 bold regular:700:normal"},{"font_family":"Special Elite","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Spicy Rice","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Spinnaker","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Spirax","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Squada One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Stalemate","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Stalinist One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Stardos Stencil","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Stint Ultra Condensed","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Stint Ultra Expanded","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Stoke","font_styles":"300,regular","font_types":"300 light regular:300:normal,400 regular:400:normal"},{"font_family":"Strait","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Sue Ellen Francisco","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Sunshiney","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Supermercado One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Suwannaphum","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Swanky and Moo Moo","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Syncopate","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Tangerine","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Taprom","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Tauri","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Telex","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Tenor Sans","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Text Me One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"The Girl Next Door","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Tienne","font_styles":"regular,700,900","font_types":"400 regular:400:normal,700 bold regular:700:normal,900 bold regular:900:normal"},{"font_family":"Tinos","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Titan One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Titillium Web","font_styles":"200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900","font_types":"200 light regular:200:normal,200 light italic:200:italic,300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,600 bold regular:600:normal,600 bold italic:600:italic,700 bold regular:700:normal,700 bold italic:700:italic,900 bold regular:900:normal"},{"font_family":"Trade Winds","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Trocchi","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Trochut","font_styles":"regular,italic,700","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal"},{"font_family":"Trykker","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Tulpen One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Ubuntu","font_styles":"300,300italic,regular,italic,500,500italic,700,700italic","font_types":"300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,500 bold regular:500:normal,500 bold italic:500:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Ubuntu Condensed","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Ubuntu Mono","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Ultra","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Uncial Antiqua","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Underdog","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Unica One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"UnifrakturCook","font_styles":"700","font_types":"700 bold regular:700:normal"},{"font_family":"UnifrakturMaguntia","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Unkempt","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Unlock","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Unna","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"VT323","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Vampiro One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Varela","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Varela Round","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Vast Shadow","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Vibur","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Vidaloka","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Viga","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Voces","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Volkhov","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Vollkorn","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Voltaire","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Waiting for the Sunrise","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Wallpoet","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Walter Turncoat","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Warnes","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Wellfleet","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Wendy One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Wire One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Yanone Kaffeesatz","font_styles":"200,300,regular,700","font_types":"200 light regular:200:normal,300 light regular:300:normal,400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Yellowtail","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Yeseva One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Yesteryear","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Zeyada","font_styles":"regular","font_types":"400 regular:400:normal"}]';
	/**
	 * @param $settings
	 * @param $value
	 *
	 * @return string
	 * @since 4.3
	 */
	public function render( $settings, $value ) {
	}
	/**
	 *
	 * Load google fonts list for param
	 * To change this list use add_filters('vc_google_fonts_get_fonts_filter','your_custom_function'); and change array
	 * vc_filter: vc_google_fonts_get_fonts_filter
	 *
	 * @return array
	 * @since 4.3
	 */
	public function _vc_google_fonts_get_fonts() {
	}
	/**
	 * @param $attr
	 * @param $value
	 *
	 * @return array
	 * @since 4.3
	 */
	public function _vc_google_fonts_parse_attributes( $attr, $value ) {
	}
}
class LocalFonts {

	protected static $shortcodesLoaded = \false;
	public static $downloadAllFonts;
	public function __construct() {
	}
	public function init() {
	}
	protected function checkAccess( $post_id, $post ) {
	}
	public function downloadFontsOnSave( $post_id, $post, $update ) {
	}
	/**
	 * @return string
	 */
	public function getStyleLoaderSrc( $src, $handle = '' ) {
	}
	/**
	 * @return WP_Filesystem_Base|\WP_Filesystem_Direct
	 */
	protected function getFileSystem() {
	}
	protected function downloadFontFamily( $src ) {
	}
	protected function downloadFontFiles( $slugOfBaseUrl, $fontFamily, $body ) {
	}
}
/**
 * Collection of static methods for work with settings presets
 *
 * @since 4.8
 */
class Vc_Settings_Preset {

	/**
	 * Get default preset id for specific shortcode
	 *
	 * @since 4.7
	 *
	 * @param string $shortcode_name
	 *
	 * @return mixed int|null
	 */
	public static function getDefaultSettingsPresetId( $shortcode_name = \null ) {
	}
	/**
	 * Set existing preset as default
	 *
	 * If this is vendor preset, clone it and set new one as default
	 *
	 * @param int    $id If falsy, no default will be set
	 * @param string $shortcode_name
	 *
	 * @return boolean
	 *
	 * @since 4.7
	 */
	public static function setAsDefaultSettingsPreset( $id, $shortcode_name ) {
	}
	/**
	 * Get mime type for specific shortcode
	 *
	 * @since 4.7
	 *
	 * @param $shortcode_name
	 *
	 * @return string
	 */
	public static function constructShortcodeMimeType( $shortcode_name ) {
	}
	/**
	 * Get shortcode name from post's mime type
	 *
	 * @since 4.7
	 *
	 * @param string $post_mime_type
	 *
	 * @return string
	 */
	public static function extractShortcodeMimeType( $post_mime_type ) {
	}
	/**
	 * Get all presets
	 *
	 * @since 5.2
	 *
	 * @return array E.g. array(preset_id => value, preset_id => value, ...)
	 */
	public static function listAllPresets() {
	}
	/**
	 * Get all default presets
	 *
	 * @since 4.7
	 *
	 * @return array E.g. array(shortcode_name => value, shortcode_name => value, ...)
	 */
	public static function listDefaultSettingsPresets() {
	}
	/**
	 * Get all default vendor presets
	 *
	 * @since 4.8
	 *
	 * @return array E.g. array(shortcode_name => value, shortcode_name => value, ...)
	 */
	public static function listDefaultVendorSettingsPresets() {
	}
	/**
	 * Save shortcode preset
	 *
	 * @since 4.7
	 *
	 * @param string  $shortcode_name
	 * @param string  $title
	 * @param string  $content
	 * @param boolean $is_default
	 *
	 * @return mixed int|false Post ID
	 */
	public static function saveSettingsPreset( $shortcode_name, $title, $content, $is_default = \false ) {
	}
	/**
	 * Get list of all presets for specific shortcode
	 *
	 * @since 4.7
	 *
	 * @param string $shortcode_name
	 *
	 * @return array E.g. array(id1 => title1, id2 => title2, ...)
	 */
	public static function listSettingsPresets( $shortcode_name = \null ) {
	}
	/**
	 * Get list of all vendor presets for specific shortcode
	 *
	 * @since 4.8
	 *
	 * @param string $shortcode_name
	 *
	 * @return array E.g. array(id1 => title1, id2 => title2, ...)
	 */
	public static function listVendorSettingsPresets( $shortcode_name = \null ) {
	}
	/**
	 * Get specific shortcode preset
	 *
	 * @since 4.7
	 *
	 * @param mixed $id Can be int (user preset) or string (vendor preset)
	 * @param bool  $array If true, return array instead of string
	 *
	 * @return mixed string?array Post content
	 */
	public static function getSettingsPreset( $id, $array = \false ) {
	}
	/**
	 * Delete shortcode preset
	 *
	 * @since 4.7
	 *
	 * @param int $post_id Post must be of type 'vc_settings_preset'
	 *
	 * @return bool
	 */
	public static function deleteSettingsPreset( $post_id ) {
	}
	/**
	 * Return rendered popup menu
	 *
	 * @since 4.7
	 *
	 * @param string $shortcode_name
	 *
	 * @return string
	 */
	public static function getRenderedSettingsPresetPopup( $shortcode_name ) {
	}
	/**
	 * @param $shortcodes
	 *
	 * @return array
	 * @throws \Exception
	 */
	public static function addVcPresetsToShortcodes( $shortcodes ) {
	}
	/**
	 * @param $category
	 *
	 * @return array
	 */
	public static function addPresetCategory( $category ) {
	}
}
/**
 * Class Vc_Hooks_Vc_Grid
 *
 * @since 4.4
 */
class Vc_Hooks_Vc_Grid {

	protected $grid_id_unique_name = 'vc_gid';
	// if you change this also change in vc-basic-grid.php
	/**
	 * Initializing hooks for grid element,
	 * Add actions to save appended shortcodes to post meta (for rendering in preview with shortcode id)
	 * And add action to hook request for grid data, to output it.
	 *
	 * @since 4.4
	 */
	public function load() {
	}
	/**
	 * @return string
	 * @since 4.4.3
	 */
	private function getShortcodeRegexForId() {
	}
	/**
	 * @param array   $settings
	 * @param $post_id
	 * @param $post
	 *
	 * @return array
	 * @since 4.4.3
	 */
	public function gridSavePostSettingsId( array $settings, $post_id, $post ) {
	}
	/**
	 * @throws \Exception
	 * @since 4.4
	 *
	 * @output/@return string - grid data for ajax request.
	 */
	public function getGridDataForAjax() {
	}
}
/**
 * Singleton to hold all vendor presets
 *
 * @since 4.8
 */
class Vc_Vendor_Preset {

	private static $instance;
	private static $presets = array();
	/**
	 * @return \Vc_Vendor_Preset
	 */
	public static function getInstance() {
	}
	protected function __construct() {
	}
	/**
	 * Add vendor preset to collection
	 *
	 * @param string $title
	 * @param string $shortcode
	 * @param array  $params
	 * @param bool   $default
	 *
	 * @return bool
	 * @since 4.8
	 */
	public function add( $title, $shortcode, $params, $default = \false ) {
	}
	/**
	 * Get specific vendor preset
	 *
	 * @param string $id
	 *
	 * @return mixed array|false
	 * @since 4.8
	 */
	public function get( $id ) {
	}
	/**
	 * Get all vendor presets for specific shortcode
	 *
	 * @param string $shortcode
	 *
	 * @return array
	 * @since 4.8
	 */
	public function getAll( $shortcode ) {
	}
	/**
	 * Get all default vendor presets
	 *
	 * Include only one default preset per shortcode
	 *
	 * @return array
	 * @since 4.8
	 */
	public function getDefaults() {
	}
	/**
	 * Get ID of default preset for specific shortcode
	 *
	 * If multiple presets are default, return first
	 *
	 * @param string $shortcode
	 *
	 * @return string|null
	 * @since 4.8
	 */
	public function getDefaultId( $shortcode ) {
	}
}
/**
 * Class VcShortcodeAutoloader
 */
class VcShortcodeAutoloader {

	private static $instance = \null;
	private static $config   = \null;
	private static $cached   = \null;
	/**
	 * @param bool $load_config
	 * @return \VcShortcodeAutoloader|null
	 */
	public static function getInstance( $load_config = \true ) {
	}
	/**
	 * VcShortcodeAutoloader constructor.
	 *
	 * @param bool $load_config
	 */
	private function __construct( $load_config = \true ) {
	}
	/**
	 * Include class dependencies
	 *
	 * @param string $class Class name
	 *
	 * @return string[] Included (if any) files
	 */
	public static function includeClass( $class ) {
	}
	/**
	 * Find all classes defined in file
	 *
	 * @param string $file Full path to file
	 *
	 * @return string[]
	 */
	public static function extractClassNames( $file ) {
	}
	/**
	 * Extract all classes from file with their extends
	 *
	 * @param $file
	 *
	 * @return array Associative array where key is class name and value is parent class name (if any))
	 */
	public static function extractClassesAndExtends( $file ) {
	}
	/**
	 * Find file by class name
	 *
	 * Search is case-insensitive
	 *
	 * @param string          $class
	 * @param string[]|string $dirs One or more directories where to look (recursive)
	 *
	 * @return string|false Full path to class file
	 */
	public static function findClassFile( $class, $dirs ) {
	}
	/**
	 * Construct full dependency list of classes for each class in right order (including class itself)
	 *
	 * @param string[]|string $dirs Directories where to look (recursive)
	 *
	 * @return array Associative array where key is lowercase class name and value is array of files to include for
	 *     that class to work
	 */
	public static function generateClassMap( $dirs ) {
	}
	/**
	 * Regenerate and save class map file
	 *
	 * @param string[]|string $dirs Directories where to look (recursive)
	 * @param string          $target Output file
	 *
	 * @return bool
	 */
	public static function saveClassMap( $dirs, $target ) {
	}
	protected static function loadConfig() {
	}
}
/**
 * Default template for post types manager
 *
 * Class Vc_Setting_Post_Type_Default_Template_Field
 *
 * @since 4.12
 */
class Vc_Setting_Post_Type_Default_Template_Field {

	protected $tab;
	protected $key;
	protected $post_types = \false;
	/**
	 * Vc_Setting_Post_Type_Default_Template_Field constructor.
	 *
	 * @param $tab
	 * @param $key
	 */
	public function __construct( $tab, $key ) {
	}
	/**
	 * @return string
	 */
	protected function getFieldName() {
	}
	/**
	 * @return string
	 */
	protected function getFieldKey() {
	}
	/**
	 * @param $type
	 * @return bool
	 */
	protected function isValidPostType( $type ) {
	}
	/**
	 * @return array|bool
	 */
	protected function getPostTypes() {
	}
	/**
	 * @return array
	 */
	protected function getTemplates() {
	}
	/**
	 * @return bool|\Vc_Templates_Panel_Editor
	 */
	protected function getTemplatesEditor() {
	}
	/**
	 * Get settings data for default templates
	 *
	 * @return array|mixed
	 */
	protected function get() {
	}
	/**
	 * Get template's shortcodes string
	 *
	 * @param $template_data
	 * @return string|null
	 */
	protected function getTemplate( $template_data ) {
	}
	/**
	 * @param $type
	 * @return string|null
	 */
	public function getTemplateByPostType( $type ) {
	}
	/**
	 * @param $settings
	 * @return mixed
	 */
	public function sanitize( $settings ) {
	}
	public function render() {
	}
	/**
	 * Add field settings page
	 *
	 * Method called by vc hook vc_settings_tab-general.
	 */
	public function addField() {
	}
}
/**
 * Author: Arlo Carreon <http://arlocarreon.com>
 * Info: http://mexitek.github.io/phpColors/
 * License: http://arlo.mit-license.org/
 *
 * @modified by js_composer
 * @since 4.8
 */
class Vc_Color_Helper {

	/**
	 * A color utility that helps manipulate HEX colors
	 *
	 * @var string
	 */
	private $hex;
	private $hsl;
	private $rgb;
	/**
	 * Auto darkens/lightens by 10% for sexily-subtle gradients.
	 * Set this to FALSE to adjust automatic shade to be between given color
	 * and black (for darken) or white (for lighten)
	 */
	const DEFAULT_ADJUST = 10;
	/**
	 * Instantiates the class with a HEX value
	 *
	 * @param string $hex
	 *
	 * @throws Exception "Bad color format".
	 */
	public function __construct( $hex ) {
	}
	/**
	 * @param $val
	 * @param int $max
	 * @return mixed
	 */
	public static function clamp( $val, $max = 1 ) {
	}
	// ====================
	// = Public Interface =
	// ====================
	/**
	 * Given a HEX string returns a HSL array equivalent.
	 *
	 * @param string $color
	 *
	 * @return array HSL associative array
	 * @throws \Exception
	 */
	public static function hexToHsl( $color ) {
	}
	/**
	 *  Given a HSL associative array returns the equivalent HEX string
	 *
	 * @param array $hsl
	 *
	 * @return string HEX string
	 * @throws Exception "Bad HSL Array".
	 */
	public static function hslToHex( $hsl = array() ) {
	}
	/**
	 * Given a HEX string returns a RGB array equivalent.
	 *
	 * @param string $color
	 *
	 * @return array RGB associative array
	 * @throws \Exception
	 */
	public static function hexToRgb( $color ) {
	}
	/**
	 *  Given an RGB associative array returns the equivalent HEX string
	 *
	 * @param array $rgb
	 *
	 * @return string RGB string
	 * @throws Exception "Bad RGB Array".
	 */
	public static function rgbToHex( $rgb = array() ) {
	}
	/**
	 * Given a HEX value, returns a darker color. If no desired amount provided, then the color halfway between
	 * given HEX and black will be returned.
	 *
	 * @param int $amount
	 *
	 * @return string Darker HEX value
	 * @throws \Exception
	 */
	public function darken( $amount = self::DEFAULT_ADJUST ) {
	}
	/**
	 * Given a HEX value, returns a lighter color. If no desired amount provided, then the color halfway between
	 * given HEX and white will be returned.
	 *
	 * @param int $amount
	 *
	 * @return string Lighter HEX value
	 * @throws \Exception.
	 */
	public function lighten( $amount = self::DEFAULT_ADJUST ) {
	}
	/**
	 * Given a HEX value, returns a mixed color. If no desired amount provided, then the color mixed by this ratio
	 *
	 * @param string $hex2 Secondary HEX value to mix with
	 * @param int    $amount = -100..0..+100
	 *
	 * @return string mixed HEX value
	 * @throws \Exception
	 */
	public function mix( $hex2, $amount = 0 ) {
	}
	/**
	 * Creates an array with two shades that can be used to make a gradient
	 *
	 * @param int $amount Optional percentage amount you want your contrast color
	 *
	 * @return array An array with a 'light' and 'dark' index
	 * @throws \Exception
	 */
	public function makeGradient( $amount = self::DEFAULT_ADJUST ) {
	}
	/**
	 * Returns whether or not given color is considered "light"
	 *
	 * @param string|Boolean $color
	 *
	 * @return boolean
	 */
	public function isLight( $color = \false ) {
	}
	/**
	 * Returns whether or not a given color is considered "dark"
	 *
	 * @param string|Boolean $color
	 *
	 * @return boolean
	 */
	public function isDark( $color = \false ) {
	}
	/**
	 * Returns the complimentary color
	 *
	 * @return string Complementary hex color
	 * @throws \Exception
	 */
	public function complementary() {
	}
	/**
	 * Returns your color's HSL array
	 */
	public function getHsl() {
	}
	/**
	 * Returns your original color
	 */
	public function getHex() {
	}
	/**
	 * Returns your color's RGB array
	 */
	public function getRgb() {
	}
	// ===========================
	// = Private Functions Below =
	// ===========================
	/**
	 * Darkens a given HSL array
	 *
	 * @param array $hsl
	 * @param int   $amount
	 *
	 * @return array $hsl
	 */
	private function darken_private( $hsl, $amount = self::DEFAULT_ADJUST ) {
	}
	/**
	 * Lightens a given HSL array
	 *
	 * @param array $hsl
	 * @param int   $amount
	 *
	 * @return array $hsl
	 */
	private function lighten_private( $hsl, $amount = self::DEFAULT_ADJUST ) {
	}
	/**
	 * Mix 2 rgb colors and return an rgb color
	 *
	 * @param array $rgb1
	 * @param array $rgb2
	 * @param int   $amount ranged -100..0..+100
	 *
	 * @return array $rgb
	 *
	 *    ported from http://phpxref.pagelines.com/nav.html?includes/class.colors.php.source.html
	 */
	private function mix_private( $rgb1, $rgb2, $amount = 0 ) {
	}
	/**
	 * Given a Hue, returns corresponding RGB value
	 *
	 * @param int $v1
	 * @param int $v2
	 * @param int $vH
	 *
	 * @return int
	 */
	private static function huetorgb_private( $v1, $v2, $vH ) {
	}
	/**
	 * You need to check if you were given a good hex string
	 *
	 * @param string $hex
	 *
	 * @return string Color
	 * @throws Exception "Bad color format".
	 */
	private static function check_hex_private( $hex ) {
	}
}
/**
 * @return mixed|void
 * @deprecated 4.12
 */
function vc_add_css_animation() {
}
function vc_target_param_list() {
}
function vc_layout_sub_controls() {
}
function vc_pixel_icons() {
}
function vc_colors_arr() {
}
function vc_size_arr() {
}
function vc_icons_arr() {
}
function vc_custom_heading_element_params() {
}
function vc_icon_element_params() {
}
/**
 * @param $term
 *
 * @return array|bool
 * @since 4.5.2
 */
function vc_autocomplete_taxonomies_field_render( $term ) {
}
/**
 * @param $search_string
 *
 * @return array|bool
 * @since 4.5.2
 */
function vc_autocomplete_taxonomies_field_search( $search_string ) {
}
/**
 * @param $search
 * @param $wp_query
 *
 * @return string
 */
function vc_search_by_title_only( $search, $wp_query ) {
}
/**
 * @param $search_string
 *
 * @return array
 */
function vc_include_field_search( $search_string ) {
}
/**
 * @param $value
 *
 * @return array|bool
 */
function vc_include_field_render( $value ) {
}
/**
 * @param $data_arr
 *
 * @return array
 */
function vc_exclude_field_search( $data_arr ) {
}
/**
 * @param $value
 *
 * @return array|bool
 */
function vc_exclude_field_render( $value ) {
}
/**
 * @param $string
 *
 * @return array
 */
function vc_atm_build_categories_array( $string ) {
}
/**
 * @param $array
 *
 * @return array
 */
function vc_atm_build_params_array( $array ) {
}
/**
 * Get woocommerce data for product
 *
 * @param $value
 * @param $data
 *
 * @return string
 */
function vc_gitem_template_attribute_woocommerce_product( $value, $data ) {
}
/**
 * Gte woocommerce data for order
 *
 * @param $value
 * @param $data
 *
 * @return string
 */
function vc_gitem_template_attribute_woocommerce_order( $value, $data ) {
}
/**
 * Get woocommerce product add to cart url.
 *
 * @param $value
 * @param $data
 *
 * @return string
 * @since 4.5
 */
function vc_gitem_template_attribute_woocommerce_product_link( $value, $data ) {
}
/**
 * Append 'add to card' link to the list of Add link for grid element shortcodes.
 *
 * @param $param
 *
 * @return array
 * @since 4.5
 */
function vc_gitem_add_link_param_woocommerce( $param ) {
}
/**
 * Add WooCommerce link attributes to enable add to cart functionality
 *
 * @param $link
 * @param $atts
 * @param string $css_class
 *
 * @return string
 * @since 4.5
 */
function vc_gitem_post_data_get_link_link_woocommerce( $link, $atts, $css_class = '' ) {
}
/**¬
 * Remove target as useless for add to cart link.
 *
 * @param $link
 * @param $atts
 *
 * @return string
 * @since 4.5
 */
function vc_gitem_post_data_get_link_target_woocommerce( $link, $atts ) {
}
/**
 * Add WooCommerce link attributes to enable add to cart functionality. Not using item element templates vars.
 *
 * @param $link
 * @param $atts
 * @param $post
 * @param string $css_class
 * @return string
 * @since 4.5
 */
function vc_gitem_post_data_get_link_real_link_woocommerce( $link, $atts, $post, $css_class = '' ) {
}
/**¬
 * Remove target as useless for add to cart link.
 *
 * @param $link
 * @param $atts
 * @param $post
 *
 * @return string
 * @since 4.5
 */
function vc_gitem_post_data_get_link_real_target_woocommerce( $link, $atts, $post ) {
}
/**
 * @param $image_block
 * @param $link
 * @param $css_class
 * @return string
 */
function vc_gitem_zone_image_block_link_woocommerce( $image_block, $link, $css_class ) {
}
/**
 * Get ACF data
 *
 * @param $value
 * @param $data
 *
 * @return string
 */
function vc_gitem_template_attribute_acf( $value, $data ) {
}
/**
 * @return string
 * @since 4.2
 */
function vc_container_anchor() {
}
/**
 * @param $settings
 * @param $value
 *
 * @return string
 * @since 4.4
 */
function vc_tab_id_settings_field( $settings, $value ) {
}
/**
 * Helper function to register new shortcode attribute hook.
 *
 * @param $name - attribute name
 * @param $form_field_callback - hook, will be called when settings form is shown and attribute added to shortcode
 *     param list
 * @param $script_url - javascript file url which will be attached at the end of settings form.
 *
 * @return bool
 * @deprecated due to without prefix name 4.4
 * @since 4.2
 */
function add_shortcode_param( $name, $form_field_callback, $script_url = \null ) {
}
/**
 * @return mixed|string
 * @since 4.2
 * @deprecated 4.2
 */
function get_row_css_class() {
}
/**
 * @return string
 * @deprecated 5.2
 */
function vc_generate_dependencies_attributes() {
}
/**
 * Extract width/height from string
 *
 * @param string $dimensions WxH
 * @return mixed array(width, height) or false
 * @since 4.7
 *
 * @deprecated since 5.8
 */
function vcExtractDimensions( $dimensions ) {
}
/**
 * @param array $images IDs or srcs of images
 * @return string
 * @since 4.2
 * @deprecated since 2019, 5.8
 */
function fieldAttachedImages( $images = array() ) {
}
/**
 * @param string $asset
 *
 * @return array|string
 * @deprecated
 */
function getVcShared( $asset = '' ) {
}
/**
 * Return a action param for ajax
 *
 * @return bool
 * @since 4.8
 * @deprecated 6.1
 */
function vc_wp_action() {
}
/**
 * @param $settings
 * @param $value
 *
 * @return string
 * @since 4.4.3
 */
function vc_vc_grid_id_form_field( $settings, $value ) {
}
/**
 * @param $settings
 * @param $value
 * @return string
 */
function vc_vc_grid_element_form_field( $settings, $value ) {
}
function vc_load_vc_grid_element_param() {
}
/**
 * @param $settings
 * @param $value
 *
 * @return string
 * @since 4.2
 */
function vc_options_form_field( $settings, $value ) {
}
/**
 * @since 4.2
 */
function vc_options_include_templates() {
}
/**
 * @param $settings
 * @param $value
 *
 * @return string
 * @since 4.5
 */
function vc_el_id_form_field( $settings, $value ) {
}
/**
 * @since 4.4
 */
function vc_get_autocomplete_suggestion() {
}
/**
 * @param $query
 * @param $tag
 * @param $param_name
 *
 * vc_filter: vc_autocomplete_{tag}_{param_name}_callback - hook to get suggestions from ajax. (here you need to hook).
 * @since 4.4
 */
function vc_render_suggestion( $query, $tag, $param_name ) {
}
/**
 * Function for rendering param in edit form (add element)
 * Parse settings from vc_map and entered values.
 *
 * @param $settings
 * @param $value
 * @param $tag
 *
 * @return mixed rendered template for params in edit form
 * @since 4.4
 * vc_filter: vc_autocomplete_render_filter - hook to override output of edit for field "autocomplete"
 */
function vc_autocomplete_form_field( $settings, $value, $tag ) {
}
/**
 * Hidden field param.
 *
 * @param $settings
 * @param $value
 *
 * @since 4.5
 * @return string - html string.
 */
function vc_hidden_form_field( $settings, $value ) {
}
/**
 * Remove content before hidden field type input.
 *
 * @param $output
 *
 * @since 4.5
 *
 * @return string
 */
function vc_edit_form_fields_render_field_hidden_before() {
}
/**
 * Remove content after hidden field type input.
 *
 * @param $output
 *
 * @since 4.5
 *
 * @return string
 */
function vc_edit_form_fields_render_field_hidden_after() {
}
/**
 * @param $settings
 * @param $value
 *
 * @return string
 * @since 4.2
 */
function vc_textarea_html_form_field( $settings, $value ) {
}
/**
 * Function for rendering param in edit form (add element)
 * Parse settings from vc_map and entered values.
 *
 * @param $param_settings
 * @param $param_value
 * @param $tag
 *
 * @return mixed rendered template for params in edit form
 * @since 4.4
 *
 * vc_filter: vc_param_group_render_filter
 */
function vc_param_group_form_field( $param_settings, $param_value, $tag ) {
}
/**
 * @since 4.4
 */
function vc_param_group_clone() {
}
/**
 * @param $tag
 * @param $params
 * @param $data
 *
 * @return mixed|string
 * @since 4.4
 */
function vc_param_group_clone_by_data( $tag, $params, $data ) {
}
/**
 * @param $atts_string
 *
 * @return array|mixed
 * @since 4.4
 */
function vc_param_group_parse_atts( $atts_string ) {
}
/**
 * @param $value
 * @param $param
 * @return string
 */
function vc_param_group_param_defaults( $value, $param ) {
}
/**
 * Function for rendering param in edit form (add element)
 * Parse settings from vc_map and entered values.
 *
 * @since 4.4
 *
 * @param $settings
 * @param $value
 * @param $tag
 *
 * vc_filter: vc_custom_markup_render_filter - hook to override custom markup for field
 *
 * @return mixed rendered template for params in edit form
 */
function vc_custom_markup_form_field( $settings, $value, $tag ) {
}
/**
 * Function for rendering param in edit form (add element)
 * Parse settings from vc_map and entered 'values'.
 *
 * @param array  $settings - parameter settings in vc_map
 * @param string $value - parameter value
 * @param string $tag - shortcode tag
 *
 * vc_filter: vc_animation_style_render_filter - filter to override editor form
 *     field output
 *
 * @return mixed rendered template for params in edit form
 *
 * @since 4.4
 */
function vc_animation_style_form_field( $settings, $value, $tag ) {
}
/**
 * Gutenberg field param.
 *
 * @param $settings
 * @param $value
 *
 * @return string - html string.
 */
function vc_gutenberg_form_field( $settings, $value ) {
}
/**
 * Function for rendering param in edit form (add element)
 * Parse settings from vc_map and entered values.
 *
 * @param $settings
 * @param $value
 * @param $tag
 *
 * @return string - rendered template for params in edit form
 *
 * @since 4.4
 */
function vc_iconpicker_form_field( $settings, $value, $tag ) {
}
/**
 * Fontawesome icons from FontAwesome :)
 *
 * @param $icons - taken from filter - vc_map param field settings['source']
 *     provided icons (default empty array). If array categorized it will
 *     auto-enable category dropdown
 *
 * @return array - of icons for iconpicker, can be categorized, or not.
 * @since 4.4
 */
function vc_iconpicker_type_fontawesome( $icons ) {
}
/**
 * Openicons icons from fontello.com
 *
 * @param $icons - taken from filter - vc_map param field settings['source']
 *     provided icons (default empty array). If array categorized it will
 *     auto-enable category dropdown
 *
 * @return array - of icons for iconpicker, can be categorized, or not.
 * @since 4.4
 */
function vc_iconpicker_type_openiconic( $icons ) {
}
/**
 * Typicons icons from github.com/stephenhutchings/typicons.font
 *
 * @param $icons - taken from filter - vc_map param field settings['source']
 *     provided icons (default empty array). If array categorized it will
 *     auto-enable category dropdown
 *
 * @return array - of icons for iconpicker, can be categorized, or not.
 * @since 4.4
 */
function vc_iconpicker_type_typicons( $icons ) {
}
/**
 * Entypo icons from github.com/danielbruce/entypo
 *
 * @param $icons - taken from filter - vc_map param field settings['source']
 *     provided icons (default empty array). If array categorized it will
 *     auto-enable category dropdown
 *
 * @return array - of icons for iconpicker, can be categorized, or not.
 * @since 4.4
 */
function vc_iconpicker_type_entypo( $icons ) {
}
/**
 * Linecons icons from fontello.com
 *
 * @param $icons - taken from filter - vc_map param field settings['source']
 *     provided icons (default empty array). If array categorized it will
 *     auto-enable category dropdown
 *
 * @return array - of icons for iconpicker, can be categorized, or not.
 * @since 4.4
 */
function vc_iconpicker_type_linecons( $icons ) {
}
/**
 * monosocial icons from drinchev.github.io/monosocialiconsfont
 *
 * @param $icons - taken from filter - vc_map param field settings['source']
 *     provided icons (default empty array). If array categorized it will
 *     auto-enable category dropdown
 *
 * @return array - of icons for iconpicker, can be categorized, or not.
 * @since 4.4
 */
function vc_iconpicker_type_monosocial( $icons ) {
}
/**
 * Material icon set from Google
 *
 * @param $icons
 *
 * @return array
 * @since 5.0
 */
function vc_iconpicker_type_material( $icons ) {
}
/**
 * @param $settings
 * @param $value
 *
 * @return string
 */
function vc_column_offset_form_field( $settings, $value ) {
}
/**
 * @param $column_offset
 * @param $width
 *
 * @return mixed|string
 */
function vc_column_offset_class_merge( $column_offset, $width ) {
}
/**
 *
 */
function vc_load_column_offset_param() {
}
/**
 * @param $settings
 * @param $value
 *
 * @return string
 * @since 4.4
 */
function vc_href_form_field( $settings, $value ) {
}
/**
 * @param $settings
 * @param $value
 *
 * @return string
 * @since 4.2
 */
function vc_sorted_list_form_field( $settings, $value ) {
}
/**
 * @param $list
 *
 * @return string
 * @since 4.2
 */
function vc_sorted_list_parts_list( $list ) {
}
/**
 * @param $value
 *
 * @return array
 * @since 4.2
 */
function vc_sorted_list_parse_value( $value ) {
}
/**
 * WPBakery WPBakery Page Builder shortcode default attributes functions for rendering.
 *
 * @package WPBakeryPageBuilder
 * @since 4.4
 */
/**
 * Textfield shortcode attribute type generator.
 *
 * @param $settings
 * @param $value
 *
 * @return string - html string.
 * @since 4.4
 */
function vc_textfield_form_field( $settings, $value ) {
}
/**
 * Dropdown(select with options) shortcode attribute type generator.
 *
 * @param $settings
 * @param $value
 *
 * @return string - html string.
 * @since 4.4
 */
function vc_dropdown_form_field( $settings, $value ) {
}
/**
 * Checkbox shortcode attribute type generator.
 *
 * @param $settings
 * @param string   $value
 *
 * @return string - html string.
 * @since 4.4
 */
function vc_checkbox_form_field( $settings, $value ) {
}
/**
 * @param $value
 * @param $param
 * @return mixed|string
 */
function vc_checkbox_param_defaults( $value, $param ) {
}
/**
 * Checkbox shortcode attribute type generator.
 *
 * @param $settings
 * @param $value
 *
 * @return string - html string.
 * @since 4.4
 */
function vc_posttypes_form_field( $settings, $value ) {
}
/**
 * Taxonomies shortcode attribute type generator.
 *
 * @param $settings
 * @param $value
 *
 * @return string - html string.
 * @since 4.4
 */
function vc_taxonomies_form_field( $settings, $value ) {
}
/**
 * Exploded textarea shortcode attribute type generator.
 *
 * Data saved and coma-separated values are merged with line breaks and returned in a textarea.
 *
 * @param $settings
 * @param $value
 *
 * @return string - html string.
 * @since 4.4
 */
function vc_exploded_textarea_form_field( $settings, $value ) {
}
/**
 * Safe Textarea shortcode attribute type generator.
 *
 * @param $settings
 * @param $value
 *
 * @return string - html string.
 * @since 4.8.2
 */
function vc_exploded_textarea_safe_form_field( $settings, $value ) {
}
/**
 * Textarea raw html shortcode attribute type generator.
 *
 * This attribute type allows safely add custom html to your post/page.
 *
 * @param $settings
 * @param $value
 *
 * @return string - html string.
 * @since 4.4
 */
function vc_textarea_raw_html_form_field( $settings, $value ) {
}
/**
 * Safe Textarea shortcode attribute type generator.
 *
 * @param $settings
 * @param $value
 *
 * @return string - html string.
 * @since 4.4
 */
function vc_textarea_safe_form_field( $settings, $value ) {
}
/**
 * Textarea shortcode attribute type generator.
 *
 * @param $settings
 * @param $value
 *
 * @return string - html string.
 * @since 4.4
 */
function vc_textarea_form_field( $settings, $value ) {
}
/**
 * Attach images shortcode attribute type generator.
 *
 * @param $settings
 * @param $value
 *
 * @param $tag
 * @param bool     $single
 *
 * @return string - html string.
 * @since 4.4
 */
function vc_attach_images_form_field( $settings, $value, $tag, $single = \false ) {
}
/**
 * Attach image shortcode attribute type generator.
 *
 * @param $settings
 * @param $value
 *
 * @param $tag
 *
 * @return string - html string.
 * @since 4.4
 */
function vc_attach_image_form_field( $settings, $value, $tag ) {
}
/**
 * Widgetised sidebars shortcode attribute type generator.
 *
 * @param $settings
 * @param $value
 *
 * @return string - html string.
 * @since 4.4
 */
function vc_widgetised_sidebars_form_field( $settings, $value ) {
}
/**
 * Param 'colorpicker' field
 *
 * @param $settings
 * @param $value
 *
 * @return string
 * @since 4.4
 */
function vc_colorpicker_form_field( $settings, $value ) {
}
/**
 * Build css classes from terms of the post.
 *
 * @param $value
 * @param $data
 *
 * @return string
 * @since 4.4
 */
function vc_gitem_template_attribute_filter_terms_css_classes( $value, $data ) {
}
/**
 * Get image for post
 *
 * @param $data
 * @return mixed|string
 */
function vc_gitem_template_attribute_post_image( $data ) {
}
/**
 * @param $value
 * @param $data
 * @return mixed
 */
function vc_gitem_template_attribute_featured_image( $value, $data ) {
}
/**
 * Create new btn
 *
 * @param $value
 * @param $data
 *
 * @return mixed
 * @since 4.5
 */
function vc_gitem_template_attribute_vc_btn( $value, $data ) {
}
/**
 * Get post image url
 *
 * @param $value
 * @param $data
 *
 * @return string
 */
function vc_gitem_template_attribute_post_image_url( $value, $data ) {
}
/**
 * Get post image url
 *
 * @param $value
 * @param $data
 *
 * @return string
 */
function vc_gitem_template_attribute_post_full_image_url( $value, $data ) {
}
/**
 * Get post image url with href for a dom element
 *
 * @param $value
 * @param $data
 *
 * @return string
 */
function vc_gitem_template_attribute_post_image_url_href( $value, $data ) {
}
/**
 * Get post image url with href for a dom element
 *
 * @param $value
 * @param $data
 *
 * @return string
 */
function vc_gitem_template_attribute_post_full_image_url_href( $value, $data ) {
}
/**
 * Add image url as href with css classes for lightbox js plugin.
 *
 * @param $value
 * @param $data
 *
 * @return string
 */
function vc_gitem_template_attribute_post_image_url_attr_lightbox( $value, $data ) {
}
/**
 * Add image url as href with css classes for lightbox js plugin.
 *
 * @param $value
 * @param $data
 *
 * @return string
 */
function vc_gitem_template_attribute_post_full_image_url_attr_lightbox( $value, $data ) {
}
/**
 * @param $value
 * @param $data
 * @return string
 * @depreacted 6.6.0
 */
function vc_gitem_template_attribute_post_image_url_attr_prettyphoto( $value, $data ) {
}
/**
 * @param $value
 * @param $data
 * @return string
 */
function vc_gitem_template_attribute_post_full_image_url_attr_prettyphoto( $value, $data ) {
}
/**
 * Get post image alt
 *
 * @param $value
 * @param $data
 * @return string
 */
function vc_gitem_template_attribute_post_image_alt( $value, $data ) {
}
/**
 * Get post image url
 *
 * @param $value
 * @param $data
 * @return string
 */
function vc_gitem_template_attribute_post_image_background_image_css( $value, $data ) {
}
/**
 * Get post link
 *
 * @param $value
 * @param $data
 * @return bool|string
 */
function vc_gitem_template_attribute_post_link_url( $value, $data ) {
}
/**
 * Get post date
 *
 * @param $value
 * @param $data
 * @return bool|int|string
 */
function vc_gitem_template_attribute_post_date( $value, $data ) {
}
/**
 * Get post date time
 *
 * @param $value
 * @param $data
 * @return bool|int|string
 */
function vc_gitem_template_attribute_post_datetime( $value, $data ) {
}
/**
 * Get custom fields.
 *
 * @param $value
 * @param $data
 * @return mixed|string
 */
function vc_gitem_template_attribute_post_meta_value( $value, $data ) {
}
/**
 * Get post data. Used as wrapper for others post data attributes.
 *
 * @param $value
 * @param $data
 * @return mixed|string
 */
function vc_gitem_template_attribute_post_data( $value, $data ) {
}
/**
 * Get post excerpt. Used as wrapper for others post data attributes.
 *
 * @param $value
 * @param $data
 * @return mixed|string
 */
function vc_gitem_template_attribute_post_excerpt( $value, $data ) {
}
/**
 * Get post excerpt. Used as wrapper for others post data attributes.
 *
 * @param $value
 * @param $data
 * @return mixed|string
 */
function vc_gitem_template_attribute_post_title( $value, $data ) {
}
/**
 * @param $value
 * @param $data
 * @return string|null
 */
function vc_gitem_template_attribute_post_author( $value, $data ) {
}
/**
 * @param $value
 * @param $data
 * @return string
 */
function vc_gitem_template_attribute_post_author_href( $value, $data ) {
}
/**
 * @param $value
 * @param $data
 * @return mixed
 */
function vc_gitem_template_attribute_post_categories( $value, $data ) {
}
/**
 * @param $settings
 * @param $value
 *
 * @return string
 * @since 4.2
 */
function vc_tab_id_form_field( $settings, $value ) {
}
/**
 * @param $settings
 * @param $value
 *
 * @return mixed
 */
function vc_css_editor_form_field( $settings, $value ) {
}
/**
 * @param $settings
 * @param $value
 *
 * @return mixed
 */
function vc_font_container_form_field( $settings, $value ) {
}
/**
 * @param $settings
 * @param $value
 *
 * @return string
 * @since 4.2
 */
function vc_loop_form_field( $settings, $value ) {
}
/**
 * @param $param
 *
 * @return string
 * @since 4.2
 */
function vc_loop_get_value( $param ) {
}
/**
 * Build WP_Query object from query string.
 * String created by loop controllers
 *
 * @param $query
 * @param bool  $exclude_id
 *
 * @return array
 * @since 4.2
 */
function vc_build_loop_query( $query, $exclude_id = \false ) {
}
/**
 * @since 4.2
 */
function vc_get_loop_suggestion() {
}
/**
 * @since 4.2
 */
function vc_get_loop_settings_json() {
}
/**
 * @since 4.2
 */
function vc_loop_include_templates() {
}
/**
 * Params preset shortcode attribute type generator.
 *
 * Allows to set list of attributes which will be
 *
 * @param $settings
 * @param $value
 *
 * @return string - html string.
 * @since 4.4
 */
function vc_params_preset_form_field( $settings, $value ) {
}
/**
 * Function for rendering param in edit form (add element)
 * Parse settings from vc_map and entered values.
 *
 * @param $settings
 * @param $value
 *
 * @return mixed rendered template for params in edit form
 *
 * @since 4.3
 * vc_filter: vc_google_fonts_render_filter
 */
function vc_google_fonts_form_field( $settings, $value ) {
}
/**
 * @param $settings
 * @param $value
 *
 * @return string
 * @since 4.2
 */
function vc_vc_link_form_field( $settings, $value ) {
}
/**
 * @param $value
 *
 * @return array
 * @since 4.2
 */
function vc_build_link( $value ) {
}
/**
 * Add WP ui pointers to backend editor.
 */
function vc_frontend_editor_pointer() {
}
/**
 * @param $pointers
 * @return mixed
 */
function vc_frontend_editor_register_pointer( $pointers ) {
}
function vc_page_editable_enqueue_pointer_scripts() {
}
function vc_init_vendor_qtranslate() {
}
function vc_init_vendor_qtranslatex() {
}
function vc_rank_math_seo_image_filter( $images, $id ) {
}
/**
 * @param $post
 * @return bool
 */
function vcv_disable_gutenberg_for_classic_editor( $post ) {
}
/**
 * @param \Vc_Settings $settings
 */
function vc_gutenberg_add_settings( $settings ) {
}
/**
 * @param $rules
 *
 * @return mixed
 */
function vc_gutenberg_sanitize_disable_callback( $rules ) {
}
/**
 * Not responsive checkbox callback function
 */
function vc_gutenberg_disable_render_callback() {
}
/**
 * @param $result
 * @param $postType
 * @return bool
 */
function vc_gutenberg_check_disabled( $result, $postType ) {
}
/**
 * @param $result
 * @param $postType
 * @return bool
 */
function vc_gutenberg_check_disabled_regular( $editors, $postType ) {
}
function vc_classic_editor_post_states( $state ) {
}
/**
 * @return bool
 */
function vc_is_wpb_content() {
}
function vc_gutenberg_map() {
}
function vc_init_vendor_layerslider() {
}
/**
 * Add script for grid item add to card link
 *
 * @since 4.5
 */
function vc_woocommerce_add_to_cart_script() {
}
function vc_woocommerce_tab_manager_allowed_meta_box_ids( $allowed_meta_box_ids ) {
}
function vc_init_vendor_woocommerce() {
}
function vc_init_vendor_wpml() {
}
function vc_init_vendor_gravity_forms() {
}
function vc_vendor_gravityforms_load() {
}
function vc_init_vendor_jwplayer() {
}
function vc_init_vendor_yoast() {
}
// for themes
function vc_init_vendor_acf() {
}
function wpb_init_vendor_rank_math() {
}
function wpb_enqueue_rank_math_assets() {
}
function vc_init_vendor_mqtranslate() {
}
function vc_init_vendor_ninja_forms() {
}
function vc_init_vendor_cf7() {
}
function vc_init_vendor_revslider() {
}
/**
 * Function check is system has custom build of css
 *  and check it version in comparison with current VC version
 *
 * @since 4.5
 */
function vc_check_for_custom_css_build() {
}
/**
 * Display admin notice depending on current page
 *
 * @since 4.5
 */
function vc_custom_css_admin_notice() {
}
/**
 * @param $submitButtonAttributes
 * @return mixed
 */
function vc_page_settings_tab_color_submit_attributes( $submitButtonAttributes ) {
}
function vc_page_settings_desing_options_load() {
}
/**
 * Build and enqueue js/css for automapper settings tab.
 *
 * @since 4.5
 */
function vc_automapper_init() {
}
/**
 * Returns automapper template.
 *
 * @return string
 * @since 4.5
 */
function vc_page_automapper_build() {
}
/**
 * Get welcome pages main slug.
 *
 * @return mixed|string
 * @since 4.5
 */
function vc_page_welcome_slug() {
}
/**
 * Build vc-welcome page block which will be shown after Vc installation.
 *
 * vc_filter: vc_page_welcome_render_capabilities
 *
 * @since 4.5
 */
function vc_page_welcome_render() {
}
function vc_page_welcome_add_sub_page() {
}
function vc_welcome_menu_hooks() {
}
function vc_welcome_menu_hooks_network() {
}
/**
 * ====================
 * Redirect to welcome page on plugin activation.
 * ====================
 */
/**
 * Set redirect transition on update or activation
 *
 * @since 4.5
 */
function vc_page_welcome_set_redirect() {
}
/**
 * Do redirect if required on welcome page
 *
 * @since 4.5
 */
function vc_page_welcome_redirect() {
}
/**
 * @return mixed|void
 */
function vc_get_page_welcome_tabs() {
}
function vc_page_settings_custom_css_load() {
}
/**
 * @param $tabs
 * @return array
 */
function vc_settings_tabs_vc_roles( $tabs ) {
}
/**
 * @return string
 */
function vc_settings_render_tab_vc_roles() {
}
function vc_roles_settings_save() {
}
function vc_settings_render_tab_vc_roles_scripts() {
}
function wpb_unfiltered_html_state( $state, $role ) {
}
/**
 * @param $start
 * @param WP_Role $role
 */
function wpb_editor_access( $state, $role ) {
}
function wpb_custom_html_elements_access( $state, $shortcode ) {
}
function vc_page_settings_render() {
}
function vc_page_settings_build() {
}
function vc_page_settings_admin_init() {
}
function vc_settings_enqueue_js() {
}
/**
 * @since 4.5
 */
function vc_page_css_enqueue() {
}
/**
 * Build group page objects.
 *
 * @param $slug
 * @param $title
 * @param $tab
 *
 * @return Vc_Pages_Group
 * @since 4.5
 */
function vc_pages_group_build( $slug, $title, $tab = '' ) {
}
/**
 * @since 4.5
 */
function vc_menu_page_build() {
}
function vc_network_menu_page_build() {
}
function vc_pointer_load() {
}
/**
 * Remove Vc pointers keys to show Tour markers again.
 *
 * @sine 4.5
 */
function vc_pointer_reset() {
}
/**
 * Reset tour guid
 *
 * @return bool
 */
function vc_pointers_is_dismissed() {
}
function vc_include_settings_preset_class() {
}
/**
 * @return Vc_Vendor_Preset
 */
function vc_vendor_preset() {
}
/**
 * Save settings preset for specific shortcode
 *
 * Include freshly rendered html in response
 *
 * Required _POST params:
 * - shortcode_name string
 * - title string
 * - data string params in json
 * - is_default
 *
 * @since 4.7
 */
function vc_action_save_settings_preset() {
}
/**
 * Set existing preset as default
 *
 * Include freshly rendered html in response
 *
 * Required _POST params:
 * - id int
 * - shortcode_name string
 *
 * @since 4.7
 */
function vc_action_set_as_default_settings_preset() {
}
/**
 * Unmark current default preset as default
 *
 * Include freshly rendered html in response
 *
 * Required _POST params:
 * - shortcode_name string
 *
 * @since 4.7
 */
function vc_action_restore_default_settings_preset() {
}
/**
 * Delete specific settings preset
 *
 * Include freshly rendered html in response
 *
 * Required _POST params:
 * - shortcode_name string
 * - id int
 *
 * @since 4.7
 */
function vc_action_delete_settings_preset() {
}
/**
 * Get data for specific settings preset
 *
 * Required _POST params:
 * - id int
 *
 * @since 4.7
 */
function vc_action_get_settings_preset() {
}
/**
 * Respond with rendered popup menu
 *
 * Required _POST params:
 * - shortcode_name string
 *
 * @since 4.7
 */
function vc_action_render_settings_preset_popup() {
}
/**
 * Return rendered title prompt
 *
 * @since 4.7
 */
function vc_action_render_settings_preset_title_prompt() {
}
/**
 * Return rendered template prompt
 */
function vc_action_render_settings_templates_prompt() {
}
/**
 * Register (add) new vendor preset
 *
 * @since 4.8
 *
 * @param string $title
 * @param string $shortcode
 * @param array  $params
 * @param bool   $default
 */
function vc_register_settings_preset( $title, $shortcode, $params, $default = \false ) {
}
/**
 * @param $shortcodes
 * @return array
 * @throws \Exception
 */
function vc_add_new_elements_to_box( $shortcodes ) {
}
/**
 * @param $cat
 * @return array
 */
function vc_add_new_category_filter( $cat ) {
}
function vc_navbar_undoredo() {
}
/**
 * @return array
 */
function vc_get_filters() {
}
/**
 * Add Image Filter field to media uploader
 *
 * @param array  $form_fields , fields to include in attachment form
 * @param object $post , attachment record in database
 *
 * @return array $form_fields, modified form fields
 */
function vc_attachment_filter_field( $form_fields, $post ) {
}
/**
 * Apply filters to specified images
 *
 * If image(s) has filter specified via filters _POST param:
 * 1) copy it
 * 2) apply specified filter
 * 3) return new image id
 *
 * Required _POST params:
 * - array ids: array of attachment ids
 *
 * Optional _POST params:
 * - array filters: mapped array of ids and filters to apply
 */
function vc_media_editor_add_image() {
}
/**
 * Generate filter preview
 *
 * Preview url is generated as data uri (base64)
 *
 * Required _POST params:
 * - string filter: filter name
 * - int attachment_id: attachment id
 *
 * @return void Results are sent out as json
 * @throws \Exception
 */
function vc_media_editor_preview_image() {
}
/**
 * Read file from disk as GD resource
 *
 * @param string $file
 *
 * @return bool|resource
 */
function vc_get_gd_resource( $file ) {
}
/**
 * Save GD resource to file
 *
 * @param resource $resource
 * @param string   $file
 *
 * @return bool
 */
function vc_save_gd_resource( $resource, $file ) {
}
/**
 * Add "Filter: ..." meta field to attachment details box
 *
 * @param array  $media_meta , meta to include in attachment form
 * @param object $post , attachment record in database
 *
 * @return array|string
 */
function vc_attachment_filter_media_meta( $media_meta, $post ) {
}
/**
 * @param $settings
 * @param $value
 * @return string
 */
function vc_vc_grid_item_form_field( $settings, $value ) {
}
function vc_load_vc_grid_item_param() {
}
/**
 * @param $target
 * @return string
 */
function vc_gitem_post_data_get_link_target_frontend_editor( $target ) {
}
/**
 * @param $rel
 * @return string
 */
function vc_gitem_post_data_get_link_rel_frontend_editor( $rel ) {
}
/**
 * @param $atts
 * @param string $default_class
 * @param string $title
 * @return string
 */
function vc_gitem_create_link( $atts, $default_class = '', $title = '' ) {
}
/**
 * @param $atts
 * @param $post
 * @param string $default_class
 * @param string $title
 * @return string
 */
function vc_gitem_create_link_real( $atts, $post, $default_class = '', $title = '' ) {
}
/**
 * @param $link
 * @return string
 */
function vc_gitem_post_data_get_link_link_frontend_editor( $link ) {
}
/**
 * Backward compatibility
 *
 * @param $atts
 * @return mixed
 * @since 4.6
 */
function vc_single_image_convert_old_link_to_new( $atts ) {
}
function vc_single_image_src() {
}
/**
 * @param $params
 * @return array
 */
function vc_edit_for_fields_add_optional_params( $params ) {
}
function vc_output_required_params_to_init() {
}
function vc_gallery_html() {
}
/**
 * Add WP ui pointers to backend editor.
 */
function vc_add_admin_pointer() {
}
/**
 * @param $pointers
 * @return mixed
 */
function vc_backend_editor_register_pointer( $pointers ) {
}
/**
 * Return true value for filter 'wpb_vc_js_status_filter'.
 * It allows to start backend editor on load.
 *
 * @return string
 * @since 4.12
 */
function vc_set_default_content_for_post_type_wpb_vc_js_status_filter() {
}
/**
 * Set default content by post type in editor.
 *
 * Data for post type templates stored in settings.
 *
 * @param $post_content
 * @param $post
 * @return null
 * @throws \Exception
 * @since 4.12
 */
function vc_set_default_content_for_post_type( $post_content, $post ) {
}
/**
 * Initialize Vc_Setting_Post_Type_Default_Template_Field
 * Called by admin_init hook
 */
function vc_settings_post_type_default_template_field_init() {
}
/**
 * This action registers all styles(fonts) to be enqueue later
 *
 * @see filter 'vc_base_register_front_css' - preview/frontend-editor
 *      filter 'vc_base_register_admin_css' - backend editor
 *
 * @since 4.4
 */
function vc_iconpicker_base_register_css() {
}
/**
 * Register admin js for iconpicker functionality
 *
 * @since 4.4
 */
function vc_iconpicker_base_register_js() {
}
/**
 * Enqueue ALL fonts/styles for Editor(admin) mode. (to allow easy change icons)
 * - To append your icons fonts add action:
 *  vc_backend_editor_enqueue_jscss and vc_frontend_editor_enqueue_jscss
 *
 * @since 4.4
 */
function vc_iconpicker_editor_jscss() {
}
/**
 * @param $networkWide
 */
function vc_bc_multisite_options( $networkWide ) {
}
/**
 * WPBakery Page Builder manager.
 *
 * @return Vc_Manager
 * @since 4.2
 */
function vc_manager() {
}
/**
 * WPBakery Page Builder instance.
 *
 * @return Vc_Base
 * @since 4.2
 * @depreacted 5.8, use wpbakery() instead
 */
function visual_composer() {
}
/**
 * WPBakery Page Builder instance.
 *
 * @return Vc_Base
 * @since 6.8
 */
function wpbakery() {
}
/**
 * Shorthand for Vc Mapper.
 *
 * @return Vc_Mapper
 * @since 4.2
 */
function vc_mapper() {
}
/**
 * Shorthand for WPBakery Page Builder settings.
 *
 * @return Vc_Settings
 * @since 4.2
 */
function vc_settings() {
}
/**
 * Get License manager
 *
 * @return Vc_License
 * @since 4.2
 */
function vc_license() {
}
/**
 * @return Vc_Automapper
 * @since 4.2
 */
function vc_automapper() {
}
/**
 * Shorthand for VC frontend editor
 *
 * @return Vc_Frontend_Editor
 * @since 4.2
 */
function vc_frontend_editor() {
}
/**
 * Shorthand for VC frontend editor
 *
 * @return Vc_Backend_Editor
 * @since 4.2
 */
function vc_backend_editor() {
}
/**
 * @return Vc_Updater
 * @since 4.2
 */
function vc_updater() {
}
/**
 * Vc is network plugin or not.
 *
 * @return bool
 * @since 4.2
 */
function vc_is_network_plugin() {
}
/**
 * Get file/directory path in Vc.
 *
 * @param string $name - path name
 * @param string $file
 *
 * @return string
 * @since 4.2
 */
function vc_path_dir( $name, $file = '' ) {
}
/**
 * Get full url for assets.
 *
 * @param string $file
 *
 * @return string
 * @since 4.2
 */
function vc_asset_url( $file ) {
}
/**
 * Temporary files upload dir;
 *
 * @return string
 * @since 4.2
 */
function vc_upload_dir() {
}
/**
 * @param $file
 *
 * @return string
 * @since 4.2
 */
function vc_template( $file ) {
}
/**
 * Get param value from $_POST if exists.
 *
 * @param $param
 * @param $default
 *
 * @param bool    $check
 * @return null|string - null for undefined param.
 * @since 4.2
 */
function vc_post_param( $param, $default = \null, $check = \false ) {
}
/**
 * Get param value from $_GET if exists.
 *
 * @param string  $param
 * @param $default
 *
 * @param bool    $check
 * @return null|string - null for undefined param.
 * @since 4.2
 */
function vc_get_param( $param, $default = \null, $check = \false ) {
}
/**
 * Get param value from $_REQUEST if exists.
 *
 * @param $param
 * @param $default
 *
 * @param bool    $check
 * @return null|string - null for undefined param.
 * @since 4.4
 */
function vc_request_param( $param, $default = \null, $check = \false ) {
}
/**
 * @return bool
 * @since 4.2
 */
function vc_is_frontend_editor() {
}
/**
 * @return bool
 * @since 4.2
 */
function vc_is_page_editable() {
}
/**
 * Get VC special action param.
 *
 * @return string|null
 * @since 4.2
 */
function vc_action() {
}
/**
 * Get is inline or not.
 *
 * @return bool
 * @since 4.2
 */
function vc_is_inline() {
}
/**
 * @return bool
 * @since 4.2
 */
function vc_is_frontend_ajax() {
}
/**
 * @depreacted since 4.8 ( use vc_is_frontend_editor )
 * @return bool
 * @since 4.2
 */
function vc_is_editor() {
}
/**
 * @param $value
 * @param bool  $encode
 *
 * @return string
 * @since 4.2
 */
function vc_value_from_safe( $value, $encode = \false ) {
}
/**
 * @param bool $disable
 * @since 4.2
 */
function vc_disable_automapper( $disable = \true ) {
}
/**
 * @return bool
 * @since 4.2
 */
function vc_automapper_is_disabled() {
}
/**
 * @param $param
 * @param $value
 *
 * @return mixed|string
 * @since 4.2
 */
function vc_get_dropdown_option( $param, $value ) {
}
/**
 * @param $prefix
 * @param $color
 *
 * @return string
 * @since 4.2
 */
function vc_get_css_color( $prefix, $color ) {
}
/**
 * @param $param_value
 * @param string      $prefix
 *
 * @return string
 * @since 4.2
 */
function vc_shortcode_custom_css_class( $param_value, $prefix = '' ) {
}
/**
 * @param $subject
 * @param $property
 * @param bool|false $strict
 *
 * @return bool
 * @since 4.9
 */
function vc_shortcode_custom_css_has_property( $subject, $property, $strict = \false ) {
}
/**
 * Plugin name for VC.
 *
 * @return string
 * @since 4.2
 */
function vc_plugin_name() {
}
/**
 * @param $filename
 *
 * @return bool|mixed|string
 * @since 4.4.3 used in vc_base when getting an custom css output
 */
function vc_file_get_contents( $filename ) {
}
/**
 * HowTo: vc_role_access()->who('administrator')->with('editor')->can('frontend_editor');
 *
 * @return Vc_Role_Access;
 * @since 4.8
 */
function vc_role_access() {
}
/**
 * Get access manager for current user.
 * HowTo: vc_user_access()->->with('editor')->can('frontend_editor');
 *
 * @return Vc_Current_User_Access;
 * @since 4.8
 */
function vc_user_access() {
}
/**
 * @return array
 * @throws \Exception
 */
function vc_user_roles_get_all() {
}
/**
 * @param $data
 *
 * @return string
 */
function vc_generate_nonce( $data, $from_esi = \false ) {
}
/**
 * @param $params
 *
 * @return string
 */
function vc_hook_esi( $params ) {
}
/**
 * @param $nonce
 * @param $data
 *
 * @return bool
 */
function vc_verify_nonce( $nonce, $data ) {
}
/**
 * @param $nonce
 *
 * @return bool
 */
function vc_verify_admin_nonce( $nonce = '' ) {
}
/**
 * @param $nonce
 *
 * @return bool
 */
function vc_verify_public_nonce( $nonce = '' ) {
}
/**
 * @param $type
 * @return bool|mixed|void
 * @throws \Exception
 */
function vc_check_post_type( $type = '' ) {
}
/**
 * @param $shortcode
 * @return bool|mixed|void
 */
function vc_user_access_check_shortcode_edit( $shortcode ) {
}
/**
 * @param $shortcode
 * @return bool|mixed|void
 * @throws \Exception
 */
function vc_user_access_check_shortcode_all( $shortcode ) {
}
/**
 * htmlspecialchars_decode_deep
 * Call the htmlspecialchars_decode to a gived multilevel array
 *
 * @param mixed $value The value to be stripped.
 *
 * @return mixed Stripped value.
 * @since 4.8
 */
function vc_htmlspecialchars_decode_deep( $value ) {
}
/**
 * @param $str
 * @return mixed
 */
function vc_str_remove_protocol( $str ) {
}
/**
 * Get current theme slug (actually the directory name)
 *
 * When child theme is in use will return the parent's slug.
 *
 * @return string
 */
function wpb_get_current_theme_slug() {
}
/**
 * @param array $params
 *
 * @return array|bool
 * @since 4.2
 * vc_filter: vc_wpb_getimagesize - to override output of this function
 */
function wpb_getImageBySize( $params = array() ) {
}
/**
 * @param $id
 * @param $size
 * @return array|false|mixed|string
 */
function vc_get_image_by_size( $id, $size ) {
}
/**
 *  Convert vc_col-sm-3 to 1/4
 *
 * @param $width
 *
 * @return string
 * @since 4.2
 */
function wpb_translateColumnWidthToFractional( $width ) {
}
/**
 * @param $width
 *
 * @return bool|string
 * @since 4.2
 */
function wpb_translateColumnWidthToSpan( $width ) {
}
/**
 * @param $content
 * @param bool    $autop
 *
 * @return string
 * @since 4.2
 */
function wpb_js_remove_wpautop( $content, $autop = \false ) {
}
/**
 * Check if a shortcode is registered in WordPress.
 *
 * Examples: shortcode_exists( 'caption' ) - will return true.
 * shortcode_exists( 'blah' ) - will return false.
 *
 * @param bool $shortcode
 *
 * @return bool
 * @since 4.2
 */
function shortcode_exists( $shortcode = \false ) {
}
/**
 *  Helper function which returns list of site attached images, and if image is attached to the current post it adds class 'added'
 *
 * @param array $att_ids
 *
 * @return string
 * @since 4.11
 */
function vc_siteAttachedImages( $att_ids = array() ) {
}
/**
 * @param array $images IDs or srcs of images
 *
 * @return string
 * @since 5.8
 */
function vc_field_attached_images( $images = array() ) {
}
/**
 * @param $param_value
 *
 * @return array
 * @since 4.2
 */
function wpb_removeNotExistingImgIDs( $param_value ) {
}
/**
 * @param int    $attach_id
 * @param string $img_url
 * @param int    $width
 * @param int    $height
 * @param bool   $crop
 *
 * @return array
 * @since 4.2
 */
function wpb_resize( $attach_id, $img_url, $width, $height, $crop = \false ) {
}
/**
 * Method adds css class to body tag.
 *
 * Hooked class method by body_class WP filter. Method adds custom css class to body tag of the page to help
 * identify and build design specially for VC shortcodes.
 * Used in wp-content/plugins/js_composer/include/classes/core/class-vc-base.php\Vc_Base\bodyClass
 *
 * @param $classes
 *
 * @return array
 * @since 4.2
 */
function js_composer_body_class( $classes ) {
}
/**
 * @param $m
 *
 * @return string
 * @since 4.2
 */
function vc_convert_shortcode( $m ) {
}
/**
 * @param $m
 *
 * @return string
 * @since 4.2
 */
function vc_convert_tab_inner_shortcode( $m ) {
}
/**
 * @param $m
 *
 * @return string
 * @since 4.2
 */
function vc_convert_inner_shortcode( $m ) {
}
/**
 * @param $width
 *
 * @return string
 * @since 4.2
 */
function wpb_vc_get_column_width_indent( $width ) {
}
/**
 * Make any HEX color lighter or darker
 *
 * @param $colour
 * @param $per
 *
 * @return string
 * @since 4.2
 */
function vc_colorCreator( $colour, $per = 10 ) {
}
/**
 * HEX to RGB converter
 *
 * @param $color
 *
 * @return array|bool
 * @since 4.2
 */
function vc_hex2rgb( $color ) {
}
/**
 * Parse string like "title:Hello world|weekday:Monday" to array('title' => 'Hello World', 'weekday' => 'Monday')
 *
 * @param $value
 * @param array $default
 *
 * @return array
 * @since 4.2
 */
function vc_parse_multi_attribute( $value, $default = array() ) {
}
/**
 * @param $v
 *
 * @return string
 * @since 4.2
 */
function vc_param_options_parse_values( $v ) {
}
/**
 * @param $name
 * @param $settings
 *
 * @return bool
 * @since 4.2
 */
function vc_param_options_get_settings( $name, $settings ) {
}
/**
 * @param $atts
 *
 * @return string
 * @since 4.2
 */
function vc_convert_atts_to_string( $atts ) {
}
/**
 * @param $string
 * @param $tag
 * @param $param
 *
 * @return array
 * @throws \Exception
 * @since 4.2
 */
function vc_parse_options_string( $string, $tag, $param ) {
}
/**
 * Convert string to a valid css class name.
 *
 * @param string $class
 *
 * @return string
 * @since 4.3
 */
function vc_build_safe_css_class( $class ) {
}
/**
 * Include template from templates dir.
 *
 * @param $template
 * @param array    $variables - passed variables to the template.
 *
 * @param bool     $once
 *
 * @return mixed
 * @since 4.3
 */
function vc_include_template( $template, $variables = array(), $once = \false ) {
}
/**
 * Output template from templates dir.
 *
 * @param $template
 * @param array    $variables - passed variables to the template.
 *
 * @param bool     $once
 *
 * @return string
 * @since 4.4
 */
function vc_get_template( $template, $variables = array(), $once = \false ) {
}
/**
 * VC Convert a value to studly caps case.
 *
 * @param string $value
 *
 * @return string
 * @since 4.3
 */
function vc_studly( $value ) {
}
/**
 * VC Convert a value to camel case.
 *
 * @param string $value
 *
 * @return string
 * @since 4.3
 */
function vc_camel_case( $value ) {
}
/**
 * Enqueue icon element font
 *
 * @param $font
 * @since 4.4
 *
 * @todo move to separate folder
 */
function vc_icon_element_fonts_enqueue( $font ) {
}
/**
 * Function merges defaults attributes in attributes by keeping it values
 *
 * Example
 *      array defaults     |   array attributes     |    result array
 *      'color'=>'black',         -                   'color'=>'black',
 *      'target'=>'_self',      'target'=>'_blank',   'target'=>'_blank',
 *             -                'link'=>'google.com'  'link'=>'google.com'
 *
 * @param array $defaults
 * @param array $attributes
 *
 * @return array - merged attributes
 *
 * @since 4.4
 *
 * @see vc_map_get_attributes
 */
function vc_shortcode_attribute_parse( $defaults = array(), $attributes = array() ) {
}
/**
 * @param string $tagregexp
 * @return string
 */
function vc_get_shortcode_regex( $tagregexp = '' ) {
}
/**
 * Used to send warning message
 *
 * @param $message
 *
 * @return string
 * @since 4.5
 */
function vc_message_warning( $message ) {
}
/**
 * Extract video ID from youtube url
 *
 * @param string $url Youtube url
 *
 * @return string
 */
function vc_extract_youtube_id( $url ) {
}
/**
 * @return string[]|\WP_Taxonomy[]
 */
/**
 * @return string[]|\WP_Taxonomy[]
 */
/**
 * @return string[]|\WP_Taxonomy[]
 */
/**
 * @return string[]|\WP_Taxonomy[]
 */
/**
 * @return string[]|\WP_Taxonomy[]
 */
function vc_taxonomies_types( $post_type = \null ) {
}
/**
 * Since
 *
 * @param $term
 *
 * @return array
 * @since 4.5.3
 */
function vc_get_term_object( $term ) {
}
/**
 * Check if element has specific class
 *
 * E.g. f('foo', 'foo bar baz') -> true
 *
 * @param string $class Class to check for
 * @param string $classes Classes separated by space(s)
 *
 * @return bool
 */
function vc_has_class( $class, $classes ) {
}
/**
 * Remove specific class from classes string
 *
 * E.g. f('foo', 'foo bar baz') -> 'bar baz'
 *
 * @param string $class Class to remove
 * @param string $classes Classes separated by space(s)
 *
 * @return string
 */
function vc_remove_class( $class, $classes ) {
}
/**
 * Convert array of named params to string version
 * All values will be escaped
 *
 * E.g. f(array('name' => 'foo', 'id' => 'bar')) -> 'name="foo" id="bar"'
 *
 * @param $attributes
 *
 * @return string
 */
function vc_stringify_attributes( $attributes ) {
}
/**
 * @return bool
 */
/**
 * @return bool
 */
/**
 * @return bool
 */
/**
 * @return bool
 */
/**
 * @return bool
 */
function vc_is_responsive_disabled() {
}
/**
 * Do shortcode single render point
 *
 * @param $atts
 * @param null $content
 * @param null $tag
 *
 * @return string
 * @throws \Exception
 */
function vc_do_shortcode( $atts, $content = \null, $tag = \null ) {
}
/**
 * Return random string
 *
 * @param int $length
 *
 * @return string
 */
function vc_random_string( $length = 10 ) {
}
/**
 * @param $str
 * @return string|string[]|null
 */
/**
 * @param $str
 * @return string|string[]|null
 */
/**
 * @param $str
 * @return string|string[]|null
 */
/**
 * @param $str
 * @return string|string[]|null
 */
/**
 * @param $str
 * @return string|string[]|null
 */
function vc_slugify( $str ) {
}
/**
 * WPBakery WPBakery Page Builder filter functions
 *
 * @package WPBakeryPageBuilder
 */
/**
 * This filter should be applied to all content elements titles
 *
 * $params['extraclass'] Extra class name will be added
 *
 *
 * To override content element title default html markup, paste this code in your theme's functions.php file
 * vc_filter: wpb_widget_title
 * add_filter('wpb_widget_title', 'override_widget_title', 10, 2);
 * function override_widget_title($output = '', $params = array('')) {
 *    $extraclass = (isset($params['extraclass'])) ? " ".$params['extraclass'] : "";
 *    return '<h1 class="entry-title'.$extraclass.'">'.$params['title'].'</h1>';
 * }
 *
 * @param array $params
 *
 * @return mixed|string
 */
function wpb_widget_title( $params = array( 'title' => '' ) ) {
}
/**
 * Used to remove raw_html/raw_js elements from content
 *
 * @param $content
 * @return string|string[]|null
 * @since 6.3.0
 */
function wpb_remove_custom_html( $content ) {
}
function wpb_remove_custom_onclick( $match ) {
}
/**
 * New button implementation
 * array_merge is needed due to merging other shortcode data into params.
 *
 * @since 4.5
 */
$pixel_icons = \vc_pixel_icons();
/**
 * @since 4.4
 * Default templates list
 */
/** Landing page template */
$data = array();
/** Call to Action Page template */
$data = array();
/** Feature List template */
$data = array();
/** Description Page template */
$data = array();
/** Service List template */
$data = array();
/** Product Page template */
$data = array();
// New templates. Since 4.4
/** FAQ section */
$data = array();
/** About section */
$data = array();
/** About section */
$data = array();
/** Three image description */
$data = array();
/** News list */
$data = array();
/** Product description */
$data = array();
/** Description with accordion */
$data = array();
/** Two column list */
$data = array();
/** About with tour section */
$data = array();
/** Rounded image description */
$data = array();
/** Description with success message */
$data = array();
/** Images with tab description */
$data = array();
/** Square on background */
$data = array();
/** Product description with tabs */
$data = array();
/** Description with headings */
$data = array();
/** Video description */
$data = array();
/** Description with buttons */
$data = array();
/** Map and Contacts */
$data = array();
/** Help section */
$data = array();
/** Screen description */
$data = array();
/** Description with round images*/
$data = array();
/** FAQ in three columns */
$data = array();
/** Centre description */
$data = array();
/** Description with gallery */
$data = array();
/** Centre description with image */
$data = array();
/** Description with thumbnails */
$data = array();
/** About with left gallery */
$data = array();
/** Five image layout */
$data = array();
/** Accordion news list */
$data = array();
/** Product with social icons */
$data = array();
/** Complex news layout */
$data = array();
/** Product list with CTA */
$data = array();
/** Intro with features */
$data = array();
/** Image gallery with description */
$data = array();
/** Team members */
$data = array();
/** Large image with thumbnails */
$data = array();
/** Complex news layout II */
$data = array();
/** Service description layout */
$data = array();
/** Articles with headings */
$data = array();
/** Call to Action section */
$data = array();
/** Charts section */
$data = array();
/** Chess Grid */
$data = array();
/** Features and articles */
$data = array();
/** Features and charts */
$data = array();
/** Features with video parallax */
$data = array();
/** Features with full width promo */
$data = array();
/** Full height hero section */
$data = array();
/** Full height with transparent block */
$data = array();
/** Full height parallax */
$data = array();
/** Header section with features */
$data = array();
/** Helps with icons */
$data = array();
/** Plain articles */
$data = array();
/** Post portfolio */
$data = array();
/** Product introduction */
$data = array();
/** Services with block buttons */
$data = array();
/** Tabs with features */
$data = array();
/** Video section */
$data = array();
/** Video promo */
$data = array();
/** Equal Feature List */
$data = array();
/** Parallax Introduction */
$data = array();
/** Three Informative Blocks */
$data = array();
/** Description Articles */
$data = array();
/** Full Height Features */
$data = array();
/** Business Description */
$data = array();
/** Article Hero Image */
$data = array();
/** EMy Team Members */
$data = array();
/** Hero Image With Description */
$data = array();
/** Description with Image on Background */
$data = array();
/** Three Image with Article */
$data = array();
/**
 * WPBakery Page Builder Shortcodes settings Lazy mapping
 *
 * @package VPBakeryVisualComposer
 */
$vc_config_path = \vc_path_dir( 'CONFIG_DIR' );
/** @var WP_Post $post */
$nav_bar = new \Vc_Navbar( $post );
/** @var Vc_Templates_Panel_Editor $box */
$with_tabs = \count( $categories ) > 0;
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $el_id
 * @var $el_class
 * @var $width
 * @var $css
 * @var $offset
 * @var $content - shortcode content
 * @var $css_animation
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Column $this
 */
$el_class = $el_id = $width = $parallax_speed_bg = $parallax_speed_video = $parallax = $parallax_image = $video_bg = $video_bg_url = $video_bg_parallax = $css = $offset = $css_animation = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $content - shortcode content
 * @var $el_class
 * @var $el_id
 * @var WPBakeryShortCode_Vc_Tta_Accordion|WPBakeryShortCode_Vc_Tta_Tabs|WPBakeryShortCode_Vc_Tta_Tour|WPBakeryShortCode_Vc_Tta_Pageable $this
 */
$el_class = $css = $css_animation = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title_align
 * @var $el_width
 * @var $style
 * @var $title
 * @var $align
 * @var $color
 * @var $accent_color
 * @var $el_class
 * @var $el_id
 * @var $layout
 * @var $css
 * @var $border_width
 * @var $add_icon
 * Icons:
 * @var $i_type
 * @var $i_icon_fontawesome
 * @var $i_icon_openiconic
 * @var $i_icon_typicons
 * @var $i_icon_entypo
 * @var $i_icon_linecons
 * @var $i_color
 * @var $i_custom_color
 * @var $i_background_style
 * @var $i_background_color
 * @var $i_custom_background_color
 * @var $i_size
 * @var $i_css_animation
 * @var $css_animation
 * Shortcode class
 * @var WPBakeryShortcode_Vc_Text_Separator $this
 */
$title_align = $el_width = $style = $title = $align = $color = $accent_color = $inline_css = $el_class = $el_id = $layout = $css = $border_width = $add_icon = $i_type = $i_icon_fontawesome = $i_icon_openiconic = $i_icon_typicons = $i_icon_entypo = $i_icon_linecons = $i_color = $i_custom_color = $i_background_style = $i_background_color = $i_custom_background_color = $i_size = $i_css_animation = $css_animation = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $el_class
 * @var $el_id
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Wp_Search $this
 */
$title = $el_class = $el_id = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $type
 * @var $el_class
 * @var $el_id
 * @var $css
 * @var $css_animation
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Facebook $this
 */
$type = $css = $el_class = $el_id = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $url
 * @var $items
 * @var $options
 * @var $el_class
 * @var $el_id
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Wp_Rss $this
 */
$title = $url = $items = $options = $el_class = $el_id = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $el_class
 * @var $el_id
 * @var $sidebar_id
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Widget_sidebar $this
 */
$title = $el_class = $el_id = $sidebar_id = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $tab_id
 * @var $title
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Tab $this
 */
$tab_id = $title = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $onclick
 * @var $custom_links
 * @var $custom_links_target
 * @var $img_size
 * @var $images
 * @var $el_class
 * @var $el_id
 * @var $mode
 * @var $slides_per_view
 * @var $wrap
 * @var $autoplay
 * @var $hide_pagination_control
 * @var $hide_prev_next_buttons
 * @var $speed
 * @var $partial_view
 * @var $css
 * @var $css_animation
 * Shortcode class
 * @var WPBakeryShortCode_Vc_images_carousel $this
 */
$title = $onclick = $custom_links = $custom_links_target = $img_size = $images = $el_class = $el_id = $mode = $slides_per_view = $wrap = $autoplay = $hide_pagination_control = $hide_prev_next_buttons = $speed = $partial_view = $css = $css_animation = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $el_class
 * @var $css
 * @var $el_id
 * @var $equal_height
 * @var $content_placement
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Row_Inner $this
 */
$el_class = $equal_height = $content_placement = $css = $el_id = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $number
 * @var $el_class
 * @var $el_id
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Wp_Recentcomments $this
 */
$title = $number = $el_class = $el_id = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $el_class
 * @var $el_id
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Wp_Text $this
 */
$el_class = $el_id = '';
/**
 * Shortcode attributes
 *
 * @todo add $icon_... defaults
 * @todo add $icon_typicons and etc
 *
 * @var $atts
 * @var $el_class
 * @var $el_id
 * @var $message_box_style
 * @var $style
 * @var $color
 * @var $message_box_color
 * @var $css_animation
 * @var $icon_type
 * @var $icon_fontawesome
 * @var $content - shortcode content
 * @var $css
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Message $this
 */
$el_class = $el_id = $message_box_color = $message_box_style = $style = $css = $color = $css_animation = $icon_type = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $interval
 * @var $el_class
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Tabs $this
 */
$title = $interval = $el_class = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $el_class
 * @var $style
 * @var $color
 * @var $size
 * @var $open
 * @var $css_animation
 * @var $el_id
 * @var $content - shortcode content
 * @var $css
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Toggle $this
 */
$title = $el_class = $style = $color = $size = $open = $css_animation = $css = $el_id = '';
/**
 * @since 4.4
 */
$elementClass = array(
	'base'          => \apply_filters( \VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'vc_toggle', $this->settings['base'], $atts ),
	'style'         => 'vc_toggle_' . $style,
	'color'         => $color ? 'vc_toggle_color_' . $color : '',
	'inverted'      => $inverted ? 'vc_toggle_color_inverted' : '',
	'size'          => $size ? 'vc_toggle_size_' . $size : '',
	'open'          => 'true' === $open ? 'vc_toggle_active' : '',
	'extra'         => $this->getExtraClass( $el_class ),
	'css_animation' => $this->getCSSAnimation( $css_animation ),
);
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $color
 * @var $size
 * @var $icon
 * @var $target
 * @var $href
 * @var $el_class
 * @var $title
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Button $this
 */
$color = $size = $icon = $target = $href = $el_class = $title = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $key
 * @var $el_class
 * @var $align
 * @var $label
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Gitem_Post_Meta $this
 */
$key = $el_class = $align = $label = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Gitem_Post_Categories $this
 */
$atts = \vc_map_get_attributes( $this->getShortcode(), $atts );
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $type
 * @var $el_class
 * @var $el_id
 * @var $annotation
 * @var $widget_width
 * @var $css
 * @var $css_animation
 * Shortcode class
 * @var WPBakeryShortCode_Vc_GooglePlus $this
 */
$type = $annotation = $widget_width = $css = $el_class = $el_id = $css_animation = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $type
 * @var $icon_fontawesome
 * @var $icon_openiconic
 * @var $icon_typicons
 * @var $icon_entypo
 * @var $icon_linecons
 * @var $color
 * @var $custom_color
 * @var $background_style
 * @var $background_color
 * @var $custom_background_color
 * @var $size
 * @var $align
 * @var $el_class
 * @var $el_id
 * @var $link
 * @var $css_animation
 * @var $css
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Icon $this
 */
$type = $icon_fontawesome = $icon_openiconic = $icon_typicons = $icon_entypo = $icon_linecons = $color = $custom_color = $background_style = $background_color = $custom_background_color = $size = $align = $el_class = $el_id = $link = $css_animation = $css = $rel = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $style
 * @var $shape
 * @var $color
 * @var $custom_background
 * @var $custom_text
 * @var $size
 * @var $align
 * @var $link
 * @var $title
 * @var $button_block
 * @var $el_id
 * @var $el_class
 * @var $outline_custom_color
 * @var $outline_custom_hover_background
 * @var $outline_custom_hover_text
 * @var $add_icon
 * @var $i_align
 * @var $i_type
 * @var $i_icon_fontawesome
 * @var $i_icon_openiconic
 * @var $i_icon_typicons
 * @var $i_icon_entypo
 * @var $i_icon_linecons
 * @var $i_icon_pixelicons
 * @var $css_animation
 * @var $css
 * @var $gradient_color_1
 * @var $gradient_color_2
 * @var $gradient_custom_color_1 ;
 * @var $gradient_custom_color_2 ;
 * @var $gradient_text_color ;
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Btn $this
 */
$style = $shape = $color = $size = $custom_background = $custom_text = $align = $link = $title = $button_block = $el_class = $outline_custom_color = $outline_custom_hover_background = $outline_custom_hover_text = $add_icon = $i_align = $i_type = $i_icon_entypo = $i_icon_fontawesome = $i_icon_linecons = $i_icon_pixelicons = $i_icon_typicons = $css = $css_animation = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $el_class
 * @var $el_id
 * @var $css_animation
 * @var $css
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Gutenberg $this
 */
$el_class = $el_id = $css = $css_animation = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $alias
 * @var $el_class
 * Shortcode class
 * @var WPBakeryShortCode_Rev_Slider_Vc $this
 */
$title = $alias = $el_class = '';
/** @var array $block_data */
$block = $block_data[0];
/**
 * @deprecated
 * Shortcode attributes
 * @var $atts
 * @var $title
 * @var $el_class
 * @var $collapsible
 * @var $disable_keyboard
 * @var $active_tab
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Accordion $this
 */
$title = $el_class = $collapsible = $disable_keyboard = $active_tab = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $link
 * @var $title
 * @var $color
 * @var $size
 * @var $style
 * @var $el_class
 * @var $align
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Button2 $this
 */
$link = $title = $color = $size = $style = $el_class = $align = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $options
 * @var $el_class
 * @var $el_id
 * Shortcode class
 * @var WPBakeryShortCode $this
 */
$title = $el_class = $el_id = $options = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $el_class
 * @var $el_id
 * @var $css_animation
 * @var $css
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Column_text $this
 */
$el_class = $el_id = $css = $css_animation = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $taxonomy
 * @var $el_class
 * @var $el_id
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Wp_Tagcloud $this
 */
$title = $taxonomy = $el_class = $el_id = '';
/**
 * Shortcode attributes
 *
 * @var $title
 * @var $el_class
 * @var $el_id
 * @var $type
 * @var $style
 * @var $legend
 * @var $animation
 * @var $tooltips
 * @var $x_values
 * @var $values
 * @var $css
 * @var $css_animation
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Line_Chart $this
 */
$el_class = $el_id = $title = $type = $legend = $style = $tooltips = $animation = $x_values = $values = $css = $css_animation = '';
/** @var array $atts */
$atts = \vc_map_get_attributes( $this->getShortcode(), $atts );
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $el_class
 * @var $el_id
 * @var $title
 * @var $flickr_id
 * @var $count
 * @var $type
 * @var $display
 * @var $css
 * @var $css_animation
 * Shortcode class
 * @var WPBakeryShortCode_Vc_flickr $this
 */
$el_class = $el_id = $title = $flickr_id = $css = $css_animation = $count = $type = $display = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $el_class
 * @var $css
 * @var $position
 * @var $bgimage
 * @var $height
 * @var $link
 * @var $url
 * @var $height_mode
 * @var $featured_image
 * @var $img_size
 * @var $render
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Gitem_Zone $this
 */
$el_class = $css = $position = $bgimage = $height = $link = $url = $height_mode = $featured_image = $img_size = $render = $rel = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $values
 * @var $units
 * @var $bgcolor
 * @var $custombgcolor
 * @var $customtxtcolor
 * @var $options
 * @var $el_class
 * @var $el_id
 * @var $css
 * @var $css_animation
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Progress_Bar $this
 */
$title = $values = $units = $bgcolor = $css = $custombgcolor = $customtxtcolor = $options = $el_class = $el_id = $css_animation = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $options
 * @var $el_class
 * @var $el_id
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Wp_Categories $this
 */
$title = $options = $el_class = $el_id = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $css
 * @var $animation
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Gitem_Animated_Block $this
 */
$css = $animation = $animation_attr = '';
/**
 * @var array $atts
 * @var string $field_key
 * @var string $custom_field_key
 * @var string $el_class
 */
$field_key = $custom_field_key = $el_class = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $type
 * @var $count
 * @var $interval
 * @var $slides_content
 * @var $slides_title
 * @var $link
 * @var $custom_links
 * @var $thumb_size
 * @var $posttypes
 * @var $posts_in
 * @var $categories
 * @var $orderby
 * @var $order
 * @var $el_class
 * @var $el_id
 * @var $css
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Posts_slider $this
 */
$title = $type = $count = $interval = $slides_content = $slides_title = $link = $custom_links = $thumb_size = $posttypes = $posts_in = $categories = $order = $orderby = $el_class = $el_id = $css = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $el_class
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCodesContainer $this
 */
$el_class = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $color
 * @var $icon
 * @var $size
 * @var $target
 * @var $href
 * @var $title
 * @var $call_text
 * @var $position
 * @var $el_class
 * @var $css_animation
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Cta_button $this
 */
$color = $icon = $size = $target = $href = $target = $call_text = $position = $el_class = $css_animation = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $el_id
 * @var $el_class
 * @var $content - shortcode content
 * @var WPBakeryShortCode_Vc_Tta_Section $this
 */
$atts = \vc_map_get_attributes( $this->getShortcode(), $atts );
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $css
 * @var $el_class
 * @var $position
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Gitem_Row $this
 */
$css = $el_class = $position = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $el_class
 * @var $el_id
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Wp_Meta $this
 */
$title = $el_class = $el_id = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $el_class
 * @var $el_id
 * @var $value
 * @var $units
 * @var $color
 * @var $custom_color
 * @var $label_value
 * @var $css
 * @var $css_animation
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Pie $this
 */
$title = $el_class = $el_id = $value = $units = $color = $custom_color = $label_value = $css = $css_animation = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $el_class
 * Shortcode class
 * @var WPBakeryShortCode $this
 */
$el_class = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $el_class
 * @var $el_id
 * @var $width
 * @var $css
 * @var $offset
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Column_Inner $this
 */
$el_class = $width = $el_id = $css = $offset = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $el_class
 * @var $width
 * @var $is_end
 * @var $css
 * @var $c_zone_position
 * @var $bgimage
 * @var $height
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Gitem $this
 */
$el_class = $width = $is_end = $css = $c_zone_position = $bgimage = $height = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $source
 * @var $text
 * @var $link
 * @var $google_fonts
 * @var $font_container
 * @var $el_class
 * @var $el_id
 * @var $css
 * @var $css_animation
 * @var $font_container_data - returned from $this->getAttributes
 * @var $google_fonts_data - returned from $this->getAttributes
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Custom_heading $this
 */
$source = $text = $link = $google_fonts = $font_container = $el_id = $el_class = $css = $css_animation = $font_container_data = $google_fonts_data = array();
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $width
 * @var $align
 * @var $css
 * @var $el_class
 * @var $featured_image
 * @var $img_size
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Gitem_Col $this
 */
$width = $align = $css = $el_class = $featured_image = $img_size = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $el_class
 * @var $css
 * @var $render
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Gitem_Zone $this
 */
$el_class = $css = $render = '';
/**
 * @deprecated
 * Shortcode attributes
 * @var $atts
 * @var $title
 * @var $el_id
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Accordion_tab $this
 */
$title = $el_id = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $el_class
 * @var $full_width
 * @var $full_height
 * @var $columns_placement
 * @var $content_placement
 * @var $parallax
 * @var $parallax_image
 * @var $css
 * @var $el_id
 * @var $video_bg
 * @var $video_bg_url
 * @var $video_bg_parallax
 * @var $parallax_speed_bg
 * @var $parallax_speed_video
 * @var $content - shortcode content
 * @var $css_animation
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Row $this
 */
$el_class = $full_height = $parallax_speed_bg = $parallax_speed_video = $full_width = $flex_row = $columns_placement = $content_placement = $parallax = $parallax_image = $css = $el_id = $video_bg = $video_bg_url = $video_bg_parallax = $css_animation = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $el_class
 * @var $el_id
 * @var $content - shortcode content
 * @var $css
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Raw_html $this
 */
$el_class = $el_id = $css = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $nav_menu
 * @var $el_class
 * @var $el_id
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Wp_Custommenu $this
 */
$title = $nav_menu = $el_class = $el_id = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $link
 * @var $el_class
 * @var $el_id
 * @var $css
 * @var $css_animation
 * @var $el_width
 * @var $el_aspect
 * @var $align
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Video $this
 */
$title = $link = $el_class = $el_id = $css = $css_animation = $el_width = $el_aspect = $align = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * Shortcode class
 * @var WPBakeryShortCode_Vc_TweetMeMe $this
 */
$atts = \vc_map_get_attributes( $this->getShortcode(), $atts );
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $category
 * @var $orderby
 * @var $options
 * @var $limit
 * @var $el_class
 * @var $el_id
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Wp_Links $this
 */
$category = $options = $orderby = $limit = $el_class = $el_id = '';
/**
 * Shortcode attributes
 *
 * @var $title
 * @var $el_class
 * @var $el_id
 * @var $type
 * @var $style
 * @var $legend
 * @var $animation
 * @var $tooltips
 * @var $stroke_color
 * @var $custom_stroke_color
 * @var $stroke_width
 * @var $values
 * @var $css
 * @var $css_animation
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Round_Chart $this
 */
$el_class = $el_id = $title = $type = $style = $legend = $animation = $tooltips = $stroke_color = $stroke_width = $values = $css = $css_animation = $custom_stroke_color = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $h2
 * @var $h4
 * @var $position
 * @var $el_width
 * @var $style
 * @var $txt_align
 * @var $accent_color
 * @var $link
 * @var $title
 * @var $color
 * @var $size
 * @var $btn_style
 * @var $el_class
 * @var $css_animation
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Cta_button2 $this
 */
$h2 = $h4 = $position = $el_class = $el_width = $size = $txt_align = $accent_color = $link = $title = $color = $size = $btn_style = $css_animation = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $source
 * @var $image
 * @var $custom_src
 * @var $onclick
 * @var $img_size
 * @var $external_img_size
 * @var $caption
 * @var $img_link_large
 * @var $link
 * @var $img_link_target
 * @var $alignment
 * @var $el_class
 * @var $el_id
 * @var $css_animation
 * @var $style
 * @var $external_style
 * @var $border_color
 * @var $css
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Single_image $this
 */
$title = $source = $image = $custom_src = $onclick = $img_size = $external_img_size = $caption = $img_link_large = $link = $img_link_target = $alignment = $el_class = $el_id = $css_animation = $style = $external_style = $border_color = $css = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $el_class
 * @var $background_color
 * @var $float
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Gitem $this
 */
$el_class = $background_color = $float = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $link
 * @var $size
 * @var $el_class
 * @var $el_id
 * @var $css
 * @var $css_animation
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Gmaps $this
 */
$title = $link = $size = $el_class = $css = $css_animation = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $type
 * @var $annotation // TODO: check why annotation doesn't set before
 * @var $css
 * @var $css_animation
 * @var $el_class
 * @var $el_id
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Pinterest $this
 */
$type = $annotation = $css = $el_class = $el_id = $css_animation = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var string $el_width
 * @var string $style
 * @var string $color
 * @var string $border_width
 * @var string $accent_color
 * @var string $el_class
 * @var string $el_id
 * @var string $align
 * @var string $css
 * @var string $css_animation
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Separator $this
 */
$el_width = $style = $color = $border_width = $accent_color = $el_class = $el_id = $align = $css = $css_animation = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $el_class
 * @var $el_id
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Wp_Calendar $this
 */
$title = $el_class = $el_id = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Gitem_Post_Data $this
 */
$output = $text = $google_fonts = $font_container = $el_class = $css = $link_html = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $content - shortcode content
 * @var WPBakeryShortCode_Vc_Tta_Section $this
 */
$atts = \vc_map_get_attributes( $this->getShortcode(), $atts );
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $id
 * @var $el_class
 * Shortcode class
 * @var WPBakeryShortCode_Layerslider_Vc $this
 */
$el_class = $title = $id = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $number
 * @var $show_date
 * @var $el_class
 * @var $el_id
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Wp_Posts $this
 */
$title = $number = $show_date = $el_class = $el_id = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $source
 * @var $type
 * @var $onclick
 * @var $custom_links
 * @var $custom_links_target
 * @var $img_size
 * @var $external_img_size
 * @var $images
 * @var $custom_srcs
 * @var $el_class
 * @var $el_id
 * @var $interval
 * @var $css
 * @var $css_animation
 * Shortcode class
 * @var WPBakeryShortCode_Vc_gallery $this
 */
$thumbnail = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $el_class
 * @var $full_width
 * @var $full_height
 * @var $equal_height
 * @var $columns_placement
 * @var $content_placement
 * @var $parallax
 * @var $parallax_image
 * @var $css
 * @var $el_id
 * @var $video_bg
 * @var $video_bg_url
 * @var $video_bg_parallax
 * @var $parallax_speed_bg
 * @var $parallax_speed_video
 * @var $content - shortcode content
 * @var $css_animation
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Row $this
 */
$el_class = $full_height = $parallax_speed_bg = $parallax_speed_video = $full_width = $equal_height = $flex_row = $columns_placement = $content_placement = $parallax = $parallax_image = $css = $el_id = $video_bg = $video_bg_url = $video_bg_parallax = $css_animation = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Gitem_Post_Author $this
 */
$atts = $this->getAttributes( $atts );
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $content - shortcode content
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Cta $this
 */
$atts = \vc_map_get_attributes( $this->getShortcode(), $atts );
/**
 * @var \WPBakeryShortCode_Vc_Hoverbox $this
 * @var array $atts
 * @var string $content
 */
$atts = \vc_map_get_attributes( $this->getShortcode(), $atts );
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $height
 * @var $el_class
 * @var $el_id
 * @var $css
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Empty_space $this
 */
$height = $el_class = $el_id = $css = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 */
$output = '';
/**
 * Shortcode attributes
 *
 * @var $atts
 * @var $title
 * @var $sortby
 * @var $exclude
 * @var $el_class
 * @var $el_id
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Wp_Pages $this
 */
$title = $sortby = $exclude = $el_class = $el_id = '';
/**
 * @var Vc_Column_Offset $param
 * @var Vc_Column_Offset $sizes ::$size_types
 */
$layouts = array(
	'xs' => 'portrait-smartphones',
	'sm' => 'portrait-tablets',
	'md' => 'landscape-tablets',
	'lg' => 'default',
);
/** @var WPBakeryShortCode_Vc_Icon $this */
$icon = $color = $size = $align = $el_class = $custom_color = $link = $background_style = $background_color = $type = $icon_fontawesome = $icon_openiconic = $icon_typicons = $icon_entypoicons = $icon_linecons = $custom_background_color = '';
/** @var array $atts - shortcode attributes */
$atts = \vc_map_get_attributes( $this->getShortcode(), $atts );
/** @var WPBakeryShortCode_Vc_Button2 $this */
$atts = \vc_map_get_attributes( $this->getShortcode(), $atts );
/** @var WPBakeryShortCode_Vc_Single_image $this */
$atts = \vc_map_get_attributes( $this->getShortcode(), $atts );
/**
 * @var WPBakeryShortCode_Vc_Btn $vc_btn
 * @var WP_Post $post
 * @var $atts
 *
 * @var $style
 * @var $shape
 * @var $color
 * @var $custom_background
 * @var $custom_text
 * @var $size
 * @var $align
 * @var $link
 * @var $title
 * @var $button_block
 * @var $el_id
 * @var $el_class
 * @var $outline_custom_color
 * @var $outline_custom_hover_background
 * @var $outline_custom_hover_text
 * @var $add_icon
 * @var $i_align
 * @var $i_type
 * @var $i_icon_fontawesome
 * @var $i_icon_openiconic
 * @var $i_icon_typicons
 * @var $i_icon_entypo
 * @var $i_icon_linecons
 * @var $i_icon_pixelicons
 * @var $css_animation
 * @var $css
 * @var $gradient_color_1
 * @var $gradient_color_2
 * @var $gradient_custom_color_1 ;
 * @var $gradient_custom_color_2 ;
 * @var $gradient_text_color ;
 */
$atts = array();
/** @var WPBakeryShortCode_Vc_Btn $vc_btn */
$atts = \vc_map_get_attributes( $vc_btn->getShortcode(), $atts );
/** @var WPBakeryShortCode_Vc_Single_image $img_class */
$atts = \vc_map_get_attributes( $img_class->getShortcode(), $atts );
/** @var Vc_Google_Fonts $this */
$fonts = $this->_vc_google_fonts_get_fonts();
/**
 * @since 4.4
 * @var Vc_Hooks_Vc_Grid $hook
 */
$hook = new \Vc_Hooks_Vc_Grid();

/**
 * @param $attributes
 * @return bool
 * @throws \Exception
 */
function wpb_map( $attributes ) {
}

/**
 * Lean map shortcodes
 *
 * @param $tag
 * @param null $settings_function
 * @param null $settings_file
 * @since 4.9
 */
function vc_lean_map( $tag, $settings_function = null, $settings_file = null ) {
}

/**
 * @param $attributes
 *
 * @return bool
 * @throws \Exception
 * @since 4.2
 */
function vc_map( $attributes ) {
}

/**
 * @param $shortcode
 *
 * @since 4.2
 */
function vc_remove_element( $shortcode ) {
}

/**
 * Add new shortcode param.
 *
 * @param $shortcode - tag for shortcode
 * @param $attributes - attribute settings
 * @throws \Exception
 * @since 4.2
 */
function vc_add_param( $shortcode, $attributes ) {
}

/**
 * Mass shortcode params adding function
 *
 * @param $shortcode - tag for shortcode
 * @param $attributes - list of attributes arrays
 * @throws \Exception
 * @since 4.3
 */
function vc_add_params( $shortcode, $attributes ) {
}

/**
 * Shorthand function for WPBMap::modify
 *
 * @param string $name
 * @param string $setting
 * @param string $value
 *
 * @return array|bool
 * @throws \Exception
 * @since 4.2
 */
function vc_map_update( $name = '', $setting = '', $value = '' ) {
}

/**
 * Shorthand function for WPBMap::mutateParam
 *
 * @param $name
 * @param array $attribute
 *
 * @return bool
 * @throws \Exception
 * @since 4.2
 */
function vc_update_shortcode_param( $name, $attribute = array() ) {
}

/**
 * Shorthand function for WPBMap::dropParam
 *
 * @param $name
 * @param $attribute_name
 *
 * @return bool
 * @since 4.2
 */
function vc_remove_param( $name = '', $attribute_name = '' ) {
}

	/**
	 * Sets plugin as theme plugin.
	 *
	 * @internal param bool $disable_updater - If value is true disables auto updater options.
	 *
	 * @since 4.2
	 */
function vc_set_as_theme() {
}
	/**
	 * Is VC as-theme-plugin.
	 *
	 * @return bool
	 * @since 4.2
	 */
function vc_is_as_theme() {
}
	/**
	 * @return bool
	 * @since 4.2
	 */
function vc_is_updater_disabled() {
}
	/**
	 * Returns list of default post type.
	 *
	 * @return array
	 * @since 4.2
	 */
function vc_default_editor_post_types() {
}
	/**
	 * Set post types for VC editor.
	 *
	 * @param array $list - list of valid post types to set
	 * @since 4.2
	 */
function vc_set_default_editor_post_types( array $list ) {
}
	/**
	 * Returns list of post types where VC editor is enabled.
	 *
	 * @return array
	 * @since 4.2
	 */
function vc_editor_post_types() {
}
	/**
	 * Set list of post types where VC editor is enabled.
	 *
	 * @param array $post_types
	 * @throws \Exception
	 * @since 4.4
	 */
function vc_editor_set_post_types( array $post_types ) {
}
	/**
	 * Return current VC mode.
	 *
	 * @return string
	 * @see Vc_Mapper::$mode
	 * @since 4.2
	 */
function vc_mode() {
}
	/**
	 * Sets directory where WPBakery Page Builder should look for template files for content elements.
	 *
	 * @param string - full directory path to new template directory with trailing slash
	 * @since 4.2
	 */
function vc_set_shortcodes_templates_dir( $dir ) {
}
	/**
	 * Get custom theme template path
	 *
	 * @param $template - filename for template
	 *
	 * @return string
	 * @since 4.2
	 */
function vc_shortcodes_theme_templates_dir( $template ) {
}

/**
 * @param bool $value
 *
 * @todo check usage.
 *
 * @since 4.3
 */
function set_vc_is_inline( $value = true ) {
}

/**
 * Disable frontend editor for VC
 *
 * @param bool $disable
 * @since 4.3
 */
function vc_disable_frontend( $disable = true ) {
}

/**
 * Check is front end enabled.
 *
 * @return bool
 * @throws \Exception
 * @since 4.3
 */
function vc_enabled_frontend() {
}

	/**
	 * Add custom template in default templates list
	 *
	 * @param array $data | template data (name, content, custom_class, image_path)
	 *
	 * @return bool
	 * @since 4.3
	 */
function vc_add_default_templates( $data ) {
}

/**
 * @param $shortcode
 * @param string    $field_prefix
 * @param string    $group_prefix
 * @param null      $change_fields
 * @param null      $dependency
 * @return array
 * @throws \Exception
 */
function vc_map_integrate_shortcode( $shortcode, $field_prefix = '', $group_prefix = '', $change_fields = null, $dependency = null ) {
}

/**
 * Used to filter params (include/exclude)
 *
 * @param $param
 * @param $change_fields
 *
 * @return array|null
 * @internal
 */
function vc_map_integrate_include_exclude_fields( $param, $change_fields ) {
}

/**
 * @param $param
 * @param $dependency
 *
 * @return array
 * @internal used to add dependency to existed param
 */
function vc_map_integrate_add_dependency( $param, $dependency ) {
}

/**
 * @param $base_shortcode
 * @param $integrated_shortcode
 * @param string               $field_prefix
 * @return array
 * @throws \Exception
 */
function vc_map_integrate_get_params( $base_shortcode, $integrated_shortcode, $field_prefix = '' ) {
}

/**
 * @param $base_shortcode
 * @param $integrated_shortcode
 * @param string               $field_prefix
 * @return array
 * @throws \Exception
 */
function vc_map_integrate_get_atts( $base_shortcode, $integrated_shortcode, $field_prefix = '' ) {
}

/**
 * @param $base_shortcode
 * @param $integrated_shortcode
 * @param $atts
 * @param string               $field_prefix
 * @return array
 * @throws \Exception
 */
function vc_map_integrate_parse_atts( $base_shortcode, $integrated_shortcode, $atts, $field_prefix = '' ) {
}

/**
 * @param bool $label
 * @return mixed|void
 */
function vc_map_add_css_animation( $label = true ) {
}

/**
 * Get settings of the mapped shortcode.
 *
 * @param $tag
 *
 * @return array|null - settings or null if shortcode not mapped
 * @throws \Exception
 * @since 4.4.3
 */
function vc_get_shortcode( $tag ) {
}

/**
 * Remove all mapped shortcodes and the moment when function is called.
 *
 * @since 4.5
 */
function vc_remove_all_elements() {
}

/**
 * Function to get defaults values for shortcode.
 *
 * @param $tag - shortcode tag
 *
 * @return array - list of param=>default_value
 * @throws \Exception
 * @since 4.6
 */
function vc_map_get_defaults( $tag ) {
}

/**
 * @param $params
 *
 * @return array
 * @since 4.12
 */
function vc_map_get_params_defaults( $params ) {
}

/**
 * @param $tag - shortcode tag3
 * @param array                $atts - shortcode attributes
 *
 * @return array - return merged values with provided attributes (
 *     'a'=>1,'b'=>2 + 'b'=>3,'c'=>4 --> 'a'=>1,'b'=>3 )
 *
 * @throws \Exception
 * @see vc_shortcode_attribute_parse - return union of provided attributes (
 *     'a'=>1,'b'=>2 + 'b'=>3,'c'=>4 --> 'a'=>1,
 *     'b'=>3, 'c'=>4 )
 */
function vc_map_get_attributes( $tag, $atts = array() ) {
}

/**
 * @param $name
 * @return mixed|string
 */
function vc_convert_vc_color( $name ) {
}

/**
 * Extract width/height from string
 *
 * @param string $dimensions WxH
 *
 * @return mixed array(width, height) or false
 * @since 4.7
 */
function vc_extract_dimensions( $dimensions ) {
}

/**
 * @param string $asset
 *
 * @return array|string
 */
function vc_get_shared( $asset = '' ) {
}

/**
 * Helper function to register new shortcode attribute hook.
 *
 * @param $name - attribute name
 * @param $form_field_callback - hook, will be called when settings form is shown and attribute added to shortcode
 *     param list
 * @param $script_url - javascript file url which will be attached at the end of settings form.
 *
 * @return bool
 * @since 4.4
 */
function vc_add_shortcode_param( $name, $form_field_callback, $script_url = null ) {
}

/**
 * Call hook for attribute.
 *
 * @param $name - attribute name
 * @param $param_settings - attribute settings from shortcode
 * @param $param_value - attribute value
 * @param $tag - attribute tag
 *
 * @return mixed|string - returns html which will be render in hook
 * @since 4.4
 */
function vc_do_shortcode_param_settings_field( $name, $param_settings, $param_value, $tag ) {
}
