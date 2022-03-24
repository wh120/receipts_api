<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name' ,'code' , 'item_main_category_id'];
    public $timestamps =false;
}