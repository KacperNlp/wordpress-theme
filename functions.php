<?php
//import theme widgets
require_once 'inc/widgets/braumandl-brands-widget.php';

//add styles
function styles_enqueue(){
    wp_register_style('main-style', get_template_directory_uri() . '-child/style.css', array(), null, 'all');
    wp_register_style('my-styles', get_template_directory_uri() . '-child/assets/css/main.css', array(), null, 'all');
    wp_register_style('slider-style', 'https://unpkg.com/swiper/swiper-bundle.css', array(), null, 'all');
    
    wp_enqueue_style('slider-style');
    wp_enqueue_style('my-styles');
    wp_enqueue_style('main-style');
};

add_action('wp_enqueue_scripts', 'styles_enqueue');

//add javascript
function javascript_enqueue(){
    wp_register_script('slider-javascript', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, 'all');
    wp_register_script('handle-nav', get_template_directory_uri() . '-child/assets/javascript/assets/Nav.js', array(), null, 'all');

    wp_enqueue_script('slider-javascript');
    wp_enqueue_script('handle-nav');
};

add_action('wp_enqueue_scripts', 'javascript_enqueue');

add_theme_support('menus');
add_theme_support('post-thumbnails');

//remove theme storefront credits from footer
function header_main_link(){
    remove_action( 'storefront_header', 'storefront_site_branding', 20 );
};

add_action( 'storefront_header', 'header_main_link');

register_nav_menus( array(
    'theme-nav' => "Theme nav",
    'footer-nav' => 'Footer nav',
) );

//navigation 
function nav_elements(){
    ?>
    <div class="nav-container">
        <button class="bars" id="bars"><span class="fas fa-bars" id="bars-icon"></span>Menu</button>
        <nav class="nav" id="navigation" >
            <?php 
                wp_nav_menu(
                    array(
                        'depth' => 0,
                        'theme_location' => 'theme-nav',
                        'container' => 'ul',
                        'container_id' => 'nav',
                        'menu_class' => 'nav__list'
                    )
                ); 
            ;?>
        </nav>
    </div>
    <?php
};

add_action('display_nav', 'nav_elements');

//footer nav
function footer_nav(){
    ;?>
        <div class="footer-nav">
            <?php 
                wp_nav_menu(
                    array(
                        'theme-location' => 'footer-nav',
                        'container' => 'ul',
                        'menu_class' => 'footer-nav__list'
                    )
                )
            ;?>
        </div>
    <?php
};

add_action('display_footer_nav', 'footer_nav');

//create different action for displaying site title 
function add_site_title(){
   ?>
   <div>
        <a  href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri() . '-child/img/braumandl-logo-1.png' ;?>" alt="Braumandl logo" class="header__brumandl-text">
        </a>
    </div>

    <?php
};

add_action('site-title', 'add_site_title');

//checks if sidebar has any widget
function is_sidebar_active($siderbarIndex){
    global $wp_registered_sidebars;
    $widgetColumns = wp_get_sidebars_widgets();
    if($widgetColumns[$siderbarIndex])
        return true;
    else
        return false;
};

