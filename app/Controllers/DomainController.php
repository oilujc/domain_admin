<?php 
namespace App\Controllers;

//Controlador Domain
class DomainController extends Controller{
	//Retorna a la vista del Domain
	public function index($request, $response, $args){
		return $this->view->render($response, 'domains/domaindetail.twig', [
        'domain' => $args['domain']
    ]);
	}
}

 ?>