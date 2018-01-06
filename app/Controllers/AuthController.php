<?php 
namespace App\Controllers;

//Controlador de autenticacion
class AuthController extends Controller{

	//retorna a la vista del signup
	public function getSignUp($request, $response){
		return $this->view->render($response, 'auth/signup.twig');
	}
	
	//retorna a la vista del signup
	public function getLogin($request, $response){
		return $this->view->render($response, 'auth/login.twig');
	}
	//Extrae los parametros del formulario de signup los valida, crea un usuario nuevo y retorna a home
	/*public function postSignIn($request, $response){
		
	}*/
}
 ?>