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
    ];
}
