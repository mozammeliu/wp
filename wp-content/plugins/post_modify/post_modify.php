<?php
/*
Plugin Name: Post Modify
 * Author: Mozammel Haque
 * Description: This is the 1st Plugin By Mozammel Haque
 * Author uri: http://mozammel.info
 * Plugin uri: http://webheartbd.com/me
 * version: 1.0
 * Licence: No Licence
 */
 

add_action('the_title','post_modification');
function post_modification($the_title)
{
    return ucwords($the_title);
}
add_action('the_content', function($content)
{
    if(is_singular(the_post()))
    {
    return ucwords($content);
    }
 else {
    return $content;    
    }
});

add_shortcode('mlh', 'fst');
function fst($atts,$content)
{
  //  if(!$atts){$atts['url']="http://defaultwebsite.com";}
  //  if(!$content){$content="Please Visit Default Website";}
    $atts= shortcode_atts(array(
        'url'=>'http://defaultwebsite.com',
        'content'=> !empty($content)? $content:'Please visit the Default Website'
    ), $atts);
extract($atts);

    return "<a href='".$url."'>".$content."</a>";
}
