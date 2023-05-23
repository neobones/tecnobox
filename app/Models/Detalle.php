<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detalle
 * 
 * @property int $id
 * @property string $id_prod
 * @property int $id_orden
 * @property int|null $item
 * @property string|null $nombre
 * @property string $marca
 * @property int $cantidad
 * @property float $precio
 * @property string|null $estado
 *
 * @package App\Models
 */
class Detalle extends Model
{
	protected $table = 'detalle';
	public $timestamps = false;

	protected $casts = [
		'id_orden' => 'int',
		'item' => 'int',
		'cantidad' => 'int',
		'precio' => 'float'
	];

	protected $fillable = [
		'id_prod',
		'id_orden',
		'item',
		'nombre',
		'marca',
		'cantidad',
		'precio',
		'estado'
	];
}
