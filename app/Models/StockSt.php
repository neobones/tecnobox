<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StockSt
 * 
 * @property int $id_stock
 * @property string $id_prod
 * @property string $id_categoria
 * @property string $id_local
 * @property int $stock
 * 
 * @property TbLocale $tb_locale
 *
 * @package App\Models
 */
class StockSt extends Model
{
	protected $table = 'stock_st';
	protected $primaryKey = 'id_stock';
	public $timestamps = false;

	protected $casts = [
		'stock' => 'int'
	];

	protected $fillable = [
		'id_prod',
		'id_categoria',
		'id_local',
		'stock'
	];

	public function tb_locale()
	{
		return $this->belongsTo(TbLocale::class, 'id_local', 'id_local');
	}
}
