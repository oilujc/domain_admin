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

	//Obtener el contenedor
	$container = $app->getContainer();

	//Incluir las vistas en el contenedor
	$container['view'] = function($container){
		$view = new \Slim\Views\Twig(__DIR__."/../resources/views",[
			'cache' => false,
		]);
		$view->addExtension(new \Slim\Views\TwigExtension(
			$container->router,
			$container->request->getUri()
		));
		return $view;
	};

	//Incluir el controlador en el contenedor
	$container['HomeController'] = function($container) {
		return new App\Controllers\HomeController($container);
	};

	require_once __DIR__."/../app/routes.php";

 ?>