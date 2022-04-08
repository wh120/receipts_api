<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiptType extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    public $timestamps = false;
    protected $fillable =['name'];

    public function receipts()
    {
        return $this->hasMany(Receipt::class);
    }

}
