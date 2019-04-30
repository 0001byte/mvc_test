<?php

include_once ROOT . '/models/Home.php';

class HomeController
{

	public function actionMain(){
		$siteTree = Home::getSiteTree();

		$homeMainPath = ROOT . '/views/home/index.php';
		include_once($homeMainPath);
	}

}