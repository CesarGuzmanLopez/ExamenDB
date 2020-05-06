<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TBdDetallesdepedido
 * 
 * @property int $IdPedido
 * @property int $IdProducto
 * @property float $preciounIdad
 * @property int $cantIdad
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property TBdPedido $t_bd_pedido
 * @property TBdProducto $t_bd_producto
 *
 * @package App\Models
 */
class TBdDetallesdepedido extends Model
{
	protected $table = 't_bd__detallesdepedidos';
	protected $primaryKey = 'IdPedido';

	protected $casts = [
		'IdProducto' => 'int',
		'preciounIdad' => 'float',
		'cantIdad' => 'int'
	];

	protected $fillable = [
		'IdProducto',
		'preciounIdad',
		'cantIdad'
	];

	public function t_bd_pedido()
	{
		return $this->belongsTo(TBdPedido::class, 'IdPedido');
	}

	public function t_bd_producto()
	{
		return $this->belongsTo(TBdProducto::class, 'IdProducto');
	}
}
