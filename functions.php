<?php 

require get_theme_file_path( '/includes/search-route.php' );

function theme_custom_rest() {
    register_rest_field('post','authorName', array(
        'get_callback' => function() {
            return get_the_author();
        }
    ));
}

add_action('rest_api_init', 'theme_custom_rest');

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
 
	$fragments['.premier-cart'] = '<a href="' . wc_get_cart_url() . '" class="premier-cart">' . $woocommerce->cart->cart_contents_count . '<i class="ion-ios-cart secondary-nav__cart--cart" aria-hidden="true"></i></a>';
 	return $fragments;
}

// Displays page banner

function pageBanner($args = NULL) {
    
    if(!$args['title']) {
       $args['title'] = get_the_title();

    }

    if(!$args['subtitle']) {
        $args['subtitle'] = get_field('page_banner_sub');

    }

    if (!$args['photo']) {
        if (get_field('page_banner_background_image') AND !is_archive() AND !is_home() ) {
          $args['photo'] = get_field('page_banner_background_image')['sizes']['page-banner'];
        } else {
          $args['photo'] = get_template_directory_uri().'/src/img/driver-car.jpg';
        }
    }
    ?>
    <div class="banner" style="background-image: linear-gradient(103deg,
        rgba(43,48,58, .9999) 35%,
        rgba(43,48,58, 0.8) 70%,
        transparent 100%),url(<?php echo $args['photo'];?>)" >
            <div class="hero__text-box--banner">
                <h1 class="display-5 ml-3"><?php echo $args['subtitle'];?></h1>
                    
            </div>
 </div>

<?php }



/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
    'top-menu' => __( 'Top Menu', 'THEMENAME' ),
) );

function load_stylesheets() {
    wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/src/css/vendor/ionicons.min.css' );
   
   
    wp_register_style('stylesheet', get_template_directory_uri() . '/dist/css/app.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');
	
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_javascript() {
    
    wp_register_script('app', get_template_directory_uri() . '/dist/js/app.js', 'jquery', 1, true); 
    wp_enqueue_script('app');
    wp_enqueue_script( 'custom-script', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), false, true );

    wp_localize_script('app', 'themeData', array(
        'root_url' => get_site_url()
   
    ));

    }
add_action('wp_enqueue_scripts', 'load_javascript');



// add menus
add_theme_support('menus');
add_theme_support('post-thumbnails');
//title tags
add_theme_support( 'title-tag' );
add_image_size('testimonial-slider', 150, 150, true);
add_image_size('page-banner', 1500, 350, true);

// advanced custom fields add short code to text area
add_filter('acf/format_value/type=textarea', 'do_shortcode');

//Add image sizes

add_image_size('post_image', 1100, 750, true);


// add a widget

register_sidebar(

    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'  
     )

);

register_sidebar(

    array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'  
     )

);

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

function load_js_assets() {
    if( is_page( 72 ) ) {
        wp_enqueue_script('my-js', get_template_directory_uri() . '/src/js/courseFinder.js', array('jquery'), '', true);
    } 
    if( is_page( 6 ) ) {
        wp_enqueue_script('my-js', get_template_directory_uri() . '/src/js/slider.js', array('jquery'), '', true);
    } 
    if( is_page( 128 ) ) {
        wp_enqueue_script('my-js', get_template_directory_uri() . '/src/js/accordian.js', array('jquery'), '', true);
    } 
    
}

add_action('wp_enqueue_scripts', 'load_js_assets');

//customize login screen

add_filter('login_headerurl', 'ourHeaderUrl');


function ourHeaderUrl() {
    return esc_url(site_url( '/' ));
}

add_action('login_enqueue_scripts', 'ourLoginCss');

function ourLoginCss (){
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/dist/css/app.css', '', 1, 'all');
}

add_filter('login_headertitle', 'ourLoginTitle');

function ourLoginTitle(){
    return get_bloginfo('name');
}

add_filter('ai1wm_exclude_content_from_export', 'ignoreCertainFiles');

//excludes node-modules
function ignoreCertainFiles($exclude_filters) {
    $exclude_filters[] = 'themes/premier-drive-theme/node_modules';
    return $exclude_filters;
}

?>