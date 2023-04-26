<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
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
    
    public function progress()
    {
        return $this->morphOne(Progress::class, 'progressable');
    }
    public function lessonResources()
    {
        return $this->hasMany(LessonResource::class);
    }
    public function media()
    {
        return $this->hasManyDeep(Media::class, [LessonResource::class, Media::class]);
    }
    protected $attributes = [
        'video_url' => "https://www.youtube.com/watch?v=8SbUC-UaAxE",
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getFirstMediaUrlAttribute()
{
    if ($this->lessonResources->count() > 0) {
        return $this->lessonResources[0]->media->getUrl();
    }
    return null;
}
}

