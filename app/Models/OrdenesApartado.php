<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrdenesApartado
 * 
 * @property int $id_orden_apartado
 * @property int $orden_apartado
 * @property string|null $origen
 *
 * @package App\Models
 */
class OrdenesApartado extends Model
{
	protected $table = 'ordenes_apartados';
	protected $primaryKey = 'id_orden_apartado';
	public $timestamps = false;

	protected $casts = [
		'orden_apartado' => 'int'
	];

	protected $fillable = [
		'orden_apartado',
		'origen'
	];
}
