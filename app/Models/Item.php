<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'  ,
        'code' ,
        'description' ,
        'unit',
        'is_default_unit' ,
        'item_category_id'  ,
    ];

    public function units()
    {
        return $this->hasMany(ItemUnit::class);
    }
}
