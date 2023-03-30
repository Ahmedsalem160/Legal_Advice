<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Lawer extends Authenticatable implements JWTSubject 
{
    use HasFactory;
    protected $fillable = ['id', 'username', 'nation_id', 'Syndicate_id', 'fullname', 'phone', 'photo', 'email', 'password', 'address', 'salary', 'rank', 'grad_year'];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function issues(){
        return $this->hasMany(Issue::class, 'lawer_id');
    }
}
