<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//Modelo del usuario
class Status extends Model {
	//Establece la tabla del modelo
	protected $table = 'status';
	//Datos rellenables de la tabla
	protected $fillable = [
		'status'
	];
}
 ?>