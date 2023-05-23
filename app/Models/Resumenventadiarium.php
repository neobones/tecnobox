<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Resumenventadiarium
 * 
 * @property int $TOTAL
 * @property int $COMISION
 * @property int $LOCAL
 *
 * @package App\Models
 */
class Resumenventadiarium extends Model
{
	protected $table = 'resumenventadiaria';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'TOTAL' => 'int',
		'COMISION' => 'int',
		'LOCAL' => 'int'
	];

	protected $fillable = [
		'TOTAL',
		'COMISION',
		'LOCAL'
	];
}
