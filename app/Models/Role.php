<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//Modelo del usuario
class Role extends Model {
	//Establece la tabla del modelo
	protected $table = 'role';
	//Datos rellenables de la tabla
	protected $fillable = [
		'role',
		'idpermissions',
		'state'
	];
}
 ?>