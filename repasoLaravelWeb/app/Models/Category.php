<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\Product;

class Category extends Model
{
    use softDeletes;

    public function products(){
        return $this->hasMany(Product::class, 'category_id');
    }
}
