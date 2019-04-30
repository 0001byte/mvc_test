<?php

class News
{

	/**
	* Returns the news item by id
	* @param integer $id
	*/
	public static function getNewsItemById($id)
	{
		$db = Db::getConnection();

		$id = intval($id);

		$newsList = array();

		$result = $db->query('SELECT id, title, date, short_content '
			. 'FROM news '
			. 'WHERE id = ' . $id);

		#$result->setFetchMode(PDO::FETCH_NUM);
		$result->setFetchMode(PDO::FETCH_ASSOC);

		$newsItem = $result->fetch(); 

		return $newsItem;
	}

	/**
	* Returns an array of news
	*/
	public static function getNewsList()
	{

		$db = Db::getConnection();

		$newsList = array();

		$result = $db->query('SELECT id, title, date, short_content '
			. 'FROM news '
			. 'ORDER BY id DESC ' 
			. 'LIMIT 0, 10');

		$i = 0;
		while ($row = $result->fetch()) {
		 	$newsList[$i]['id'] = $row['id'];
		 	$newsList[$i]['title'] = $row['title'];
		 	$newsList[$i]['date'] = $row['date'];
		 	$newsList[$i]['short_content'] = $row['short_content'];
		 	$i++;
		 } 

		 return $newsList;
	}

}








