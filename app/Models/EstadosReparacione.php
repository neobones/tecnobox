<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadosReparacione
 * 
 * @property int $id_estado_reparacion
 * @property string $estado_reparacion
 *
 * @package App\Models
 */
class EstadosReparacione extends Model
{
	protected $table = 'estados_reparaciones';
	protected $primaryKey = 'id_estado_reparacion';
	public $timestamps = false;

	protected $fillable = [
		'estado_reparacion'
	];
}
