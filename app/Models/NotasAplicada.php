<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NotasAplicada
 * 
 * @property int $id_nota_aplicada
 * @property int $id_orden
 * @property string $id_local
 * @property string $aplicacion
 *
 * @package App\Models
 */
class NotasAplicada extends Model
{
	protected $table = 'notas_aplicadas';
	protected $primaryKey = 'id_nota_aplicada';
	public $timestamps = false;

	protected $casts = [
		'id_orden' => 'int'
	];

	protected $fillable = [
		'id_orden',
		'id_local',
		'aplicacion'
	];
}
