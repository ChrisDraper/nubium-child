<?php
/** Nubium child functions **/


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts', 9999 );
function theme_enqueue_scripts() {
    wp_enqueue_script( 'jquerys', '//code.jquery.com/jquery-1.11.3.min.js' );
    wp_enqueue_script( 'theme_moonshine', dirname( get_bloginfo('stylesheet_url')) . '/js/moonshine.js' );

}



// -- Enqueue Adobe Font Scripts

/*
function theme_typekit() {
    wp_enqueue_script( 'theme_typekit', '//use.typekit.net/pfi3ndr.js');
}
add_action( 'wp_enqueue_scripts', 'theme_typekit' );
 
function theme_typekit_inline() {
  if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
  	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php } }
add_action( 'wp_head', 'theme_typekit_inline' );
*/

// -- disable auto p tags

//remove_filter( 'the_content', 'wpautop' );
//remove_filter( 'the_excerpt', 'wpautop' );


// -- add support for thumbnails

//add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 250, 315, true ); // W x H, hard crop