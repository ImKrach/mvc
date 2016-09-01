<?php 

	class Singleton
	{
		
		private static $instance = null;
		
		private function __construct()
		{
			
		}

		private function __clone()
		{
			
		}

		public static function getInstance()
		{
			if (! self::$instance instanceof Singleton)
				self::$instance = new Singleton;
			
			return self::$instance;
		}

	}