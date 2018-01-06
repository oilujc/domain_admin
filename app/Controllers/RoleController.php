<?php 
namespace App\Controllers;

//Controlador Role
class RoleController extends Controller{
	//Retorna a la vista del Role
	public function index($request, $response){
		return $this->view->render($response, 'role.twig');
	}
}

 ?>