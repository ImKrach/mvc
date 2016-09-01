<?php

class Employe extends Personne
{
	protected $poste;
	public static $nombreEmploye = 0;
	
	function __construct($nom, $prenom, $poste)
	{
		parent::__construct($nom, $prenom);
		$this->poste = $poste;
		self::$nombreEmploye++;
	}
}