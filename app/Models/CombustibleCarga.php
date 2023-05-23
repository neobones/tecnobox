<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CombustibleCarga
 * 
 * @property int $id
 * @property Carbon|null $fecha
 * @property float|null $litros
 *
 * @package App\Models
 */
class CombustibleCarga extends Model
{
	protected $table = 'combustible_carga';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'litros' => 'float'
	];

	protected $fillable = [
		'fecha',
		'litros'
	];
}
