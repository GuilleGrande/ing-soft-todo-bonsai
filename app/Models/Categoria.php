<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Sep 2017 21:42:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Categoria
 * 
 * @property int $id
 * @property string $nombre
 * 
 * @property \App\Models\ProductoCategorium $producto_categoria
 *
 * @package App\Models
 */
class Categoria extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];

	public function producto_categoria()
	{
		return $this->hasOne(\App\Models\ProductoCategoria::class, 'id_categoria');
	}
}
