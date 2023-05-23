<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbSubcategoriaext
 * 
 * @property int $id
 * @property int $tb_categoria_id
 * @property int $tb_subcategoria_id
 * @property string|null $nombre
 * @property string|null $icon
 * @property bool|null $expanded
 * @property bool|null $estado
 * 
 * @property TbCategorium $tb_categorium
 * @property TbSubcategorium $tb_subcategorium
 *
 * @package App\Models
 */
class TbSubcategoriaext extends Model
{
	protected $table = 'tb_subcategoriaext';
	public $timestamps = false;

	protected $casts = [
		'tb_categoria_id' => 'int',
		'tb_subcategoria_id' => 'int',
		'expanded' => 'bool',
		'estado' => 'bool'
	];

	protected $fillable = [
		'tb_categoria_id',
		'tb_subcategoria_id',
		'nombre',
		'icon',
		'expanded',
		'estado'
	];

	public function tb_categorium()
	{
		return $this->belongsTo(TbCategorium::class, 'tb_categoria_id');
	}

	public function tb_subcategorium()
	{
		return $this->belongsTo(TbSubcategorium::class, 'tb_subcategoria_id');
	}
}
