<?php





function logo_bootstrapping() {

require_once("required/customizer/kirki/class-kirki-preset.php");
require_once("required/customizer/kirki/kirki-mod.php");
require_once("required/customizer/logo-banner-customizer-preset.php");


    

    
load_theme_textdomain("logo");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support( "custom-header" );
    //add_theme_support( "custom-logo" );

    //add_theme_support( array( 'editor-styles', 'align-wide' ) );

    

    add_theme_support( 'custom-background', array(
        'default-image'          => '',
        'default-preset'         => 'fit', // 'default', 'fill', 'fit', 'repeat', 'custom'
        'default-position-x'     => 'center',    // 'left', 'center', 'right'
        'default-position-y'     => 'center',     // 'top', 'center', 'bottom'
        'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
        'default-repeat'         => 'no-repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
        'default-attachment'     => 'fixed',  // 'scroll', 'fixed'
        'default-color'          => '',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
    ) );

    
    
    
    
    
    // add_post_type_support('page', 'thumbnail');

    

    add_theme_support( 'custom-logo', array(
        'width'  => 95,
        
        'height' => 38,
        
        'flex-width' => true,
        'flex-height' => true,
    ) );

    $logo_custom_header_box_setting = array( 
            
        
        'width' => 1200,
        'height' => 900,
        
        'flex-width' => true,
        'flex-height' => true,
    );
    add_theme_support( "custom-header", $logo_custom_header_box_setting );
    

    
    
    // add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

        register_nav_menus(
            array(
                'primary' => __( 'Primary menu logo', 'logo' ),
                //'footer'  => __( 'Secondary menu', 'twentytwentyone' ),
                'testmenu' => __( 'Test menu logo', 'logo' )
            )
        );


        

    

}
add_action("after_setup_theme","logo_bootstrapping");


//require_once("required/classes/widget-classes/logo-test-widget-class.php");


function logo_styles() {
    wp_enqueue_style("logo-style", get_stylesheet_uri());
    
    wp_enqueue_style("logo-owl-carou-sel",  get_theme_file_uri ("assets/css/owl.carousel.min.css"));
    wp_enqueue_style("logo-mean-menu", get_theme_file_uri ("assets/css/meanmenu.css"));
    wp_enqueue_style("logo-font-awesome-all", get_theme_file_uri ("assets/css/fontawesome-all.min.css"));
    
    wp_enqueue_style("logo-bootstarp", get_theme_file_uri ("assets/css/bootstrap.min.css"));
    
    wp_enqueue_style("logo-css-main-css", get_theme_file_uri ("assets/css/main.css"));
    wp_enqueue_style("logo-all-min-css", get_theme_file_uri ("assets/css/all.min.css"));
    wp_enqueue_style("logo-css-custom-css", get_theme_file_uri ("assets/css/custom.css"));
    wp_enqueue_style("logo-style", get_stylesheet_uri());
    
    
}

add_action("wp_enqueue_scripts", "logo_styles");


function logo_scripts() {

    

    
    wp_enqueue_script("logo-jquery-min" , get_theme_file_uri ("assets/js/jquery.min.js"),array(),null,true);
    wp_enqueue_script("logo-jquery-one-one-two-four-min" , get_theme_file_uri ("assets/js/vendor/jquery-1.12.4.min.js"),array(),null,true);
    wp_enqueue_script("logo-popper-min" , get_theme_file_uri ("assets/js/popper.min.js"),array("jquery"),null,true);
    wp_enqueue_script("logo-bootstrap-min" , get_theme_file_uri ("assets/js/bootstrap.min.js"),array("jquery"),null,true);
    wp_enqueue_script("logo-jquery-scroll-min" , get_theme_file_uri ("assets/js/jquery.scrollUp.min.js"),array("jquery"),null,true);
    wp_enqueue_script("logo-jquery-meanmenu-min" , get_theme_file_uri ("assets/js/jquery.meanmenu.min.js"),array("jquery"),null,true);
    wp_enqueue_script("logo-imagesloaded-pkgd-min" , get_theme_file_uri ("assets/js/imagesloaded.pkgd.min.js"),array("jquery"),null,true);
    wp_enqueue_script("logo-owl-carousel-min" , get_theme_file_uri ("assets/js/owl.carousel.min.js"),array("jquery"),null,true);

    wp_enqueue_script("logo-isotope-pkgd-min" , get_theme_file_uri ("assets/js/isotope.pkgd.min.js"),array("jquery"),null,true);

    wp_enqueue_script("logo-main-js" , get_theme_file_uri ("assets/js/main.js"),array("jquery"),null,true);

    wp_enqueue_script("logo-main-custom-js" , get_theme_file_uri ("assets/js/custom.js"),array("jquery"),null,true);
    
}
add_action("wp_enqueue_scripts", "logo_scripts");

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
// Creating the widget 
class logo_test_widget extends WP_Widget {
  
    function __construct() {
    parent::__construct(
      
    // Base ID of your widget
    'logo_test_widget', 
      
    // Widget name will appear in UI
    __('WPBeginner Widget', 'wpb_widget_domain'), 
      
    // Widget description
    array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), ) 
    );
    }
      
    // Creating widget front-end
      
    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
      
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
      
    // This is where you run the code and display the output
    echo __( 'Hello, World!', 'wpb_widget_domain' );
    echo $args['after_widget'];
    }
              
    // Widget Backend 
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'New title', 'wpb_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php 
    }
          
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    // Class wpb_widget ends here
    } 
     
     
    // Register and load the widget
    function logo_test_load_widget() {
        register_widget( 'logo_test_widget' );
    }
    add_action( 'widgets_init', 'logo_test_load_widget' );







