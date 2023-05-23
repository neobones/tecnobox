<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ServicioTecnico
 * 
 * @property int $id_st
 * @property int $id_ost
 * @property int $id_orden
 * @property string $tecnico
 * @property string $informe_tecnico
 * @property Carbon|null $fecha_recepcion
 * @property Carbon|null $fecha_reparacion
 * @property Carbon|null $fecha_devolucion
 * @property float|null $costo_servicio
 * @property float|null $total_servicio
 * @property int $id_estado_reparacion
 * @property int $cantidad_reparaciones
 * @property string $reparacion
 * @property string|null $reparacion2
 * @property string|null $reparacion3
 * @property string|null $producto_st_id
 * @property string|null $producto_st_id2
 * @property string|null $producto_st_id3
 * @property string|null $devolucion
 *
 * @package App\Models
 */
class ServicioTecnico extends Model
{
	protected $table = 'servicio_tecnico';
	protected $primaryKey = 'id_st';
	public $timestamps = false;

	protected $casts = [
		'id_ost' => 'int',
		'id_orden' => 'int',
		'fecha_recepcion' => 'datetime',
		'fecha_reparacion' => 'datetime',
		'fecha_devolucion' => 'datetime',
		'costo_servicio' => 'float',
		'total_servicio' => 'float',
		'id_estado_reparacion' => 'int',
		'cantidad_reparaciones' => 'int'
	];

	protected $fillable = [
		'id_ost',
		'id_orden',
		'tecnico',
		'informe_tecnico',
		'fecha_recepcion',
		'fecha_reparacion',
		'fecha_devolucion',
		'costo_servicio',
		'total_servicio',
		'id_estado_reparacion',
		'cantidad_reparaciones',
		'reparacion',
		'reparacion2',
		'reparacion3',
		'producto_st_id',
		'producto_st_id2',
		'producto_st_id3',
		'devolucion'
	];
}
