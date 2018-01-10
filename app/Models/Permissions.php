<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//Modelo del usuario
class Permissions extends Model {
	//Establece la tabla del modelo
	protected $table = 'permissions';
	//Datos rellenables de la tabla
	protected $fillable = [
		'domainadd',
		'domainedit',
		'roleadd',
		'roleedit',
		'groupadd',
		'groupedit',
		'groupdelete',
		'userstate'
	];
}
 ?>