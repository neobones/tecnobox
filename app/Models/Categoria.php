<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 * 
 * @property string $id_categoria
 * @property string $descripcion_categoria
 * @property Carbon $date_added
 * 
 * @property Collection|TbProducto[] $tb_productos
 * @property Collection|TbProductosalmayor[] $tb_productosalmayors
 *
 * @package App\Models
 */
class Categoria extends Model
{
	protected $table = 'categorias';
	protected $primaryKey = 'id_categoria';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'date_added' => 'datetime'
	];

	protected $fillable = [
		'descripcion_categoria',
		'date_added'
	];

	public function tb_productos()
	{
		return $this->hasMany(TbProducto::class, 'id_categoria');
	}

	public function tb_productosalmayors()
	{
		return $this->hasMany(TbProductosalmayor::class, 'id_categoria');
	}
}
