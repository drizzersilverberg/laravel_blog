<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /*
        usage : App\Task::incomplete()->get();
    */
    public function scopeIncomplete($query)
    {
        return $query->where('completed', 0);
    }
}
