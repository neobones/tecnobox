<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AuditoriaProducto
 * 
 * @property int $id
 * @property Carbon|null $fecha
 * @property string|null $usuario
 * @property string|null $tienda
 * @property string|null $accion
 * @property int|null $stock
 * @property string|null $sku
 *
 * @package App\Models
 */
class AuditoriaProducto extends Model
{
	protected $table = 'auditoria_producto';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'stock' => 'int'
	];

	protected $fillable = [
		'fecha',
		'usuario',
		'tienda',
		'accion',
		'stock',
		'sku'
	];
}
