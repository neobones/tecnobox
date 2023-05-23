<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbLocale
 * 
 * @property int $id
 * @property string $id_local
 * @property string $sigla
 * @property string|null $siglaMaestro
 * @property string|null $alias
 * @property string $comercial
 * @property string $giro
 * @property string $giro2
 * @property string $giro3
 * @property string $rut
 * @property string $region
 * @property string $comuna
 * @property string $ubicacion
 * @property string $direccion
 * @property string $correo
 * @property string $telefono
 * @property string $franquicia
 * 
 * @property Collection|OrdenServicioTecnico[] $orden_servicio_tecnicos
 * @property Collection|StockSt[] $stock_sts
 *
 * @package App\Models
 */
class TbLocale extends Model
{
	protected $table = 'tb_locales';
	public $timestamps = false;

	protected $fillable = [
		'id_local',
		'sigla',
		'siglaMaestro',
		'alias',
		'comercial',
		'giro',
		'giro2',
		'giro3',
		'rut',
		'region',
		'comuna',
		'ubicacion',
		'direccion',
		'correo',
		'telefono',
		'franquicia'
	];

	public function orden_servicio_tecnicos()
	{
		return $this->hasMany(OrdenServicioTecnico::class, 'id_local', 'id_local');
	}

	public function stock_sts()
	{
		return $this->hasMany(StockSt::class, 'id_local', 'id_local');
	}
}
