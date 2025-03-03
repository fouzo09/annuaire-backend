<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;

/**
 * Class PersonalAccessToken
 * 
 * @property int $id
 * @property string $tokenable_type
 * @property int $tokenable_id
 * @property string $name
 * @property string $token
 * @property string|null $abilities
 * @property Carbon|null $last_used_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class PersonalAccessToken extends SanctumPersonalAccessToken
{
	protected $table = 'personal_access_tokens';

	protected $casts = [
		'tokenable_id' => 'int'
	];

	protected $dates = [
		'last_used_at'
	];

	// protected $hidden = [
	// 	'token'
	// ];

	protected $fillable = [
		'tokenable_type',
		'tokenable_id',
		'name',
		'token',
		'abilities',
		'last_used_at'
	];
}
