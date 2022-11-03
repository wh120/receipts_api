<?php

namespace App\Models;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = ["receipt_number" ,"description" , "created_by_user_id" ,"must_approved_by_role_id","receipt_type_id" ,"from_department_id" , "to_department_id"];

    public function items()
    {
        return $this->belongsToMany(Item::class)->as('value')->withPivot('value0' , 'value1' , 'value2' ,'isInput' );
    }

    public function must_approved_by_role()
    {
        return $this->belongsTo(Role::class );
    }

    public function created_by_user()
    {
        return $this->belongsTo(User::class );
    }

    public function accepted_by_user()
    {
        return $this->belongsTo(User::class );
    }


    public function receipt_type()
    {
        return $this->belongsTo(ReceiptType::class );
    }

    public function from_department()
    {
        return $this->belongsTo(Department::class );
    }

    public function to_department()
    {
        return $this->belongsTo(Department::class );
    }
    public function transformation()
    {
        return $this->belongsTo(Transformation::class );
    }




//    public function getItemsAttribute($value)
//    {
//        return 'ucfirst($value)';
//    }


}
