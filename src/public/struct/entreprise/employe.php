<?php 
	require_once '../class/Singleton.class.php';
	require_once '../class/Registry.class.php';
	require_once '../class/Personne.class.php';
	require_once '../class/Employe.class.php';

	var_dump($GLOBALS);
	
	$employe1 = $GLOBALS["Registry"]["Employe1"];
	$employe2 = $GLOBALS["Registry"]["Employe2"];
	$individu = $GLOBALS["Registry"]["Individu"];


	print_r($employe1);
	print_r($employe2);
	print_r($individu);

?>