<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemMainCategory extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['name','code' , 'department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
