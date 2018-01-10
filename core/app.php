<?php 

	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;
	
	require_once __DIR__."/../vendor/autoload.php";

	$app = new \Slim\App([
			'settings' => [
				'determineRouteBeforeAppMiddleware' => true,
				'displayErrorDetails' => true,
				'addContentLengthHeader' => false,

				//Agregar la config de la base de datos
			'db' => [
					'driver' => 'mysql',
					'host' => 'localhost',
					'database' => 'rebardomain',
					'username' => 'root',
					'password' => '',
					'charset' => 'utf8',
					'collation' => 'utf8_general_ci',
					'prefix' => '',
				]
			]
		]);

	//Obtener el contenedor
	$container = $app->getContainer();

	//Instanciar el db manager
	$capsule = new Illuminate\Database\Capsule\Manager;

	//Agregar la conexion a la bd
	$capsule->addConnection($container['settings']['db']);

	//Hacer que capsule este disponible globalmente a traves de metodos estaticos
	$capsule->setAsGlobal();

	//Configurar el Eloquent ORM
	$capsule->bootEloquent();

	//Añadir capsule en el contenedor
	$container['db'] = function($container) use ($capsule){
		return $capsule;
	};

	//Añadir Validator en el contenedor
	$container['validator'] = function($container) {
		return new App\Validation\Validator;
	};

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
		return new App\Controllers\AuthController($container);
	};
	//Incluir el controlador en el contenedor
	$container['DomainController'] = function($container) {
		return new App\Controllers\DomainController($container);
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

	//Añade el middleware de los errores de validacion a la app
	$app->add(new App\Middleware\ValidationErrorsMiddleware($container));
	require_once __DIR__."/../app/routes.php";

 ?>