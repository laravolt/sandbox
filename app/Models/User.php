<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravolt\Suitable\AutoFilter;
use Laravolt\Suitable\AutoSearch;
use Laravolt\Suitable\AutoSort;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

class User extends \Laravolt\Platform\Models\User implements JWTSubject
{
    use AutoFilter;
    use AutoSearch;
    use AutoSort;
    use HasFactory;
    use Notifiable;

    /**
     * @var array<int, string>
     */
    protected $hidden = ['password', 'remember_token'];

    protected $fillable = ['name', 'email', 'username', 'password', 'status', 'timezone'];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [
            'roles' => $this->roles()->pluck('name'),
            'permissions' => [
            ],
        ];
    }

    public function getEditUrlAttribute()
    {
        return route('home');
    }
}
