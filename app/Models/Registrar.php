<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//Modelo del usuario
class Registrar extends Model {
	//Establece la tabla del modelo
	protected $table = 'registrar';
	//Datos rellenables de la tabla
	protected $fillable = [
		'registrar'
		
	];
}
 ?>