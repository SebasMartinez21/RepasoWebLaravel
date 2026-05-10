<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\Competition;

class Country extends Model
{
    use softDeletes;

    public function competitions(){
        return $this->hasMany(Competition::class, 'country_id');
    }
}
