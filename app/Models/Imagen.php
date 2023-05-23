<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Imagen
 * 
 * @property int $id
 * @property string|null $productoId
 * @property string|null $imagen
 * @property Carbon|null $fechaCarga
 * @property Carbon|null $fechaModificacion
 * @property bool|null $visible
 *
 * @package App\Models
 */
class Imagen extends Model
{
	protected $table = 'imagen';
	public $timestamps = false;

	protected $casts = [
		'fechaCarga' => 'datetime',
		'fechaModificacion' => 'datetime',
		'visible' => 'bool'
	];

	protected $fillable = [
		'productoId',
		'imagen',
		'fechaCarga',
		'fechaModificacion',
		'visible'
	];
}
