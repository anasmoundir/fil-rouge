<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'quizz_id',
    ];
    public function quizz()
    {
        return $this->belongsTo(Quizz::class);
    }
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
