<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['name', 'image'];
    use HasFactory;
  
    
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function coursesCount()
    {
        return $this->courses()->count();
    }
    
}
