<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\Category;

class Product extends Model
{
    use softDeletes;

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
