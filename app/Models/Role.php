<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends \Spatie\Permission\Models\Role
{
//    use HasFactory;
//
//    protected $fillable = ['name' , 'department_id'];
//
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
