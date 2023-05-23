<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PerfilFactura
 * 
 * @property int $id_perfil
 * @property string $nombre_empresa
 * @property string $direccion
 * @property string $ciudad
 * @property string $codigo_postal
 * @property string $estado
 * @property string $telefono
 * @property string $email
 * @property int $impuesto
 * @property string $moneda
 * @property string $logo_url
 *
 * @package App\Models
 */
class PerfilFactura extends Model
{
	protected $table = 'perfil_factura';
	protected $primaryKey = 'id_perfil';
	public $timestamps = false;

	protected $casts = [
		'impuesto' => 'int'
	];

	protected $fillable = [
		'nombre_empresa',
		'direccion',
		'ciudad',
		'codigo_postal',
		'estado',
		'telefono',
		'email',
		'impuesto',
		'moneda',
		'logo_url'
	];
}
