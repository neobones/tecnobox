<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $user_name
 * @property string $user_password_hash
 * @property string $user_email
 * @property int $tipo_usuario
 * @property Carbon $date_added
 * 
 * @property TiposUsuario $tipos_usuario
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'user_id';
	public $timestamps = false;

	protected $casts = [
		'tipo_usuario' => 'int',
		'date_added' => 'datetime'
	];

	protected $fillable = [
		'firstname',
		'lastname',
		'user_name',
		'user_password_hash',
		'user_email',
		'tipo_usuario',
		'date_added'
	];

	public function tipos_usuario()
	{
		return $this->belongsTo(TiposUsuario::class, 'tipo_usuario');
	}
}
