<?php
require dirname(__FILE__)."/navwalker.php";
function theme_setup() {

    load_theme_textdomain( 'tm2', get_template_directory() . '/lang' );
    // Add default posts and comments RSS feed links to head.

    add_theme_support( 'title-tag' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'tm2' ),
    ) );

    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ) );

    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link',
    ) );

	add_theme_support("post-thumbnails");

	add_theme_support("custom-header",array("width"=>1170,height=>400,"flex-height"=>true,"header-text"=>true));

	add_image_size("newsize",800,600);
	add_image_size("newsize2",400,400);
	add_image_size("newsize3",400,400,1);
	add_image_size("newsize4",400,400,array("left","top"));
}
add_action( 'after_setup_theme', 'theme_setup' );

add_action("wp_enqueue_scripts","tm2_scripts");
function tm2_scripts(){
	wp_enqueue_script("jquery");
	wp_enqueue_style("bootstrap","//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css");
	wp_enqueue_style("theme-style",get_template_directory_uri()."/style.css");
	wp_enqueue_script("bootstrap-js","//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js",array("jquery"),null,1);
}

function theme_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar', 'tm2'),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
}

add_action('widgets_init', 'theme_widgets_init');
