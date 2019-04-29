<?php

class Router 
{
	private $_routers;

	public function __construct()
	{
		$routersPath = ROOT.'/config/routers.php';
		$this->_routers = include($routersPath);
	}

	/**
	* Returns request string
	* @return string
	*/
	private function _getURI()
	{
		if(!empty($_SERVER['REQUEST_URI'])){
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}

	public function run()
	{
		// get request
		$uri = $this->_getURI();

		//check route
		foreach ($this->_routers as $uriPattern => $path) {
			
			if(preg_match("~$uriPattern~", $uri)){
				$segments = explode('/', $path);

				$controllerName = array_shift($segments).'Controller';
				$controllerName = ucfirst($controllerName);

				$actionName = 'action'.ucfirst(array_shift($segments));
			
				

			}

		}
	}


}