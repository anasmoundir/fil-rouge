<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
//implement has media interface 

class LessonResource extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table = 'lesson_resources';

    protected $fillable = [
        'name',
        'description',
        'type',
        'file',
        'lesson_id',
        'processed',
        'uid',
        'ressouce_id',
        'allow_download',
        'processed_percentage'
    ];
    //belongs to lesson
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
    //polimorphic relation with progress
    public function progress()
    {
        return $this->morphOne(Progress::class, 'progressable');
    }
    public function getRouteKeyName()
    {
        return 'uid';
    }
}
