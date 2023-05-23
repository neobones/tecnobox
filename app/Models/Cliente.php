<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id_cliente
 * @property string $nombre_cliente
 * @property string $telefono_cliente
 * @property string $email_cliente
 * @property string $direccion_cliente
 * @property int $status_cliente
 * @property Carbon $date_added
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'clientes';
	protected $primaryKey = 'id_cliente';
	public $timestamps = false;

	protected $casts = [
		'status_cliente' => 'int',
		'date_added' => 'datetime'
	];

	protected $fillable = [
		'nombre_cliente',
		'telefono_cliente',
		'email_cliente',
		'direccion_cliente',
		'status_cliente',
		'date_added'
	];
}
