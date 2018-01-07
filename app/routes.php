<?php 
	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;
	

	//Ruta home
	$app->get('/' , 'HomeController:index')->setName('home');

	//Ruta login
	$app->get('/login' , 'AuthController:getLogin')->setName('auth.login');

	//Ruta signup
	$app->get('/signup' , 'AuthController:getSignUp')->setName('auth.signup');

	//Ruta groups
	$app->get('/groups' , 'GroupsController:index')->setName('groups');

	//Ruta role
	$app->get('/role' , 'RoleController:index')->setName('role');

	//Ruta users
	$app->get('/users' , 'UsersController:index')->setName('users');

	//Ruta domains
	$app->get('/domains' , 'DomainController:index')->setName('domains');

	//Ruta agg domain
	$app->get('/domains/new' , 'DomainController:getAggDomain')->setName('newdomain');


	//Ruta domains
	$app->get('/domains/{domain}' , 'DomainController:getDomain');
 ?>