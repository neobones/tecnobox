<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbSubcategorium
 * 
 * @property int $id
 * @property int $tb_categoria_id
 * @property string|null $nombre
 * @property string|null $icon
 * @property bool|null $expanded
 * @property bool|null $estado
 * 
 * @property TbCategorium $tb_categorium
 * @property Collection|TbSubcategoriaext[] $tb_subcategoriaexts
 *
 * @package App\Models
 */
class TbSubcategorium extends Model
{
	protected $table = 'tb_subcategoria';
	public $timestamps = false;

	protected $casts = [
		'tb_categoria_id' => 'int',
		'expanded' => 'bool',
		'estado' => 'bool'
	];

	protected $fillable = [
		'tb_categoria_id',
		'nombre',
		'icon',
		'expanded',
		'estado'
	];

	public function tb_categorium()
	{
		return $this->belongsTo(TbCategorium::class, 'tb_categoria_id');
	}

	public function tb_subcategoriaexts()
	{
		return $this->hasMany(TbSubcategoriaext::class, 'tb_subcategoria_id');
	}
}
