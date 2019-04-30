<?php

include_once ROOT . '/models/News.php';

class NewsController
{

	public function actionIndex(){
		$newsList = array();
		$newsList = News::getNewsList();

		$newsListPath = ROOT . '/views/news/index.php';
		include_once($newsListPath);
		/*echo "<pre>";
		print_r($newsList);
		echo "</pre>";*/

		return true;
	}

	public function actionView($id){

		$newsItem = News::getNewsItemById($id);
		
		$newsItemPath = ROOT . '/views/news/article.php';
		include_once($newsItemPath);

		return true;
	}

}