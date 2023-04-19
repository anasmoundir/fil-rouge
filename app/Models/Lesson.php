<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
   protected $fillable = [

        'title',
        'description',
        'video_url',
        'course_id',
    ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function resources()
    {
        return $this->hasMany(LessonResource::class);
    }
    public function progress()
    {
        return $this->morphOne(Progress::class, 'progressable');
    }

    protected $attributes = [
        'video_url' => "https://www.youtube.com/watch?v=8SbUC-UaAxE",
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}

