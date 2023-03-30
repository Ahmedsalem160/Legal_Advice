<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['id', 'username', 'nation_id', 'fullname', 'phone', 'photo', 'email', 'password', 'address'];

    ################################## START RELATIONS #####################

    public function issues()
    {
        return $this->hasMany(Issue::class, 'client_id');
    }

    ################################## END RELATIONS #####################

}
