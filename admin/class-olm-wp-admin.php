```php
<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @package    OLM_WP
 * @subpackage OLM_WP/admin
 * @author     Your Name
 */

class OLM_WP_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $olm_wp    The ID of this plugin.
	 */
	private $olm_wp;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $olm_wp       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $olm_wp, $version ) {

		$this->olm_wp = $olm_wp;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in OLM_WP_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The OLM_WP_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->olm_wp, plugin_dir_url( __FILE__ ) . 'css/olm-wp-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in OLM_WP_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The OLM_WP_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->olm_wp, plugin_dir_url( __FILE__ ) . 'js/olm-wp-admin.js', array( 'jquery' ), $this->version, false );

	}

}
```
