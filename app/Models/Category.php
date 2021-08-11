<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function opportunities()
    {
        return $this->hasMany(Opportunity::class);
    }
    public function task()
    {
        return $this->hasMany(Task::class);
    }
}
