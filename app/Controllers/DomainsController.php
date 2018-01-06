<?php 
namespace App\Controllers;

//Controlador Domains
class DomainsController extends Controller{
	//Retorna a la vista del Domains
	public function index($request, $response){
		return $this->view->render($response, 'domains.twig');
	}
}

 ?>