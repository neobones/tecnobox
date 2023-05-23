<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HistDetalle
 * 
 * @property int $id
 * @property string $id_prod
 * @property int $id_orden
 * @property int|null $item
 * @property string $nombre
 * @property string $marca
 * @property int $cantidad
 * @property float $precio
 * @property string|null $estado
 *
 * @package App\Models
 */
class HistDetalle extends Model
{
	protected $table = 'hist_detalle';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_orden' => 'int',
		'item' => 'int',
		'cantidad' => 'int',
		'precio' => 'float'
	];

	protected $fillable = [
		'id',
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
