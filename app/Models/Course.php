<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Media;
use App\Models\Lesson;
use App\Models\LessonResource;
use App\Models\Categorie;
use App\Models\Instructor;
use App\Models\Student;
use App\Models\Progress;


class Course extends Model
{
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
        use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'description',
        'image',
        'is_free',
        'instructor_id',
        'categorie_id',
        'level',
        'language',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }


    public function media()
    {
    return $this->hasManyThrough(Media::class, LessonResource::class, 'lesson_id');
    }
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    public function progress()
    {
        return $this->morphOne(Progress::class, 'progressable');
    }

}
