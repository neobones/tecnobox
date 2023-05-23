<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbCategorium
 * 
 * @property int $id
 * @property string|null $nombre
 * @property string|null $icon
 * @property bool|null $expanded
 * @property bool|null $estado
 * 
 * @property Collection|TbSubcategorium[] $tb_subcategoria
 * @property Collection|TbSubcategoriaext[] $tb_subcategoriaexts
 *
 * @package App\Models
 */
class TbCategorium extends Model
{
	protected $table = 'tb_categoria';
	public $timestamps = false;

	protected $casts = [
		'expanded' => 'bool',
		'estado' => 'bool'
	];

	protected $fillable = [
		'nombre',
		'icon',
		'expanded',
		'estado'
	];

	public function tb_subcategoria()
	{
		return $this->hasMany(TbSubcategorium::class, 'tb_categoria_id');
	}

	public function tb_subcategoriaexts()
	{
		return $this->hasMany(TbSubcategoriaext::class, 'tb_categoria_id');
	}
}
