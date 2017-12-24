<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   protected $fillable = [
        'title', 'description', 'price', 'category_id','image',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function videos()
    {
    	return $this->hasMany(Video::class);
    }
}
