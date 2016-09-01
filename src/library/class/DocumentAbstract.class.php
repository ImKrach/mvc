<?php 
	// Objet qui crée d'autres objets
	abstract class DocumentAbstract implements DocumentInterface
	{
		private $titre;
		private $contenu;

		// Création de la fonction de fabrique
		static public function factory($type, $params)
		{
			// On récupère le type de l'objet (la classe)
			$class = ucfirst($type);

			return new $class($params);
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
			if (!isset($params['contenu'])) {
				throw new Exception("No contenu", 1);
			}

			// On set les valeurs
			$this->titre 	= $params['titre'];
			$this->contenu 	= $params['contenu'];
		}

	}

 ?>