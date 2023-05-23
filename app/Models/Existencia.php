<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Existencia
 * 
 * @property int $id_existencia
 * @property string $existencia
 *
 * @package App\Models
 */
class Existencia extends Model
{
	protected $table = 'existencias';
	protected $primaryKey = 'id_existencia';
	public $timestamps = false;

	protected $fillable = [
		'existencia'
	];
}
