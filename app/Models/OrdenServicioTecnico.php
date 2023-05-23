<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrdenServicioTecnico
 * 
 * @property int $id_ost
 * @property int $id_orden
 * @property Carbon $fecha_recepcion
 * @property Carbon $hora_recepcion
 * @property string|null $id_local
 * @property string $usuario_recepcion
 * @property string $nombre_cliente
 * @property string|null $telefono
 * @property string $rut
 * @property string|null $email
 * @property string|null $marca
 * @property string|null $modelo
 * @property string|null $serial
 * @property int|null $color
 * @property string $condiciones
 * @property string|null $trabajo_realizar
 * @property float $costo_orden
 * @property int $id_estado
 * @property string|null $retiro
 * @property Carbon|null $fecha_entrega
 * @property string|null $id_local_st
 * @property string|null $usuario_devolucion
 * @property Carbon|null $fecha_retiro
 * @property Carbon|null $fecha_devolucion
 * @property string|null $devolucion
 * @property string|null $voucher
 * @property string|null $imagen_voucher
 * 
 * @property EstadosServicio $estados_servicio
 * @property TbLocale|null $tb_locale
 *
 * @package App\Models
 */
class OrdenServicioTecnico extends Model
{
	protected $table = 'orden_servicio_tecnico';
	protected $primaryKey = 'id_ost';
	public $timestamps = false;

	protected $casts = [
		'id_orden' => 'int',
		'fecha_recepcion' => 'datetime',
		'hora_recepcion' => 'datetime',
		'color' => 'int',
		'costo_orden' => 'float',
		'id_estado' => 'int',
		'fecha_entrega' => 'datetime',
		'fecha_retiro' => 'datetime',
		'fecha_devolucion' => 'datetime'
	];

	protected $fillable = [
		'id_orden',
		'fecha_recepcion',
		'hora_recepcion',
		'id_local',
		'usuario_recepcion',
		'nombre_cliente',
		'telefono',
		'rut',
		'email',
		'marca',
		'modelo',
		'serial',
		'color',
		'condiciones',
		'trabajo_realizar',
		'costo_orden',
		'id_estado',
		'retiro',
		'fecha_entrega',
		'id_local_st',
		'usuario_devolucion',
		'fecha_retiro',
		'fecha_devolucion',
		'devolucion',
		'voucher',
		'imagen_voucher'
	];

	public function estados_servicio()
	{
		return $this->belongsTo(EstadosServicio::class, 'id_estado');
	}

	public function tb_locale()
	{
		return $this->belongsTo(TbLocale::class, 'id_local', 'id_local');
	}
}
