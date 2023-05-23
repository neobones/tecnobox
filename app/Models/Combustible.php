<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Combustible
 * 
 * @property int $id
 * @property Carbon|null $fechaCarga
 * @property string|null $rutConductor
 * @property string|null $nombreConductor
 * @property float|null $kilometrajeAntesCarga
 * @property float|null $kilometrajeDespuesCarga
 * @property float|null $litrosCargados
 * @property string|null $nombreVehiculo
 * @property string|null $patente
 *
 * @package App\Models
 */
class Combustible extends Model
{
	protected $table = 'combustible';
	public $timestamps = false;

	protected $casts = [
		'fechaCarga' => 'datetime',
		'kilometrajeAntesCarga' => 'float',
		'kilometrajeDespuesCarga' => 'float',
		'litrosCargados' => 'float'
	];

	protected $fillable = [
		'fechaCarga',
		'rutConductor',
		'nombreConductor',
		'kilometrajeAntesCarga',
		'kilometrajeDespuesCarga',
		'litrosCargados',
		'nombreVehiculo',
		'patente'
	];
}
