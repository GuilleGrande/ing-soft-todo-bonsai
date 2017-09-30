<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Sep 2017 19:55:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Carrito
 * 
 * @property int $id
 * @property int $id_usuario
 * 
 * @property \App\Models\Usuario $usuario
 * @property \Illuminate\Database\Eloquent\Collection $productos
 *
 * @package App\Models
 */
class Carrito extends Eloquent
{
	protected $table = 'Carrito';
	public $timestamps = false;

	protected $casts = [
		'id_usuario' => 'int'
	];

	protected $fillable = [
		'id_usuario'
	];

	public function usuario()
	{
		return $this->belongsTo(\App\Models\Usuario::class, 'id_usuario');
	}

	public function productos()
	{
		return $this->hasMany(\App\Models\Producto::class, 'id_carrito');
	}
}
