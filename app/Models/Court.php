<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'address'];

    ################################## START RELATIONS #####################


    public function issues()
    {
        return $this->hasMany(Issue::class, 'court_id');
    }

    ################################## END RELATIONS #####################

}
