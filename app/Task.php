<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guard = [];

    public function getStatusAttribute($value)
    {
        if($value){
            return 'complete';
        }

        return 'uncomplete';
    }

    // public function scopeOrderBy($query, $column, $direction)
    // {
    //     // dd($column, $direction);
    //     dd($query->orderBy('name', 'desc'));
    //     return $query->orderBy('name', 'desc');
    // }
}
