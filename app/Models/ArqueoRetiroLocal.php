<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArqueoRetiroLocal
 * 
 * @property int $id
 * @property Carbon|null $fecha
 * @property Carbon|null $fechaModificacion
 * @property string|null $sku
 * @property string|null $sigla
 * @property int|null $monto
 * @property string|null $cajero
 * @property string|null $ejecutor
 *
 * @package App\Models
 */
class ArqueoRetiroLocal extends Model
{
	protected $table = 'arqueo_retiro_local';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'fechaModificacion' => 'datetime',
		'monto' => 'int'
	];

	protected $fillable = [
		'fecha',
		'fechaModificacion',
		'sku',
		'sigla',
		'monto',
		'cajero',
		'ejecutor'
	];
}
