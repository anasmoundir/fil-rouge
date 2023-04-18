<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizz extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'lesson_id',
        
    ];
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

}
