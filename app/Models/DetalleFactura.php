<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleFactura
 * 
 * @property int $id_detalle
 * @property int $numero_factura
 * @property int $id_producto
 * @property int $cantidad
 * @property float $precio_venta
 *
 * @package App\Models
 */
class DetalleFactura extends Model
{
	protected $table = 'detalle_factura';
	protected $primaryKey = 'id_detalle';
	public $timestamps = false;

	protected $casts = [
		'numero_factura' => 'int',
		'id_producto' => 'int',
		'cantidad' => 'int',
		'precio_venta' => 'float'
	];

	protected $fillable = [
		'numero_factura',
		'id_producto',
		'cantidad',
		'precio_venta'
	];
}
