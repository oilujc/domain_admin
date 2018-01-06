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
	//Incluir el controlador en el contenedor
	$container['AuthController'] = function($container) {
		return new App\Controllers\Auth\AuthController($container);
	};
	//Incluir el controlador en el contenedor
	$container['DomainsController'] = function($container) {
		return new App\Controllers\DomainsController($container);
	};

	//Incluir el controlador en el contenedor
	$container['RoleController'] = function($container) {
		return new App\Controllers\RoleController($container);
	};
	//Incluir el controlador en el contenedor
	$container['UsersController'] = function($container) {
		return new App\Controllers\UsersController($container);
	};
	//Incluir el controlador en el contenedor
	$container['GroupsController'] = function($container) {
		return new App\Controllers\GroupsController($container);
	};

	require_once __DIR__."/../app/routes.php";

 ?>