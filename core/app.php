<?php 

	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;
	
	require_once __DIR__."/../vendor/autoload.php";

	$app = new \Slim\App([
			'settings' => [
				'determineRouteBeforeAppMiddleware' => true,
				'displayErrorDetails' => true,
				'addContentLengthHeader' => false
			]
		


			]);

	require_once __DIR__."/../app/routes.php";

 ?>