<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visibility extends Model
{
    public function opportunities()
    {
        return $this->hasMany(Opportunity::class);
    }
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    public function organisations()
    {
        return $this->hasMany(Organisation::class);
    }
}
