<?php 

abstract class Controller implements ControllerInterface
{
	private $request;
	private $response;
	protected $view;

	function __construct(Request $request, Response $response)
	{
		$this->request 	= $request;
		$this->response = $response;
		$this->view = new View($request->getController(), $request->getAction());
	}

    function __destruct()
    {
        $this->response->setBody($this->view->render());
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

    /**
     * Gets the value of response.
     *
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets the value of response.
     *
     * @param mixed $response the response
     *
     * @return self
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Gets the value of view.
     *
     * @return mixed
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Sets the value of view.
     *
     * @param mixed $view the view
     *
     * @return self
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }
}