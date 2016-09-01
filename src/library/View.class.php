<?php 

class View
{
	private $file;
	
	function __construct($controllerName, $actionName)
	{
		$this->file = APPLICATION_PATH . DS . 'views' . DS . strtolower($controllerName) . DS . strtolower($actionName) . '.phtml';
	}

	public function render()
	{
		ob_start();
		require_once $this->file;
		return ob_get_clean();
	}


    /**
     * Gets the value of file.
     *
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets the value of file.
     *
     * @param mixed $file the file
     *
     * @return self
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }
}