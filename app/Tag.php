<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function path()
    {
        return '/tag/' . $this->name;
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }
}
