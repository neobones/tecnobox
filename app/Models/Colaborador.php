<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Colaborador
 * 
 * @property int $id
 * @property string|null $rut
 * @property string|null $nombres
 * @property string|null $apellido_paterno
 * @property string|null $apellido_materno
 * @property string|null $direccion
 * @property int|null $region_id
 * @property int|null $comuna_id
 * @property string|null $correo
 * @property string|null $telefono
 * @property int|null $tipo_usuario
 * @property string|null $comercial
 * @property string|null $codigo
 * @property string|null $codigoAutorizacion
 * @property bool|null $estado
 * @property string|null $foto
 * @property string|null $fotoext
 * 
 * @property Region|null $region
 * @property Commune|null $commune
 * @property TiposUsuario|null $tipos_usuario
 *
 * @package App\Models
 */
class Colaborador extends Model
{
	protected $table = 'colaborador';
	public $timestamps = false;

	protected $casts = [
		'region_id' => 'int',
		'comuna_id' => 'int',
		'tipo_usuario' => 'int',
		'estado' => 'bool'
	];

	protected $fillable = [
		'rut',
		'nombres',
		'apellido_paterno',
		'apellido_materno',
		'direccion',
		'region_id',
		'comuna_id',
		'correo',
		'telefono',
		'tipo_usuario',
		'comercial',
		'codigo',
		'codigoAutorizacion',
		'estado',
		'foto',
		'fotoext'
	];

	public function region()
	{
		return $this->belongsTo(Region::class);
	}

	public function commune()
	{
		return $this->belongsTo(Commune::class, 'comuna_id');
	}

	public function tipos_usuario()
	{
		return $this->belongsTo(TiposUsuario::class, 'tipo_usuario');
	}
}
