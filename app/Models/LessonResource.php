<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Illuminate\Support\Collection;

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

    // belongs to lesson
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function media(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Media::class, 'model');
    }

    public function getMedia(string $collectionName = 'lesson_ressources', callable|array $filters = []): MediaCollection
{
    return $this->getMediaCollection($collectionName, $filters) ?? new MediaCollection();
}

    public function progress()
    {
        return $this->morphOne(Progress::class, 'progressable');
    }

    public function getRouteKeyName()
    {
        return 'uid';
    }
}