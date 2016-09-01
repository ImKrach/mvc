<?php 

class Router
 {

 	private $request;
 	
 	function __construct(Request $request)
 	{
 		$this->request = $request;
 	}

 	public function route()
 	{
        // Récupération et découpage de l'url
 		$requestUri = parse_url($this->request->getUrl(), PHP_URL_PATH);
        $uri        = str_replace('.html', '', $requestUri);
        $arrayUri   = explode('/', $uri);
        
        // Récupération de la page
        $controller = $arrayUri[0];
 		if ($controller === '')
 			$controller = 'home';

        // Récupération de l'action
        if (isset($arrayUri[1]) && $arrayUri[1] != '')
            $action = $arrayUri[1];
 		else
            $action = 'index';

        $this->request->setController($controller);
 		$this->request->setAction($action);
 	}
 
    /**
     * Gets the value of request.
     *
     * @return mixed
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets the value of request.
     *
     * @param mixed $request the request
     *
     * @return self
     */
    public function setRequest($request)
    {
        $this->request = $request;

        return $this;
    }
    
}