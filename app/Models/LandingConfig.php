<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LandingConfig
 * 
 * @property int $id
 * @property string|null $sigla
 * @property string|null $origen
 * @property string|null $destino
 * @property bool|null $estado
 *
 * @package App\Models
 */
class LandingConfig extends Model
{
	protected $table = 'landing_config';
	public $timestamps = false;

	protected $casts = [
		'estado' => 'bool'
	];

	protected $fillable = [
		'sigla',
		'origen',
		'destino',
		'estado'
	];
}
