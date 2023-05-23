<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Region
 * 
 * @property int $id
 * @property string $name
 * @property string $ordinal
 * 
 * @property Collection|Colaborador[] $colaboradors
 * @property Collection|Commune[] $communes
 *
 * @package App\Models
 */
class Region extends Model
{
	protected $table = 'regions';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'ordinal'
	];

	public function colaboradors()
	{
		return $this->hasMany(Colaborador::class);
	}

	public function communes()
	{
		return $this->hasMany(Commune::class);
	}
}
