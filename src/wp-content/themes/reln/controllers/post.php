<?php

class TBK_Post extends Base_Factory {

	static $posts_enabled = true;

	public function __construct() {
		if(true !== self::$posts_enabled) {
			//remove the posts area
		}
		// add_action( 'init', array( &$this, 'deregister_posts' ), 100 ); // TODO: this is broken
	}

	function deregister_posts() {
		The_Theme::unregister_post_type('post', 'post');
	}
}

TBK_Post::instantiate();
