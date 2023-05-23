<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposUsuario
 * 
 * @property int $id_tipo
 * @property string $tipo_usuario
 * 
 * @property Collection|Colaborador[] $colaboradors
 * @property Collection|User[] $users
 * @property Collection|Visibilidad[] $visibilidads
 *
 * @package App\Models
 */
class TiposUsuario extends Model
{
	protected $table = 'tipos_usuarios';
	protected $primaryKey = 'id_tipo';
	public $timestamps = false;

	protected $fillable = [
		'tipo_usuario'
	];

	public function colaboradors()
	{
		return $this->hasMany(Colaborador::class, 'tipo_usuario');
	}

	public function users()
	{
		return $this->hasMany(User::class, 'tipo_usuario');
	}

	public function visibilidads()
	{
		return $this->hasMany(Visibilidad::class, 'user_tipo');
	}
}
