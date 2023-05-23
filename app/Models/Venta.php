<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 * 
 * @property int $id
 * @property Carbon $fecha
 * @property float|null $subtotal
 * @property float|null $total
 * @property string $id_local
 * @property string $procesador
 * @property string|null $procesador_venta_efectivo
 * @property float|null $cantidad_recibida_tarjeta
 * @property bool $tipo_descuento
 * @property string|null $glosaAutorizacion
 * @property float|null $descuento
 * @property int|null $porcentaje_descuento
 * @property float $cantidad_recibida
 * @property string $tipo_comprobante
 * @property int|null $folio
 * @property string|null $codigo_vendedor
 * @property string|null $correo_cliente
 * @property string|null $rut_cliente
 * @property string|null $codigo_promocion
 * @property string|null $respuestaSII
 *
 * @package App\Models
 */
class Venta extends Model
{
	protected $table = 'ventas';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'subtotal' => 'float',
		'total' => 'float',
		'cantidad_recibida_tarjeta' => 'float',
		'tipo_descuento' => 'bool',
		'descuento' => 'float',
		'porcentaje_descuento' => 'int',
		'cantidad_recibida' => 'float',
		'folio' => 'int'
	];

	protected $fillable = [
		'fecha',
		'subtotal',
		'total',
		'id_local',
		'procesador',
		'procesador_venta_efectivo',
		'cantidad_recibida_tarjeta',
		'tipo_descuento',
		'glosaAutorizacion',
		'descuento',
		'porcentaje_descuento',
		'cantidad_recibida',
		'tipo_comprobante',
		'folio',
		'codigo_vendedor',
		'correo_cliente',
		'rut_cliente',
		'codigo_promocion',
		'respuestaSII'
	];
}
