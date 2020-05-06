<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TBdCompaniasdeenvio
 * 
 * @property int $Idcompaniaenvios
 * @property string $nombrecompania
 * @property string $telefono
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Collection|TBdProducto[] $t_bd__productos
 * @package App\Models
 * 	
 */

class TBdCompaniasdeenvio extends Model
{
	protected $table = 't_bd__companiasdeenvios';
	protected $primaryKey = 'Idcompaniaenvios';
	protected $fillable = [
		'nombrecompania',
		'telefono'
	];

	public function t_bd__productos()
	{
		return $this->hasMany(TBdProducto::class, 'Idcompaniaenvios');
	}
}