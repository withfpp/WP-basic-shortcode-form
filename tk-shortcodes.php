<?php 

/*
Plugin Name: TK SHORT CODE
Description : short code.
Plugin URI : http://github.com/withfpp
Author: T.Kim
Version : 0.1
 */


//this will be a good start to make a custom shortcode plugin.

function tkShort ($args,$content){
   return '<h4>This post is written by '.esc_attr($content).'.</h4>';
}

add_shortcode('tklink','tkShort');

//shortcode usage 
//
//[tklink] ME [/tklink]
//
// result : this post is written by ME
//
?>