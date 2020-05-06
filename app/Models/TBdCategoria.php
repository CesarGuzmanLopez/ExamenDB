<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TBdCategoria
 * 
 * @property int $Idcategoria
 * @property string $nombrecategoria
 * @property string $descripcion
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|TBdProducto[] $t_bd__productos
 * @method TBdCategoria get() get(void)
 * @method TBdCategoria find() find(int)
 * @package App\Models
 */
class TBdCategoria extends Model
{
	protected $table = 't_bd__categorias';
	protected $primaryKey = 'Idcategoria';

	protected $fillable = [
		'nombrecategoria',
		'descripcion'
	]; 
	public function t_bd__productos()
	{
		return $this->hasMany(TBdProducto::class, 'IdCategoria');
	}
}
