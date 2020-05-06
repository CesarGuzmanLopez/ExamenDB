<?php
/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TBdProducto
 * 
 * @property int $id_user
 * @property int $IdProducto
 * @property string $nombreProducto
 * @property int $IdProveedor
 * @property int $IdCategoria
 * @property int $Idcompaniaenvios
 * @property string $cantIdadPorUnIdad
 * @property string $precioUnIdad
 * @property int $unIdadesEnExistencia
 * @property int $unIdadesEnPedIdo
 * @property int $suspendIdo
 * @property string $categoriaProducto
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 * @property TBdCategoria $t_bd_categoria
 * @property TBdCompaniasdeenvio $t_bd_companiasdeenvio
 * @property TBdProveedore $t_bd_proveedore
 * @property Collection|TBdDetallesdepedido[] $t_bd__detallesdepedidos
 *
 * @package App\Models
 */
class TBdProducto extends Model
{
	protected $table = 't_bd__productos';
	protected $primaryKey = 'IdProducto';

	protected $casts = [
		'id_user' => 'int',
		'IdProveedor' => 'int',
		'IdCategoria' => 'int',
		'Idcompaniaenvios' => 'int',
		'unIdadesEnExistencia' => 'int',
		'unIdadesEnPedIdo' => 'int',
		'suspendIdo' => 'int'
	];

	protected $fillable = [
		'id_user',
		'nombreProducto',
		'IdProveedor',
		'IdCategoria',
		'Idcompaniaenvios',
		'cantIdadPorUnIdad',
		'precioUnIdad',
		'unIdadesEnExistencia',
		'unIdadesEnPedIdo',
		'suspendIdo',
		'categoriaProducto'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}

	public function t_bd_categoria()
	{
		return $this->belongsTo(TBdCategoria::class, 'IdCategoria');
	}

	public function t_bd_companiasdeenvio()
	{
		return $this->belongsTo(TBdCompaniasdeenvio::class, 'Idcompaniaenvios');
	}

	public function t_bd_proveedore()
	{
		return $this->belongsTo(TBdProveedore::class, 'IdProveedor');
	}

	public function t_bd__detallesdepedidos()
	{
		return $this->hasMany(TBdDetallesdepedido::class, 'IdProducto');
	}
}