<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tmp
 * 
 * @property int $id
 * @property string|null $id_prod
 * @property string $id_orden
 * @property int|null $item
 * @property string|null $nombre
 * @property string $marca
 * @property int $cantidad
 * @property string|null $inputState
 * @property float|null $precio
 * @property string|null $unidad
 * @property Carbon $fecha_modificacion
 * @property int|null $referencia
 * @property string|null $usuario
 *
 * @package App\Models
 */
class Tmp extends Model
{
	protected $table = 'tmp';
	public $timestamps = false;

	protected $casts = [
		'item' => 'int',
		'cantidad' => 'int',
		'precio' => 'float',
		'fecha_modificacion' => 'datetime',
		'referencia' => 'int'
	];

	protected $fillable = [
		'id_prod',
		'id_orden',
		'item',
		'nombre',
		'marca',
		'cantidad',
		'inputState',
		'precio',
		'unidad',
		'fecha_modificacion',
		'referencia',
		'usuario'
	];
}
