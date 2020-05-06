<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TBdPedido
 * 
 * @property int $IdPedido
 * @property int $IdCliente
 * @property int $IdEmpleado
 * @property Carbon $FechaPedIdo
 * @property Carbon $FechaEntrega
 * @property Carbon $FechaEnvio
 * @property int $FormaEnvio
 * @property string $Nombre
 * @property string $cargo
 * @property string $Destinatario
 * @property string $DireccionDestinatario
 * @property string $CiudadDestinatario
 * @property string $RegionDestinatario
 * @property string $CodPostalDestinatario
 * @property string $PaisDestinatario
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property TBdCliente $t_bd_cliente
 * @property TBdEmpleado $t_bd_empleado
 * @property TBdDetallesdepedido $t_bd_detallesdepedido
 *
 * @package App\Models
 */
class TBdPedido extends Model
{
	protected $table = 't_bd__pedidos';
	protected $primaryKey = 'IdPedido';

	protected $casts = [
		'IdCliente' => 'int',
		'IdEmpleado' => 'int',
		'FormaEnvio' => 'int',
		'cago' => 'float'
	];

	protected $dates = [
		'FechaPedIdo',
		'FechaEntrega',
		'FechaEnvio'
	];

	protected $fillable = [
		'IdCliente',
		'IdEmpleado',
		'FechaPedIdo',
		'FechaEntrega',
		'FechaEnvio',
		'FormaEnvio',
		'cago',
		'Nombre',
		'cargo',
		'Destinatario',
		'DireccionDestinatario',
		'CiudadDestinatario',
		'RegionDestinatario',
		'CodPostalDestinatario',
		'PaisDestinatario'
	];

	public function t_bd_cliente()
	{
		return $this->belongsTo(TBdCliente::class, 'IdCliente');
	}

	public function t_bd_empleado()
	{
		return $this->belongsTo(TBdEmpleado::class, 'IdEmpleado');
	}

	public function t_bd_detallesdepedido()
	{
		return $this->hasOne(TBdDetallesdepedido::class, 'IdPedido');
	}
}
