<?php 
namespace App\Controllers;

//Controlador home
class HomeController extends Controller{
	//Retorna a la vista del home
	public function index($request, $response){
		return $this->view->render($response, 'home.twig');
	}

	public function getAggDomain($request,$response){
		return $this->view->render($response, 'domains/aggdomain.twig');
	}
}

 ?>