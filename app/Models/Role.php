<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
//    use HasFactory;
//
  protected $fillable = ['name' , 'department_id'];
//
    protected $hidden = ['pivot'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
