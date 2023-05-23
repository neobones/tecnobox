<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoColor
 * 
 * @property int $id
 * @property string|null $nombre
 * @property bool|null $activo
 * 
 * @property Collection|ProductosVendido[] $productos_vendidos
 *
 * @package App\Models
 */
class TipoColor extends Model
{
	protected $table = 'tipo_color';
	public $timestamps = false;

	protected $casts = [
		'activo' => 'bool'
	];

	protected $fillable = [
		'nombre',
		'activo'
	];

	public function productos_vendidos()
	{
		return $this->hasMany(ProductosVendido::class);
	}
}
