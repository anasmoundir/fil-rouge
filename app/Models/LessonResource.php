<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonResource extends Model
{
    use HasFactory;

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
        'visibility',
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
