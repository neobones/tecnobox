<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reparacione
 * 
 * @property int $id_reparacion
 * @property string $reparacion
 *
 * @package App\Models
 */
class Reparacione extends Model
{
	protected $table = 'reparaciones';
	protected $primaryKey = 'id_reparacion';
	public $timestamps = false;

	protected $fillable = [
		'reparacion'
	];
}
