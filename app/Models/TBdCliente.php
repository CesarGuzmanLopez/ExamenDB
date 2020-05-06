<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TBdCliente
 * 
 * @property int $IdCliente
 * @property string $nombrecompania
 * @property string $NombreContacto
 * @property string $CargoContacto
 * @property string $Direccion
 * @property string $Ciudad
 * @property string $Region
 * @property string $CodPostal
 * @property string $Pais
 * @property string $Telefono
 * @property string $Fax
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|TBdPedido[] $t_bd__pedidos
 *
 * @package App\Models
 */
class TBdCliente extends Model
{
	protected $table = 't_bd__clientes';
	protected $primaryKey = 'IdCliente';

	protected $fillable = [
		'nombrecompania',
		'NombreContacto',
		'CargoContacto',
		'Direccion',
		'Ciudad',
		'Region',
		'CodPostal',
		'Pais',
		'Telefono',
		'Fax'
	];

	public function t_bd__pedidos()
	{
		return $this->hasMany(TBdPedido::class, 'IdCliente');
	}
}
