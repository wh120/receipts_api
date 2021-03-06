<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemUnit extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name' ,'conversion_factor' , 'item_id'];
    public function item()
    {
        return $this->belongsTo(Item::class);
    }

}
