<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//Modelo del usuario
class Users extends Model {
	//Establece la tabla del modelo
	protected $table = 'users';
	//Datos rellenables de la tabla
	protected $fillable = [
		'idemails',
		'password',
		'img',
		'idstatus'
	];
}
 ?>