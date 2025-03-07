<?php


    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
    }

    /**
     * Plugin class.
     *
     * The main class that initiates and runs the addon.
     *
     * @since 1.0.0
     */
    final class UAFE_Elementor_Widgets {

        /**
         * Addon Version
         *
         * @since 1.0.0
         * @var string The addon version.
         */
        const VERSION = '1.0.0';

        /**
         * Minimum Elementor Version
         *
         * @since 1.0.0
         * @var string Minimum Elementor version required to run the addon.
         */
        const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

        /**
         * Minimum PHP Version
         *
         * @since 1.0.0
         * @var string Minimum PHP version required to run the addon.
         */
        const MINIMUM_PHP_VERSION = '7.4';

        /**
         * Instance
         *
         * @since 1.0.0
         * @access private
         * @static
         * @var \Elementor_Widgets\UAFE_Widgets The single instance of the class.
         */
        private static $_instance = null;

        /**
         * Instance
         *
         * Ensures only one instance of the class is loaded or can be loaded.
         *
         * @since 1.0.0
         * @access public
         * @static
         * @return \Elementor_Widgets\UAFE_Widgets An instance of the class.
         */
        public static function instance() {

            if ( is_null( self::$_instance ) ) {
                self::$_instance = new self();
            }
            return self::$_instance;

        }

        /**
         * Constructor
         *
         * Perform some compatibility checks to make sure basic requirements are meet.
         * If all compatibility checks pass, initialize the functionality.
         *
         * @since 1.0.0
         * @access public
         */
        public function __construct() {

            if ( $this->is_compatible() ) {
                add_action( 'elementor/init', [ $this, 'init' ] );
            }

        }

        /**
         * Compatibility Checks
         *
         * Checks whether the site meets the addon requirement.
         *
         * @since 1.0.0
         * @access public
         */
        public function is_compatible() {

            // Check if Elementor installed and activated
            if ( ! did_action( 'elementor/loaded' ) ) {
                add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
                return false;
            }

            // Check for required Elementor version
            if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
                add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
                return false;
            }

            // Check for required PHP version
            if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
                add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
                return false;
            }

            return true;

        }

        /**
         * Admin notice
         *
         * Warning when the site doesn't have Elementor installed or activated.
         *
         * @since 1.0.0
         * @access public
         */
        public function admin_notice_missing_main_plugin() {

            if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

            $message = sprintf(
                /* translators: 1: Plugin name 2: Elementor */
                esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'uafe' ),
                '<strong>' . esc_html__( 'Useful Addon For Elementor', 'uafe' ) . '</strong>',
                '<strong>' . esc_html__( 'Elementor', 'uafe' ) . '</strong>'
            );

            printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

        }

        /**
         * Admin notice
         *
         * Warning when the site doesn't have a minimum required Elementor version.
         *
         * @since 1.0.0
         * @access public
         */
        public function admin_notice_minimum_elementor_version() {

            if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

            $message = sprintf(
                /* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
                esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'uafe' ),
                '<strong>' . esc_html__( 'Useful Addon For Elementor', 'uafe' ) . '</strong>',
                '<strong>' . esc_html__( 'Elementor', 'uafe' ) . '</strong>',
                self::MINIMUM_ELEMENTOR_VERSION
            );

            printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

        }

        /**
         * Admin notice
         *
         * Warning when the site doesn't have a minimum required PHP version.
         *
         * @since 1.0.0
         * @access public
         */
        public function admin_notice_minimum_php_version() {

            if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

            $message = sprintf(
                /* translators: 1: Plugin name 2: PHP 3: Required PHP version */
                esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'uafe' ),
                '<strong>' . esc_html__( 'Useful Addon For Elementor', 'uafe' ) . '</strong>',
                '<strong>' . esc_html__( 'PHP', 'uafe' ) . '</strong>',
                self::MINIMUM_PHP_VERSION
            );

            printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

        }

        /**
         * Initialize
         *
         * Load the addons functionality only after Elementor is initialized.
         *
         * Fired by `elementor/init` action hook.
         *
         * @since 1.0.0
         * @access public
         */
        public function init() {

            add_action( 'elementor/widgets/register', [ $this, 'register_widgets' ] );
            add_action( 'elementor/controls/register', [ $this, 'register_controls' ] );
            add_action( 'elementor/elements/categories_registered', [ $this, 'register_categories' ] );
            add_action( 'wp_enqueue_scripts', [ $this, 'register_widget_scripts' ] );
            add_action( 'wp_enqueue_scripts', [ $this, 'register_widget_styles' ] );

        }

        function register_categories( $elements_manager ) {

			$elements_manager->add_category(
				'uafe',
				[
					'title' => esc_html__( 'Useful Addon', 'purwell' ),
					'icon' => 'fa fa-plug',
				]
			);
		
		}

        function register_widget_scripts() {

            // Image marquee slider
            wp_register_script( 'uafe-image-marquee', plugins_url( '../widgets/image-marquee/assets/js/marquee.js', __FILE__ ) );

            // 3D Rotated Carousel
            wp_register_script( 'uafe-3d-rotated-carousel', plugins_url( '../widgets/3d-rotated-carousel/assets/jas-carousel.js', __FILE__ ) );

        }

        function register_widget_styles() {

            // Image marquee slider
            wp_register_style( 'uafe-image-marquee', plugins_url( '../widgets/image-marquee/assets/css/style.css', __FILE__ ) );

            // 3D Rotated Carousel
            wp_register_style( 'uafe-3d-rotated-carousel', plugins_url( '../widgets/3d-rotated-carousel/assets/jas-carousel.css', __FILE__ ) );

            // Button Group
            wp_register_style( 'uafe-button-group', plugins_url( '../widgets/button-group/style.css', __FILE__ ) );

            // Button Group
            wp_register_style( 'uafe-pricing-table', plugins_url( '../widgets/pricing-table/style.css', __FILE__ ) );

            // 3D Social Icon
            wp_register_style( 'uafe-3d-social-icon', plugins_url( '../widgets/3d-social-icon/style.css', __FILE__ ) );

            // Time Line
            wp_register_style( 'uafe-time-line', plugins_url( '../widgets/time-line/style.css', __FILE__ ) );
            

        }
        

        /**
         * Register Widgets
         *
         * Load widgets files and register new Elementor widgets.
         *
         * Fired by `elementor/widgets/register` action hook.
         *
         * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
         */
        public function register_widgets( $widgets_manager ) {

            require_once( __DIR__ . '/../widgets/image-marquee/image-marquee.php' );
            require_once( __DIR__ . '/../widgets/3d-rotated-carousel/3d-rotated-carousel.php' );
            require_once( __DIR__ . '/../widgets/button-group/button-group.php' );
            require_once( __DIR__ . '/../widgets/pricing-table/pricing.php' );
            require_once( __DIR__ . '/../widgets/dual-heading/dual-heading.php' );
            require_once( __DIR__ . '/../widgets/3d-social-icon/3d-social-icon.php' );
            require_once( __DIR__ . '/../widgets/time-line/time-line.php' );

            $widgets_manager->register( new \UAFE_Image_Marquee() );
            $widgets_manager->register( new \UAFE_3D_Rotated_Carousel() );
            $widgets_manager->register( new \UAFE_Button_Group() );
            $widgets_manager->register( new \UAFE_Pricing_Table() );
            $widgets_manager->register( new \UAFE_Dual_Heading() );
            $widgets_manager->register( new \UAFE_3D_Social_Icon() );
            $widgets_manager->register( new \UAFE_TimeLine() );

        }

        /**
         * Register Controls
         *
         * Load controls files and register new Elementor controls.
         *
         * Fired by `elementor/controls/register` action hook.
         *
         * @param \Elementor\Controls_Manager $controls_manager Elementor controls manager.
         */
        public function register_controls( $controls_manager ) {

            //require_once( __DIR__ . '/../custom-controls/gradient.php' );
            // require_once( __DIR__ . '/includes/controls/control-2.php' );

            //$controls_manager->register( new UAFE_Control_Gradient_Color() );
            // $controls_manager->register( new Control_2() );

        }

    }

    new UAFE_Elementor_Widgets;

?>