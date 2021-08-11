<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    public function created_by()
    {
        return $this->belongsTo(User::class);
    }
    public function visibility()
    {
        return $this->belongsTo(Visibility::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }
}
