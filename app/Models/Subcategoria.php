<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subcategoria
 * 
 * @property int $id_subcategoria
 * @property string $subcategoria
 *
 * @package App\Models
 */
class Subcategoria extends Model
{
	protected $table = 'subcategorias';
	protected $primaryKey = 'id_subcategoria';
	public $timestamps = false;

	protected $fillable = [
		'subcategoria'
	];
}
