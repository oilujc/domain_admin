<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//Modelo del usuario
class Domain extends Model {
	//Establece la tabla del modelo
	protected $table = 'domain';
	//Datos rellenables de la tabla
	protected $fillable = [
		'name',
		'idregistrar',
		'idregistrantemail',
		'idadminemail',
		'idgroup',
		'idnameservers',
		'iduse',
		'addedaccountdate',
		'registrycreateddate',
		'updatedate',
		'expirydate',
		'whois',
		'autorenew',
		'transferlocked',
		'authcode',
		'state',
		'state'
	];
}
 ?>