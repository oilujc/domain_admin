<?php 
	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;
	

	//Ruta home
	$app->get('/' , 'HomeController:index')->setName('home');

	//Ruta login
	$app->get('/login' , 'AuthController:getLogin')->setName('auth.login');

	//Ruta signup
	$app->get('/signup' , 'AuthController:getSignUp')->setName('auth.signup');

	//Ruta domains
	$app->get('/domains' , 'DomainsController:index')->setName('domains');

	//Ruta groups
	$app->get('/groups' , 'GroupsController:index')->setName('groups');

	//Ruta role
	$app->get('/role' , 'RoleController:index')->setName('role');

	//Ruta users
	$app->get('/users' , 'UsersController:index')->setName('users');


 ?>