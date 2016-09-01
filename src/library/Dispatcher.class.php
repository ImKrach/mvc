<?php 

class Dispatcher
{

	private $request;
	private $response;

	function __construct(Request $request, Response $response)
	{
		$this->request 	= $request;
		$this->response = $response;
	}

	public function dispatch()
	{
		$controllerName 	= $this->request->getController();
		$actionName			= $this->request->getAction();

		// exemple : HomeController
		$controllerClass 	= ucfirst($controllerName) . 'Controller';
		// exemple : application/controllers/HomeController.class.php
		$controllerFile 	= APPLICATION_PATH . DS . 'controllers' . DS . $controllerClass . '.class.php';
		// exemple : page/index
		$actionMethod = strtolower($actionName) . 'Action';

		// Si le fichier n'existe pas on charge le controlleur d'erreur
		if (!file_exists($controllerFile)) {
			$controllerClass 	= 'ErreurController';
			$controllerFile 	= APPLICATION_PATH . DS . 'controllers' . DS . $controllerClass . '.class.php';
			$this->request->setController("Erreur");
			$this->response->setHttpResponseCode(404);
		} 

		// Si l'action n'existe pas on change en index
		if (!method_exists($controllerClass, $actionMethod)) {
			$actionMethod = "indexAction";
		}

		// Chargement du controller
		$controller = new $controllerClass($this->request, $this->response);

		$controller->$actionMethod();
	}

}