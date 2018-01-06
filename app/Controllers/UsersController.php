<?php 
namespace App\Controllers;

//Controlador Users
class UsersController extends Controller{
	//Retorna a la vista del Users
	public function index($request, $response){
		return $this->view->render($response, 'users.twig');
	}
}

 ?>