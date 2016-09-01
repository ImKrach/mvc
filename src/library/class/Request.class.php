<?php 

class Request
{
	private $url;
	private $method;
	private $params = [];

	function __construct()
	{
		$this->url = trim($_SERVER['REQUEST_URI'], '/');
		$this->method = $_SERVER['REQUEST_METHOD'];
		$this->params = $_REQUEST;
	}

    /**
     * Gets the value of url.
     *
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets the value of url.
     *
     * @param mixed $url the url
     *
     * @return self
     */
    private function _setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Gets the value of method.
     *
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets the value of method.
     *
     * @param mixed $method the method
     *
     * @return self
     */
    private function _setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Gets the value of params.
     *
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Sets the value of params.
     *
     * @param mixed $params the params
     *
     * @return self
     */
    private function _setParams($params)
    {
        $this->params = $params;

        return $this;
    }
}