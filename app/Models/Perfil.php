<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Perfil
 * 
 * @property int $id
 * @property string $nombre_comercial
 * @property string $propietario
 * @property string $telefono
 * @property string $direccion
 * @property string $email
 * @property string $web
 *
 * @package App\Models
 */
class Perfil extends Model
{
	protected $table = 'perfil';
	public $timestamps = false;

	protected $fillable = [
		'nombre_comercial',
		'propietario',
		'telefono',
		'direccion',
		'email',
		'web'
	];
}
