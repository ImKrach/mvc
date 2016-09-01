<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Projet MVC</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>

		<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>


		<div id="conteneurLogo" class="container">
			<div class="row text-center">
				<img id="logoSite" src="img/logo2.png">
			</div>
		</div>

		<div id="conteneurPrincipal" class="container">
			<?php 
				require_once '../library/constantes.php';

				$db = new SingletonDatabase;
				Registry::set('db', $db);

				// Requête, réponse
				$request = new Request;
				$response = new Response;

				// Routage
				$router = new Router($request);
				$router->route();

				// Dispatching
				$dispatcher = new Dispatcher($request, $response);
				$dispatcher->dispatch();

				$response->send();
			?>
		</div>

	</body>
</html>