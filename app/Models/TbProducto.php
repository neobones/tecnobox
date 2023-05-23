<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbProducto
 * 
 * @property string $id
 * @property string $ident
 * @property string $nombre
 * @property string $descripcion
 * @property string $marca
 * @property string $id_categoria
 * @property string $sala
 * @property float $costo
 * @property float $costo_neto
 * @property float $precio
 * @property float $mayorista
 * @property float|null $mayorista_neto
 * @property float $precio_franquicia
 * @property float $precio_franquicia_neto
 * @property string $proveedor
 * @property string|null $impuesto
 * @property float|null $peso
 * @property float|null $alto
 * @property float|null $largo
 * @property float|null $ancho
 * @property string $images
 * @property int $estado
 * @property Carbon $date_added
 * @property float|null $porcentaje_comision
 * @property float|null $valor_comision
 * @property string|null $resena
 * @property int|null $maximo_falta
 * @property string|null $barcode
 * @property string|null $qrcode
 * @property string|null $qrcodepublic
 * @property int|null $tb_categoria_id
 * @property int|null $tb_subcategoria_id
 * @property int|null $tb_subcategoriaext_id
 * 
 * @property Categoria $categoria
 *
 * @package App\Models
 */
class TbProducto extends Model
{
	protected $table = 'tb_productos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'costo' => 'float',
		'costo_neto' => 'float',
		'precio' => 'float',
		'mayorista' => 'float',
		'mayorista_neto' => 'float',
		'precio_franquicia' => 'float',
		'precio_franquicia_neto' => 'float',
		'peso' => 'float',
		'alto' => 'float',
		'largo' => 'float',
		'ancho' => 'float',
		'estado' => 'int',
		'date_added' => 'datetime',
		'porcentaje_comision' => 'float',
		'valor_comision' => 'float',
		'maximo_falta' => 'int',
		'tb_categoria_id' => 'int',
		'tb_subcategoria_id' => 'int',
		'tb_subcategoriaext_id' => 'int'
	];

	protected $fillable = [
		'ident',
		'nombre',
		'descripcion',
		'marca',
		'id_categoria',
		'sala',
		'costo',
		'costo_neto',
		'precio',
		'mayorista',
		'mayorista_neto',
		'precio_franquicia',
		'precio_franquicia_neto',
		'proveedor',
		'impuesto',
		'peso',
		'alto',
		'largo',
		'ancho',
		'images',
		'estado',
		'date_added',
		'porcentaje_comision',
		'valor_comision',
		'resena',
		'maximo_falta',
		'barcode',
		'qrcode',
		'qrcodepublic',
		'tb_categoria_id',
		'tb_subcategoria_id',
		'tb_subcategoriaext_id'
	];

	public function categoria()
	{
		return $this->belongsTo(Categoria::class, 'id_categoria');
	}
}
