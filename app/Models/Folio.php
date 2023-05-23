<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Folio
 * 
 * @property int $id
 * @property Carbon $FecCreacion
 * @property int|null $FolioA
 * @property int $FolioD
 * @property int $FolioH
 * @property int $id_venta
 * @property string $Activo
 *
 * @package App\Models
 */
class Folio extends Model
{
	protected $table = 'folio';
	public $timestamps = false;

	protected $casts = [
		'FecCreacion' => 'datetime',
		'FolioA' => 'int',
		'FolioD' => 'int',
		'FolioH' => 'int',
		'id_venta' => 'int'
	];

	protected $fillable = [
		'FecCreacion',
		'FolioA',
		'FolioD',
		'FolioH',
		'id_venta',
		'Activo'
	];
}
