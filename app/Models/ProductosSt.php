<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductosSt
 * 
 * @property string $id
 * @property string|null $ident
 * @property string|null $nombre
 * @property string|null $marca
 * @property string $id_categoria
 * @property int $id_subcategoria
 * @property string|null $descripcion
 * @property float|null $precio
 * @property string $images
 * @property Carbon $date_added
 *
 * @package App\Models
 */
class ProductosSt extends Model
{
	protected $table = 'productos_st';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_subcategoria' => 'int',
		'precio' => 'float',
		'date_added' => 'datetime'
	];

	protected $fillable = [
		'ident',
		'nombre',
		'marca',
		'id_categoria',
		'id_subcategoria',
		'descripcion',
		'precio',
		'images',
		'date_added'
	];
}
