<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Currency
 * 
 * @property int $id
 * @property string $name
 * @property string $symbol
 * @property string $precision
 * @property string $thousand_separator
 * @property string $decimal_separator
 * @property string $code
 *
 * @package App\Models
 */
class Currency extends Model
{
	protected $table = 'currencies';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'symbol',
		'precision',
		'thousand_separator',
		'decimal_separator',
		'code'
	];
}
