<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 30 Sep 2017 19:55:56 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Categorium
 * 
 * @property int $id
 * @property string $nombre
 * 
 * @property \App\Models\ProductoCategorium $producto_categorium
 *
 * @package App\Models
 */
class Categorium extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];

	public function producto_categorium()
	{
		return $this->hasOne(\App\Models\ProductoCategorium::class, 'id_categoria');
	}
}
