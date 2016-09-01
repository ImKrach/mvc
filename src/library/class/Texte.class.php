<?php 

	class Texte extends DocumentAbstract
	{

		private $auteur;
		
		function __construct($params)
		{
			$this->setOptions($params);
			parent::setOptions($params);
		}

		public function setOptions($params)
		{
			// Vérification que $params est bien un tableau
			if (! is_array($params)) {
				throw new Exception("Not array", 1);
			}

			// Vérification de la validité des champs 
			if (!isset($params['titre'])) {
				throw new Exception("No titre", 1);
			}

			// Vérification de la validité des champs 
			if (!isset($params['auteur'])) {
				throw new Exception("No auteur", 1);
			}

			// Vérification de la validité des champs 
			if (!isset($params['contenu'])) {
				throw new Exception("No contenu", 1);
			}

			// On set les valeurs
			$this->auteur = $params['auteur'];
		}
	}

?>