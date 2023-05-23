<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HistOrdene
 * 
 * @property int $id
 * @property int $id_orden
 * @property int $id_detalle
 * @property string $id_prod
 * @property string $user_name
 * @property Carbon $fecha
 * @property string $id_local
 * @property float $monto
 * @property bool|null $impreso
 * @property string|null $origen
 * @property int|null $referencia
 *
 * @package App\Models
 */
class HistOrdene extends Model
{
	protected $table = 'hist_ordenes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id_orden' => 'int',
		'id_detalle' => 'int',
		'fecha' => 'datetime',
		'monto' => 'float',
		'impreso' => 'bool',
		'referencia' => 'int'
	];

	protected $fillable = [
		'id',
		'id_orden',
		'id_detalle',
		'id_prod',
		'user_name',
		'fecha',
		'id_local',
		'monto',
		'impreso',
		'origen',
		'referencia'
	];
}
