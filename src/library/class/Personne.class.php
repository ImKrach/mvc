<?php 

class Personne
{
	protected $nom;
	protected $prenom;
	static protected $nombreEmploye = 0;

	function __construct($nom, $prenom)
	{
		$this->nom = $nom;
		$this->prenom = $prenom;
	}
}
	
?>