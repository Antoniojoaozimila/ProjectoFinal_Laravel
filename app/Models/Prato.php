<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prato
 * 
 * @property int $id
 * @property string $nome
 * @property string $categoria
 * @property string $descricao
 * @property string $preco
 * @property string $calorias
 * @property bool $destaque
 *
 * @package App\Models
 */
class Prato extends Model
{
	protected $table = 'pratos';
	public $timestamps = false;

	protected $casts = [
		'destaque' => 'bool'
	];

	protected $fillable = [
		'nome',
		'categoria',
		'descricao',
		'preco',
		'calorias',
		'destaque'
	];
}
