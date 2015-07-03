<?php
/*
Plugin Name: MLH Widget
Description: MLH Widget Systems
Author: Mozammel Haque
Author uri: http://webheartbd.com/me
Plugin URI: http://mozammel.info
*/



class Mlh extends WP_Widget{
    function __construct() {
        $params= array(
            'description'=>'Mlh Wiedget Description',
            'name'=> 'Mlh Widget'
        );
        
        parent::__construct(Mlh,'', $params);
    }
    public function form($instance)
    {
        extract($instance);
        ?>
<p>
    <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label> 
    <input 
        class="widefat"
        id="<?php echo $this->get_field_id('title'); ?>"
        name="<?php echo $this->get_field_name('title'); ?>"
        value="<?php if( isset($title) ) echo esc_attr($title); ?>"/>
</p>

    <label for="<?php echo $this->get_field_id('description'); ?>">Description:</label> 
        
    <textarea 
        class="widefat"
        id="<?php echo $this->get_field_id('description'); ?>"
        name="<?php echo $this->get_field_name('description'); ?>">
<?php if( isset($title) ) echo esc_attr($description); ?></textarea>
<?php  
    }
    
    public function widget()
    {
        
    }
    
    

    
}
add_action('widgets_init','widget_mlh');

function widget_mlh()
{
   return register_widget('Mlh');
}