<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\Teams;
use App\Models\Contry;

class Competition extends Model
{
    use softDeletes;

    public function teams(){
        return $this->hasMany(Team::class, 'compe_id');
    }

    public function country(){
        return $this->belongsTo(Country::class, 'country_id');
    }
}
