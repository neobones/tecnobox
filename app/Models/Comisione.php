<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comisione
 * 
 * @property int $idVenta
 * @property int $fechaVenta
 * @property int $idLocal
 * @property int $idProducto
 * @property int $cantidad
 * @property int $nombreProducto
 * @property int $codigoVendedor
 * @property int $nombreVendedor
 * @property int $precio
 * @property int $porcentajeComision
 * @property int $valorComision
 *
 * @package App\Models
 */
class Comisione extends Model
{
	protected $table = 'comisiones';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idVenta' => 'int',
		'fechaVenta' => 'int',
		'idLocal' => 'int',
		'idProducto' => 'int',
		'cantidad' => 'int',
		'nombreProducto' => 'int',
		'codigoVendedor' => 'int',
		'nombreVendedor' => 'int',
		'precio' => 'int',
		'porcentajeComision' => 'int',
		'valorComision' => 'int'
	];

	protected $fillable = [
		'idVenta',
		'fechaVenta',
		'idLocal',
		'idProducto',
		'cantidad',
		'nombreProducto',
		'codigoVendedor',
		'nombreVendedor',
		'precio',
		'porcentajeComision',
		'valorComision'
	];
}
