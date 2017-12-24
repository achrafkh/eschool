<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
	protected $fillable = [
        'title', 'course_id', 'url','description','picture'
    ];
    public function course()
    {
    	return $this->belongsTo(Course::class);
    }

    public function videos()
    {
    	return $this->hasMany(Video::class);
    }
}
