<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Sep 2017 19:55:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Usuario
 * 
 * @property int $id
 * @property string $nombre
 * @property string $email
 * @property string $clave
 * 
 * @property \Illuminate\Database\Eloquent\Collection $carritos
 *
 * @package App\Models
 */
class Usuario extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'email',
		'clave'
	];

	public function carritos()
	{
		return $this->hasMany(\App\Models\Carrito::class, 'id_usuario');
	}
}
