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

}
