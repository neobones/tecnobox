<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Precierre
 * 
 * @property int $id_precierre
 * @property int|null $monto_inicial
 * @property int|null $id_tipo_precierre
 * @property string|null $id_local
 * @property string|null $cajero
 * @property int|null $boleta_manual
 * @property int|null $boleta_electronica
 * @property int|null $recompra_deb
 * @property int|null $recompra_cred
 * @property int|null $billete_5
 * @property int|null $billete_10
 * @property int|null $billete_50
 * @property int|null $billete_100
 * @property int|null $billete_500
 * @property int|null $billete_1000
 * @property int|null $billete_2000
 * @property int|null $billete_5000
 * @property int|null $billete_10000
 * @property int|null $billete_20000
 * @property int|null $cheque
 * @property int|null $giftcard
 * @property int|null $facturas_efectivo
 * @property int|null $notas_credito
 * @property int|null $total_precierre
 * @property Carbon|null $fecha_registro
 * @property int|null $transferencia
 * @property int|null $caja_fuerte
 * @property int|null $total_efectivo
 * @property int|null $total_gastos
 * @property int|null $total_factura
 *
 * @package App\Models
 */
class Precierre extends Model
{
	protected $table = 'precierres';
	protected $primaryKey = 'id_precierre';
	public $timestamps = false;

	protected $casts = [
		'monto_inicial' => 'int',
		'id_tipo_precierre' => 'int',
		'boleta_manual' => 'int',
		'boleta_electronica' => 'int',
		'recompra_deb' => 'int',
		'recompra_cred' => 'int',
		'billete_5' => 'int',
		'billete_10' => 'int',
		'billete_50' => 'int',
		'billete_100' => 'int',
		'billete_500' => 'int',
		'billete_1000' => 'int',
		'billete_2000' => 'int',
		'billete_5000' => 'int',
		'billete_10000' => 'int',
		'billete_20000' => 'int',
		'cheque' => 'int',
		'giftcard' => 'int',
		'facturas_efectivo' => 'int',
		'notas_credito' => 'int',
		'total_precierre' => 'int',
		'fecha_registro' => 'datetime',
		'transferencia' => 'int',
		'caja_fuerte' => 'int',
		'total_efectivo' => 'int',
		'total_gastos' => 'int',
		'total_factura' => 'int'
	];

	protected $fillable = [
		'monto_inicial',
		'id_tipo_precierre',
		'id_local',
		'cajero',
		'boleta_manual',
		'boleta_electronica',
		'recompra_deb',
		'recompra_cred',
		'billete_5',
		'billete_10',
		'billete_50',
		'billete_100',
		'billete_500',
		'billete_1000',
		'billete_2000',
		'billete_5000',
		'billete_10000',
		'billete_20000',
		'cheque',
		'giftcard',
		'facturas_efectivo',
		'notas_credito',
		'total_precierre',
		'fecha_registro',
		'transferencia',
		'caja_fuerte',
		'total_efectivo',
		'total_gastos',
		'total_factura'
	];
}
