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
        return $this->belongsToMany(Item::class)->as('value')->withPivot(['value0' , 'value1', 'value2','isInput'] );;
    }
    public function inputs()
    {
        return $this->items()->where('isInput',1);
    }
    public function outputs()
    {
        return $this->items()->where('isInput',0);
    }

    /**
     * @param $item
     */
    public function addItem( $item ,bool $isInput): void
    {
        $this->items()->attach($item['id'],
            [
                'value0' => $item['value0']  ,
                'value1' => $item['value1']  ,
                'value2' => $item['value2']  ,
                'isInput' => $isInput]
        );
    }


}
