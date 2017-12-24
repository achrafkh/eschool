<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title', 'description', 'image'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
