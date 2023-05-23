<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Resumenventum
 * 
 * @property float|null $TOTAL
 * @property float|null $COMISION
 * @property string|null $LOCAL
 * @property Carbon|null $FECHA
 *
 * @package App\Models
 */
class Resumenventum extends Model
{
	protected $table = 'resumenventa';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'TOTAL' => 'float',
		'COMISION' => 'float',
		'FECHA' => 'datetime'
	];

	protected $fillable = [
		'TOTAL',
		'COMISION',
		'LOCAL',
		'FECHA'
	];
}
