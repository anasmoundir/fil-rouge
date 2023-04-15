<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
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
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

}
