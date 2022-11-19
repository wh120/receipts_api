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
        return $this->belongsToMany(Item::class)->as('value')->withPivot( 'value0' , 'value1', 'value2' );
    }

    /**
     * @param $item
     */
    public function addItem( $item , $count=1): void
    {
        $lastItemVal = $this->items->firstWhere('id', $item['id']);

        if ($lastItemVal == null) {
            $this->items()->attach($item['id'],
                [
                    'value0' => $item['value0']*$count,
                    'value1' => $item['value1']*$count,
                    'value2' => $item['value2']*$count
                ]
            );
        } else {
            $lastItemVal->value->value0 = $lastItemVal->value->value0 + ($item['value0']*$count);
            $lastItemVal->value->value1 = $lastItemVal->value->value1 + ($item['value1']*$count);
            $lastItemVal->value->value2 = $lastItemVal->value->value2 + ($item['value2']*$count);

            $lastItemVal->value->push();
        }
    }

    /**
     * @param $item
     */
    public function removeItem( $item ,$count=1)
    {
        $lastItemVal = $this->items->firstWhere('id', $item['id']);
        $lastItemVal->value->value0 = $lastItemVal->value->value0 - ($item['value0'] * $count);
        $lastItemVal->value->value1 = $lastItemVal->value->value1 - ($item['value1']*$count);
        $lastItemVal->value->value2 = $lastItemVal->value->value2 - ($item['value2']*$count);
        //todo need test
        if($lastItemVal->value->value0 == 0 && $lastItemVal->value->value1==0 && $lastItemVal->value->value2==0)
            $lastItemVal->value->detach();
        $lastItemVal->value->push();

    }

}
