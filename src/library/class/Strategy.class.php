<?php 

interface IWrite {

	public function write($message);
}

class ILogger implements IWrite
{
	protected $file = null;

	function __construct($file)
	{
		$this->file = $file;
	}

	public function write($message)
	{
		file_put_contents($this->file, array(PHP_EOL, $message), FILE_APPEND);
	}
}

