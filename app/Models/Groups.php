<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//Modelo del usuario
class Groups extends Model {
	//Establece la tabla del modelo
	protected $table = 'groups';
	//Datos rellenables de la tabla
	protected $fillable = [
		'group'
		
	];
}
 ?>