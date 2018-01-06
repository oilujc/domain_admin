<?php 
namespace App\Controllers;

//Controlador Group
class GroupsController extends Controller{
	//Retorna a la vista del Group
	public function index($request, $response){
		return $this->view->render($response, 'group.twig');
	}
}

 ?>