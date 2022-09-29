<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = ["name"];

    public function roles()
    {
        return $this->hasMany(Role::class);
    }
    public function items()
    {
        return $this->belongsToMany(Item::class)->as('value')->withPivot('value' , 'values' );;
    }
}
