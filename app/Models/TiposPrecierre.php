<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposPrecierre
 * 
 * @property int $id_tipo_precierre
 * @property string $tipo_precierre
 *
 * @package App\Models
 */
class TiposPrecierre extends Model
{
	protected $table = 'tipos_precierres';
	protected $primaryKey = 'id_tipo_precierre';
	public $timestamps = false;

	protected $fillable = [
		'tipo_precierre'
	];
}
