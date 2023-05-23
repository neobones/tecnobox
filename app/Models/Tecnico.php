<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tecnico
 * 
 * @property int $id_tecnico
 * @property string $nombre_tecnico
 * @property int $rut
 * @property int $id_local_tecnico
 *
 * @package App\Models
 */
class Tecnico extends Model
{
	protected $table = 'tecnicos';
	protected $primaryKey = 'id_tecnico';
	public $timestamps = false;

	protected $casts = [
		'rut' => 'int',
		'id_local_tecnico' => 'int'
	];

	protected $fillable = [
		'nombre_tecnico',
		'rut',
		'id_local_tecnico'
	];
}
