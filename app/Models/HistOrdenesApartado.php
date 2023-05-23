<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HistOrdenesApartado
 * 
 * @property int $id_orden_apartado
 * @property int $orden_apartado
 * @property string|null $origen
 *
 * @package App\Models
 */
class HistOrdenesApartado extends Model
{
	protected $table = 'hist_ordenes_apartados';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_orden_apartado' => 'int',
		'orden_apartado' => 'int'
	];

	protected $fillable = [
		'id_orden_apartado',
		'orden_apartado',
		'origen'
	];
}
