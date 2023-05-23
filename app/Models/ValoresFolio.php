<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ValoresFolio
 * 
 * @property int $id_valor
 * @property int $FolioD
 * @property int $FolioH
 * @property int|null $FolioA
 * @property int|null $FolioMAX
 * @property string|null $rut
 * @property string|null $id_local
 * @property bool|null $estado
 *
 * @package App\Models
 */
class ValoresFolio extends Model
{
	protected $table = 'valores_folio';
	protected $primaryKey = 'id_valor';
	public $timestamps = false;

	protected $casts = [
		'FolioD' => 'int',
		'FolioH' => 'int',
		'FolioA' => 'int',
		'FolioMAX' => 'int',
		'estado' => 'bool'
	];

	protected $fillable = [
		'FolioD',
		'FolioH',
		'FolioA',
		'FolioMAX',
		'rut',
		'id_local',
		'estado'
	];
}
