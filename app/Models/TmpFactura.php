<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TmpFactura
 * 
 * @property int $id_tmp
 * @property string $id
 * @property int $cantidad_tmp
 * @property float|null $precio_tmp
 * @property string $session_id
 *
 * @package App\Models
 */
class TmpFactura extends Model
{
	protected $table = 'tmp_factura';
	protected $primaryKey = 'id_tmp';
	public $timestamps = false;

	protected $casts = [
		'cantidad_tmp' => 'int',
		'precio_tmp' => 'float'
	];

	protected $fillable = [
		'id',
		'cantidad_tmp',
		'precio_tmp',
		'session_id'
	];
}
