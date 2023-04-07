<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'slug',
    ];
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    
}
