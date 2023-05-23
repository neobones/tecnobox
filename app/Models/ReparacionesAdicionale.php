<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReparacionesAdicionale
 * 
 * @property int $id_reparaciones_adicionales
 * @property string $reparaciones_adicionales
 *
 * @package App\Models
 */
class ReparacionesAdicionale extends Model
{
	protected $table = 'reparaciones_adicionales';
	protected $primaryKey = 'id_reparaciones_adicionales';
	public $timestamps = false;

	protected $fillable = [
		'reparaciones_adicionales'
	];
}
