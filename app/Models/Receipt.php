<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = ["receipt_number" ,"description" , "created_by_user_id" ,"must_approved_by_role_id","receipt_type_id" ];


    public function items()
    {
        return $this->belongsToMany(Item::class)->withPivot('value' );;
    }

    public function must_approved_by_role()
    {
        return $this->belongsTo(Role::class );
    }

    public function created_by_user()
    {
        return $this->belongsTo(User::class );
    }


    public function receipt_type()
    {
        return $this->belongsTo(ReceiptType::class );
    }

}
