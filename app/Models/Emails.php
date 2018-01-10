<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//Modelo del usuario
class Emails extends Model {
	//Establece la tabla del modelo
	protected $table = 'emails';
	//Datos rellenables de la tabla
	protected $fillable = [
		'email',
		'idrole',
		'name'
		
	];
}
 ?>