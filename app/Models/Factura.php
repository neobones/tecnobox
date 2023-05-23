<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 * 
 * @property int $id_factura
 * @property int $numero_factura
 * @property Carbon $fecha_factura
 * @property int $id_cliente
 * @property int $id_vendedor
 * @property string $condiciones
 * @property string $total_venta
 * @property bool $estado_factura
 *
 * @package App\Models
 */
class Factura extends Model
{
	protected $table = 'facturas';
	protected $primaryKey = 'id_factura';
	public $timestamps = false;

	protected $casts = [
		'numero_factura' => 'int',
		'fecha_factura' => 'datetime',
		'id_cliente' => 'int',
		'id_vendedor' => 'int',
		'estado_factura' => 'bool'
	];

	protected $fillable = [
		'numero_factura',
		'fecha_factura',
		'id_cliente',
		'id_vendedor',
		'condiciones',
		'total_venta',
		'estado_factura'
	];
}
