<?php
/***
* Plugin Name: Slider
* Description: Home Page Slider Images Management for Corporate Theme
* Plugin uri: http://webheartbd.com/plugins
* Author uri: http://mozammel.info
* Version: 1.0
* Author: Mozammel Haque
***/
if ( ! defined('ABSPATH') ) {
	die('Please do not load this file directly.');
}


class MlhSlider{
    function __construct() {
        //register_activation_hook(__FILE__, array($this, "function_name"));
	//register_deactivation_hook(__FILE__, array($this, "function_name"));
        $this->register_post_type();
        $this->metaboxes();
    }
    function register_post_type()
    {
        $args=array(
          'labels'=>array(
              'name'=>'Slider Image',
              'singular_name'=>'slider',
              'add_new'=> 'Add New Slider',
              'all_items'=>'All Slider',
              'not_found'=>'No Slider Found in Database',
              'add_new_item'=>'Add New Slider',
              'edit_item'=>'Edit Slider',
              'search_items'=>'Search Slider',
              'not_found_in_trash'=>'Not Found any Slider'
              //List: https://codex.wordpress.org/Function_Reference/register_post_type
          ),
            'rewrite'=>array(
                'slug'=>'slider'
            ),
            'public'=>true,
            'menu_position'=>5,
            'supports'=>array(
                'title',
                'thumbnail',
                'excerpt'//,
                //'custom-fields'
            ),
            'show_in_nav_menus'=>TRUE
            
        );
        register_post_type('slider',$args);
}



public function metaboxes()
{
    function mtbxs()
    {
        //add_meta_box( $id, $title, $callback, $screen, $context,$priority, $callback_args );
        add_meta_box('slider_button_text','Slider Button Text and Links','button_text','slider');
       // add_meta_box( 'postexcerpt', __( 'List of jobs for this client' ), 'slider_excerpt_meta_box', 'alma_client', 'normal', 'high' );
       // add_meta_box('slider_button_link','Button Link','button_link','slider');
    }
    add_action('add_meta_boxes','mtbxs');
    
    function button_text($post)
    {
        $button_text= get_post_meta($post->ID, 'slider_button_text', true);
        $button_link= get_post_meta($post->ID, 'slider_button_link', true);
        ?>
<p>
    <label for="slider_button_text">Slider Button Text:</label>
    <input type="text" class="widefat" name="slider_button_text" id="slider_button_text" value="<?php echo esc_attr($button_text);?>"/>
</p>
<p>
    <label for="slider_button_link">Slider Button Link:</label>
    <input type="text" class="widefat" name="slider_button_link" id="slider_button_link" value="<?php echo esc_attr($button_link);?>"/>
</p>
        <?php
    }
    
    function svpsts($id)
    {
        if(isset($_POST['slider_button_text']))
        {
            update_post_meta($id, 'slider_button_text', strip_tags($_POST['slider_button_text']));
        }
        if(isset($_POST['slider_button_link']))
        {
            update_post_meta($id, 'slider_button_link', strip_tags($_POST['slider_button_link']));
        }
    }
    
    add_action('save_post','svpsts');
    
}



}

function mlh_fnc()
{
    new MlhSlider();
}



add_action('init','mlh_fnc');
