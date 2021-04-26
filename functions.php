<?php 




function logo_bootstrapping() {

    

    load_theme_textdomain("logo");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");

    //add_theme_support( array( 'editor-styles', 'align-wide' ) );

    add_theme_support( 'custom-background', array(
        'default-image'          => '',
        'default-preset'         => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
        'default-position-x'     => 'left',    // 'left', 'center', 'right'
        'default-position-y'     => 'top',     // 'top', 'center', 'bottom'
        'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
        'default-repeat'         => 'repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
        'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
        'default-color'          => '',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
    ) );
    
    // add_post_type_support('page', 'thumbnail');

    add_theme_support( "custom-header" );
    add_theme_support( "custom-logo" );

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

    add_filter('manage_posts_columns', 'posts_columns_id', 5);
    add_action('manage_posts_custom_column', 'posts_custom_id_columns', 5, 2);
    add_filter('manage_pages_columns', 'posts_columns_id', 5);
    add_action('manage_pages_custom_column', 'posts_custom_id_columns', 5, 2);
 
function posts_columns_id($defaults){
    $defaults['wps_post_id'] = __('ID');
    return $defaults;
}
function posts_custom_id_columns($column_name, $id){
    if($column_name === 'wps_post_id'){
            echo $id;
    }
}

}
add_action("after_setup_theme","logo_bootstrapping");



/**
 * Register our sidebars and widgetized areas.
 *
 */
function logo_widgets_init() {

	register_sidebar( array(
		'name'          => __('Logo Banner Text' , 'logo'),
		'id'            => 'logo-banner-text-id-1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="hidden rounded">',
		'after_title'   => '</h1>',
	) );

}
add_action( 'widgets_init', 'logo_widgets_init' );


function logo_styles() {
    wp_enqueue_style("logo-style", get_stylesheet_uri());
    wp_enqueue_style("logo-bootstarp", get_theme_file_uri ("assets/css/bootstrap.min.css"));
    wp_enqueue_style("logo-owl-carou-sel",  get_theme_file_uri ("assets/css/owl.carousel.min.css"));
    wp_enqueue_style("logo-mean-menu", get_theme_file_uri ("assets/css/meanmenu.css"));
    wp_enqueue_style("logo-font-awesome-all", get_theme_file_uri ("assets/css/fontawesome-all.min.css"));
    wp_enqueue_style("logo-all-min-css", get_theme_file_uri ("assets/css/all.min.css"));

    wp_enqueue_style("logo-css-main-css", get_theme_file_uri ("assets/css/main.css"));
    wp_enqueue_style("logo-css-custom-css", get_theme_file_uri ("assets/css/custom.css"));
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



function logo_index_page_template_banner() {

            
            ?>

            <style>
                .bannar-bg-img {
                    background-image: url(<?php esc_html_e( header_image() ); ?>);
                    background-size: cover;
                }
            </style>

            <?php
        
    
}

add_action( "wp_head", "logo_index_page_template_banner",100 );

function logo_register_meta_box_id_1() {
    add_meta_box( "logo-c-meta-box-id-1", __( "Logo Meta Box", "logo" ), 
    "logo_function_display_callback_id_1", "post" , "normal" , "default" );
}
add_action( "add_meta_boxes", "logo_register_meta_box_id_1" );

function logo_function_display_callback_id_1( $post ) {

    wp_nonce_field( "logo_meta_box_id_nf_1" , "logo_meta_box_nonce_field_id_1");

    $logo_meta_data_insert_field_id_1 = get_post_meta($post->ID,"typefield", true);

    
    ?>
    <label><h1>Test</h1></label>
    <input type="text" name="typefield" value="<?php esc_attr_e( $logo_meta_data_insert_field_id_1  , "logo" ) ?>" placeholder=" type something ">

     <?php
}

function logo_meta_box_id_1_save_data($post_id) {

    if ( !isset($_POST['logo_meta_box_nonce_field_id_1']) ) {
        return;
    }

    if ( !wp_verify_nonce( $_POST['logo_meta_box_nonce_field_id_1'], "logo_meta_box_id_nf_1") ) {
        return;
    }

    if ( !isset($_POST['typefield']) ) {
        return;
    }

    $logo_typefield_id_1 = sanitize_text_field( $_POST['typefield'] );

    update_post_meta($post_id, "typefield" , $my_title);

    

}

add_action( "save_post" , "logo_meta_box_id_1_save_data" );