//footer copyright widget
function init_widgets(){
    register_sidebar(
        array(
            'name' => 'Braumandl: Footer copyright',
            'id' => 'footer-copyright',
            'before_widget' => ' ',
            'after_widget'  => ' ',
            'before_title'  => ' ',
            'after_title'   => ' ',
            )
        );

    register_sidebar(
        array(
            'name' => 'Braumandl: KTM Brand Header (Home)',
            'id' => 'ktm-header',
            'before_widget' => ' ',
            'after_widget'  => ' ',
            'before_title'  => ' ',
            'after_title'   => ' ',
            )
        );

    register_sidebar(
        array(
            'name' => 'Braumandl: KTM Brand Description (Home)',
            'id' => 'ktm-text',
            'before_widget' => ' ',
            'after_widget'  => ' ',
            'before_title'  => ' ',
            'after_title'   => ' ',
            )
        );


        register_sidebar(
            array(
                'name' => 'Braumandl: Husqvarna Brand Header (Home)',
                'id' => 'hqv-header',
                'before_widget' => ' ',
                'after_widget'  => ' ',
                'before_title'  => ' ',
                'after_title'   => ' ',
                )
            );
    
        register_sidebar(
            array(
                'name' => 'Braumandl: Husqvarna Brand Description (Home)',
                'id' => 'hqv-text',
                'before_widget' => ' ',
                'after_widget'  => ' ',
                'before_title'  => ' ',
                'after_title'   => ' ',
                )
            );

            
        register_sidebar(
            array(
                'name' => 'Braumandl: GASGAS Brand Header (Home)',
                'id' => 'gas-header',
                'before_widget' => ' ',
                'after_widget'  => ' ',
                'before_title'  => ' ',
                'after_title'   => ' ',
                )
            );
    
        register_sidebar(
            array(
                'name' => 'Braumandl: GASGAS Brand Description (Home)',
                'id' => 'gas-text',
                'before_widget' => ' ',
                'after_widget'  => ' ',
                'before_title'  => ' ',
                'after_title'   => ' ',
                )
            );

        register_sidebar(
            array(
                'name' => 'Braumandl: Onlineshop Title Section (Home)',
                'id' => 'onlineshop-home-title',
                'before_widget' => ' ',
                'after_widget'  => ' ',
                'before_title'  => ' ',
                'after_title'   => ' ',
                )
            );

        register_sidebar(
            array(
                'name' => 'Braumandl: Onlineshop Content Section (Home)',
                'id' => 'onlineshop-home-content',
                'before_widget' => ' ',
                'after_widget'  => ' ',
                'before_title'  => ' ',
                'after_title'   => ' ',
                )
            );

        register_sidebar(
            array(
                'name' => 'Braumandl: Shop Title Section (Home)',
                'id' => 'shop-home-title',
                'before_widget' => ' ',
                'after_widget'  => ' ',
                'before_title'  => ' ',
                'after_title'   => ' ',
                )
            );
    
        register_sidebar(
            array(
                'name' => 'Braumandl: Shop Content Top Section (Home)',
                'id' => 'shop-home-content-top',
                'before_widget' => ' ',
                'after_widget'  => ' ',
                'before_title'  => ' ',
                'after_title'   => ' ',
                )
            ); 
            
        register_sidebar(
            array(
                'name' => 'Braumandl: Shop Content Bottom Section (Home)',
                'id' => 'shop-home-content-bottom',
                'before_widget' => ' ',
                'after_widget'  => ' ',
                'before_title'  => ' ',
                'after_title'   => ' ',
                )
            ); 

        register_sidebar(
            array(
                'name' => 'Braumandl: Footer',
                'id' => 'braumandl-footer',
                'before_widget' => ' ',
                'after_widget'  => ' ',
                'before_title'  => ' ',
                'after_title'   => ' ',
                )
            ); 

       register_sidebar(
            array(
                'name' => 'Braumandl: Slider Title/Header (Home)',
                'id' => 'slider-home-header',
                'before_widget' => ' ',
                'after_widget'  => ' ',
                'before_title'  => ' ',
                'after_title'   => ' ',
                )
            ); 
            
        register_sidebar(
            array(
                'name' => 'Braumandl: Slider Content Top Section (Home)',
                'id' => 'shop-home-content-top',
                'before_widget' => ' ',
                'after_widget'  => ' ',
                'before_title'  => ' ',
                'after_title'   => ' ',
                )
            ); 

        register_sidebar(
            array(
                'name' => 'Braumandl: Slider Content Bottom Section (Home)',
                'id' => 'shop-home-content-bottom',
                'before_widget' => ' ',
                'after_widget'  => ' ',
                'before_title'  => ' ',
                'after_title'   => ' ',
                )
            ); 


    register_widget('braumandl_text_widget');
};

add_action('widgets_init', 'init_widgets');

