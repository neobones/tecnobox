<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StockLocale
 * 
 * @property int $id_stock
 * @property string $id_prod
 * @property string|null $ident
 * @property string $id_local
 * @property int $stock
 * @property string|null $franquicia
 * @property float|null $precio_especial
 *
 * @package App\Models
 */
class StockLocale extends Model
{
	protected $table = 'stock_locales';
	protected $primaryKey = 'id_stock';
	public $timestamps = false;

	protected $casts = [
		'stock' => 'int',
		'precio_especial' => 'float'
	];

	protected $fillable = [
		'id_prod',
		'ident',
		'id_local',
		'stock',
		'franquicia',
		'precio_especial'
	];
}
