<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Landing
 * 
 * @property int $id
 * @property Carbon|null $fechaCaptado
 * @property string|null $origen
 * @property string|null $destino
 * @property string|null $sigla
 * @property string|null $rut
 * @property string|null $correo
 * @property string|null $ip
 *
 * @package App\Models
 */
class Landing extends Model
{
	protected $table = 'landing';
	public $timestamps = false;

	protected $casts = [
		'fechaCaptado' => 'datetime'
	];

	protected $fillable = [
		'fechaCaptado',
		'origen',
		'destino',
		'sigla',
		'rut',
		'correo',
		'ip'
	];
}
