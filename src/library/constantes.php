<?php 
	
	define('DS', DIRECTORY_SEPARATOR);
	defined('SRC_PATH') ||
		define('SRC_PATH', dirname(dirname(__FILE__)));
	defined('PUBLIC_PATH') ||
		define('PUBLIC_PATH', SRC_PATH . DS . 'public');

	defined('APPLICATION_PATH') ||
		define('APPLICATION_PATH', SRC_PATH . DS . 'application');
	defined('CONTROLLERS_PATH') ||
		define('CONTROLLERS_PATH', APPLICATION_PATH . DS . 'controllers');

	defined('LIBRARY_PATH') ||
		define('LIBRARY_PATH', SRC_PATH . DS . 'library');


	function __autoload($class_name) {
		if (file_exists(LIBRARY_PATH . DS . $class_name . '.class.php'))  
			include LIBRARY_PATH . DS . $class_name . '.class.php';

		if (file_exists(CONTROLLERS_PATH . DS . $class_name . '.class.php'))
			include CONTROLLERS_PATH . DS . $class_name . '.class.php';
	}