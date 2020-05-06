<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PasswordReset
 * 
 * @property string $email
 * @property string $token
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class PasswordReset extends Model
{
	protected $table = 'password_resets';
	protected $primaryKey = 'email';
	public $incrementing = false;

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'token'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'email', 'email');
	}
}
