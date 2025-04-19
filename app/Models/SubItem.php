<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubItem extends Model
{
    // Optional: specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'sub_items';

    // Allow mass assignment for all attributes
    protected $guarded = [];

    public function SubItemCategory(){
        return $this->belongsTo(SubItemCategory::class);
    }
}
