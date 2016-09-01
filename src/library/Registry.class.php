<?php 

class Registry
{
	private static $registry;

	public static function set($key, $value)
	{
		self::$registry[$key] = $value;
	}

	public static function get($key)
	{
		return self::$registry[$key];
	}
}