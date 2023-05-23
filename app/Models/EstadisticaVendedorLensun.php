<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadisticaVendedorLensun
 * 
 * @property int $RUT
 * @property int $Colaborador
 * @property int $CantidadVendido
 * @property int $Fecha
 *
 * @package App\Models
 */
class EstadisticaVendedorLensun extends Model
{
	protected $table = 'estadistica_vendedor_lensun';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'RUT' => 'int',
		'Colaborador' => 'int',
		'CantidadVendido' => 'int',
		'Fecha' => 'int'
	];

	protected $fillable = [
		'RUT',
		'Colaborador',
		'CantidadVendido',
		'Fecha'
	];
}
