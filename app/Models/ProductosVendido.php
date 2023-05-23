<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductosVendido
 * 
 * @property int $id
 * @property string $id_prod
 * @property string|null $nombre
 * @property int $cantidad
 * @property string $id_venta
 * @property string|null $procesador
 * @property int|null $precio
 * @property int|null $precio_total
 * @property bool|null $tipo_descuento
 * @property float|null $descuento
 * @property int|null $total_descuento
 * @property string|null $tipo_comprobante
 * @property int|null $modelo_celular_id
 * @property int|null $modelo_tablet_id
 * @property int|null $modelo_smartwatches_id
 * @property int|null $tipo_color_id
 * @property int|null $tipo_design_id
 * 
 * @property ModeloCelular|null $modelo_celular
 * @property ModeloSmartwatch|null $modelo_smartwatch
 * @property ModeloTablet|null $modelo_tablet
 * @property TipoColor|null $tipo_color
 * @property TipoDesign|null $tipo_design
 *
 * @package App\Models
 */
class ProductosVendido extends Model
{
	protected $table = 'productos_vendidos';
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int',
		'precio' => 'int',
		'precio_total' => 'int',
		'tipo_descuento' => 'bool',
		'descuento' => 'float',
		'total_descuento' => 'int',
		'modelo_celular_id' => 'int',
		'modelo_tablet_id' => 'int',
		'modelo_smartwatches_id' => 'int',
		'tipo_color_id' => 'int',
		'tipo_design_id' => 'int'
	];

	protected $fillable = [
		'id_prod',
		'nombre',
		'cantidad',
		'id_venta',
		'procesador',
		'precio',
		'precio_total',
		'tipo_descuento',
		'descuento',
		'total_descuento',
		'tipo_comprobante',
		'modelo_celular_id',
		'modelo_tablet_id',
		'modelo_smartwatches_id',
		'tipo_color_id',
		'tipo_design_id'
	];

	public function modelo_celular()
	{
		return $this->belongsTo(ModeloCelular::class);
	}

	public function modelo_smartwatch()
	{
		return $this->belongsTo(ModeloSmartwatch::class, 'modelo_smartwatches_id');
	}

	public function modelo_tablet()
	{
		return $this->belongsTo(ModeloTablet::class);
	}

	public function tipo_color()
	{
		return $this->belongsTo(TipoColor::class);
	}

	public function tipo_design()
	{
		return $this->belongsTo(TipoDesign::class);
	}
}
