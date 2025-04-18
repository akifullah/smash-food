<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function subItemCategory(){
        return $this->hasMany(SubItemCategory::class);
    }
    public function productSubItemCategory(){
        return $this->hasMany(ProductSubItemCategory::class);
    }

}
