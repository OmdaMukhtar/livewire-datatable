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

    public function scopeSearch($query, $word)
    {
        return $query->where('name', 'like', "%{$word}%")
                ->orWhere('status', 'like', "%{$word}%")
                ->orWhere('user_id', 'like', "%{$word}%");
    }
}
