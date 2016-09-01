<?php 

class Dossier
{
	public $name;
	public $listDocuments;

	
	function __construct($name)
	{
		$this->name = $name;
	}

	public function addDocument(DocumentInterface $document)
	{
		$this->listDocuments[] = $document;
	}
}

 ?>