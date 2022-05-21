<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transformation extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'description'];

    public function items()
    {
        return $this->belongsToMany(Item::class)->as('value')->withPivot(['value','isInput'] );;
    }
    public function inputs()
    {
        return $this->items()->where('isInput',1);
    }
    public function outputs()
    {
        return $this->items()->where('isInput',0);
    }

}
