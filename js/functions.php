<?php ob_start();

/**

* @package wordpress

* @subpackage sam

*/



?>





<?php



if (function_exists('add_theme_support')) {



    add_theme_support('post-thumbnails');



     add_image_size('banner_thmbnail', 971, 263, true);
	  add_image_size('small_logo', 63, 52, true);
	  	  add_image_size('media_logo', 104, 86, true);





}









add_action( 'init', 'register_my_menus' );



function register_my_menus() {



register_nav_menus(



array(







'main-menu' => __( 'Main Menu' ),



'footer-menu' => __( 'Footer Menu' ),

));



}





if ( function_exists('register_sidebar') ) {

	register_sidebar(array(

		'name' => 'Pages Sidebar',

		 'id' =>'page_sidebar',

		'before_widget' => '<div class="sidebar" id="%1$s">',

		'after_widget' => '</div>',
	'before_title' => '<h4 class="">',
'after_title' => '</h4>',



));



}
if ( function_exists('register_sidebar') ) {

	register_sidebar(array(

		'name' => 'Contact Sidebar',

		 'id' =>'contact_sidebar',

		'before_widget' => '<div class="sidebar contact_sidebar" id="%1$s">',

		'after_widget' => '</div>',
	'before_title' => '<h4 class="">',
'after_title' => '</h4>',



));



}







/**

 * Add "first" and "last" CSS classes to dynamic sidebar widgets. Also adds numeric index class for each widget (widget-1, widget-2, etc.)

 */

function widget_first_last_classes($params) {



    global $my_widget_num; // Global a counter array

    $this_id = $params[0]['id']; // Get the id for the current sidebar we're processing

    $arr_registered_widgets = wp_get_sidebars_widgets(); // Get an array of ALL registered widgets   



    if(!$my_widget_num) {// If the counter array doesn't exist, create it

        $my_widget_num = array();

    }



    if(!isset($arr_registered_widgets[$this_id]) || !is_array($arr_registered_widgets[$this_id])) { // Check if the current sidebar has no widgets

        return $params; // No widgets in this sidebar... bail early.

    }



    if(isset($my_widget_num[$this_id])) { // See if the counter array has an entry for this sidebar

        $my_widget_num[$this_id] ++;

    } else { // If not, create it starting with 1

        $my_widget_num[$this_id] = 1;

    }



    $class = 'class="widget-' . $my_widget_num[$this_id] . ' '; // Add a widget number class for additional styling options



    if($my_widget_num[$this_id] == 1) { // If this is the first widget

        $class .= 'widget-first ';

    } elseif($my_widget_num[$this_id] == count($arr_registered_widgets[$this_id])) { // If this is the last widget

        $class .= 'widget-last ';

    }



    $params[0]['before_widget'] = str_replace('class="', $class, $params[0]['before_widget']); // Insert our new classes into "before widget"



    return $params;



}

add_filter('dynamic_sidebar_params','widget_first_last_classes');



function my_custom_post_education() {
  $labels = array(
    'name'               => _x( 'Education', 'post type general name' ),
    'singular_name'      => _x( 'Education', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'post' ),
    'add_new_item'       => __( 'Add New Education' ),
    'edit_item'          => __( 'Edit Education' ),
    'new_item'           => __( 'New Education' ),
    'all_items'          => __( 'All Education' ),
    'view_item'          => __( 'View Education' ),
    'search_items'       => __( 'Search Education' ),
    'not_found'          => __( 'No educations found' ),
    'not_found_in_trash' => __( 'No education found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Educations'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our education and education specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'education_post', $args ); 
}
add_action( 'init', 'my_custom_post_education' );

//----------------------------------------------------------



function my_custom_post_experience() {
  $labels = array(
    'name'               => _x( 'Experience', 'post type general name' ),
    'singular_name'      => _x( 'Experience', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'post' ),
    'add_new_item'       => __( 'Add New Experience' ),
    'edit_item'          => __( 'Edit Experience' ),
    'new_item'           => __( 'New Experience' ),
    'all_items'          => __( 'All Experience' ),
    'view_item'          => __( 'View Experience' ),
    'search_items'       => __( 'Search Experience' ),
    'not_found'          => __( 'No experience found' ),
    'not_found_in_trash' => __( 'No experience found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Experience'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our experience and experience specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'experience_post', $args ); 
}
add_action( 'init', 'my_custom_post_experience' );



//-------------------------------------------------


function my_custom_post_media() {
  $labels = array(
    'name'               => _x( 'Media', 'post type general name' ),
    'singular_name'      => _x( 'Media', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'post' ),
    'add_new_item'       => __( 'Add New Media' ),
    'edit_item'          => __( 'Edit Media' ),
    'new_item'           => __( 'New Media' ),
    'all_items'          => __( 'All Media' ),
    'view_item'          => __( 'View Media' ),
    'search_items'       => __( 'Search Media' ),
    'not_found'          => __( 'No media found' ),
    'not_found_in_trash' => __( 'No media found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Media'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our media and media specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'media_post', $args ); 
}
add_action( 'init', 'my_custom_post_media' );











//---------------------------------------------------
class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
  }
}

function my_acf_options_page_settings( $settings )
{
    $settings['title'] = 'Theme Options';
    $settings['pages'] = array('slider');

    return $settings;
}

add_filter('acf/options_page/settings', 'my_acf_options_page_settings');
?>

