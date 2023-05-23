<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reportefaltum
 * 
 * @property int $id
 * @property string|null $FaltaProceso
 * @property int|null $FaltaProcesoRef
 * @property string|null $id_local
 * @property Carbon|null $FaltaProcesoFecha
 * @property string|null $FaltaProcesoAsistente
 * @property Carbon|null $FaltaTerminadaFecha
 * @property string|null $FaltaTerminadaAsistente
 * @property Carbon|null $termino
 * @property bool|null $respaldo
 *
 * @package App\Models
 */
class Reportefaltum extends Model
{
	protected $table = 'reportefalta';
	public $timestamps = false;

	protected $casts = [
		'FaltaProcesoRef' => 'int',
		'FaltaProcesoFecha' => 'datetime',
		'FaltaTerminadaFecha' => 'datetime',
		'termino' => 'datetime',
		'respaldo' => 'bool'
	];

	protected $fillable = [
		'FaltaProceso',
		'FaltaProcesoRef',
		'id_local',
		'FaltaProcesoFecha',
		'FaltaProcesoAsistente',
		'FaltaTerminadaFecha',
		'FaltaTerminadaAsistente',
		'termino',
		'respaldo'
	];
}
