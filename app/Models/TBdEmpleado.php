<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TBdEmpleado
 * 
 * @property int $IdEmpleado
 * @property string $ApellIdos
 * @property string $Nombre
 * @property string $cargo
 * @property string $Tratamiento
 * @property Carbon $FechaNacimiento
 * @property Carbon $FechaContratacion
 * @property string $direccion
 * @property string $ciudad
 * @property string $codPostal
 * @property string $Jefe
 * @property string $TelDomicilio
 * @property string $Notas
 * @property int $Extension
 * @property float $sueldoBasico
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|TBdPedido[] $t_bd__pedidos
 *
 * @package App\Models
 */
class TBdEmpleado extends Model
{
	protected $table = 't_bd__empleados';
	protected $primaryKey = 'IdEmpleado';

	protected $casts = [
		'Extension' => 'int',
		'sueldoBasico' => 'float'
	];

	protected $dates = [
		'FechaNacimiento',
		'FechaContratacion'
	];

	protected $fillable = [
		'ApellIdos',
		'Nombre',
		'cargo',
		'Tratamiento',
		'FechaNacimiento',
		'FechaContratacion',
		'direccion',
		'ciudad',
		'codPostal',
		'Jefe',
		'TelDomicilio',
		'Notas',
		'Extension',
		'sueldoBasico'
	];

	public function t_bd__pedidos()
	{
		return $this->hasMany(TBdPedido::class, 'IdEmpleado');
	}
}
