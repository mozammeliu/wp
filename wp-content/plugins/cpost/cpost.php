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
        $this->register_post_type();
        $this->taxonomies();
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


}

function fnc()
{
    new Cpost();
}



add_action('init','fnc');
