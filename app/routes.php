<?php 
	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;
	

	//Ruta home
	$app->get('/' , 'HomeController:index')->setName('home');


 ?>