<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ImagenesRespaldo
 * 
 * @property int $id_imagen_respaldo
 * @property int $id_respaldo
 * @property string $documento
 * @property string $ruta
 *
 * @package App\Models
 */
class ImagenesRespaldo extends Model
{
	protected $table = 'imagenes_respaldo';
	protected $primaryKey = 'id_imagen_respaldo';
	public $timestamps = false;

	protected $casts = [
		'id_respaldo' => 'int'
	];

	protected $fillable = [
		'id_respaldo',
		'documento',
		'ruta'
	];
}
