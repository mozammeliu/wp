<?php
/**
 * Template Name: Books Page
 */

$args = array(
	'post_type'=>'book',
	'posts_per_page'=>5,
	'order'=>'ASC'
);

//$books = get_posts($args);
//echo "<pre>";
//print_r($books);
//echo "</pre>";

$books = new WP_Query($args);

//foreach($books as $post){
//	setup_postdata($post);
//	//echo $book->post_title ."<br/>";
//	//echo $book->post_content.'<hr/>';
//
//	the_title();
//	echo "<br/>";
//	the_content();
//	echo "<hr/>";
//}

while($books->have_posts()){
	$books->the_post();
	//echo $book->post_title ."<br/>";
	//echo $book->post_content.'<hr/>';

	echo "<a href='".get_the_permalink()."'>";
	the_title();
	echo "</a>";
	echo "<br/>";
	the_content();
	echo "<hr/>";
}

wp_reset_query();