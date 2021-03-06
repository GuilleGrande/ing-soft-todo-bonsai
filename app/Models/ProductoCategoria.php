<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Sep 2017 21:42:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProductoCategoria
 * 
 * @property int $id_producto
 * @property int $id_categoria
 * 
 * @property \App\Models\Categoria $categoria
 * @property \App\Models\Producto $producto
 *
 * @package App\Models
 */
class ProductoCategoria extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_producto' => 'int',
		'id_categoria' => 'int'
	];

	protected $fillable = [
		'id_producto',
		'id_categoria'
	];

	public function categoria()
	{
		return $this->belongsTo(\App\Models\Categoria::class, 'id_categoria');
	}

	public function producto()
	{
		return $this->belongsTo(\App\Models\Producto::class, 'id_producto');
	}
}
