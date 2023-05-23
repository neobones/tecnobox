<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Visibilidad
 * 
 * @property int $id_visibilidad
 * @property string $ruta
 * @property string|null $usuario
 * @property int $user_tipo
 * @property bool $visibilidad
 * @property bool $agregar
 * @property bool $modificar
 * @property bool $eliminar
 * 
 * @property TiposUsuario $tipos_usuario
 *
 * @package App\Models
 */
class Visibilidad extends Model
{
	protected $table = 'visibilidad';
	protected $primaryKey = 'id_visibilidad';
	public $timestamps = false;

	protected $casts = [
		'user_tipo' => 'int',
		'visibilidad' => 'bool',
		'agregar' => 'bool',
		'modificar' => 'bool',
		'eliminar' => 'bool'
	];

	protected $fillable = [
		'ruta',
		'usuario',
		'user_tipo',
		'visibilidad',
		'agregar',
		'modificar',
		'eliminar'
	];

	public function tipos_usuario()
	{
		return $this->belongsTo(TiposUsuario::class, 'user_tipo');
	}
}
