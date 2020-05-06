<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TBdProveedore
 * 
 * @property int $IdProveedor
 * @property string $nombrecompania
 * @property string $nombrecontacto
 * @property string $direccion
 * @property string $ciudad
 * @property string $region
 * @property string $codPostal
 * @property string $pais
 * @property string $telefono
 * @property string $fax
 * @property string $paginaprincipal
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|TBdProducto[] $t_bd__productos
 * @method TBdProveedore find() find(int)
 * @method TBdProveedore get() get(void)
 * 
 * @package App\Models
 */
class TBdProveedore extends Model
{
	protected $table = 't_bd__proveedores';
	protected $primaryKey = 'IdProveedor';

	protected $fillable = [
		'nombrecompania',
		'nombrecontacto',
		'direccion',
		'ciudad',
		'region',
		'codPostal',
		'pais',
		'telefono',
		'fax',
		'paginaprincipal'
	];

	public function t_bd__productos()
	{
		return $this->hasMany(TBdProducto::class, 'IdProveedor');
	}
}
