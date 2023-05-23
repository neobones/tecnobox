<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Resumencomisione
 * 
 * @property int $idVenta
 * @property Carbon $fechaVenta
 * @property string $idLocal
 * @property string|null $idProducto
 * @property int $cantidad
 * @property string|null $nombreProducto
 * @property string|null $codigoVendedor
 * @property string|null $nombreVendedor
 * @property float|null $precio
 * @property float|null $porcentajeComision
 * @property float|null $valorComision
 *
 * @package App\Models
 */
class Resumencomisione extends Model
{
	protected $table = 'resumencomisiones';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idVenta' => 'int',
		'fechaVenta' => 'datetime',
		'cantidad' => 'int',
		'precio' => 'float',
		'porcentajeComision' => 'float',
		'valorComision' => 'float'
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
