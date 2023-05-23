<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Catalogo
 * 
 * @property int $id
 * @property Carbon|null $fecha
 * @property string|null $sku
 * @property int|null $stock
 * @property int|null $precio
 * @property float|null $porcentaje
 * @property bool|null $estado
 *
 * @package App\Models
 */
class Catalogo extends Model
{
	protected $table = 'catalogo';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'stock' => 'int',
		'precio' => 'int',
		'porcentaje' => 'float',
		'estado' => 'bool'
	];

	protected $fillable = [
		'fecha',
		'sku',
		'stock',
		'precio',
		'porcentaje',
		'estado'
	];
}
