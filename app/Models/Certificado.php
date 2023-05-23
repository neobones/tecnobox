<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Certificado
 * 
 * @property int $id
 * @property string|null $rut
 * @property string|null $comercial
 * @property string|null $razon
 * @property string|null $giro
 * @property string|null $direccion
 * @property string|null $comuna
 * @property string|null $ciudad
 * @property string|null $certificado
 * @property string|null $clave
 *
 * @package App\Models
 */
class Certificado extends Model
{
	protected $table = 'certificado';
	public $timestamps = false;

	protected $fillable = [
		'rut',
		'comercial',
		'razon',
		'giro',
		'direccion',
		'comuna',
		'ciudad',
		'certificado',
		'clave'
	];
}
