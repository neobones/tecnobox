<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HistAuditorium
 * 
 * @property int $id_auditoria
 * @property string $id_user
 * @property Carbon $fecha_ingreso
 * @property string $ruta
 * @property string|null $descripcion
 * @property string|null $json
 * @property float|null $preciodeproductoeliminado
 * @property int|null $id_orden
 * @property string|null $accion
 *
 * @package App\Models
 */
class HistAuditorium extends Model
{
	protected $table = 'hist_auditoria';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_auditoria' => 'int',
		'fecha_ingreso' => 'datetime',
		'preciodeproductoeliminado' => 'float',
		'id_orden' => 'int'
	];

	protected $fillable = [
		'id_auditoria',
		'id_user',
		'fecha_ingreso',
		'ruta',
		'descripcion',
		'json',
		'preciodeproductoeliminado',
		'id_orden',
		'accion'
	];
}
