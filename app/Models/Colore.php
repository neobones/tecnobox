<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Colore
 * 
 * @property int $id_color
 * @property string $color
 *
 * @package App\Models
 */
class Colore extends Model
{
	protected $table = 'colores';
	protected $primaryKey = 'id_color';
	public $timestamps = false;

	protected $fillable = [
		'color'
	];
}
