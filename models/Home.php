<?php 

class Home
{
	public static function getSiteTree(){
		#from db
		$siteTree = array(
			'/' => 'Home page',
			'news/' => 'News' );

		return $siteTree;
	}
}