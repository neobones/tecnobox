<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Resumenventa2
 * 
 * @property int $TOTAL
 * @property int $COMISION
 * @property int $LOCAL
 * @property int $FECHA
 *
 * @package App\Models
 */
class Resumenventa2 extends Model
{
	protected $table = 'resumenventa2';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'TOTAL' => 'int',
		'COMISION' => 'int',
		'LOCAL' => 'int',
		'FECHA' => 'int'
	];

	protected $fillable = [
		'TOTAL',
		'COMISION',
		'LOCAL',
		'FECHA'
	];
}
