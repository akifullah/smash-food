<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSubItemCategory extends Model
{
    //
    protected $guarded = [];

    public function subItemCategory(){
        return $this->belongsTo(SubItemCategory::class);
    }
}
