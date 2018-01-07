<?php 
namespace App\Controllers;

//Controlador Domain
class DomainController extends Controller{

	//Retorna a la vista del home
	public function index($request, $response){
		return $this->view->render($response, 'domains/domains.twig');
	}

	//Retorna a la vista del Domain
	public function getAggDomain($request,$response){
		return $this->view->render($response, 'domains/aggdomain.twig');
	}

	//Retorna a la vista del Domain
	public function getDomain($request, $response, $args){
		return $this->view->render($response, 'domains/domaindetail.twig', [
        'domain' => $args['domain']
    ]);
	}


}

 ?>