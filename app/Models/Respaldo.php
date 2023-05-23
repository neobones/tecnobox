<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Respaldo
 * 
 * @property int $id_respaldo
 * @property string $id_local
 * @property Carbon $fecha_registro
 * @property int|null $id_orden
 *
 * @package App\Models
 */
class Respaldo extends Model
{
	protected $table = 'respaldos';
	protected $primaryKey = 'id_respaldo';
	public $timestamps = false;

	protected $casts = [
		'fecha_registro' => 'datetime',
		'id_orden' => 'int'
	];

	protected $fillable = [
		'id_local',
		'fecha_registro',
		'id_orden'
	];
}
