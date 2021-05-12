<?php
//add styles
function styles_enqueue(){
    wp_register_style('main-style', get_template_directory_uri() . '-child/style.css', array(), null, 'all');
    wp_register_style('my-styles', get_template_directory_uri() . '-child/assets/css/main.css', array(), null, 'all');
    
    wp_enqueue_style('my-styles');
    wp_enqueue_style('main-style');
};

add_action('wp_enqueue_scripts', 'styles_enqueue');

add_theme_support('menus');
add_theme_support('post-thumbnails');

//remove site title from storefront_header
function header_main_link(){
    remove_action( 'storefront_header', 'storefront_site_branding', 20 );
};

add_action( 'storefront_header', 'header_main_link');

register_nav_menus( array(
    'theme-nav' => "Theme nav",
) );

//navigation 
function nav_elements(){
    ?>
    <div class="nav-container">
        <button class="bars">Menu</button>
        <nav class="main-nav">
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