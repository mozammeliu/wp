<?php

/* 
 * Template Name: cpost
 */
$args=array(
    'post_per_page'=>5,
    'post_type'=>'cpost',
    'order'=>'ASC'
);

$cpost= New WP_Query($args);


while($cpost->have_posts())
{
    $cpost->the_post();
    echo "<a href='".get_the_permalink()."'>";
	the_title();
	echo "</a>";
    echo "<br/>";
    if(has_post_thumbnail())
    {
       the_post_thumbnail(); 
    }
    
    the_content();
    echo "<hr/>";
}
wp_reset_query();