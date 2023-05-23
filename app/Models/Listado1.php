<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Listado1
 * 
 * @property int $id_prod
 * @property int $id_local
 * @property int $ident
 * @property int $nombre
 * @property int $descripcion
 * @property int $marca
 * @property int $id_categoria
 * @property int $precio
 * @property int $stock
 * @property int $images
 * @property int $sala
 *
 * @package App\Models
 */
class Listado1 extends Model
{
	protected $table = 'listado1';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_prod' => 'int',
		'id_local' => 'int',
		'ident' => 'int',
		'nombre' => 'int',
		'descripcion' => 'int',
		'marca' => 'int',
		'id_categoria' => 'int',
		'precio' => 'int',
		'stock' => 'int',
		'images' => 'int',
		'sala' => 'int'
	];

	protected $fillable = [
		'id_prod',
		'id_local',
		'ident',
		'nombre',
		'descripcion',
		'marca',
		'id_categoria',
		'precio',
		'stock',
		'images',
		'sala'
	];
}
