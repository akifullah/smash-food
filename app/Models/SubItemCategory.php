<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubItemCategory extends Model
{
    protected $guarded = [];

    public function subItem(){
        return $this->hasMany(SubItem::class);
    }
}
