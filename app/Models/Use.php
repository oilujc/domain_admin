<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//Modelo del usuario
class Use extends Model {
	//Establece la tabla del modelo
	protected $table = 'use';
	//Datos rellenables de la tabla
	protected $fillable = [
		'use'
	];
}
 ?>