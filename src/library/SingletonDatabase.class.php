<?php 

class SingletonDatabase extends PDO
{
	function __construct()
	{
		try {
			parent::__construct('mysql:host=127.0.0.1;port=3306;dbname=ecole;');
		} catch (Exception $e) {
			echo "Erreur de connexion PDO : " . $e->getMessage();
		}
	}
}