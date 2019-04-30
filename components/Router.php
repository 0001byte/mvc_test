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

				//find inside path by outside path by routers rules
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
				
				$segments = explode('/', $internalRoute);

				//find class
				$controllerName = array_shift($segments).'Controller';
				$controllerName = ucfirst($controllerName);

				//find method
				$actionName = 'action'.ucfirst(array_shift($segments));

				//find parameters
				$parameters = $segments;
			
				//including file for class-controller
				$controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
				
				if(file_exists($controllerFile)){
					include_once($controllerFile);
				}

				//creating object
				$controllerObject = new $controllerName;
				#$result = $controllerObject->$actionName($parameters);
				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);

				if($result != null){
					break;
				}

			}

		}
	}


}