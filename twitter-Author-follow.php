<?php
/*
Plugin Name: twitter-Author-follow
Plugin URI: http://think-azure.it
Description: this plugin helps you to show the author twitter profile in your posts using the shortcode [twitter-author]
Version: 1.0
Author: Gennaro Oliviero
Author URI: http://www.twitter.com/olivierognn
 */
 
 
 
//[twitter-author]
function twitter_author_func( $atts ){
	 if(get_the_author_meta('twitter')){
		    	 	$url = get_the_author_meta('twitter');
		       		$string1 = "https://twitter.com/";
		       	 	$string3 = "/profile_image?size=bigger";
		       		echo("<div align = center><a href='http://www.twitter.com/$url'><img src ='$string1$url$string3' style='border-radius: 150px'> </br> Segui $url su Twitter</a></div></br>");
		
		}
					
		else 
			echo("<p>To show the twitter account of the author you must first enter the twitter nickname (ex: @myAccountName-->myAccountName) in the field present in the user management of wordpress</p>");       		
		       		
		       	 
}
add_shortcode( 'twitter-author', 'twitter_author_func' );
?>
