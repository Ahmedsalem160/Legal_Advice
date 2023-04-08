<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'lawer_id', 'user_id', 'text', 'created_at'];
}
