<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    protected $fillable = ['name' ,'code' , 'item_main_category_id'];
    public $timestamps =false;

    public function item_main_category()
    {
        return $this->belongsTo(ItemMainCategory::class);
    }
}
