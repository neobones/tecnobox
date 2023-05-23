<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbProductosalmayor
 * 
 * @property string $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $marca
 * @property string $id_categoria
 * @property float $precio
 * @property int $cantidad
 * @property string $images
 * @property Carbon $date_added
 * 
 * @property Categoria $categoria
 *
 * @package App\Models
 */
class TbProductosalmayor extends Model
{
	protected $table = 'tb_productosalmayor';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'precio' => 'float',
		'cantidad' => 'int',
		'date_added' => 'datetime'
	];

	protected $fillable = [
		'nombre',
		'descripcion',
		'marca',
		'id_categoria',
		'precio',
		'cantidad',
		'images',
		'date_added'
	];

	public function categoria()
	{
		return $this->belongsTo(Categoria::class, 'id_categoria');
	}
}
