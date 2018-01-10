<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//Modelo del usuario
class Nameservers extends Model {
	//Establece la tabla del modelo
	protected $table = 'nameservers';
	//Datos rellenables de la tabla
	protected $fillable = [
		'nameserver'
		
	];
}
 ?>