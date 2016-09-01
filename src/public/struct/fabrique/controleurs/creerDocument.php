<?php 

	require_once '../../../class/DocumentInterface.class.php';
	require_once '../../../class/DocumentAbstract.class.php';
	require_once '../../../class/Dossier.class.php';
	require_once '../../../class/Lettre.class.php';
	require_once '../../../class/Texte.class.php';

	$document = DocumentAbstract::factory($_POST["type"], $_POST);

	$dossier = new Dossier('Mon dossier');
	$dossier->addDocument($document);


	echo "<pre>";
		print_r($dossier);
	echo "</pre>";
?>