<?php
// Função de configuração de recursos e suportes do tema
function drk_setup() {

    // habilitando traduções no tema
    load_theme_textdomain( 'drktwenty', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    // adicinando tag title ao header pelo wp_head()
    add_theme_support( 'title-tag' );

    // adicionando imagem destacadas aos post types do wordpress
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

    // wp-block-styles
    add_theme_support( 'wp-block-styles' );

    // Add support for full and wide align images.
	add_theme_support( 'align-wide' );

}
add_action( 'after_setup_theme', 'drk_setup' );

// Registrando localizações de menu
function drk_register_menus() {

    $locations = array(
        'navbar-menu'   =>  __( 'Navbar Menu', 'drktwenty' ),
    );

    register_nav_menus( $locations );

}
add_action( 'init', 'drk_register_menus' );

// Função para add CSS ao tema
function drk_register_styles() {

    // tema version
    $theme_version = wp_get_theme()->get( 'Version' );

    // noermalize
    wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css', [], '8.0.1' );

    // font awesome
    wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/fonts/fontawesome/css/all.css', [], '5.12.1' );

    // style theme
    wp_enqueue_style( 'drk-style', get_stylesheet_uri(), [], $theme_version );

    // grid system
    //wp_enqueue_style( 'grid', get_stylesheet_directory_uri() . '/css/grid.css', [], '1.0' );

    // block styles
    wp_enqueue_style( 'drk-block-styles', get_theme_file_uri( '/css/editor-style-block.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );

}
add_action( 'wp_enqueue_scripts', 'drk_register_styles' );

// Função para add JavaScripts Files ao tema
function drk_register_scripts() {

    // js do tema
    wp_enqueue_script( 'drk-functions', get_stylesheet_directory_uri() . '/js/functions.js', [], null, true );

    // fitvds
    wp_enqueue_script( 'fitvids', get_stylesheet_directory_uri() . '/js/jquery.fitvids.js', [ 'jquery' ], null, true );

}
add_action( 'wp_enqueue_scripts', 'drk_register_scripts' );

// função para registrar areas de widgets
function drk_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2></header>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// sidebar #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Sidebar #1', 'drktwenty' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the sidebar.', 'drktwenty' ),
			)
		)
	);

}

add_action( 'widgets_init', 'drk_sidebar_registration' );

/** Enqueue supplemental block editor styles. */
function drk_block_editor_styles() {

	$css_dependencies = array();

	// Enqueue the editor styles.
	wp_enqueue_style( 'drk-block-editor-styles', get_theme_file_uri( '/css/editor-style-block.css' ), $css_dependencies, wp_get_theme()->get( 'Version' ), 'all' );

}

add_action( 'enqueue_block_editor_assets', 'drk_block_editor_styles', 1, 1 );

// Require de arquivos com funções personlizadas para o tema
require_once get_template_directory() . '/inc/template-tags.php';
