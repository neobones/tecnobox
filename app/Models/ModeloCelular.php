<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ModeloCelular
 * 
 * @property int $id
 * @property string|null $nombre
 * @property bool|null $activo
 * 
 * @property Collection|ProductosVendido[] $productos_vendidos
 *
 * @package App\Models
 */
class ModeloCelular extends Model
{
	protected $table = 'modelo_celular';
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
