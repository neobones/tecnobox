<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Commune
 * 
 * @property int $id
 * @property string $name
 * @property int|null $region_id
 * 
 * @property Region|null $region
 * @property Collection|Colaborador[] $colaboradors
 *
 * @package App\Models
 */
class Commune extends Model
{
	protected $table = 'communes';
	public $timestamps = false;

	protected $casts = [
		'region_id' => 'int'
	];

	protected $fillable = [
		'name',
		'region_id'
	];

	public function region()
	{
		return $this->belongsTo(Region::class);
	}

	public function colaboradors()
	{
		return $this->hasMany(Colaborador::class, 'comuna_id');
	}
}
