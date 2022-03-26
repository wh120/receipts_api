<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = ["receipt_number" ,"description" , "created_by_user_id" ,"must_approved_by_role","receipt_type_id" ];


    public function items()
    {
        return $this->belongsToMany(Item::class);
    }
}
