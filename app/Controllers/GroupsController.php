<?php 
namespace App\Controllers;

//Controlador Group
class GroupsController extends Controller{
	public function index($request, $response){
		return $this->view->render($response, 'groups/groups.twig');
	}
	//Retorna a la vista del Group
	public function getGroupConfig($request, $response){
		return $this->view->render($response, 'groups/groupconfig.twig');
	}
	//Retorna a la vista del Group
	public function getGroupNew($request, $response){
		return $this->view->render($response, 'groups/groupnew.twig');
	}
}

 ?>