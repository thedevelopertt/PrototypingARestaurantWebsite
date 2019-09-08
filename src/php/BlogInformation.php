<?php

namespace App;
class BlogInformation{

	public function getBlogName(){
		return get_bloginfo('name');
	}

	public function getBlogDescription(){
		return get_bloginfo('description');
	}

}
