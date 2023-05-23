<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposDescuento
 * 
 * @property int $id_descuento
 * @property string $tipo_descuento
 * @property float|null $descuento
 * @property string|null $condicion
 *
 * @package App\Models
 */
class TiposDescuento extends Model
{
	protected $table = 'tipos_descuentos';
	protected $primaryKey = 'id_descuento';
	public $timestamps = false;

	protected $casts = [
		'descuento' => 'float'
	];

	protected $fillable = [
		'tipo_descuento',
		'descuento',
		'condicion'
	];
}
