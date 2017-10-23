<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Sep 2017 21:42:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Carrito
 * 
 * @property int $id
 * @property int $id_users
 * 
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $productos
 *
 * @package App\Models
 */
class Carrito extends Eloquent
{
	protected $table = 'carrito';
	public $timestamps = false;

	protected $casts = [
		'id_users' => 'int'
	];

	protected $fillable = [
		'id_users'
	];

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'id_users');
	}

	public function productos()
	{
		return $this->hasMany(\App\Models\Producto::class, 'id_carrito');
	}
}
