<?php 
	/* Un client commandant une pizza. */
	$serveur = new Serveur();
	$monteurPizzaHawaii = new MonteurPizzaHawaii();
	$monteurPizzaPiquante = new MonteurPizzaPiquante();

	$serveur->setMonteurPizza($monteurPizzaHawaii);
	$serveur->construirePizza();

	$pizza = $serveur->getPizza();

	print_r($pizza);

	echo "\n";

	/* Préparation des traces */
	$trace = "Pate : " . $pizza->getPate() . ", Sauce : " . $pizza->getSauce() . ", Garniture : " . $pizza->getGarniture() . "\n";

	/* Ecriture de logs */
	$logs = new ILogger("logs/premiere_commande.txt");
	
	$logs->write($trace);

	print_r($logs);

	/* Méthode Stratégie */

	// Log html
	$formatter = new Formatter_HTML();
	$logStrategy = new Logger_File($formatter, "logs/premiere_commande.html");
	$logStrategy->write($trace);

	$donneesHTML = file_get_contents($logStrategy->getFile());

	// Log BDD
	$formatter = new Formatter_String();
	$logDatabase = new Logger_DB($formatter, $db);
	$logDatabase->write($trace);

?>