<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadosServicio
 * 
 * @property int $id_estado
 * @property string $estado
 * 
 * @property Collection|OrdenServicioTecnico[] $orden_servicio_tecnicos
 *
 * @package App\Models
 */
class EstadosServicio extends Model
{
	protected $table = 'estados_servicios';
	protected $primaryKey = 'id_estado';
	public $timestamps = false;

	protected $fillable = [
		'estado'
	];

	public function orden_servicio_tecnicos()
	{
		return $this->hasMany(OrdenServicioTecnico::class, 'id_estado');
	}
}
