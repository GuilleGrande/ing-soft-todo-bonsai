<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Sep 2017 21:42:19 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Producto
 * 
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property float $precio
 * @property int $disponibilidad
 * @property int $id_carrito
 * 
 * @property \App\Models\Carrito $carrito
 * @property \App\Models\ProductoCategoria $producto_categoria
 *
 * @package App\Models
 */
class Producto extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'precio' => 'float',
		'disponibilidad' => 'int',
		'id_carrito' => 'int'
	];

	protected $fillable = [
		'nombre',
		'descripcion',
		'precio',
		'disponibilidad',
		'id_carrito'
	];

	public function carrito()
	{
		return $this->belongsTo(\App\Models\Carrito::class, 'id_carrito');
	}

	public function producto_categoria()
	{
		return $this->hasOne(\App\Models\ProductoCategoria::class, 'id_producto');
	}
}
