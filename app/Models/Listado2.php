<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Listado2
 * 
 * @property int $id_prod
 * @property int $id_local
 * @property int $franquicia
 * @property int $stock
 * @property int $nombre
 * @property int $descripcion
 * @property int $marca
 * @property int $id_categoria
 * @property int $precio
 * @property int $images
 * @property int $precio_especial
 * @property int $precio_franquicia
 * @property int $mayorista
 * @property int $modelo_celular
 * @property int $modelo_tablet
 * @property int $modelo_smartwatches
 * @property int $tipo_color
 * @property int $tipo_design
 * @property int $fechaCreacion
 *
 * @package App\Models
 */
class Listado2 extends Model
{
	protected $table = 'listado2';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_prod' => 'int',
		'id_local' => 'int',
		'franquicia' => 'int',
		'stock' => 'int',
		'nombre' => 'int',
		'descripcion' => 'int',
		'marca' => 'int',
		'id_categoria' => 'int',
		'precio' => 'int',
		'images' => 'int',
		'precio_especial' => 'int',
		'precio_franquicia' => 'int',
		'mayorista' => 'int',
		'modelo_celular' => 'int',
		'modelo_tablet' => 'int',
		'modelo_smartwatches' => 'int',
		'tipo_color' => 'int',
		'tipo_design' => 'int',
		'fechaCreacion' => 'int'
	];

	protected $fillable = [
		'id_prod',
		'id_local',
		'franquicia',
		'stock',
		'nombre',
		'descripcion',
		'marca',
		'id_categoria',
		'precio',
		'images',
		'precio_especial',
		'precio_franquicia',
		'mayorista',
		'modelo_celular',
		'modelo_tablet',
		'modelo_smartwatches',
		'tipo_color',
		'tipo_design',
		'fechaCreacion'
	];
}
