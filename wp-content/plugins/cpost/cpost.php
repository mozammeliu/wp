<?php
/***
* Plugin Name: CPost
* Description: Plugin to Create Custom Post from Mozammel Haque
* Plugin uri: http://webheartbd.com/plugins
* Author uri: http://mozammel.info
* Version: 1.0
* Author: Mozammel Haque
***/
if ( ! defined('ABSPATH') ) {
	die('Please do not load this file directly.');
}

class Cpost{
    function __construct() {
        //register_activation_hook(__FILE__, array($this, "function_name"));
	//register_deactivation_hook(__FILE__, array($this, "function_name"));
        $this->register_post_type();
        $this->taxonomies();
        $this->metaboxes();
    }
    function register_post_type()
    {
        $args=array(
          'labels'=>array(
              'name'=>'CPost',
              'singular_name'=>'cpost',
              'add_new'=> 'Add CPost',
              'all_items'=>'All cPost',
              'not_found'=>'No CPost Found in Database',
              'add_new_item'=>'Add New cPost'
              //List: https://codex.wordpress.org/Function_Reference/register_post_type
          ),
            'rewrite'=>array(
                'slug'=>'cpost'
            ),
            'public'=>true,
            'menu_position'=>5,
            'supports'=>array(
                'title',
                'thumbnail',
                'editor',
                'custom-fields'
            ),
            'show_in_nav_menus'=>TRUE
            
        );
        register_post_type('cpost',$args);
}

public function taxonomies()
{
    $taxonomies=array();
    $taxonomies['cat']=array(
        'hierarchical'=>TRUE,
        'query_var'=>'cpost_cat',
        'rewrite'=>array(
            'slug'=>'cpost/cat'
        ),
        //https://codex.wordpress.org/Function_Reference/register_taxonomy
        'labels'=>array(
            'name'=>'Category',
            'singular_name'=>'cat',
            'add_new_item'=>'Add Cat',
            'all_item'=>'All Cat'
        )
    );
    $this->register_all_taxonomies($taxonomies);
}
public function register_all_taxonomies($taxonomies)
{
    foreach($taxonomies as $name=>$arr)
    {
        register_taxonomy($name, array('cpost'),$arr);
    }
}


public function metaboxes()
{
    function mtbx()
    {
        add_meta_box('cpost_author','Author','author','cpost');
    }
    add_action('add_meta_boxes','mtbx');
    
    function author($post)
    {
        $author= get_post_meta($post->ID, 'cpost_author', true);
        ?>
<p>
    <label for="cpost_author">Author:</label>
    <input type="text" class="widefat" name="cpost_author" id="cpost_author" value="<?php echo esc_attr($author);?>"/>
</p>
        <?php
    }
    
    function svpst($id)
    {
        if(isset($_POST['cpost_author']))
        {
            update_post_meta($id, 'cpost_author', strip_tags($_POST['cpost_author']));
        }
    }
    
    add_action('save_post','svpst');
    
}



}

function fnc()
{
    new Cpost();
}



add_action('init','fnc');
