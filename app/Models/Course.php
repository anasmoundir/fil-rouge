<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'slug',
        'categorie_id',
    ];
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
