<?php

return array(

	'news/([0-9]+)' => 'news/view/$1',
	'news' => 'news/index', //actionIndex on NewsController

	'' => 'home/main', //actionMain on HomeController

	//news/humor/42
	//'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',

	//'news/([0-9]+)' => 'news/view',

	//'news' => 'news/index', //actionIndex on NewsController

	//'products' => 'products/list', //actionList on ProductController
);

