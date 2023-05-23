<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Devolucione
 * 
 * @property int $id_devolucion
 * @property string $id_local
 * @property string $nombre_cliente
 * @property string $id_prod
 * @property int|null $cantidad
 * @property string $razon
 * @property string $estado
 * @property Carbon $fecha_devolucion
 * @property Carbon $fecha_registro
 * @property bool|null $visible
 * @property bool $revisado
 *
 * @package App\Models
 */
class Devolucione extends Model
{
	protected $table = 'devoluciones';
	protected $primaryKey = 'id_devolucion';
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int',
		'fecha_devolucion' => 'datetime',
		'fecha_registro' => 'datetime',
		'visible' => 'bool',
		'revisado' => 'bool'
	];

	protected $fillable = [
		'id_local',
		'nombre_cliente',
		'id_prod',
		'cantidad',
		'razon',
		'estado',
		'fecha_devolucion',
		'fecha_registro',
		'visible',
		'revisado'
	];
}
