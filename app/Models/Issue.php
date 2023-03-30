<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;
    //issue >> قضيه
    protected $fillable = ['id', 'name', 'type', 'description', 'judgment', 'client_id', 'finish'];

    ################################## START RELATIONS #####################

    public function files()
    {
        return $this->hasMany(File::class, 'issue_id');
    }

    public function lawer()
    {
        return $this->belongsTo(Lawer::class, 'lawer_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function court()
    {
        return $this->belongsTo(Court::class, 'court_id');
    }

    ################################## END RELATIONS #####################

}
