<?php

    function simple_theme_setup(){
        //Thumbnail Image
        add_theme_support('post-thumbnails'); 

        //Menus
        register_nav_menus(array(
            'primary' => ('Primary Menu') 
        ));

        //Widget
        add_theme_support('widgets');
    }
    add_action('after_setup_theme', 'simple_theme_setup');

    // Excerpt Length
    function set_excerpt_length(){
        return 30; 
    }
    add_filter('excerpt_length', 'set_excerpt_length');

    /*** Equeue the stylesheets and scripts ***/
    function saliqu_styles(){
        wp_register_style("bootstrap", get_template_directory_uri(). "/css/bootstrap.min.css", array(), false, "all" );
        wp_enqueue_style("bootstrap");
        
        
        wp_enqueue_style('set-style', get_stylesheet_uri());
        
    //If you add your own css, make sure its in a css folder with the others like bootstrap or it wont be read by wordpress 
    // make sure to add rand arguement to avoid stylesheet from not updating due to cache
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), rand(111,9999), 'all' );
        wp_enqueue_style('main');
    }
    add_action('wp_enqueue_scripts','saliqu_styles');

    //load scripts

    function load_js(){
        
        wp_enqueue_script("jquery");
        
        wp_register_script("bootstrap", get_template_directory_uri(). "/js/bootstrap.min.js", "jquery", false, true);
        wp_enqueue_script("bootstrap");
    }
    add_action("wp_enqueue_scripts", "load_js");

    

    //Google Fonts 
    function wpb_add_google_fonts() {
        wp_enqueue_style( 'google-fonts-headers', "https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&display=swap", false ); 
    }
        add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

    function wpb_add_google_fonts_two() {
        wp_enqueue_style( 'google-fonts-para', "https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap", false ); 
    }
    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts_two' );


    //Boxicons
    function wp_boxicons() {
        wp_enqueue_style( 'svg-icons', 'https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css', false ); 
    }
    add_action( 'wp_enqueue_scripts', 'wp_boxicons' );



    //Register Sidebar
    function the_sidebars(){

        register_sidebar(
            array(
                'name' => 'Homepage Sidebar',
                'id' => 'hp-sidebar',
                'before_title' => '<h6 class="widget-title"> ',
                'after_title' => '</h6>',
            )
        );
    }
    add_action('widgets_init', 'the_sidebars');



    // Pagination
    function wpbeginner_numeric_posts_nav() {

        if( is_singular() )
            return;
    
        global $wp_query;
    
        /** Stop execution if there's only 1 page */
        if( $wp_query->max_num_pages <= 1 )
            return;
    
        $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
        $max   = intval( $wp_query->max_num_pages );
    
        /**	Add current page to the array */
        if ( $paged >= 1 )
            $links[] = $paged;
    
        /**	Add the pages around the current page to the array */
        if ( $paged >= 3 ) {
            $links[] = $paged - 1;
            $links[] = $paged - 2;
        }
    
        if ( ( $paged + 2 ) <= $max ) {
            $links[] = $paged + 2;
            $links[] = $paged + 1;
        }
    
        echo '<div class="navigation"><ul>' . "\n";
    
        /**	Previous Post Link */
        if ( get_previous_posts_link() )
            printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
    
        /**	Link to first page, plus ellipses if necessary */
        if ( ! in_array( 1, $links ) ) {
            $class = 1 == $paged ? ' class="active"' : '';
    
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
    
            if ( ! in_array( 2, $links ) )
                echo '<li>…</li>';
        }
    
        /**	Link to current page, plus 2 pages in either direction if necessary */
        sort( $links );
        foreach ( (array) $links as $link ) {
            $class = $paged == $link ? ' class="active"' : '';
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
        }
    
        /**	Link to last page, plus ellipses if necessary */
        if ( ! in_array( $max, $links ) ) {
            if ( ! in_array( $max - 1, $links ) )
                echo '<li>…</li>' . "\n";
    
            $class = $paged == $max ? ' class="active"' : '';
            printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
        }
    
        /**	Next Post Link */
        if ( get_next_posts_link() )
            printf( '<li>%s</li>' . "\n", get_next_posts_link() );
    
        echo '</ul></div>' . "\n";
    
    }

?> 
