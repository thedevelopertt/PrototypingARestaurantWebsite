<?php

namespace App;
class BlogInformation{

	public static function getBlogName(){
		return get_bloginfo('name');
	}

	public static function getBlogDescription(){
		return get_bloginfo('description');
	}

	public static function getBlogFaviconUrl(){
		return get_site_icon_url();
	}

	public static function getTemplateDirectory(){
		return get_template_directory_uri();
	}

	public static function getSvgPath(){
		return get_template_directory_uri()."/dist/img/svg/";
	}

}
